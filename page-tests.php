<?php /* Template Name: Tests */ ?>
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
<section class="contentPages">
    <div class="container">
        <div class="wrapperContentAndCategories">
            <div class="wrapperContentPages">
                <h1 class="animate__animated animate__fadeInLeftBig animate__delay-0.5s">Test</h1>
                <div class="wrapperHrOrange">
                    <div class="hrOrange animate__animated animate__fadeInLeftBig animate__delay-1s"></div>
                </div>
                <div class="wrapperAbout__item__socials">
                    <p>Share:</p>
                    <div class="wrapperAbout__item__social">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="wrapperTests">
                    <div class="wrapperTestLinkToTest">
                        <div class="wrapperTestItem">
                            <div class="wrapperTests_testItem">
                                <div class="wrapperTests_testItemTxt">
                                    <h2>Which language should you learn?</h2>
                                    <div class="hrOrangeTest"></div>
                                </div>
                                <div class="wraaperLinkTryTest">
                                    <a class="linkBasic" onclick="openTestFirst()" href="#firstTest">Want to try</a>
                                </div>
                            </div>
                            <div class="wrapperTests_img">
                                <img src="./images/tests/test3.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div id="firstTest" class="wrapperTestQuestuins">
                        <div id="testQuestionGrid" class="wrapperQuestionTests">
                            <div class="wrapperQuestionsTest">
                                <div id="firstQuestionLanguage" class="testItemQuestion">
                                    <h4 class="questuionTestTxt">Do you enjoy the challenge? </h4>
                                    <div class="hrTests"></div>
                                    <div class="wrapperAnswers">
                                        <form>
                                            <div>
                                                <input name="firstQuestionLang" id="firstQuestionLangOptOne" type="radio" value="Bring it on!">
                                                <label class="buttonTests" for="firstQuestionLangOptOne">Bring it
                                                    on!</label>
                                            </div>
                                            <div>
                                                <input name="firstQuestionLang" id="firstQuestionLangOptTwo" type="radio" value="I don’t have time for that">
                                                <label class="buttonTests" for="firstQuestionLangOptTwo">I don’t
                                                    have time for that</label>
                                            </div>
                                            <div>
                                                <input name="firstQuestionLang" id="firstQuestionLangOptThree" type="radio" value="Depends on my mood">
                                                <label class="buttonTests" for="firstQuestionLangOptThree">Depends
                                                    on my mood</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="grid-item testItemQuestion" id="thirdQuestionLanguage" style="grid-row-end: span 1">
                                    <h4 class="questuionTestTxt">Which of the following interests you most?</h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers">
                                            <div>
                                                <input name="secondQuestionLang" id="secondQuestionLangOptOne" type="radio" value="Food">
                                                <label class="buttonTests" for="secondQuestionLangOptOne">Food</label>
                                            </div>
                                            <div>
                                                <input name="secondQuestionLang" id="secondQuestionLangOptTwo" type="radio" value="English">
                                                <label class="buttonTests" for="secondQuestionLangOptTwo">English</label>
                                            </div>
                                            <div>
                                                <input name="secondQuestionLang" id="secondQuestionLangOptThree" type="radio" value="Nature">
                                                <label class="buttonTests" for="secondQuestionLangOptThree">Nature</label>
                                            </div>
                                            <div>
                                                <input name="secondQuestionLang" id="secondQuestionLangOptFour" type="radio" value="Arts">
                                                <label class="buttonTests" for="secondQuestionLangOptFour">Arts</label>
                                            </div>
                                            <div>
                                                <input name="secondQuestionLang" id="secondQuestionLangOptFive" type="radio" value="Fashion">
                                                <label class="buttonTests" for="secondQuestionLangOptFive">Fashion</label>
                                            </div>
                                            <div>
                                                <input name="secondQuestionLang" id="secondQuestionLangOptSix" type="radio" value="Robots">
                                                <label class="buttonTests" for="secondQuestionLangOptSix">Robots</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="fiveQuestionLanguage" class="grid-item testItemQuestion" style="grid-row-end: span -1">
                                    <h4 class="questuionTestTxt">My motivation for learning a language is...</h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers">
                                            <div>
                                                <input name="thirdQuestionLang" id="thirdQuestionLangOptOne" type="radio" value="I want to surprise my parents">
                                                <label class="buttonTests" for="thirdQuestionLangOptOne">I want to
                                                    surprise my parents</label>
                                            </div>
                                            <div>
                                                <input name="thirdQuestionLang" id="thirdQuestionLangOptTwo" type="radio" value="I just want to learn something new">
                                                <label class="buttonTests" for="thirdQuestionLangOptTwo">I just want
                                                    to learn something new</label>
                                            </div>
                                            <div>
                                                <input name="thirdQuestionLang" id="thirdQuestionLangOptThree" type="radio" value="my partner is from a foreign country">
                                                <label class="buttonTests" for="thirdQuestionLangOptThree">my
                                                    partner is from a foreign country</label>
                                            </div>
                                            <div>
                                                <input name="thirdQuestionLang" id="thirdQuestionLangOptFour" type="radio" value="I want to travel all over the world">
                                                <label class="buttonTests" for="thirdQuestionLangOptFour">I want to
                                                    travel all over the world</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="sevenQuestionLanguage" class="grid-item testItemQuestion">
                                    <h4 class="questuionTestTxt">Grammar for you is...</h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers">
                                            <div>
                                                <input name="fourQuestionLang" id="fourQuestionLangOptOne" type="radio" value="I want to travel all over the world">
                                                <label class="buttonTests" for="fourQuestionLangOptOne">punishment!
                                                    I can’t handle it</label>
                                            </div>
                                            <div>
                                                <input name="fourQuestionLang" id="fourQuestionLangOptTwo" type="radio" value="I want to travel all over the world">
                                                <label class="buttonTests" for="fourQuestionLangOptTwo">boring</label>
                                            </div>
                                            <div>
                                                <input name="fourQuestionLang" id="fourQuestionLangOptThree" type="radio" value="I want to travel all over the world">
                                                <label class="buttonTests" for="fourQuestionLangOptThree">I could
                                                    take it or leave it</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="nineQuestionLanguage" class="grid-item testItemQuestion">
                                    <h4 class="questuionTestTxt">Now pick a dish...</h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers">
                                            <div>
                                                <input name="fiveQuestionLang" id="fiveQuestionLangOptOne" type="radio" value="Pasta">
                                                <label class="buttonTests" for="fiveQuestionLangOptOne">Pasta</label>
                                            </div>
                                            <div>
                                                <input name="fiveQuestionLang" id="fiveQuestionLangOptTwo" type="radio" value="Sushi">
                                                <label class="buttonTests" for="fiveQuestionLangOptTwo">Sushi</label>
                                            </div>
                                            <div>
                                                <input name="fiveQuestionLang" id="fiveQuestionLangOptThree" type="radio" value="Soup">
                                                <label class="buttonTests" for="fiveQuestionLangOptThree">Soup</label>
                                            </div>
                                            <div>
                                                <input name="fiveQuestionLang" id="fiveQuestionLangOptFour" type="radio" value="Seafood">
                                                <label class="buttonTests" for="fiveQuestionLangOptFour">Seafood</label>
                                            </div>
                                            <div>
                                                <input name="fiveQuestionLang" id="fiveQuestionLangOptFive" type="radio" value="Salad">
                                                <label class="buttonTests" for="fiveQuestionLangOptFive">Salad</label>
                                            </div>
                                            <div>
                                                <input name="fiveQuestionLang" id="fiveQuestionLangOptSix" type="radio" value="I want everything">
                                                <label class="buttonTests" for="fiveQuestionLangOptSix">I want
                                                    everything</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="wrapperQuestionsTest">
                                <div id="secondQuestionLanguage" class="grid-item testItemQuestion">
                                    <h4 class="questuionTestTxt">Perfect vacation for me is...</h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers streightQuestions">
                                            <div>
                                                <input name="sixQuestionLang" id="sixQuestionLangOptOne" type="radio" value="chilling at the beach">
                                                <label class="buttonTests" for="sixQuestionLangOptOne">chilling at
                                                    the beach</label>
                                            </div>
                                            <div>
                                                <input name="sixQuestionLang" id="sixQuestionLangOptTwo" type="radio" value="English">
                                                <label class="buttonTests" for="sixQuestionLangOptTwo">English</label>
                                            </div>
                                            <div>
                                                <input name="sixQuestionLang" id="sixQuestionLangOptThree" type="radio" value="sightseeing in a city">
                                                <label class="buttonTests" for="sixQuestionLangOptThree">sightseeing
                                                    in a city</label>
                                            </div>
                                            <div>
                                                <input name="sixQuestionLang" id="sixQuestionLangOptFour" type="radio" value="sitting on the couch with my fav book">
                                                <label class="buttonTests" for="sixQuestionLangOptFour">sitting on
                                                    the couch with my fav book</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="fourQuestionLanguage" class="grid-item testItemQuestion">
                                    <h4 class="questuionTestTxt">Which career path best fits your interests? </h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers">
                                            <div>
                                                <input name="sevenQuestionLang" id="sevenQuestionLangOptOne" type="radio" value="Fashion">
                                                <label class="buttonTests" for="sevenQuestionLangOptOne">Fashion</label>
                                            </div>
                                            <div>
                                                <input name="sevenQuestionLang" id="sevenQuestionLangOptTwo" type="radio" value="Art">
                                                <label class="buttonTests" for="sevenQuestionLangOptTwo">Art</label>
                                            </div>
                                            <div>
                                                <input name="sevenQuestionLang" id="sevenQuestionLangOptThree" type="radio" value="Engineering">
                                                <label class="buttonTests" for="sevenQuestionLangOptThree">Engineering</label>
                                            </div>
                                            <div>
                                                <input name="sevenQuestionLang" id="sevenQuestionLangOptFour" type="radio" value="Business">
                                                <label class="buttonTests" for="sevenQuestionLangOptFour">Business</label>
                                            </div>
                                            <div>
                                                <input name="sevenQuestionLang" id="sevenQuestionLangOptFive" type="radio" value="Politics">
                                                <label class="buttonTests" for="sevenQuestionLangOptFive">Politics</label>
                                            </div>
                                            <div>
                                                <input name="sevenQuestionLang" id="sevenQuestionLangOptSix" type="radio" value="Sport">
                                                <label class="buttonTests" for="sevenQuestionLangOptSix">Sport</label>
                                            </div>
                                            <div>
                                                <input name="sevenQuestionLang" id="sevenQuestionLangOptSeven" type="radio" value="English">
                                                <label class="buttonTests" for="sevenQuestionLangOptSeven">English</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="sixQuestionLanguage" class="grid-item testItemQuestion">
                                    <h4 class="questuionTestTxt">How would you describe your sense of humor?</h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers">
                                            <div>
                                                <input name="eightQuestionLang" id="eightQuestionLangOptOne" type="radio" value="I’m the one who is laughing when I make a
                                                        joke">
                                                <label class="buttonTests" for="eightQuestionLangOptOne">I’m the one
                                                    who is laughing when I make a
                                                    joke</label>
                                            </div>
                                            <div>
                                                <input name="eightQuestionLang" id="eightQuestionLangOptTwo" type="radio" value="I can be a stand up comic">
                                                <label class="buttonTests" for="eightQuestionLangOptTwo">I can be a
                                                    stand up comic</label>
                                            </div>
                                            <div>
                                                <input name="eightQuestionLang" id="eightQuestionLangOptThree" type="radio" value="hard to say">
                                                <label class="buttonTests" for="eightQuestionLangOptThree">hard to
                                                    say</label>
                                            </div>
                                            <div>
                                                <input name="eightQuestionLang" id="eightQuestionLangOptFour" type="radio" value="I don’t have sense of humor">
                                                <label class="buttonTests" for="eightQuestionLangOptFour">I don’t
                                                    have sense of humor</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="eightQuestionLanguage" class="grid-item testItemQuestion">
                                    <h4 class="questuionTestTxt">Pick a drink...</h4>
                                    <div class="hrTests"></div>
                                    <form>
                                        <div class="wrapperAnswers">
                                            <div>
                                                <input name="nineQuestionLang" id="nineQuestionLangOptOne" type="radio" value="Vodka">
                                                <label class="buttonTests" for="nineQuestionLangOptOne">Vodka</label>
                                            </div>
                                            <div>
                                                <input name="nineQuestionLang" id="nineQuestionLangOptTwo" type="radio" value="Beer">
                                                <label class="buttonTests" for="nineQuestionLangOptTwo">Beer</label>
                                            </div>
                                            <div>
                                                <input name="nineQuestionLang" id="nineQuestionLangOptThree" type="radio" value="Pina colada">
                                                <label class="buttonTests" for="nineQuestionLangOptThree">Pina
                                                    colada</label>
                                            </div>
                                            <div>
                                                <input name="nineQuestionLang" id="nineQuestionLangOptFour" type="radio" value="Wine">
                                                <label class="buttonTests" for="nineQuestionLangOptFour">Wine</label>
                                            </div>
                                            <div>
                                                <input name="nineQuestionLang" id="nineQuestionLangOptFive" type="radio" value="I don’t drink">
                                                <label class="buttonTests" for="nineQuestionLangOptFive">I don’t
                                                    drink</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resultTestLang" id="resultTestLang">
                        <div class="hrWhiteTests"></div>
                        <p>You should learn english</p>
                    </div>
                    <div class="linkToMoreTests">
                        <h2 class="pretitle animate__animated animate__fadeInLeftBig animate__delay-0.5s">More
                            tests
                        </h2>
                        <div class="wrapperHrOrange">
                            <div class="hrOrange animate__animated animate__fadeInLeftBig animate__delay-1s">
                            </div>
                        </div>
                        <div class="wrapperMoreTests">
                            <div class="linkItemMoreTest">
                                <a href="#">
                                    <div class="testMoreItem">
                                        <img src="./images/tests/test1.png" alt="">
                                        <span class="titleTestMore">The verb you are archaism</span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="testMoreItem">
                                        <img src="./images/tests/test2.png" alt="">
                                        <span class="titleTestMore">The verb you are archaism</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php get_sidebar('tests');
            ?>
        </div>
    </div>
</section>
<?php
get_footer();
?>