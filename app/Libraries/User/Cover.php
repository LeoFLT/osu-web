<?php

// Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
// See the LICENCE file in the repository root for full licence text.

declare(strict_types=1);

namespace App\Libraries\User;

use App\Casts\LegacyFilename;
use App\Models\User;

class Cover
{
    const CUSTOM_COVER_MAX_DIMENSIONS = [2400, 640];

    private const AVAILABLE_PRESET_IDS = ['1', '2', '3', '4', '5', '6', '7', '8'];

    private ?array $json;

    public function __construct(private User $user)
    {
        $this->migrateFromProfileCustomization();
    }

    public static function isValidPresetId(int|null|string $presetId): bool
    {
        return $presetId !== null
            && in_array((string) $presetId, static::AVAILABLE_PRESET_IDS, true);
    }

    public function customUrl(): ?string
    {
        return $this->user->customCover()->url();
    }

    public function presetId(): ?string
    {
        if ($this->hasCustomCover()) {
            return null;
        }

        $id = $this->user->getKey();

        if ($id === null || $id < 1) {
            return null;
        }

        $presetId = (string) $this->user->cover_preset_id;

        return static::isValidPresetId($presetId)
            ? $presetId
            : static::AVAILABLE_PRESET_IDS[$id % count(static::AVAILABLE_PRESET_IDS)];
    }

    public function set(?string $presetId, ?string $filePath): void
    {
        $this->user->cover_preset_id = static::isValidPresetId($presetId) ? $presetId : null;

        if ($filePath !== null) {
            $this->user->customCover()->store($filePath);
        }
    }

    public function url(): ?string
    {
        return $this->hasCustomCover()
            ? $this->customUrl()
            : $this->presetUrl();
    }

    private function hasCustomCover(): bool
    {
        return !isset($this->user->cover_preset_id) && isset($this->user->custom_cover_filename);
    }

    private function migrateFromProfileCustomization(): void
    {
        $userProfileCustomization = $this->user->userProfileCustomization;
        $oldCoverJson = $userProfileCustomization?->cover_json;

        // Migrate from userProfileCustomization if exists
        if ($oldCoverJson !== null) {
            \DB::transaction(function () use ($oldCoverJson, $userProfileCustomization) {
                $this->user->fill([
                    'cover_preset_id' => $oldCoverJson['id'] ?? null,
                    'custom_cover_filename' => LegacyFilename::makeFromAttributes($oldCoverJson['file'] ?? null),
                ])->saveOrExplode();
                $userProfileCustomization->fill(['cover_json' => null])->saveOrExplode();
            });
        }
    }

    private function presetUrl(): ?string
    {
        $presetId = $this->presetId();

        return $presetId === null
            ? null
            : "{$GLOBALS['cfg']['app']['url']}/images/headers/profile-covers/c{$presetId}.jpg";
    }
}
