<div id="resources">
    <div class="wrapper">
            <select name='options' id="when">
                <option value='in 30 minutes'>30 minutes</option>
                <option value='at a different starting point' selected>at a different starting point</option>
                <option value='right now'>Right now</option>
            </select>

            <div class="output">Select options to change output.</div>
        </div>

        <div class="module">For comparison, here is your browser default:
            <select name='options' class="default">
                <option value='option-1'>Option 1</option>
                <option value='option-2'>Option 2</option>
                <option value='option-3'>Option 3</option>
            </select><br />
            <span style="font-size:.9em;">(Add the class "default" to a select box to disable custom styling.)</span>
        </div>
    </div>
    <div class="categoriesOptions">
        <div class="custom-select">
            <select class="optSelect" data-target=".optionSelectList">
                <option value="optionSelectItem1" data-show=".optionSelectItem1">Categories</option>
                <option value="optionSelectItem2" data-show=".optionSelectItem2">Tests</option>
                <option value="optionSelectItem3" data-show=".optionSelectItem3">Songs</option>
                <option value="optionSelectItem4" data-show=".optionSelectItem4">Videos</option>
            </select>
        </div>
    </div>
    <div class="optionSelectList">
        <div class="hideOptionItem optionSelectItem1">
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('categorySongsMainPageTitle', $front_id = get_option('page_on_front')); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('categorySongsMainPageImg', $front_id = get_option('page_on_front')); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('categorySongsMainPageDescription', $front_id = get_option('page_on_front')); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('categoryVideoMainPageTitle', $front_id = get_option('page_on_front')); ?></a>
                <div class="resourcesOptionsQuadre" id="wrapperVideos">
                    <div class="optionsItemWrpImage">
                        <div class="videoIcon">
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M53.6114 53.6624C63.481 43.7835 63.481 27.7665 53.6114 17.8875C43.7418 8.0085 27.7401 8.0085 17.8705 17.8875C8.00089 27.7665 8.00088 43.7835 17.8705 53.6624C27.7401 63.5414 43.7418 63.5414 53.6114 53.6624Z" fill="white" />
                                <path d="M49.0677 36.0048L28.0547 22.1937C28.0547 43.0226 28.0547 32.802 28.0547 49.8262L49.0677 36.0048Z" fill="white" />
                            </svg>
                        </div>
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('categoryVideoMainPageImg', $front_id = get_option('page_on_front')); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('categoryVideoMainPageDescription', $front_id = get_option('page_on_front')); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('categoryTestsMainPageTitle', $front_id = get_option('page_on_front')); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('categoryTestsMainPageImg', $front_id = get_option('page_on_front')); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('categoryTestsMainPageDescription', $front_id = get_option('page_on_front')); ?></span>
                </div>
            </div>
        </div>


        <div class="hideOptionItem optionSelectItem2">
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('test1_titleTestsItem', 290); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('test1_imageTestsItem', 290); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('test3_descriptionTestsItem', 290); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('test2_titleTestsItem', 290); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('test2_imageTestsItem', 290); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('test2_descriptionTestsItem', 290); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('test3_titleTestsItem', 290); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('test3_imageTestsItem', 290); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('test3_descriptionTestsItem', 290); ?></span>
                </div>
            </div>
        </div>

        <div class="hideOptionItem optionSelectItem3">
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('songList_song1_executorSongItem', 137); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('songList_song1_imageSongItem', 137); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('songList_song1_titleSongItem', 137); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('songList_song2_executorSongItem', 137); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('songList_song2_imageSongItem', 137); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('songList_song2_titleSongItem', 137); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('songList_song3_executorSongItem', 137); ?></a>
                <div class="resourcesOptionsQuadre">
                    <div class="optionsItemWrpImage">
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('songList_song3_imageSongItem', 137); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('songList_song3_titleSongItem', 137); ?></span>
                </div>
            </div>
        </div>

        <div class="hideOptionItem optionSelectItem4">
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('video1_titleVideo', 294); ?></a>
                <div class="resourcesOptionsQuadre" id="wrapperVideos">
                    <div class="optionsItemWrpImage">
                        <div class="videoIcon">
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M53.6114 53.6624C63.481 43.7835 63.481 27.7665 53.6114 17.8875C43.7418 8.0085 27.7401 8.0085 17.8705 17.8875C8.00089 27.7665 8.00088 43.7835 17.8705 53.6624C27.7401 63.5414 43.7418 63.5414 53.6114 53.6624Z" fill="white" />
                                <path d="M49.0677 36.0048L28.0547 22.1937C28.0547 43.0226 28.0547 32.802 28.0547 49.8262L49.0677 36.0048Z" fill="white" />
                            </svg>
                        </div>
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('video1_previewVideo', 294); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('video1_sourceVideo', 294); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('video2_titleVideo', 294); ?></a>
                <div class="resourcesOptionsQuadre" id="wrapperVideos">
                    <div class="optionsItemWrpImage">
                        <div class="videoIcon">
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M53.6114 53.6624C63.481 43.7835 63.481 27.7665 53.6114 17.8875C43.7418 8.0085 27.7401 8.0085 17.8705 17.8875C8.00089 27.7665 8.00088 43.7835 17.8705 53.6624C27.7401 63.5414 43.7418 63.5414 53.6114 53.6624Z" fill="white" />
                                <path d="M49.0677 36.0048L28.0547 22.1937C28.0547 43.0226 28.0547 32.802 28.0547 49.8262L49.0677 36.0048Z" fill="white" />
                            </svg>
                        </div>
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('video2_previewVideo', 294); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('video2_sourceVideo', 294); ?></span>
                </div>
            </div>
            <div class="resourcesOptionsItem">
                <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('video3_titleVideo', 294); ?></a>
                <div class="resourcesOptionsQuadre" id="wrapperVideos">
                    <div class="optionsItemWrpImage">
                        <div class="videoIcon">
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.2" d="M53.6114 53.6624C63.481 43.7835 63.481 27.7665 53.6114 17.8875C43.7418 8.0085 27.7401 8.0085 17.8705 17.8875C8.00089 27.7665 8.00088 43.7835 17.8705 53.6624C27.7401 63.5414 43.7418 63.5414 53.6114 53.6624Z" fill="white" />
                                <path d="M49.0677 36.0048L28.0547 22.1937C28.0547 43.0226 28.0547 32.802 28.0547 49.8262L49.0677 36.0048Z" fill="white" />
                            </svg>
                        </div>
                        <img class="resourcesOptionsQuadreImage" src="<?php the_field('video3_previewVideo', 294); ?>" alt="">
                    </div>
                    <span class="optionDescribeTxt"><?php the_field('video3_sourceVideo', 294); ?></span>
                </div>
            </div>
        </div>
    </div>
</div>