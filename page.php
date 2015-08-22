<?php get_header(); ?>
    <?php // query_posts函数
    $args = array(
        // query_posts参数，具体参数可以参加官方文档
        'showposts' => 1,
    );
    
    // 下面这一行代码是必须的，不然不能分页
    $arms = array_merge($args, $wp_query->query);
    query_posts($arms);
    
    // 主循环
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="ui middle aligned animated list relaxed">
      <div class="ui raised segment">       
        <div class="right floated content">                     
        </div>          
        <?php echo the_content(); ?>
      </div>
    </div>
    <?php
    endwhile; else:

    endif;
    
    // 重置query
    wp_reset_query();
    ?>


<?php get_footer(); ?>