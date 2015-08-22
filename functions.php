<?php 

register_nav_menu( 'nav-menu', 'head_menu');

function load_post() {
	// 如果 action ID 是 load_post, 并且传入的必须参数存在, 则执行响应方法
	if($_GET['action'] == 'load_post' && $_GET['id'] != '') {
		$id = $_GET["id"];
		$output = '';
 
		// 获取文章对象
		global $wpdb, $post;
		$post = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->posts WHERE ID = %d LIMIT 1", $id));
 
		// 如果指定 ID 的文章存在, 则对他进行格式化
		if($post) {
			$content = $post->post_content;
			$output = balanceTags($content);
			$output = wpautop($output);
		}
 
		// 打印文章内容并中断后面的处理
		echo $output;
		die();
	}
}
// 将接口加到 init 中
add_action('init', 'load_post');


///////////////////////短代码支持

		
//代码
	function codeebox($atts, $content=null, $code="") {
	$return = "<pre class='prettyprint'>";
	$return .= do_shortcode($content);
					$return .= "</pre>";
					return $return;
				}
				add_shortcode('codee' , 'codeebox' );		
			
