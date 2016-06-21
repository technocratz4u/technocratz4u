<?php

include __SITE_PATH . '/service/utils/AlbumUtil.php' ;
include __SITE_PATH . '/service/utils/UrlUtil.php' ;

Class SitemapController Extends BaseController {

	public function index() {
	
		$this->registry->template->show('about');
	}

}

?>
