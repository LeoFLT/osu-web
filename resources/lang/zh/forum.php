<?php

/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

return [
    'pinned_topics' => '置顶主题',
    'slogan' => "独乐乐不如众乐乐~",
    'subforums' => '子版块',
    'title' => 'osu! 论坛',

    'covers' => [
        'create' => [
            '_' => '设置封面',
            'button' => '上传图片',
            'info' => '图片尺寸应为 :dimensions 。 也可以将图片拖动到这里上传。',
        ],

        'destroy' => [
            '_' => '移除封面',
            'confirm' => '要移除这个封面吗？',
        ],
    ],

    'email' => [
        'new_reply' => '[osu!] 主题 ":title" 有新回复',
    ],

    'forums' => [
        'latest_post' => '',

        'index' => [
            'title' => '',
        ],

        'topics' => [
            'empty' => '没有主题！',
        ],
    ],

    'mark_as_read' => [
        'forum' => '标记版块为已读',
        'forums' => '标记版块为已读',
        'busy' => '标记为已读…',
    ],

    'poll' => [
        'edit_warning' => '编辑投票将清空当前投票结果！',

        'actions' => [
            'edit' => '编辑投票',
        ],
    ],

    'post' => [
        'confirm_destroy' => '删除此回复？',
        'confirm_restore' => '恢复此回复？',
        'edited' => '最后由 :user 于 :when 编辑，总共编辑了 :count 次。',
        'posted_at' => '发表于 :when',

        'actions' => [
            'destroy' => '删除回复',
            'restore' => '恢复回复',
            'edit' => '编辑回复',
        ],

        'info' => [
            'post_count' => ':count_delimited 帖子',
            'topic_starter' => '主题开启者',
        ],
    ],

    'search' => [
        'go_to_post' => '前往该楼层',
        'post_number_input' => '输入楼层号',
        'total_posts' => '一共有 :posts_count 楼',
    ],

    'topic' => [
        'deleted' => '已删除的主题',
        'go_to_latest' => '查看最后的帖子',
        'latest_post' => ':when :user',
        'latest_reply_by' => '最后回复： :user',
        'new_topic' => '发表新主题',
        'new_topic_login' => '登录以发表新主题',
        'post_reply' => '发表',
        'reply_box_placeholder' => '输入回复',
        'reply_title_prefix' => '回复',
        'started_by' => '发帖人： :user',
        'started_by_verbose' => '由 :user 发起',

        'create' => [
            'preview' => '预览',
            // TL note: this is used in the topic reply preview, when
            // the user goes back from previewing to editing the reply
            'preview_hide' => '编辑',
            'submit' => '发表',

            'necropost' => [
                'default' => '这个主题已经有一段时间无活动了。除非你有特殊的理由，否则不要在这里回复。',

                'new_topic' => [
                    '_' => "此主题已有一段时间不活跃了。如果你没有特别的理由一定要发表在这里，请另行 :create 。",
                    'create' => '创建一个新主题',
                ],
            ],

            'placeholder' => [
                'body' => '在这里输入正文',
                'title' => '点击这里设置标题',
            ],
        ],

        'jump' => [
            'enter' => '点击这里跳转到指定回复',
            'first' => '跳转到第一条回复',
            'last' => '跳转到最后一条回复',
            'next' => '向后 10 条',
            'previous' => '向前 10 条',
        ],

        'post_edit' => [
            'cancel' => '取消',
            'post' => '保存',
        ],
    ],

    'topic_watches' => [
        'index' => [
            'title' => '订阅的主题',
            'title_compact' => '订阅',
            'title_main' => '<strong>订阅</strong>主题',

            'box' => [
                'total' => '订阅的主题',
                'unread' => '主题有新回复',
            ],

            'info' => [
                'total' => '共订阅了 :total 个主题',
                'unread' => '有 :unread 个未读回复',
            ],
        ],

        'topic_buttons' => [
            'remove' => [
                'confirmation' => '取消订阅该主题？',
                'title' => '取消订阅',
            ],
        ],
    ],

    'topics' => [
        '_' => '主题',

        'actions' => [
            'login_reply' => '登录后回复',
            'reply' => '回复',
            'reply_with_quote' => '引用以回复',
            'search' => '搜索',
        ],

        'create' => [
            'create_poll' => '创建投票',

            'preview' => '发帖预览',

            'create_poll_button' => [
                'add' => '创建投票',
                'remove' => '取消创建投票',
            ],

            'poll' => [
                'hide_results' => '隐藏投票结果。',
                'hide_results_info' => '这些内容只在投票结束之后显示。',
                'length' => '投票持续',
                'length_days_suffix' => '天',
                'length_info' => '如果无期限则留空',
                'max_options' => '最大可选数',
                'max_options_info' => '填写每个人最多可以选的选项数。',
                'options' => '选项',
                'options_info' => '一个选项占一行，最多10个选项。',
                'title' => '问题',
                'vote_change' => '允许修改',
                'vote_change_info' => '如果选中，则用户可以更改他们的投票。',
            ],
        ],

        'edit_title' => [
            'start' => '编辑标题',
        ],

        'index' => [
            'feature_votes' => '星级优先级',
            'replies' => '回复数',
            'views' => '查看数',
        ],

        'issue_tag_added' => [
            'to_0' => '移除 "added" 标签',
            'to_0_done' => '已移除 "added" 标签',
            'to_1' => '添加 "added" 标签',
            'to_1_done' => '已添加 "added" 标签',
        ],

        'issue_tag_assigned' => [
            'to_0' => '移除 "assigned" 标签',
            'to_0_done' => '已移除 "assigned" 标签',
            'to_1' => '添加 "assigned" 标签',
            'to_1_done' => '已添加 "assigned" 标签',
        ],

        'issue_tag_confirmed' => [
            'to_0' => '移除 "confirmed" 标签',
            'to_0_done' => '已移除 "confirmed" 标签',
            'to_1' => '添加 "confirmed" 标签',
            'to_1_done' => '已添加 "confirmed" 标签',
        ],

        'issue_tag_duplicate' => [
            'to_0' => '移除 "duplicate" 标签',
            'to_0_done' => '已移除 "duplicate" 标签',
            'to_1' => '添加 "duplicate" 标签',
            'to_1_done' => '已添加 "duplicate" 标签',
        ],

        'issue_tag_invalid' => [
            'to_0' => '移除 "invalid" 标签',
            'to_0_done' => '已移除 "invalid" 标签',
            'to_1' => '添加 "invalid" 标签',
            'to_1_done' => '已添加 "invalid" 标签',
        ],

        'issue_tag_resolved' => [
            'to_0' => '移除 "resolved" 标签',
            'to_0_done' => '已移除 "resolved" 标签',
            'to_1' => '添加 "resolved" 标签',
            'to_1_done' => '已添加 "resolved" 标签',
        ],

        'lock' => [
            'is_locked' => '主题已被锁定，不能回复',
            'to_0' => '解锁主题',
            'to_0_done' => '主题已经解锁',
            'to_1' => '锁定主题',
            'to_1_done' => '主题已被锁定',
        ],

        'moderate_move' => [
            'title' => '将主题移动到其他板块',
        ],

        'moderate_pin' => [
            'to_0' => '取消置顶',
            'to_0_done' => '该主题已取消置顶',
            'to_1' => '置顶',
            'to_1_done' => '该主题已置顶',
            'to_2' => '置顶并标记为公告',
            'to_2_done' => '该主题已置顶并标记为公告',
        ],

        'show' => [
            'deleted-posts' => '删除主题',
            'total_posts' => '讨论总数',

            'feature_vote' => [
                'current' => '当前优先级: +:count',
                'do' => '提升这个请求',

                'info' => [
                    '_' => '这是一个 :feature_request。:supporters 可以为新功能请求投票。',
                    'feature_request' => '新功能请求',
                    'supporters' => 'osu! 支持者',
                ],

                'user' => [
                    'count' => ':count 票',
                    'current' => '还有 :votes 。',
                    'not_enough' => "没有票了",
                ],
            ],

            'poll' => [
                'vote' => '投票',

                'detail' => [
                    'end_time' => '将于 :time 结束',
                    'ended' => '结束于 :time',
                    'results_hidden' => '投票结束后才显示结果。',
                    'total' => '总票数: :count',
                ],
            ],
        ],

        'watch' => [
            'to_not_watching' => '未订阅',
            'to_watching' => '订阅',
            'to_watching_mail' => '订阅并启用邮件通知',
            'tooltip_mail_disable' => '通知已启用。点击禁用',
            'tooltip_mail_enable' => '通知已禁用。点击启用',
        ],
    ],
];
