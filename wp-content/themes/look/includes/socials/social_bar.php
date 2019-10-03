<?php

if ( ! class_exists( 'look_ruby_social_bar' ) ) {
	class look_ruby_social_bar {

		/**-------------------------------------------------------------------------------------------------------------------------
		 * @param      $social_data
		 * @param      $classes_name
		 * @param bool $new_tab
		 * @param bool $enable_color
		 *
		 * @return string
		 * render social bar
		 */
		static function render( $social_data, $classes_name = '', $new_tab = true, $enable_color = false ) {
			//check empty
			if ( empty( $social_data ) ) {
				return false;
			}

			if ( $new_tab == true ) {
				$newtab = 'target="_blank"';
			} else {
				$newtab = '';
			}

			extract( shortcode_atts(
					array(

						'website'     => '',
						'facebook'    => '',
						'twitter'     => '',
						'google_plus' => '',
						'pinterest'   => '',
						'bloglovin'   => '',
						'linkedin'    => '',
						'tumblr'      => '',
						'flickr'      => '',
						'instagram'   => '',
						'skype'       => '',
						'myspace'     => '',
						'youtube'     => '',
						'vkontakte'   => '',
						'reddit'      => '',
						'snapchat'    => '',
						'digg'        => '',
						'dribbble'    => '',
						'soundcloud'  => '',
						'vimeo'       => '',
						'rss'         => '',
					), $social_data
				)
			);

			$str        = '';
			$str_social = '';

			
			if ( ! empty( $facebook ) ) {
				$str_social .= '<a class="color-facebook" title="Facebook" href="' . esc_url( $facebook ) . '" ' . $newtab . '><i class="fa fa-facebook"></i></a>';
			}
			if ( ! empty( $twitter ) ) {
				$str_social .= '<a class="color-twitter" title="Twitter" href="' . esc_url( $twitter ) . '" ' . $newtab . '><i class="fa fa-twitter"></i></a>';
			}
			
			if ( ! empty( $instagram ) ) {
				$str_social .= '<a class="color-instagram" title="Instagram" href="' . esc_url( $instagram ) . '" ' . $newtab . '><i class="fa fa-instagram"></i></a>';
			}
			
			if ( ! empty( $str_social ) ) {

				$classes   = array();
				$classes[] = 'social-link-info clearfix';

				if ( ! empty( $classes_name ) ) {
					$classes[] = $classes_name;
				}

				if ( ! empty( $enable_color ) ) {
					$classes[] = 'is-color';
				}

				$classes = implode( ' ', $classes );

				$str .= '<div class="' . esc_attr( $classes ) . '">';
				$str .= $str_social;
				$str .= '</div><!--#social icon-->';
			}

			return $str;
		}
	}
}
