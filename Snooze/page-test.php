<?php get_header(); ?>
<section>
    <?php
        $testPage = get_page_by_title( 'test' ); // je récupère la page contact
        echo apply_filters('the_content', $testPage->post_content); // j'affiche le contenu qui vient de la page contact
    ?>
</section>
<?php get_footer(); ?>