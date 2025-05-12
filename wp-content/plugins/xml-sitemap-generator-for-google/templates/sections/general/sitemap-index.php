<?php
/**
 * @var $args
 */

use GRIM_SG\Dashboard;

$settings = $args['settings'] ?? new stdClass();
?>
<div class="postbox">
	<h3 class="hndle"><?php esc_html_e( 'Sitemap View', 'xml-sitemap-generator-for-google' ); ?></h3>

	<div class="inside">
		<p>
			<?php
			printf(
				/* translators: %s Google Index Sitemap URL */
				wp_kses_post( 'You can choose either <b>Single Sitemap</b> view with all links or split links into <b>Multiple Sitemaps</b> for Pages, Posts, Custom Posts, etc. by creating <a href="%s" target="_blank">Sitemap Index</a>.' ),
				'https://developers.google.com/search/docs/crawling-indexing/sitemaps/large-sitemaps'
			)
			?>
		</p>
		<ul>
			<li>
				<?php
				Dashboard::render(
					'fields/radio.php',
					array(
						'label'         => esc_html__( 'Single Sitemap', 'xml-sitemap-generator-for-google' ),
						'description'   => esc_html__( 'Single Sitemap will be generated with all links', 'xml-sitemap-generator-for-google' ),
						'name'          => 'sitemap_view',
						'id'            => 'sitemap_view_1',
						'value'         => '',
						'current_value' => $settings->sitemap_view ?? '',
					)
				);
				?>
			</li>
			<li>
				<?php
				Dashboard::render(
					'fields/radio.php',
					array(
						'label'         => esc_html__( 'Multiple Sitemaps with Sitemap Index', 'xml-sitemap-generator-for-google' ),
						'description'   => esc_html__( 'Sitemap Index will be generated with Inner Sitemaps', 'xml-sitemap-generator-for-google' ),
						'name'          => 'sitemap_view',
						'id'            => 'sitemap_view_2',
						'value'         => 'sitemap-index',
						'current_value' => $settings->sitemap_view ?? '',
					)
				);
				?>
			</li>
		</ul>
	</div>
</div>
