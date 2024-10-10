<?php
/*
*The Templete for displaying 404 Page
*/
get_header(); ?>

<section id="body_area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 error_page">
                <h2>404 Error - Page Not Found</h2>
                <h1>Oops! Looks like something is wrong</h1>
                <div class="error_search">
                    <?php get_search_form(); ?>
                </div>
                <a href="<?php echo home_url(); ?> " class="homepage">Homepage</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>