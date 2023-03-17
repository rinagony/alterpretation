<div id="resources">
    <div class="categoriesOptions">
        <div class="custom-select">
            <select>
                <option value="0">Categories</option>
                <option value="1">All</option>
                <option value="2">Politic</option>
                <option value="3">Animals</option>
                <option value="4">Fun</option>
                <option value="5">Books</option>
                <option value="5">Events</option>
                <option value="5">History</option>
            </select>
        </div>
    </div>
    <div class="wrapperResourcesOptions">
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
            <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('categoryWordsMainPageTitle', $front_id = get_option('page_on_front')); ?></a>
            <div class="resourcesOptionsQuadre">
                <div class="optionsItemWrpImage">
                    <img class="resourcesOptionsQuadreImage" src="<?php the_field('categoryWordsMainPageImg', $front_id = get_option('page_on_front')); ?>" alt="">
                </div>
                <span class="optionDescribeTxt"><?php the_field('categoryWordsMainPageDescription', $front_id = get_option('page_on_front')); ?></span>
            </div>
        </div>
        <div class="resourcesOptionsItem" id="testsBlock">
            <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('categoryTestsMainPageTitle', $front_id = get_option('page_on_front')); ?></a>
            <div class="resourcesOptionsQuadre">
                <div class="optionsItemWrpImage">
                    <img class="resourcesOptionsQuadreImage" src="<?php the_field('categoryTestsMainPageImg', $front_id = get_option('page_on_front')); ?>" alt="">
                </div>
                <span class="optionDescribeTxt"><?php the_field('categoryTestsMainPageDescription', $front_id = get_option('page_on_front')); ?></span>
            </div>
        </div>
    </div>
</div>