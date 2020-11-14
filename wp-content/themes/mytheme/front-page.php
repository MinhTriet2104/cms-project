<?php
    // include header
    get_header();
?>
<!-- phần nội dung trang chủ -->
<main id="main-content">

    <!-- phần thứ 1, slider  -->
    <section id="home-slider">
        <div class="container">
        </div>
    </section>

    <!-- phần thứ 2, nổi bật  -->
    <section id="home-features" class='section bg-grey'>
        <div class="container">
        <?= var_dump(get_terms('post_tag', array(
            'hide_empty' => false,
        ))); ?>
        </div>
    </section>

    <section id="home-new-posts" class='section'>
        <div class="container">
            <h2 class="section-title">
                Bài viết mới nhất
            </h2>
            <?php
                $np_args = [
                    'post_type' => 'post'
                ];
                $np_result = new WP_Query($np_args);

                if($np_result->have_posts()):
                    while($np_result->have_posts()):
                        $np_result->the_post();
                ?>
                <div class="row home-newpost">
                    <div class="col-12 col-lg-4 col-xl-3">
                        <div class="home-newpost--thumbnail">
                            <a href="<?= the_permalink(); ?>">
                                <?php the_post_thumbnail() ?>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 col-xl-9">
                        <h3 class="home-newpost--title">
                            <a href="<?= the_permalink(); ?>">
                                <?= the_title(); ?>
                            </a>
                        </h3>
                        <div class="home-newpost--meta mb-20">
                            Danh mục: <?= the_category(); ?> <br>
                        </div>
                        <div class="home-newpost--excerpt">
                            <?= the_excerpt(); ?>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                else:
                ?>
                <div class="row">
                    <div class="col">
                        <h4 class="text-danger">Chưa có bài viết, vui lòng quay lại sau!</h4>
                    </div>
                </div>
                <?php endif; ?>
        </div>
    </section>

    <!-- phần thứ 4, email  -->
    <section id="email-contact">
        <div class="container">
            <h2>Email Contact</h2>
        </div>
    </section>
</main>

<?php
    // include footer
    get_footer();
?>