



<?php
if (have_posts()) {
    the_post();
    the_content();
}
?>

<?php
$arg = array(
    'post_per_page' => -1,
    'post_type' => 'gallery-posts',
    'order' => 'desc',
    'orderby' => 'date'
);
$images = new WP_Query($arg);

if ($images->have_posts()) {
    ?>
    <div class="honeycomb mt-5" lang="es">
        <?php
        while ($images->have_posts()) {
            $images->the_post();
            ?>
            <a class="honeycomb-cell" href="<?php the_post_thumbnail_url(); ?>" data-fancybox="gallery1" >
                <img alt="Slika nije ucitana" class="honeycomb-cell__image" src="<?php the_post_thumbnail_url(); ?>">
            </a>
            <?php
        }
        ?>
        <a class="honeycomb-cell honeycomb__placeholder"></a>
    </div>
    <?php
}

wp_reset_postdata();
?>




<?php
$arg = array(
    'post_per_page' => -1,
    'post_type' => 'gallery-posts2',
    'order' => 'desc',
    'orderby' => 'date'
);
$images = new WP_Query($arg);

if ($images->have_posts()) {
    ?>
    <div class="honeycomb mt-5" lang="es">
        <?php
        while ($images->have_posts()) {
            $images->the_post();
            ?>
            <a class="honeycomb-cell" href="<?php the_post_thumbnail_url(); ?>" data-fancybox="gallery1" >
                <img alt="Slika nije ucitana" class="honeycomb-cell__image" src="<?php the_post_thumbnail_url(); ?>">
            </a>
            <?php
        }
        ?>
        <a class="honeycomb-cell honeycomb__placeholder"></a>
    </div>
    <?php
}

wp_reset_postdata();
?>

<?php
$arg = array(
    'post_per_page' => -1,
    'post_type' => 'gallery-posts3',
    'order' => 'desc',
    'orderby' => 'date'
);
$images = new WP_Query($arg);

if ($images->have_posts()) {
    ?>
    <div class="honeycomb mt-5" lang="es">
        <?php
        while ($images->have_posts()) {
            $images->the_post();
            ?>
            <a class="honeycomb-cell" href="<?php the_post_thumbnail_url(); ?>" data-fancybox="gallery1" >
                <img alt="Slika nije ucitana" class="honeycomb-cell__image" src="<?php the_post_thumbnail_url(); ?>">
            </a>
            <?php
        }
        ?>
        <a class="honeycomb-cell honeycomb__placeholder"></a>
    </div>
    <?php
}

wp_reset_postdata();
?>

<?php
$arg = array(
    'post_per_page' => -1,
    'post_type' => 'gallery-posts4',
    'order' => 'desc',
    'orderby' => 'date'
);
$images = new WP_Query($arg);

if ($images->have_posts()) {
    ?>
    <div class="honeycomb mt-5" lang="es">
        <?php
        while ($images->have_posts()) {
            $images->the_post();
            ?>
            <a class="honeycomb-cell" href="<?php the_post_thumbnail_url(); ?>" data-fancybox="gallery1" >
                <img alt="Slika nije ucitana" class="honeycomb-cell__image" src="<?php the_post_thumbnail_url(); ?>">
            </a>
            <?php
        }
        ?>
        <a class="honeycomb-cell honeycomb__placeholder"></a>
    </div>
    <?php
}

wp_reset_postdata();
?>