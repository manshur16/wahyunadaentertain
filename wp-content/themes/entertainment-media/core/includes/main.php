<?php

add_action( 'admin_menu', 'entertainment_media_getting_started' );
function entertainment_media_getting_started() {
	add_theme_page( esc_html__('Get Started', 'entertainment-media'), esc_html__('Get Started', 'entertainment-media'), 'edit_theme_options', 'entertainment-media-guide-page', 'entertainment_media_test_guide');
}

function entertainment_media_admin_enqueue_scripts() {
	wp_enqueue_style( 'entertainment-media-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'entertainment_media_admin_enqueue_scripts' );

if ( ! defined( 'ENTERTAINMENT_MEDIA_DOCS_FREE' ) ) {
define('ENTERTAINMENT_MEDIA_DOCS_FREE',__('https://www.misbahwp.com/docs/entertainment-media-free-docs/','entertainment-media'));
}
if ( ! defined( 'ENTERTAINMENT_MEDIA_DOCS_PRO' ) ) {
define('ENTERTAINMENT_MEDIA_DOCS_PRO',__('https://www.misbahwp.com/docs/entertainment-media-pro-docs','entertainment-media'));
}
if ( ! defined( 'ENTERTAINMENT_MEDIA_BUY_NOW' ) ) {
define('ENTERTAINMENT_MEDIA_BUY_NOW',__('https://www.misbahwp.com/themes/entertainment-wordpress-theme/','entertainment-media'));
}
if ( ! defined( 'ENTERTAINMENT_MEDIA_SUPPORT_FREE' ) ) {
define('ENTERTAINMENT_MEDIA_SUPPORT_FREE',__('https://wordpress.org/support/theme/entertainment-media','entertainment-media'));
}
if ( ! defined( 'ENTERTAINMENT_MEDIA_REVIEW_FREE' ) ) {
define('ENTERTAINMENT_MEDIA_REVIEW_FREE',__('https://wordpress.org/support/theme/entertainment-media/reviews/#new-post','entertainment-media'));
}
if ( ! defined( 'ENTERTAINMENT_MEDIA_DEMO_PRO' ) ) {
define('ENTERTAINMENT_MEDIA_DEMO_PRO',__('https://www.misbahwp.com/demo/entertainment-media/','entertainment-media'));
}

function entertainment_media_test_guide() { ?>
	<?php $entertainment_media_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( ENTERTAINMENT_MEDIA_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'entertainment-media' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'entertainment-media' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( ENTERTAINMENT_MEDIA_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'entertainment-media' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( ENTERTAINMENT_MEDIA_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'entertainment-media' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','entertainment-media'); ?><?php echo esc_html( $entertainment_media_theme ); ?>  <span><?php esc_html_e('Version: ', 'entertainment-media'); ?><?php echo esc_html($entertainment_media_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $entertainment_media_theme->get_screenshot() ); ?>" />
				<div id="description-inside">
					<?php
						$entertainment_media_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $entertainment_media_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','entertainment-media'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','entertainment-media'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','entertainment-media'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','entertainment-media'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'entertainment-media' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','entertainment-media'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( ENTERTAINMENT_MEDIA_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'entertainment-media' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( ENTERTAINMENT_MEDIA_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'entertainment-media' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( ENTERTAINMENT_MEDIA_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'entertainment-media' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
