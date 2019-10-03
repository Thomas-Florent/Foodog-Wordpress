<?php

/**
 * Class look_ruby_hs_block_1
 * render has sidebar block 1 (list layout)
 */
if ( ! class_exists( 'look_ruby_hs_block_1' ) ) {
	class look_ruby_hs_block_1 extends look_ruby_block {

		/**-------------------------------------------------------------------------------------------------------------------------
		 * @param $block
		 *
		 * @return string
		 * render block layout
		 */
		static function render( $block ) {


			//add block data
			$block['block_type']    = 'has_sidebar';
			$block['block_classes'] = 'hs-block hs-block-1';

			$str = '';
			$str .= parent::open_block( $block );
			$str .= parent::render_header( $block );
			$str .= self::render_content( $block );
			$str .= parent::close_block();

			return $str;
		}

		/**-------------------------------------------------------------------------------------------------------------------------
		 * @param $block
		 *
		 * @return string
		 * render block block content
		 */
		static function render_content( $block ) {

			//query data
			$data_query = parent::get_data( $block );
			$flag  = true;

			if ( ! empty( $block['block_options']['big_first'] ) ) {
				$big_first = true;
			} else {
				$big_first = false;
			}

			//render
			$str = '';
			$str .= parent::open_block_content( 'row' );

			//check empty
			if ( empty( $data_query->post_count ) ) {
				$str .= parent::no_content();
			} else {
				ob_start();

				?>

				<?php while ( $data_query->have_posts() ) : ?>
					<?php $data_query->the_post();
					//render first post
					if ( ( true === $flag ) && ( ! empty( $big_first ) ) ) {
						get_template_part( 'templates/module/layout', 'classic_lite' );
						$flag = false;
						continue;
					}

					//render block
					get_template_part( 'templates/module/layout', 'list' );
					?>

				<?php endwhile; ?>

				<?php

				$str .= ob_get_clean();
			}

			$str .= parent::close_block_content();

			//reset post data
			wp_reset_postdata();

			return $str;
		}


		/**-------------------------------------------------------------------------------------------------------------------------
		 * @return array
		 * init block options
		 */
		static function block_config() {
			return array(
				'title'          => esc_html__( 'latest posts', 'look' ),
				'title_color'    => true,
				'title_url'      => true,
				'category_id'    => true,
				'category_ids'   => true,
				'tags'           => true,
				'post_format'    => true,
				'authors'        => true,
				'orderby'        => true,
				'posts_per_page' => 4,
				'offset'         => true,
				'big_first'      => true,
				'view_more'      => true,
				'view_more_text' => true,
				'view_more_link' => true
			);
		}
	}
}
