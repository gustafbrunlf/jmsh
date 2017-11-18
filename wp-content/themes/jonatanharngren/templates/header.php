<?php 
  $pages = get_pages(array(
      'meta_key' => '_wp_page_template',
      'meta_value' => 'template-main.php'
  ));
?>
<header class="header">
	<div class="header__logo-wrapper">
		<div class="header__close-logo"></div>
    <a href="<?= get_permalink( $pages[0]->ID ) ?>" class="header__logo">
    	<img src="<?=get_template_directory_uri()?>/dist/images/logomenupage.png">
    </a>
  </div>
  <div class="header__name"><a href="<?= get_home_url(); ?>/main">JMSH</a></div>
</header>