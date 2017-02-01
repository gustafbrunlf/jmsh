<?php 
  $pages = get_pages(array(
      'meta_key' => '_wp_page_template',
      'meta_value' => 'template-main.php'
  ));
?>
<header class="header">
  <div class="container">
    <a class="header__logo" href="<?= get_permalink( $pages[0]->ID ) ?>"><img src="<?=get_template_directory_uri()?>/dist/images/logowhite.svg"></a>
    <div class="header__name"><?php bloginfo('name'); ?></div>
  </div>
</header>
