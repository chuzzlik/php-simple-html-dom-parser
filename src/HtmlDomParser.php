<?php

namespace chuzzlik\htmlparser;

require 'simplehtmldom_2_0' . DIRECTORY_SEPARATOR . 'simple_html_dom.php';

class HtmlDomParser {
	
	/**
	 * @return \simplehtmldom\HtmlDocument
	 */
	static public function file_get_html() {
		return call_user_func_array ( 'file_get_html' , func_get_args() );
	}

	/**
	 * get html dom from string
	 * @return \simplehtmldom\HtmlDocument
	 */
	static public function str_get_html() {
		return call_user_func_array ( 'str_get_html' , func_get_args() );
	}
}