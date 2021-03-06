<?php get_header(); ?>

        <div class="ink-grid vertical-space">
            <div class="panel">
                <div class="column-group">
                    <div class="all-70 post">
                        <?php while(have_posts()) : the_post(); ?>
                            <h2><?php the_title( ); ?></h2>
                            
                            <div>
                                <?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto;')); ?>
                                <?php endif; ?>
                            </div>
                            <br>
                            <?php the_content( ); ?>
                        <?php endwhile; ?>
                    </div>
                    <div class="all-30">
                        <div class="sidebar">
                            <?php if(is_active_sidebar( 'sidebar' )) : ?>
                                <?php dynamic_sidebar('sidebar'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   
<?php get_footer(  ); ?>