<?php get_header()?>

<section class="banner" style="background-image: url(<?php echo get_field('banner') ?>)"></section>

<section class="career__experience">
    <h2>The McDonald's Experience</h2>
    <div class="mcdo__video">
        <div class="mcdo__video__player">
            <iframe width="940" height="529" src="https://www.youtube.com/embed/D7rzFo7LhT8" title="Excellence is within your reach! Start your Best Me story at McDo." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
</div>

<div class="mcdo__description">
    <p></p>
</div>
</section>

<section class="block__description">
    <div class="container">
        <div class="block__description__wrapper">
            <p></p>
        </div>
    </div>
</section>

<section class="careers__form">
    <div class="container">
        <h2 class="job__description">Job Opportunities</h2>

        <div class="filter__options">
            <form action="https://www.mcdonalds.com.ph/career/career-filter" class="form__filter">
                <div class="form__filter__wrapper">

            <?php
                  if(have_rows('careers_filter')) : ?>
                  <?php while(have_rows('careers_filter')) : the_row(); ?>
                    <div class="form__component">
                        <div class="form__control">
                            <button>
                                <span class="filter__option"><?php echo get_sub_field('filter_type') ?></span>
                                &nbsp;
                                <span class="filter__caret">
                                    <span class="caret"></span>
                                </span>
                            </button>
                        </div>
                    </div>

                    <?php endwhile;
                    else:
                        echo "No more menu";
                    endif;
                ?>

                </div>

                <div class="form__action">
                    <button>Filter</button>
                </div>

            </form>
        </div>

        <div class="filter__contents">

        <?php
                  if(have_rows('careers_job')) : ?>
                  <?php while(have_rows('careers_job')) : the_row(); ?>

            <div class="filter__contents__item">
                <div class="filter__contents__item__wrapper">
                    <div class="filter__contents__details">
                        <h2 class="filter__contents__title">
                            <a href="<?php echo get_sub_field('careers_job_link') ?>"><?php echo get_sub_field('careers_job_type') ?></a>
                        </h2>
                        <div class="filter__job__details">
                            <div class="filter__job__details__location">
                                <p><?php echo get_sub_field('careers_job_location') ?></p>
                            </div>
                            <div class="filter__job__details__years">
                                <p><?php echo get_sub_field('careers_job_level') ?></p>
                            </div>

                            <div class="filter__job__details__description"> 
                                <p></p>
                            </div>

                        </div>
                    </div>
                    <div class="filter__contents__button">
                        <div class="filter__contents__button__item">
                            <a href="<?php echo get_sub_field('careers_job_button_link') ?>"> <?php echo get_sub_field('careers_job_button_label') ?> </a>
                        </div>
                    </div>
                </div>
            </div>
            
              <?php
                  endwhile;
                  else :
                  echo "no available content yet";
                  endif;
                  wp_reset_postdata();
              ?>

            <ul class="pagination">

                <li class="page__item page__prev disabled">
                    <span class="page__prev__link">
                        <i class="fa-solid fa-play"></i>
                    </span>
                </li>
                <li class="page__item active">
                    <span class="page__link">1</span>
                </li>
                <li class="page__item">
                    <a href="#" class="page__link">2</a>
                </li>
                <li class="page__item page__next">
                    <a href="#" rel="next" class="page__link">
                        <i class="fa-solid fa-play"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <section>
        <div class="notifications" style="width: 300px; top: 0px; left: calc(50% - 150px);">
            <span></span>
        </div>
    </section>

</section>

<section class="employer">
    <div class="container">
        <div class="employer__wrapper">
            <p></p>
            <table style="margin: 0px auto; text-align: center;">
                <tbody>
                    <tr>
                        <td>
                            <a href="https://www.weps.org/company/golden-arches-development-corporation-mcdonalds-philippines" target="_blank">
                                <img border="0" src="https://d3bjzufjcawald.cloudfront.net/public/web/2023-09-21/650bdfd37f248/UN-Women-400x524.png" style="width: 140px; margin: 20px;">
                            </a>
                        </td> 
                        <td>
                            <img border="0" src="https://d3bjzufjcawald.cloudfront.net/public/web/2023-09-21/650bdfe94a2fa/Philippine-Daily-Inquirer-Best-Employers-2023-400x524.png" style="width: 140px; margin: 20px;">
                        </td>
                    </tr>
                </tbody>
            </table>
            <p></p>
        </div>
    </div>
</section>

<?php get_footer()?>