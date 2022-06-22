<?php

/**
 * The template for displaying front page
 *
 * (Home Page of Website)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package acfwp-theme
 */

get_header();
?>

<main>
        <section class="first_sec" style="background-image: url(<?= get_field('header_image'); ?>);">
                <div class="container">
                        <div class="art_group">
                                <h4><?= get_field('top_heading') ?></h4>
                                <h1 class="h_dng"><?= get_field('big_heading') ?></h1>
                        </div>
                </div>
        </section>
        <section class="second_sec">
                <?php $about = get_field('about_school'); ?>
                <div class="container">
                        <div class="row">
                                <div class="col-md-6">
                                        <div class="child_hdngs">
                                                <h3><?= $about['heading'] ?></h3>
                                                <h4><?= $about['sub_heading'] ?></h4>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="child_para">
                                                <?= $about['content'] ?>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="third_sec">
                <div class="container">
                        <?php
                        $programs = get_field('programs');
                        $rows = $programs['prgram_type'];
                        ?>
                        <div class="pro">
                                <h2><?= $programs['heading'] ?> </h2>
                                <p><?= $programs['description'] ?> </p>
                        </div>
                        <div class="row">
                                <?php
                                if ($rows) :
                                        foreach ($rows as $row) : ?>
                                                <div class="col-lg-4">
                                                        <div class="exp_layout">
                                                                <img src="<?= $row['icon'] ?>">
                                                                <h4>A<?= $row['program_heading'] ?></h4>
                                                                <?= $row['program_description'] ?>
                                                        </div>
                                                </div>
                                <?php endforeach;
                                endif; ?>
                        </div>
                </div>
        </section>
        <section class="fourth_sec">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-6">
                                        <div class="blackee">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/black.png" alt="">
                                        </div>
                                </div>
                                <div class="col-lg-6">
                                        <div class="content_bla">
                                                <h2>WE'D LOVE TO HEAR FROM YOU</h2>
                                                <p>The atmosphere is relaxed, fun and social, allowing kids to pursue their own creative bent and focus on a single project to completion. Many students register for multiple weeks and never get bored because the projects vary every
                                                        week.
                                                </p>
                                                <a href="#">read more</a>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="five_sec">
                <div class="container">
                        <div class="our_gallery">
                                <h2>OUR GALLERY</h2>
                                <p>The Art Education Section aims at teaching art and spreading interest in art among different age groups. This is achieved through diverse trainings and workshops for different categories.</p>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                        <div class="img_box">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/photo-1.png" alt="">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="img_box_rt">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/image-2.png" alt="">
                                        </div>

                                </div>
                                <div class="col-md-6">
                                        <div class="img_box">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/image-3.png" alt="">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="img_box_rt">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/image-4.png" alt="">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="img_box">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/image-5.png" alt="">
                                        </div>
                                </div>
                                <div class="col-md-6">
                                        <div class="img_box_rt">
                                                <img src="<?= get_template_directory_uri() ?>/assets/images/image-6.png" alt="">
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="six_sec">
                <div class="container">
                        <div class="row">
                                <div class="col-md-3 col-sm-6">
                                        <div class="count">
                                                <h2>5K</h2>
                                                <p>STUDENTS</p>
                                        </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                        <div class="count">
                                                <h2>150</h2>
                                                <p>TEACHERS</p>
                                        </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                        <div class="count">
                                                <h2>45</h2>
                                                <p>WINNERS</p>
                                        </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                        <div class="count">
                                                <h2>250</h2>
                                                <p>AWARDS</p>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="seven_sec container-fluid">
                <div class="row">
                        <div class="col-md-4 col-sm-4">
                                <div class="inner_img">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/bg-1.png" alt="">
                                </div>

                        </div>
                        <div class="col-md-4 col-sm-4">
                                <div class="inner_img">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/bg-2.png" alt="">
                                </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                                <div class="inner_img">
                                        <img src="<?= get_template_directory_uri() ?>/assets/images/bg-3.png" alt="">
                                </div>
                        </div>
                </div>
        </section>
</main>
<?php get_footer(); ?>