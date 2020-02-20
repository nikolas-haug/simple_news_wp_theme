<?php get_header(); ?>

        <form action="<?php echo esc_url(site_url('/')); ?>" method="GET" class="ink-form">
            <div class="ink-grid">
                <div class="panel">
                    <div class="control-group append-button">
                        <div class="control all-100">
                            <input type="text" name="s" placeholder="Search news...">
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="ink-grid vertical-space">
            <div class="panel">
                <h2>
                Search Results
                </h2>
                <div class="column-group">
                    <div class="all-70 post">
                        <ul class="unstyled">
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post(); ?>
                                    <li class="column-group half-gutters">
                                        <div class="all-40 small-50 tiny-50">
                                            <?php the_post_thumbnail( 'full', array( 'style' => 'width: 100%; height: auto;')); ?>
                                        </div>
                                        <div class="all-60 small-50 tiny-50">
                                            <h4>
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title( ); ?>
                                                </a>
                                                <?php comments_number('No Responses', '1 Response', '% Responses'); ?>
                                            </h4>
                                            <?php the_excerpt(  ); ?>
                                        </div>
                                    </li>

                                <?php endwhile; ?>
                            <?php else : ?>
                            
                            <h3>No articles found. Try another search?</h3>
                        
                        <?php endif; ?>
                        </ul>
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