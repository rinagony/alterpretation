<?php /* Template Name: Videos */ ?>
<?php

get_header();
?>

<?php

get_sidebar('top')

?>
<section class="menuPages">
    <div class="container">
        <div class="wrapperMenuPages">
            <a href="./index.html">Home</a>
            <span>|</span>
            <a href="./index.html">English</a>
            <span>|</span>
            <a href="./songs.html">Songs</a>
        </div>
    </div>
</section>
<section id="contentPagesWords" class="contentPages">
    <div class="container">
        <div class="wrapperContentAndCategories">
            <div class="wrapperContentPages">
                <h1 class="animate__animated animate__fadeInLeftBig animate__delay-0.5s"><?php the_title(); ?></h1>
                <div class="wrapperHrOrange">
                    <div class="hrOrange animate__animated animate__fadeInLeftBig animate__delay-1s"></div>
                </div>
                <div class="wrapperWordsPornPosts">
                    <?php
                    $words1 = get_field('words1');
                    if ($words1) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words1['titleWords']; ?></h3>
                            <img class="imagePostWordsPorn" src="<?php echo $words1['imageWords']; ?>" alt="">
                            <p class="textPostWordsPorn"><?php echo $words1['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words2 = get_field('words2');
                    if ($words2) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words2['titleWords']; ?></h3>
                            <img class="imagePostWordsPorn" src="<?php echo $words2['imageWords']; ?>" alt="">
                            <p class="textPostWordsPorn"><?php echo $words2['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <button class="btnBasic">Load more</button>
                </div>
            </div>
            <?php get_sidebar('videos') ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>