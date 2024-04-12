<?php get_header()?>

<section class="banner" style="background-image: url(<?php echo get_field('banner') ?>)"></section>

<section class="family py-5">
         <div class="family__wrapper">
        <div class="container">
        
        <?php 
            $activity = New WP_Query(array(
                'post_type' => 'post'
            ))
        ?>

        <?php if($activity->have_posts()) : while($activity->have_posts()) : $activity->the_post(); ?>
            <div class="family__activities">
           
                    
                        <div class="family__activity">
                            <div class = family__image>
                                <a href="#">
                                <?php if(has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }?>
                            </a>
                            </div>

                        <div class="family__details">
                           <a href="#"><h2><?php the_title(); ?></h2></a> 
                            <?php the_content()?>
                            
                            <a href="#" class ="btn btn-primary w-full">Learn More</a>
                            
                        </div>
                    </div>
                        <?php endwhile;
                            else:
                                echo "No more activity";
                            endif;
                        ?>

                    </div>
                </div>
            </div>
    </section>
      
<?php get_footer()?>