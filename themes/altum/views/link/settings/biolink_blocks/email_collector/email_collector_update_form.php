<?php defined('ALTUMCODE') || die() ?>

<form name="update_biolink_" method="post" role="form">
    <input type="hidden" name="token" value="<?= \Altum\Csrf::get() ?>" required="required" />
    <input type="hidden" name="request_type" value="update" />
    <input type="hidden" name="block_type" value="email_collector" />
    <input type="hidden" name="biolink_block_id" value="<?= $row->biolink_block_id ?>" />

    <div class="notification-container"></div>

    <button class="btn btn-block btn-gray-300 my-4" type="button" data-toggle="collapse" data-target="#<?= 'email_collector_settings_container_' . $row->biolink_block_id ?>" aria-expanded="false" aria-controls="<?= 'email_collector_settings_container_' . $row->biolink_block_id ?>">
        <i class="fas fa-fw fa-wrench fa-sm mr-1"></i> <?= l('create_biolink_email_collector_modal.email_collector_header') ?>
    </button>

    <div class="collapse" id="<?= 'email_collector_settings_container_' . $row->biolink_block_id ?>">
        <div class="form-group">
            <label for="<?= 'email_collector_email_placeholder_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.email_placeholder') ?></label>
            <input id="<?= 'email_collector_email_placeholder_' . $row->biolink_block_id ?>" type="text" name="email_placeholder" class="form-control" value="<?= $row->settings->email_placeholder ?>" maxlength="64" required="required" />
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_name_placeholder_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.name_placeholder') ?></label>
            <input id="<?= 'email_collector_name_placeholder_' . $row->biolink_block_id ?>" type="text" name="name_placeholder" class="form-control" value="<?= $row->settings->name_placeholder ?>" maxlength="64" required="required" />
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_button_text_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.button_text') ?></label>
            <input id="<?= 'email_collector_button_text_' . $row->biolink_block_id ?>" type="text" name="button_text" class="form-control" value="<?= $row->settings->button_text ?>" maxlength="64" required="required" />
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_success_text_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.success_text') ?></label>
            <input id="<?= 'email_collector_success_text_' . $row->biolink_block_id ?>" type="text" name="success_text" class="form-control" value="<?= $row->settings->success_text ?>" maxlength="256" required="required" />
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_thank_you_url_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.thank_you_url') ?></label>
            <input id="<?= 'email_collector_thank_you_url_' . $row->biolink_block_id ?>" type="url" name="thank_you_url" class="form-control" value="<?= $row->settings->thank_you_url ?>" placeholder="<?= l('global.url_placeholder') ?>" maxlength="2048" />
        </div>

        <div class="form-group custom-control custom-switch">
            <input
                    type="checkbox"
                    class="custom-control-input"
                    id="<?= 'email_collector_show_agreement_' . $row->biolink_block_id ?>"
                    name="show_agreement"
                <?= $row->settings->show_agreement ? 'checked="checked"' : null ?>
            >
            <label class="custom-control-label clickable" for="<?= 'email_collector_show_agreement_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.show_agreement') ?></label>
            <div><small class="form-text text-muted"><?= l('create_biolink_email_collector_modal.show_agreement_help') ?></small></div>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_agreement_text_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.agreement_text') ?></label>
            <input id="<?= 'email_collector_agreement_text_' . $row->biolink_block_id ?>" type="text" name="agreement_text" class="form-control" value="<?= $row->settings->agreement_text ?>" maxlength="256" />
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_agreement_url_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.agreement_url') ?></label>
            <input id="<?= 'email_collector_agreement_url_' . $row->biolink_block_id ?>" type="text" name="agreement_url" class="form-control" value="<?= $row->settings->agreement_url ?>" placeholder="<?= l('global.url_placeholder') ?>" maxlength="2048" />
        </div>
    </div>

    <button class="btn btn-block btn-gray-300 my-4" type="button" data-toggle="collapse" data-target="#<?= 'email_collector_data_container_' . $row->biolink_block_id ?>" aria-expanded="false" aria-controls="<?= 'email_collector_data_container_' . $row->biolink_block_id ?>">
        <i class="fas fa-fw fa-database fa-sm mr-1"></i> <?= l('create_biolink_block_modal.data_header') ?>
    </button>

    <div class="collapse" id="<?= 'email_collector_data_container_' . $row->biolink_block_id ?>">
        <div class="alert alert-info">
            <i class="fas fa-fw fa-sm fa-info-circle mr-1"></i> <?= l('create_biolink_block_modal.data_help') ?>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_mailchimp_api_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.mailchimp_api') ?></label>
            <input id="<?= 'email_collector_mailchimp_api_' . $row->biolink_block_id ?>" type="text" name="mailchimp_api" class="form-control" value="<?= $row->settings->mailchimp_api ?>" maxlength="64" />
            <small class="form-text text-muted"><?= l('create_biolink_email_collector_modal.mailchimp_api_help') ?></small>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_mailchimp_api_list_' . $row->biolink_block_id ?>"><?= l('create_biolink_email_collector_modal.mailchimp_api_list') ?></label>
            <input id="<?= 'email_collector_mailchimp_api_list_' . $row->biolink_block_id ?>" type="text" name="mailchimp_api_list" class="form-control" value="<?= $row->settings->mailchimp_api_list ?>" maxlength="64" />
            <small class="form-text text-muted"><?= l('create_biolink_email_collector_modal.mailchimp_api_list_help') ?></small>
        </div>

        <hr />

        <div class="form-group">
            <label for="<?= 'phone_collector_email_notification_' . $row->biolink_block_id ?>"><?= l('create_biolink_block_modal.email_notification') ?></label>
            <input type="text" id="<?= 'phone_collector_email_notification_' . $row->biolink_block_id ?>" name="email_notification" class="form-control" value="<?= $row->settings->email_notification ?? null ?>" placeholder="<?= l('global.email_placeholder') ?>" maxlength="320" />
            <small class="form-text text-muted"><?= l('create_biolink_block_modal.email_notification_help') ?></small>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_webhook_url_' . $row->biolink_block_id ?>"><?= l('create_biolink_block_modal.webhook_url') ?></label>
            <input id="<?= 'email_collector_webhook_url_' . $row->biolink_block_id ?>" type="text" name="webhook_url" class="form-control" value="<?= $row->settings->webhook_url ?>" placeholder="<?= l('global.url_placeholder') ?>" maxlength="2048" />
            <small class="form-text text-muted"><?= l('create_biolink_block_modal.webhook_url_help') ?></small>
        </div>
    </div>

    <button class="btn btn-block btn-gray-300 my-4" type="button" data-toggle="collapse" data-target="#<?= 'button_settings_container_' . $row->biolink_block_id ?>" aria-expanded="false" aria-controls="<?= 'button_settings_container_' . $row->biolink_block_id ?>">
        <i class="fas fa-fw fa-square-check fa-sm mr-1"></i> <?= l('create_biolink_link_modal.button_header') ?>
    </button>

    <div class="collapse" id="<?= 'button_settings_container_' . $row->biolink_block_id ?>">
        <div class="form-group">
            <label for="<?= 'email_collector_name_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-signature fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.name') ?></label>
            <input id="<?= 'email_collector_name_' . $row->biolink_block_id ?>" type="text" name="name" class="form-control" value="<?= $row->settings->name ?>" maxlength="128" required="required" />
        </div>

        <div class="form-group" data-file-image-input-wrapper data-file-input-wrapper-size-limit="<?= settings()->links->thumbnail_image_size_limit ?>" data-file-input-wrapper-size-limit-error="<?= sprintf(l('global.error_message.file_size_limit'), settings()->links->thumbnail_image_size_limit) ?>">
            <label for="<?= 'email_collector_image_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-image fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.image') ?></label>
            <?= include_view(THEME_PATH . 'views/partials/custom_file_image_input.php', [
                'id'=> 'email_collector_image_' . $row->biolink_block_id,
                'uploads_file_key' => 'block_thumbnail_images',
                'file_key' => 'image',
                'already_existing_image' => $row->settings->image,
                'image_container' => 'image',
                'accept' => \Altum\Uploads::array_to_list_format($data->biolink_blocks['email_collector']['whitelisted_thumbnail_image_extensions']),
            ]) ?>
            <small class="form-text text-muted"><?= sprintf(l('global.accessibility.whitelisted_file_extensions'), \Altum\Uploads::array_to_list_format($data->biolink_blocks['email_collector']['whitelisted_thumbnail_image_extensions'])) . ' ' . sprintf(l('global.accessibility.file_size_limit'), settings()->links->thumbnail_image_size_limit) ?></small>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_icon_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-icons fa-sm text-muted mr-1"></i> <?= l('global.icon') ?></label>
            <input id="<?= 'email_collector_icon_' . $row->biolink_block_id ?>" type="text" name="icon" class="form-control" value="<?= $row->settings->icon ?>" placeholder="<?= l('global.icon_placeholder') ?>" />
            <small class="form-text text-muted"><?= l('global.icon_help') ?></small>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_text_color_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-paint-brush fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.text_color') ?></label>
            <input id="<?= 'email_collector_text_color_' . $row->biolink_block_id ?>" type="hidden" name="text_color" class="form-control" value="<?= $row->settings->text_color ?>" required="required" />
            <div class="text_color_pickr"></div>
        </div>

        <div class="form-group">
            <label for="<?= 'block_text_alignment_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-align-center fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.text_alignment') ?></label>
            <div class="row btn-group-toggle" data-toggle="buttons">
                <?php foreach(['center', 'left', 'right', 'justify'] as $text_alignment): ?>
                    <div class="col-4">
                        <label class="btn btn-light btn-block text-truncate <?= ($row->settings->text_alignment  ?? null) == $text_alignment ? 'active"' : null?>">
                            <input type="radio" name="text_alignment" value="<?= $text_alignment ?>" class="custom-control-input" <?= ($row->settings->text_alignment  ?? null) == $text_alignment ? 'checked="checked"' : null ?> />
                            <i class="fas fa-fw fa-align-<?= $text_alignment ?> fa-sm mr-1"></i> <?= l('create_biolink_link_modal.input.text_alignment.' . $text_alignment) ?>
                        </label>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_background_color_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-fill fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.background_color') ?></label>
            <input id="<?= 'email_collector_background_color_' . $row->biolink_block_id ?>" type="hidden" name="background_color" class="form-control" value="<?= $row->settings->background_color ?>" required="required" />
            <div class="background_color_pickr"></div>
        </div>

        <div class="form-group">
            <label for="<?= 'email_collector_animation_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-film fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.animation') ?></label>
            <select id="<?= 'email_collector_animation_' . $row->biolink_block_id ?>" name="animation" class="custom-select">
                <option value="false" <?= !$row->settings->animation ? 'selected="selected"' : null ?>><?= l('global.none') ?></option>
                <?php foreach(require APP_PATH . 'includes/biolink_animations.php' as $animation): ?>
                    <option value="<?= $animation ?>" <?= $row->settings->animation == $animation ? 'selected="selected"' : null ?>><?= $animation ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group" data-animation="<?= implode(',', require APP_PATH . 'includes/biolink_animations.php') ?>">
            <label for="<?= 'email_collector_animation_runs_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-play-circle fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.animation_runs') ?></label>
            <select id="<?= 'email_collector_animation_runs_' . $row->biolink_block_id ?>" name="animation_runs" class="custom-select">
                <option value="repeat-1" <?= $row->settings->animation_runs == 'repeat-1' ? 'selected="selected"' : null ?>>1</option>
                <option value="repeat-2" <?= $row->settings->animation_runs == 'repeat-2' ? 'selected="selected"' : null ?>>2</option>
                <option value="repeat-3" <?= $row->settings->animation_runs == 'repeat-3' ? 'selected="selected"' : null ?>>3</option>
                <option value="infinite" <?= $row->settings->animation_runs == 'repeat-infinite' ? 'selected="selected"' : null ?>><?= l('create_biolink_link_modal.input.animation_runs_infinite') ?></option>
            </select>
        </div>

        <button class="btn btn-block btn-gray-300 my-4" type="button" data-toggle="collapse" data-target="#<?= 'border_container_' . $row->biolink_block_id ?>" aria-expanded="false" aria-controls="<?= 'border_container_' . $row->biolink_block_id ?>">
            <i class="fas fa-fw fa-square-full fa-sm mr-1"></i> <?= l('create_biolink_link_modal.border_header') ?>
        </button>

        <div class="collapse" id="<?= 'border_container_' . $row->biolink_block_id ?>">
            <div class="form-group" data-range-counter data-range-counter-suffix="px">
                <label for="<?= 'block_border_width_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-border-style fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_width') ?></label>
                <input id="<?= 'block_border_width_' . $row->biolink_block_id ?>" type="range" min="0" max="5" class="form-control-range" name="border_width" value="<?= $row->settings->border_width ?>" required="required" />
            </div>

            <div class="form-group">
                <label for="<?= 'block_border_color_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-fill fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_color') ?></label>
                <input id="<?= 'block_border_color_' . $row->biolink_block_id ?>" type="hidden" name="border_color" class="form-control" value="<?= $row->settings->border_color ?>" required="required" />
                <div class="border_color_pickr"></div>
            </div>

            <div class="form-group">
                <label for="<?= 'block_border_radius_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-border-all fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_radius') ?></label>
                <div class="row btn-group-toggle" data-toggle="buttons">
                    <div class="col-4">
                        <label class="btn btn-light btn-block text-truncate <?= ($row->settings->border_radius  ?? null) == 'straight' ? 'active"' : null?>">
                            <input type="radio" name="border_radius" value="straight" class="custom-control-input" <?= ($row->settings->border_radius  ?? null) == 'straight' ? 'checked="checked"' : null?> />
                            <i class="fas fa-fw fa-square-full fa-sm mr-1"></i> <?= l('create_biolink_link_modal.input.border_radius_straight') ?>
                        </label>
                    </div>
                    <div class="col-4">
                        <label class="btn btn-light btn-block text-truncate <?= ($row->settings->border_radius  ?? null) == 'round' ? 'active' : null?>">
                            <input type="radio" name="border_radius" value="round" class="custom-control-input" <?= ($row->settings->border_radius  ?? null) == 'round' ? 'checked="checked"' : null?> />
                            <i class="fas fa-fw fa-circle fa-sm mr-1"></i> <?= l('create_biolink_link_modal.input.border_radius_round') ?>
                        </label>
                    </div>
                    <div class="col-4">
                        <label class="btn btn-light btn-block text-truncate <?= ($row->settings->border_radius  ?? null) == 'rounded' ? 'active' : null?>">
                            <input type="radio" name="border_radius" value="rounded" class="custom-control-input" <?= ($row->settings->border_radius  ?? null) == 'rounded' ? 'checked="checked"' : null?> />
                            <i class="fas fa-fw fa-square fa-sm mr-1"></i> <?= l('create_biolink_link_modal.input.border_radius_rounded') ?>
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="<?= 'block_border_style_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-border-none fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_style') ?></label>
                <div class="row btn-group-toggle" data-toggle="buttons">
                    <?php foreach(['solid', 'dashed', 'double', 'outset', 'inset'] as $border_style): ?>
                        <div class="col-4">
                            <label class="btn btn-light btn-block text-truncate <?= ($row->settings->border_style  ?? null) == $border_style ? 'active"' : null?>">
                                <input type="radio" name="border_style" value="<?= $border_style ?>" class="custom-control-input" <?= ($row->settings->border_style  ?? null) == $border_style ? 'checked="checked"' : null?> />
                                <?= l('create_biolink_link_modal.input.border_style_' . $border_style) ?>
                            </label>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>

        <button class="btn btn-block btn-gray-300 my-4" type="button" data-toggle="collapse" data-target="#<?= 'border_shadow_container_' . $row->biolink_block_id ?>" aria-expanded="false" aria-controls="<?= 'border_shadow_container_' . $row->biolink_block_id ?>">
            <i class="fas fa-fw fa-cloud fa-sm mr-1"></i> <?= l('create_biolink_link_modal.border_shadow_header') ?>
        </button>

        <div class="collapse" id="<?= 'border_shadow_container_' . $row->biolink_block_id ?>">
            <div class="form-group" data-range-counter data-range-counter-suffix="px">
                <label for="<?= 'block_border_shadow_offset_x_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-arrows-alt-h fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_shadow_offset_x') ?></label>
                <input id="<?= 'block_border_shadow_offset_x_' . $row->biolink_block_id ?>" type="range" min="-20" max="20" class="form-control-range" name="border_shadow_offset_x" value="<?= $row->settings->border_shadow_offset_x ?>" required="required" />
            </div>

            <div class="form-group" data-range-counter data-range-counter-suffix="px">
                <label for="<?= 'block_border_shadow_offset_y_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-arrows-alt-v fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_shadow_offset_y') ?></label>
                <input id="<?= 'block_border_shadow_offset_y_' . $row->biolink_block_id ?>" type="range" min="-20" max="20" class="form-control-range" name="border_shadow_offset_y" value="<?= $row->settings->border_shadow_offset_y ?>" required="required" />
            </div>

            <div class="form-group" data-range-counter data-range-counter-suffix="px">
                <label for="<?= 'block_border_shadow_blur_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-arrows-alt fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_shadow_blur') ?></label>
                <input id="<?= 'block_border_shadow_blur_' . $row->biolink_block_id ?>" type="range" min="0" max="20" class="form-control-range" name="border_shadow_blur" value="<?= $row->settings->border_shadow_blur ?>" required="required" />
            </div>

            <div class="form-group" data-range-counter data-range-counter-suffix="px">
                <label for="<?= 'block_border_shadow_spread_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-border-all fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_shadow_spread') ?></label>
                <input id="<?= 'block_border_shadow_spread_' . $row->biolink_block_id ?>" type="range" min="0" max="10" class="form-control-range" name="border_shadow_spread" value="<?= $row->settings->border_shadow_spread ?>" required="required" />
            </div>

            <div class="form-group">
                <label for="<?= 'block_border_shadow_color_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-fill fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.border_shadow_color') ?></label>
                <input id="<?= 'block_border_shadow_color_' . $row->biolink_block_id ?>" type="hidden" name="border_shadow_color" class="form-control" value="<?= $row->settings->border_shadow_color ?>" required="required" />
                <div class="border_shadow_color_pickr"></div>
            </div>
        </div>
    </div>

    <button class="btn btn-block btn-gray-300 my-4" type="button" data-toggle="collapse" data-target="#<?= 'display_settings_container_' . $row->biolink_block_id ?>" aria-expanded="false" aria-controls="<?= 'display_settings_container_' . $row->biolink_block_id ?>">
        <i class="fas fa-fw fa-display fa-sm mr-1"></i> <?= l('create_biolink_link_modal.display_settings_header') ?>
    </button>

    <div class="collapse" id="<?= 'display_settings_container_' . $row->biolink_block_id ?>">
        <div <?= $this->user->plan_settings->temporary_url_is_enabled ? null : 'data-toggle="tooltip" title="' . l('global.info_message.plan_feature_no_access') . '"' ?>>
            <div class="<?= $this->user->plan_settings->temporary_url_is_enabled ? null : 'container-disabled' ?>">
                <div class="form-group custom-control custom-switch">
                    <input
                            id="<?= 'link_schedule_' . $row->biolink_block_id ?>"
                            name="schedule" type="checkbox"
                            class="custom-control-input"
                        <?= !empty($row->start_date) && !empty($row->end_date) ? 'checked="checked"' : null ?>
                        <?= $this->user->plan_settings->temporary_url_is_enabled ? null : 'disabled="disabled"' ?>
                    >
                    <label class="custom-control-label" for="<?= 'link_schedule_' . $row->biolink_block_id ?>"><?= l('link.settings.schedule') ?></label>
                    <small class="form-text text-muted"><?= l('link.settings.schedule_help') ?></small>
                </div>
            </div>
        </div>

        <div class="mt-3 schedule_container" style="display: none;">
            <div <?= $this->user->plan_settings->temporary_url_is_enabled ? null : 'data-toggle="tooltip" title="' . l('global.info_message.plan_feature_no_access') . '"' ?>>
                <div class="<?= $this->user->plan_settings->temporary_url_is_enabled ? null : 'container-disabled' ?>">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="<?= 'link_start_date_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-clock fa-sm text-muted mr-1"></i> <?= l('link.settings.start_date') ?></label>
                                <input
                                        id="<?= 'link_start_date_' . $row->biolink_block_id ?>"
                                        type="text"
                                        class="form-control"
                                        name="start_date"
                                        value="<?= \Altum\Date::get($row->start_date, 1) ?>"
                                        placeholder="<?= l('link.settings.start_date') ?>"
                                        autocomplete="off"
                                        data-daterangepicker
                                >
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-group">
                                <label for="<?= 'link_end_date_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-clock fa-sm text-muted mr-1"></i> <?= l('link.settings.end_date') ?></label>
                                <input
                                        id="<?= 'link_end_date_' . $row->biolink_block_id ?>"
                                        type="text"
                                        class="form-control"
                                        name="end_date"
                                        value="<?= \Altum\Date::get($row->end_date, 1) ?>"
                                        placeholder="<?= l('link.settings.end_date') ?>"
                                        autocomplete="off"
                                        data-daterangepicker
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="<?= 'link_display_countries_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-globe fa-sm text-muted mr-1"></i> <?= l('global.countries') ?></label>
            <select id="<?= 'link_display_countries_' . $row->biolink_block_id ?>" name="display_countries[]" class="custom-select" multiple="multiple">
                <?php foreach(get_countries_array() as $country => $country_name): ?>
                    <option value="<?= $country ?>" <?= in_array($country, $row->settings->display_countries ?? []) ? 'selected="selected"' : null ?>><?= $country_name ?></option>
                <?php endforeach ?>
            </select>
            <small class="form-text text-muted"><?= l('create_biolink_link_modal.input.display_countries_help') ?></small>
        </div>

        <div class="form-group">
            <label for="<?= 'link_display_devices_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-laptop fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.display_devices') ?></label>
            <select id="<?= 'link_display_devices_' . $row->biolink_block_id ?>" name="display_devices[]" class="custom-select" multiple="multiple">
                <?php foreach(['desktop', 'tablet', 'mobile'] as $device_type): ?>
                    <option value="<?= $device_type ?>" <?= in_array($device_type, $row->settings->display_devices ?? []) ? 'selected="selected"' : null ?>><?= l('global.device.' . $device_type) ?></option>
                <?php endforeach ?>
            </select>
            <small class="form-text text-muted"><?= l('create_biolink_link_modal.input.display_devices_help') ?></small>
        </div>

        <div class="form-group">
            <label for="<?= 'link_display_languages_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-language fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.display_languages') ?></label>
            <select id="<?= 'link_display_languages_' . $row->biolink_block_id ?>" name="display_languages[]" class="custom-select" multiple="multiple">
                <?php foreach(get_locale_languages_array() as $locale => $language): ?>
                    <option value="<?= $locale ?>" <?= in_array($locale, $row->settings->display_languages ?? []) ? 'selected="selected"' : null ?>><?= $language ?></option>
                <?php endforeach ?>
            </select>
            <small class="form-text text-muted"><?= l('create_biolink_link_modal.input.display_languages_help') ?></small>
        </div>

        <div class="form-group">
            <label for="<?= 'link_display_operating_systems_' . $row->biolink_block_id ?>"><i class="fas fa-fw fa-window-restore fa-sm text-muted mr-1"></i> <?= l('create_biolink_link_modal.input.display_operating_systems') ?></label>
            <select id="<?= 'link_display_operating_systems_' . $row->biolink_block_id ?>" name="display_operating_systems[]" class="custom-select" multiple="multiple">
                <?php foreach(['iOS', 'Android', 'Windows', 'OS X', 'Linux', 'Ubuntu', 'Chrome OS'] as $os_name): ?>
                    <option value="<?= $os_name ?>" <?= in_array($os_name, $row->settings->display_operating_systems ?? []) ? 'selected="selected"' : null ?>><?= $os_name ?></option>
                <?php endforeach ?>
            </select>
            <small class="form-text text-muted"><?= l('create_biolink_link_modal.input.display_operating_systems_help') ?></small>
        </div>
    </div>


    <div class="mt-4">
        <button type="submit" name="submit" class="btn btn-block btn-primary" data-is-ajax><?= l('global.update') ?></button>
    </div>
</form>
