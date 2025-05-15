<?php
/**
 * Contains all the current date, year of the theme.
 *
 * @package srbridge
 * @subpackage WP_Portfolio
 * @since WP_Portfolio 1.0
 */
?>
<?php
	/**
	 * To display the current year.
	 *
	 * @uses date() Gets the current year.
	 * @return string
	 */
	function wp_portfolio_the_year() {
	   return date( 'Y' );
	}
	/**
	 * To display a link back to the site.
	 *
	 * @uses get_bloginfo() Gets the site link
	 * @return string
	 */
	function wp_portfolio_site_link() {
	   return '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';
	}
	/**
	 * To display a link to privacy policy.
	 *
	 * @return string
	 */
	function wp_portfolio_themehorse_privacy() {
		if (function_exists('get_the_privacy_policy_link')) {
			return get_the_privacy_policy_link('', ' | ');
		}
	}
?>
