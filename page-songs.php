<?php /* Template Name: Songs */ ?>
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
<section class="contentPages" id="songsPage">
    <div class="container">
        <div class="wrapperContentAndCategories">
            <div class="wrapperContentPages">
                <h1 class="animate__animated animate__fadeInLeftBig animate__delay-0.5s">
                    <?php the_title(); ?>
                </h1>
                <div class="wrapperHrOrange">
                    <div class="hrOrange animate__animated animate__fadeInLeftBig animate__delay-1s"></div>
                </div>
                <div class="contentPagesSongsWrapper">
                    <a href="./songItem.html">
                        <?php
                        $song1 = get_field('songList_song1');
                        if ($song1) : ?>
                            <div class="contentPagesSongItem">
                                <div class="wrapperTitleSong">
                                    <h4><?php echo $song1['titleSongItem']; ?></h4>
                                </div>

                                <div class="wrapperTitlePagesSongs">
                                    <p class="titlePagesSongs"><?php echo $song1['executorSongItem']; ?><span> | </span><?php echo $song1['albumSongItem']; ?></p>
                                </div>
                                <div class="wrapperSongItemImage">
                                    <img class="songItemImage" src="<?php echo $song1['imageSongItem']; ?>" alt="">
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                    <a href="#">
                        <?php
                        $song2 = get_field('songList_song2');
                        if ($song2) : ?>
                            <div class="contentPagesSongItem">
                                <div class="wrapperTitleSong">
                                    <h4><?php echo $song2['titleSongItem']; ?></h4>
                                </div>

                                <div class="wrapperTitlePagesSongs">
                                    <p class="titlePagesSongs"><?php echo $song2['executorSongItem']; ?><span> | </span><?php echo $song2['albumSongItem']; ?></p>
                                </div>
                                <div class="wrapperSongItemImage">
                                    <img class="songItemImage" src="<?php echo $song2['imageSongItem']; ?>" alt="">
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                    <a href="#">
                        <?php
                        $song3 = get_field('songList_song3');
                        if ($song3) : ?>
                            <div class="contentPagesSongItem">
                                <div class="wrapperTitleSong">
                                    <h4><?php echo $song3['titleSongItem']; ?></h4>
                                </div>

                                <div class="wrapperTitlePagesSongs">
                                    <p class="titlePagesSongs"><?php echo $song3['executorSongItem']; ?><span> | </span><?php echo $song3['albumSongItem']; ?></p>
                                </div>
                                <div class="wrapperSongItemImage">
                                    <img class="songItemImage" src="<?php echo $song3['imageSongItem']; ?>" alt="">
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                    <a href="#">
                        <?php
                        $song4 = get_field('songList_song4');
                        if ($song4) : ?>
                            <div class="contentPagesSongItem">
                                <div class="wrapperTitleSong">
                                    <h4><?php echo $song4['titleSongItem']; ?></h4>
                                </div>

                                <div class="wrapperTitlePagesSongs">
                                    <p class="titlePagesSongs"><?php echo $song4['executorSongItem']; ?><span> | </span><?php echo $song4['albumSongItem']; ?></p>
                                </div>
                                <div class="wrapperSongItemImage">
                                    <img class="songItemImage" src="<?php echo $song4['imageSongItem']; ?>" alt="">
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                    <a href="#">
                        <?php
                        $song5 = get_field('songList_song5');
                        if ($song5) : ?>
                            <div class="contentPagesSongItem">
                                <div class="wrapperTitleSong">
                                    <h4><?php echo $song5['titleSongItem']; ?></h4>
                                </div>

                                <div class="wrapperTitlePagesSongs">
                                    <p class="titlePagesSongs"><?php echo $song5['executorSongItem']; ?><span> | </span><?php echo $song5['albumSongItem']; ?></p>
                                </div>
                                <div class="wrapperSongItemImage">
                                    <img class="songItemImage" src="<?php echo $song5['imageSongItem']; ?>" alt="">
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                    <a href="#">
                        <?php
                        $song6 = get_field('songList_song6');
                        if ($song6) : ?>
                            <div class="contentPagesSongItem">
                                <div class="wrapperTitleSong">
                                    <h4><?php echo $song6['titleSongItem']; ?></h4>
                                </div>

                                <div class="wrapperTitlePagesSongs">
                                    <p class="titlePagesSongs"><?php echo $song6['executorSongItem']; ?><span> | </span><?php echo $song6['albumSongItem']; ?></p>
                                </div>
                                <div class="wrapperSongItemImage">
                                    <img class="songItemImage" src="<?php echo $song6['imageSongItem']; ?>" alt="">
                                </div>
                            </div>
                        <?php endif; ?>
                    </a>
                </div>
                <button id="loadMoreSongs" class="btnBasic">Load more</button>
            </div>
            <?php get_sidebar('songs')?>
        </div>
    </div>
</section>
<?php
get_footer();
?>