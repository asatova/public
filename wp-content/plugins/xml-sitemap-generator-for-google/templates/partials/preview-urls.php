<?php
/**
 * @var $args
 */

$sitemap_type   = $args['sitemap_type'] ?? 'sitemap_xml';
$sitemap_url    = $args['sitemap_url'] ?? '';
$languages      = sgg_get_languages();
$wpml_languages = apply_filters( 'wpml_active_languages', array() );
?>
<p class="<?php echo esc_attr( $args['class'] ?? '' ); ?>">
	<?php echo esc_html( $args['label'] ?? '' ); ?>
	<a href="<?php echo esc_url( sgg_get_sitemap_url( $sitemap_url, $sitemap_type ) ); ?>" target="_blank">
		<?php echo esc_url( sgg_get_sitemap_url( $sitemap_url, $sitemap_type ) ); ?>
	</a>
</p>

<?php if ( ! empty( $languages ) || ! empty( $wpml_languages ) ) { ?>
	<p class="<?php echo esc_attr( $args['class'] ?? '' ); ?>">
		<?php
		echo esc_html( $args['languages_label'] ?? '' );

		foreach ( $languages as $language ) {
			?>
			<br>
			<a href="<?php echo esc_url( sgg_get_sitemap_url( "{$language}/{$sitemap_url}", $sitemap_type ) ); ?>" target="_blank">
				<?php echo esc_url( sgg_get_sitemap_url( "{$language}/{$sitemap_url}", $sitemap_type ) ); ?>
			</a>
			<?php
		}

		if ( defined( 'ICL_SITEPRESS_VERSION' ) ) {
			foreach ( $wpml_languages as $language ) {
				if ( apply_filters( 'wpml_default_language', null ) === $language['code'] ) {
					continue;
				}
				?>
				<br>
				<a href="<?php echo esc_url( "{$language['url']}{$sitemap_url}" ); ?>" target="_blank">
					<?php echo esc_url( "{$language['url']}{$sitemap_url}" ); ?>
				</a>
				<?php
			}
		}
		?>
	</p>
<?php } ?>
