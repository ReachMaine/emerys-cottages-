<?php

/**
 * Edit Topic Tag
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php if ( current_user_can( 'edit_topic_tags' ) ) : ?>

	<div id="edit-topic-tag-<?php bbp_topic_tag_id(); ?>" class="bbp-topic-tag-form">

		<fieldset class="bbp-form" id="bbp-edit-topic-tag">

			<legend><?php printf( esc_html__( 'Manage Tag: "%s"', 'hotella' ), bbp_get_topic_tag_name() ); ?></legend>

			<fieldset class="bbp-form" id="tag-rename">

				<legend><?php esc_html_e( 'Rename', 'hotella' ); ?></legend>

				<div class="bbp-template-notice info">
					<p><?php esc_html_e( 'Leave the slug empty to have one automatically generated.', 'hotella' ); ?></p>
				</div>

				<div class="bbp-template-notice">
					<p><?php esc_html_e( 'Changing the slug affects its permalink. Any links to the old slug will stop working.', 'hotella' ); ?></p>
				</div>

				<form id="rename_tag" name="rename_tag" method="post" action="">

					<div>
						<label for="tag-name"><?php esc_html_e( 'Name:', 'hotella' ); ?></label>
						<input type="text" id="tag-name" name="tag-name" size="20" maxlength="40" tabindex="<?php bbp_tab_index(); ?>" value="<?php echo esc_attr( bbp_get_topic_tag_name() ); ?>" />
					</div>

					<div>
						<label for="tag-slug"><?php esc_html_e( 'Slug:', 'hotella' ); ?></label>
						<input type="text" id="tag-slug" name="tag-slug" size="20" maxlength="40" tabindex="<?php bbp_tab_index(); ?>" value="<?php echo esc_attr( apply_filters( 'editable_slug', bbp_get_topic_tag_slug() ) ); ?>" />
					</div>

					<div class="bbp-submit-wrapper">
						<button type="submit" tabindex="<?php bbp_tab_index(); ?>" class="button submit"><?php esc_attr_e( 'Update', 'hotella' ); ?></button>

						<input type="hidden" name="tag-id" value="<?php bbp_topic_tag_id(); ?>" />
						<input type="hidden" name="action" value="bbp-update-topic-tag" />

						<?php wp_nonce_field( 'update-tag_' . bbp_get_topic_tag_id() ); ?>

					</div>
				</form>

			</fieldset>

			<fieldset class="bbp-form" id="tag-merge">

				<legend><?php esc_html_e( 'Merge', 'hotella' ); ?></legend>

				<div class="bbp-template-notice">
					<p><?php esc_html_e( 'Merging tags together cannot be undone.', 'hotella' ); ?></p>
				</div>

				<form id="merge_tag" name="merge_tag" method="post" action="">

					<div>
						<label for="tag-existing-name"><?php esc_html_e( 'Existing tag:', 'hotella' ); ?></label>
						<input type="text" id="tag-existing-name" name="tag-existing-name" size="22" tabindex="<?php bbp_tab_index(); ?>" maxlength="40" />
					</div>

					<div class="bbp-submit-wrapper">
						<button type="submit" tabindex="<?php bbp_tab_index(); ?>" class="button submit" onclick="return confirm('<?php echo esc_js( sprintf( esc_html__( 'Are you sure you want to merge the "%s" tag into the tag you specified?', 'hotella' ), bbp_get_topic_tag_name() ) ); ?>');"><?php esc_attr_e( 'Merge', 'hotella' ); ?></button>

						<input type="hidden" name="tag-id" value="<?php bbp_topic_tag_id(); ?>" />
						<input type="hidden" name="action" value="bbp-merge-topic-tag" />

						<?php wp_nonce_field( 'merge-tag_' . bbp_get_topic_tag_id() ); ?>
					</div>
				</form>

			</fieldset>

			<?php if ( current_user_can( 'delete_topic_tags' ) ) : ?>

				<fieldset class="bbp-form" id="delete-tag">

					<legend><?php esc_html_e( 'Delete', 'hotella' ); ?></legend>

					<div class="bbp-template-notice info">
						<p><?php esc_html_e( 'This does not delete your topics. Only the tag itself is deleted.', 'hotella' ); ?></p>
					</div>
					<div class="bbp-template-notice">
						<p><?php esc_html_e( 'Deleting a tag cannot be undone.', 'hotella' ); ?></p>
						<p><?php esc_html_e( 'Any links to this tag will no longer function.', 'hotella' ); ?></p>
					</div>

					<form id="delete_tag" name="delete_tag" method="post" action="">

						<div class="bbp-submit-wrapper">
							<button type="submit" tabindex="<?php bbp_tab_index(); ?>" class="button submit" onclick="return confirm('<?php echo esc_js( sprintf( esc_html__( 'Are you sure you want to delete the "%s" tag? This is permanent and cannot be undone.', 'hotella' ), bbp_get_topic_tag_name() ) ); ?>');"><?php esc_attr_e( 'Delete', 'hotella' ); ?></button>

							<input type="hidden" name="tag-id" value="<?php bbp_topic_tag_id(); ?>" />
							<input type="hidden" name="action" value="bbp-delete-topic-tag" />

							<?php wp_nonce_field( 'delete-tag_' . bbp_get_topic_tag_id() ); ?>
						</div>
					</form>

				</fieldset>

			<?php endif; ?>

		</fieldset>
	</div>

<?php endif; ?>
