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
            <a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php the_field('categoryWordsMainPageTitle', $front_id = get_option('page_on_front')); ?></a>
            <div class="resourcesOptionsQuadre">
                <div class="optionsItemWrpImage">
                    <img class="resourcesOptionsQuadreImage" src="<?php the_field('categoryWordsMainPageImg', $front_id = get_option('page_on_front')); ?>" alt="">
                </div>
                <span class="optionDescribeTxt"><?php the_field('categoryWordsMainPageDescription', $front_id = get_option('page_on_front')); ?></span>
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