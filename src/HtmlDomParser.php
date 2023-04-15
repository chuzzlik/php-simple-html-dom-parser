<?php

namespace Chuzzlik\HtmlDomParser;

require 'simplehtmldom_2_0' . DIRECTORY_SEPARATOR . 'simple_html_dom.php';

class HtmlDomParser {
	
	/**
	 * @return \simplehtmldom_1_5\simple_html_dom
	 */
	static public function file_get_html() {
		return call_user_func_array ( '\simplehtmldom_2_0\file_get_html' , func_get_args() );
	}

	/**
	 * get html dom from string
	 * @return \simplehtmldom_1_5\simple_html_dom
	 */
	static public function str_get_html() {
		return call_user_func_array ( '\simplehtmldom_2_0\str_get_html' , func_get_args() );
	}
}