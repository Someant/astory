<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="keywords" content="<?php if (is_home()) { echo ($options['keyword_content']);} else echo $keywords;?>"/>
	<meta name="description" content="<?php if (is_home()) { echo ($options['description_content']);} else echo $description = mb_strimwidth(strip_tags($post->post_content),0,200);?>"/>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<title>
		<?php 
		if ( is_home() ) {
			echo bloginfo( 'name' );$paged = get_query_var('paged'); if($paged > 1) printf(' | 第%s页',$paged);
		} elseif ( is_archive() ) {
			echo wp_title('');  if($paged > 1) printf(' - 第%s页',$paged);    echo ' - ';    bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo wp_title('TAG:');if($paged > 1) printf(' - 第%s页',$paged);echo ' - '; bloginfo( 'name' );
		}  elseif ( is_404() ) {
			echo '未找到内容'; bloginfo( 'name' );
		} else {
			echo wp_title( '-', false, right )  ; bloginfo( 'name' );
		} ?>
	</title>

 
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/site.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/container.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/grid.css">  
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/list.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/segment.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/icon.css">  
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/button.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/components/form.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
  <script src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>
  
  

  <style type="text/css">

  body {
    background-color: #FFFFFF;
  }
  .main.container {
    margin-top: 2em;
  }

  .main.menu {
    margin-top: 4em;
    border-radius: 0;
    border: none;
    box-shadow: none;
    transition:
      box-shadow 0.5s ease,
      padding 0.5s ease
    ;
  }
  .main.menu .item img.logo {
    margin-right: 1.5em;
  }

  .overlay {
    float: left;
    margin: 0em 3em 1em 0em;
  }
  .overlay .menu {
    position: relative;
    left: 0;
    transition: left 0.5s ease;
  }

  .main.menu.fixed {
    background-color: #FFFFFF;
    border: 1px solid #DDD;
    box-shadow: 0px 3px 5px rgba(0, 0, 0, 0.2);
  }
  .overlay.fixed .menu {
    left: 800px;
  }

  .text.container .left.floated.image {
    margin: 2em 2em 2em -4em;
  }
  .text.container .right.floated.image {
    margin: 2em -4em 2em 2em;
  }

/*  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  */

  </style>

</head>
<body>  
  <div class="ui text container" id="userpanel">
    <div class="ui text item" id="header">
      <!--<img class="ui avatar tiny image" src="images/ava.png">-->
     
      <div class="ui horizontal  small divided link list">
        <p>Live in a story</p>
           <?php $menuParameters = array(
              'container' => false,             
              "echo" => false,              
              'items_wrap' => '%3$s',             
              'depth' => 0,             
              'theme_location' =>'nav-menu',
              'menu_class' => 'item',
              
              );

            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' ); ?>
      </div>
    </div>
