<?php /* Template Name: Words */ ?>
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
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words1['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words1['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words2 = get_field('words2');
                    if ($words2) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words2['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words2['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words2['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words3 = get_field('words3');
                    if ($words3) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words3['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words3['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words3['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words4 = get_field('words4');
                    if ($words4) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words4['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words4['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words4['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words5 = get_field('words5');
                    if ($words5) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words5['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words5['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words5['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words6 = get_field('words6');
                    if ($words6) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words6['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words6['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words6['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words7 = get_field('words7');
                    if ($words7) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words7['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words7['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words7['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words8 = get_field('words8');
                    if ($words8) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words8['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words8['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words8['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words9 = get_field('words6');
                    if ($words9) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words9['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words9['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words9['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words10 = get_field('words10');
                    if ($words10) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words10['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words10['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words10['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words11 = get_field('words11');
                    if ($words11) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words11['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words11['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words11['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words12 = get_field('words12');
                    if ($words12) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words12['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words12['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words12['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words13 = get_field('words13');
                    if ($words13) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words13['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words13['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words13['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words14 = get_field('words14');
                    if ($words14) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words14['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words14['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words14['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words15 = get_field('words15');
                    if ($words15) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words15['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words15['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words15['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words16 = get_field('words16');
                    if ($words16) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words16['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words16['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words16['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words17 = get_field('words17');
                    if ($words17) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words17['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words17['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words17['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words18 = get_field('words18');
                    if ($words18) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words18['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words18['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words18['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words19 = get_field('words19');
                    if ($words19) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words19['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words19['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words19['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words20 = get_field('words20');
                    if ($words20) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words20['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words20['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words20['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words21 = get_field('words21');
                    if ($words21) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words21['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words21['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words21['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words22 = get_field('words22');
                    if ($words22) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words22['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words22['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words22['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words23 = get_field('words23');
                    if ($words23) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words23['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words23['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words23['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words24 = get_field('words24');
                    if ($words24) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words24['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words24['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words24['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words25 = get_field('words25');
                    if ($words25) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words25['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words25['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words25['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words26 = get_field('words26');
                    if ($words26) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words26['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words26['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words26['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words27 = get_field('words27');
                    if ($words27) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words27['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words27['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words27['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words28 = get_field('words28');
                    if ($words28) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words28['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words28['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words28['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words29 = get_field('words29');
                    if ($words29) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words29['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words29['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words29['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php
                    $words30 = get_field('words30');
                    if ($words30) : ?>
                        <div class="wrapperWordsPornPost">
                            <h3><?php echo $words30['titleWords']; ?></h3>
                            <div class="wrapperImageWordsPornItem">
                                <img class="imagePostWordsPorn" src="<?php echo $words30['imageWords']; ?>" alt="">
                            </div>
                            <p class="textPostWordsPorn"><?php echo $words30['textWords']; ?></p>
                        </div>
                    <?php endif; ?>
                    <button id="loadMore" class="btnBasic">Load more</button>
                </div>
            </div>
            <?php get_sidebar('words') ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>