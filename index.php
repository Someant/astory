<?php get_header(); ?>
    <?php // query_posts函数
    $args = array(
        // query_posts参数，具体参数可以参加官方文档
        'showposts' => 4,
    );
    
    // 下面这一行代码是必须的，不然不能分页
    $arms = array_merge($args, $wp_query->query);
    query_posts($arms);
    
    // 主循环
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
    <div class="ui middle aligned animated list relaxed">
      <div class="ui raised segment">
        <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
        <div class="right floated content">                     
            <div class="ui small" id="date"> 
              <i class="calendar outline icon"></i><?php echo the_date(); ?>
              <i class="tag icon"></i> <?php the_category(' '); ?>
            </div>
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
    <div tabindex="0" class="ui top attached button" id="more"><?php posts_nav_link('&#8734;','Last','Next'); ?></div>

<?php get_footer(); ?>