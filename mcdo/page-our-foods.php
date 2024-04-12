<?php get_header()?>

<section class="banner" style="background-image: url(<?php echo get_field('banner') ?>)"></section>


<section class="category bg-primary">
    <div class="container">
        <div class ="category__wrapper">
        <?php
                if(have_rows('our_foods_menus')) : ?>
                <?php while(have_rows('our_foods_menus')) : the_row(); ?>

            <a href="<?php echo get_sub_field('our_foods_link') ?>">
                  <div class="category__card">
                <img src="<?php echo get_sub_field('our_foods_image') ?>" alt="">
                <h5><?php echo get_sub_field('our_foods_label') ?></h5>
            </div>
            </a>

            <?php endwhile;
                    else:
                        echo "No more menu";
                    endif;
            ?>
        </div>
    </div>
</section>

<section class="quality">
    <div class="container">
        <div class="quality__header">
            <h3 class="mb-1">Food Quality</h3>
            <h5 class="mb-1 text-accent">Quality and Safety</h5>
            <p>This is McDonald's promise when it comes to food</p>
        </div>
    </div>

    <div class="quality__wrapper">
        <div class="container">
            <div class="quality__cards">
<!-- Start of Quality Cards -->

        <?php
                if(have_rows('our_foods_quality')) : ?>
                <?php while(have_rows('our_foods_quality')) : the_row(); ?>

                <div class="quality__card">
                    <img src="<?php echo get_sub_field('our_foods_quality_image') ?>" alt="">
                    <h4><?php echo get_sub_field('our_foods_quality_label') ?></h4>
                    <p class="bg-primary p-3"><?php echo get_sub_field('our_foods_quality_paragraph') ?></p>
                </div>

            
                <?php endwhile;
                    else:
                        echo "No more menu";
                    endif;
            ?>

<!-- End of Quality Cards -->
        </div>
    </div>
</div>

</section>

<?php get_footer()?>