<?php

/* Template Name: Home */
get_header();
?>

<section id="aboutSection">
	<div class="container">
		<div class="wrapperAbout">
			<div class="wrapperAbout__item wrapperAbout__item__content">
				<h1 class="animate__animated animate__fadeInLeftBig animate__delay-0.5s"><?php the_field('titleOfMainPage'); ?></h1>
				<div class="wrapperHrOrange">
					<div class="hrOrange animate__animated animate__fadeInLeftBig animate__delay-1s"></div>
				</div>
				<p class="aboutDescription"><?php the_field('aboutMeMainPage'); ?></p>
				<div class="wrpAboutButtonSocials">
					<button class="btnBasic">Contact me</button>
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
				</div>
			</div>
			<div class="wrapperAbout__item" id="wrapperAbout__item">
				<img class="photoOwner" src="<?php the_field('photoFirstBlockMainPage'); ?>" alt="">
			</div>
		</div>
	</div>
</section>
<section id="resources">
	<div class="container">
		<div class="wrapperHrOrange">
			<div class="hrOrange animate__animated animate__fadeInLeftBig animate__delay-1s"></div>
		</div>
		<h2 class="titleResurces animate__animated animate__fadeInLeftBig animate__delay-1.2s"><?php the_field('secondBlockOfMainPage'); ?></h2>
		<div class="wrapperLanguagesOptions">
			<div class="languagesOption">
				<button class="btnOptionLang">
					<svg width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0)">
							<path d="M18.9622 0H0V11.92H18.9622V0Z" fill="#E83434" />
							<path d="M18.9736 3.17712H0V8.66855H18.9736V3.17712Z" fill="#FFF915" />
						</g>
						<defs>
							<clipPath id="clip0">
								<rect width="18.9736" height="11.92" fill="white" />
							</clipPath>
						</defs>
					</svg>
					<span>Spanish</span>
				</button>
				<button class="btnOptionLang">
					<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0)">
							<path d="M19.821 0.0285034V11.9213L19.8153 11.927H0.870087V0.0285034H19.821Z" fill="#2E4593" />
							<path d="M19.821 10.6836V11.9213L19.8153 11.927H17.8444L12.0287 8.27078L11.4477 7.90573L10.7585 7.47793L10.5306 7.32963L9.83002 6.89042L9.568 6.725L9.35155 6.59381L8.91295 6.31432L8.77055 6.22876L8.5541 6.09186L6.49212 4.79135L5.56366 4.20954L0.870087 1.26629V0.0285227L0.887175 0.00570679L0.921351 0.0285227H2.84093L8.77055 3.74752L9.35155 4.11258L9.50535 4.20954L10.4338 4.79135L10.5306 4.85409L10.8838 5.07655L11.4477 5.4302L11.5445 5.49294L12.0287 5.79525L12.5015 6.09186L13.7774 6.89042L14.7116 7.47793L19.821 10.6836Z" fill="#FCF5FF" />
							<path d="M19.821 11.8871L19.8266 11.9327L18.5564 11.927L12.0287 7.82587L11.4705 7.47793L11.4477 7.46081L10.8838 7.10717L10.5477 6.89042L9.92686 6.50254L9.35155 6.14319L9.27181 6.09186L8.91295 5.8694L8.77055 5.77814L7.20413 4.79135L6.27567 4.20954L0.870087 0.81567V0L0.887175 0.00570399L0.921351 0.0285199L7.59146 4.20954L8.51423 4.79135L8.77055 4.95106L9.35155 5.32182L9.568 5.45871L9.92686 5.68117L10.5819 6.09186L11.4477 6.63374L11.5445 6.69648L11.8578 6.89042L12.0287 6.99879L12.7863 7.47793L19.821 11.8871Z" fill="#F42525" />
							<path d="M19.821 0.262367V1.50013L15.4976 4.20953L14.5692 4.79133L12.5015 6.09184L12.0287 6.38845L11.5445 6.69646L11.4477 6.7535L11.2256 6.8904L10.8838 7.10715L10.5306 7.32961L10.2971 7.47791L9.35155 8.07113L8.77055 8.43618L3.21118 11.927H0.870087V10.9174L6.34972 7.47791L7.27818 6.8904L8.5541 6.09184L8.77055 5.96065L8.91295 5.86939L9.35155 5.58989L9.568 5.4587L10.5306 4.85408L10.6218 4.79133L11.4477 4.27797L11.5502 4.20953L12.0287 3.91292L18.2204 0.0285034H19.6729L19.821 0.262367Z" fill="#FCF5FF" />
							<path d="M19.7697 0.325111L13.578 4.20953L12.6496 4.79133L12.0287 5.18491L11.5445 5.49292L11.4477 5.54996L10.5819 6.09184L9.92686 6.50253L9.568 6.72498L9.35155 6.86758L9.30598 6.8904L8.77055 7.23264L8.37752 7.47791L1.29729 11.927H0.870087V11.368L7.06742 7.47791L7.99589 6.8904L8.77055 6.40556L8.91295 6.3143L9.27181 6.09184L9.35155 6.04051L9.92686 5.68115L10.8838 5.07653L11.3338 4.79133L11.4477 4.72288L12.0287 4.35783L12.2623 4.20953L18.9267 0.0285034H19.5874H19.821V0.285183L19.7697 0.325111Z" fill="#F42525" />
							<path d="M19.8266 4.20959H0.852966V7.47228H19.8266V4.20959Z" fill="white" />
							<path d="M19.8266 4.7914H0.852966V6.89046H19.8266V4.7914Z" fill="#F42525" />
							<path d="M11.4477 0.0285034H9.35153V11.927H11.4477V0.0285034Z" fill="#CD002A" />
							<path d="M11.442 7.47791H12.023V11.927H8.76483V7.47791H9.34583V4.20953H8.76483V0.0285034H12.023V4.20953H11.442V7.47791Z" fill="white" />
							<path d="M11.4534 0.0285034H9.33444V11.927H11.4534V0.0285034Z" fill="#F42525" />
						</g>
						<defs>
							<clipPath id="clip0">
								<rect width="18.9736" height="11.9327" fill="white" transform="translate(0.852966)" />
							</clipPath>
						</defs>
					</svg>
					<span>English</span>
				</button>
				<button class="btnOptionLang">
					<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0)">
							<path d="M19.6879 0H0.714264V11.9128H19.6879V0Z" fill="#2E4593" />
							<path d="M19.6879 0H10.5632V11.9128H19.6879V0Z" fill="#F42525" />
							<path d="M13.4318 0.0171204H7.0217V11.8671H13.4318V0.0171204Z" fill="white" />
						</g>
						<defs>
							<clipPath id="clip0">
								<rect width="18.9737" height="11.9128" fill="white" transform="translate(0.714264)" />
							</clipPath>
						</defs>
					</svg>
					<span>French</span>
				</button>
				<button class="btnOptionLang">
					<svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0)">
							<path d="M19.5406 0H0.578369V11.92H19.5406V0Z" fill="#FDFFFF" />
							<path d="M19.5406 5.75996H0.578369V11.92H19.5406V5.75996Z" fill="#DB2E2E" />
							<path d="M19.552 3.91995H0.578369V7.93138H19.552V3.91995Z" fill="#3C5EBF" />
						</g>
						<defs>
							<clipPath id="clip0">
								<rect width="18.9736" height="11.92" fill="white" transform="translate(0.578369)" />
							</clipPath>
						</defs>
					</svg>
					<span>Russian</span>
				</button>
			</div>
		</div>
		<div class="categoriesOptions">
			<!-- Surround the select box within a "custom-select" DIV element.
                Remember to set the width: -->
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
			<?php
			$firstCategoryMainPage = get_field('firstCategoryMainPage');
			if ($firstCategoryMainPage) : ?>
				<div class="resourcesOptionsItem">
					<a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php echo $firstCategoryMainPage['categorySongsMainPageTitle']; ?></a>
					<div class="resourcesOptionsQuadre">
						<div class="optionsItemWrpImage">
							<img class="resourcesOptionsQuadreImage" src="<?php echo $firstCategoryMainPage['categorySongsMainPageImg']; ?>" alt="">
						</div>
						<span class="optionDescribeTxt"><?php echo $firstCategoryMainPage['categorySongsMainPageDescription']; ?></span>
					</div>
				</div>
			<?php endif; ?>
			<?php
			$secondCategoryMainPage = get_field('secondCategoryMainPage');
			if ($secondCategoryMainPage) : ?>
				<div class="resourcesOptionsItem">
					<a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php echo $secondCategoryMainPage['categoryVideoMainPageTitle']; ?></a>
					<div class="resourcesOptionsQuadre" id="wrapperVideos">
						<div class="optionsItemWrpImage">
							<div class="videoIcon">
								<svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path opacity="0.2" d="M53.6114 53.6624C63.481 43.7835 63.481 27.7665 53.6114 17.8875C43.7418 8.0085 27.7401 8.0085 17.8705 17.8875C8.00089 27.7665 8.00088 43.7835 17.8705 53.6624C27.7401 63.5414 43.7418 63.5414 53.6114 53.6624Z" fill="white" />
									<path d="M49.0677 36.0048L28.0547 22.1937C28.0547 43.0226 28.0547 32.802 28.0547 49.8262L49.0677 36.0048Z" fill="white" />
								</svg>
							</div>
							<img class="resourcesOptionsQuadreImage" src="<?php echo $secondCategoryMainPage['categoryVideoMainPageImg']; ?>" alt="">
						</div>
						<span class="optionDescribeTxt"><?php echo $secondCategoryMainPage['categoryVideoMainPageDescription']; ?></span>
					</div>
				</div>
			<?php endif; ?>
			<?php
			$thirdCategoryMainPage = get_field('thirdCategoryMainPage');
			if ($thirdCategoryMainPage) : ?>
				<div class="resourcesOptionsItem">
					<a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php echo $thirdCategoryMainPage['categoryWordsMainPageTitle']; ?></a>
					<div class="resourcesOptionsQuadre">
						<div class="optionsItemWrpImage">
							<img class="resourcesOptionsQuadreImage" src="<?php echo $thirdCategoryMainPage['categoryWordsMainPageImg']; ?>" alt="">
						</div>
						<span class="optionDescribeTxt"><?php echo $thirdCategoryMainPage['categoryWordsMainPageDescription']; ?></span>
					</div>
				</div>
			<?php endif; ?>
			<?php
			$fourthCategoryMainPage = get_field('fourthCategoryMainPage');
			if ($fourthCategoryMainPage) : ?>
				<div class="resourcesOptionsItem">
					<a href="#" class="descriptionOptionTitle resourcesOptionsItemSpecial"><?php echo $fourthCategoryMainPage['categoryTestsMainPageTitle']; ?></a>
					<div class="resourcesOptionsQuadre">
						<div class="optionsItemWrpImage">
							<img class="resourcesOptionsQuadreImage" src="<?php echo $fourthCategoryMainPage['categoryTestsMainPageImg']; ?>" alt="">
						</div>
						<span class="optionDescribeTxt"><?php echo $fourthCategoryMainPage['categoryTestsMainPageDescription']; ?></span>
					</div>
				</div>
			<?php endif; ?>
			<div class="resourcesOptionsItem" id="cooperationBlock">
				<h4 class="descriptionOptionTitle"><?php the_field('categoryMainPageCooperationTitle'); ?></h4>
				<div class="wrpHrOrangeResouces">
					<div class="hrOrangeResources"></div>
				</div>
				<div class="wrapperCooperationItemTxt">
					<span class="askMeCooperation"><?php the_field('categoryMainPageCooperationTxt'); ?></span>
					<form class="formTranslation">
						<label for="emailCooperation"><?php the_field('categoryMainPageCooperationTxt'); ?></label>
						<input id="emailCooperation" placeholder="<?php the_field('categoryMainPageCooperationInput'); ?>" type="text">
						<button class="btnBasic" type="submit"><?php the_field('categoryMainPageCooperationBtn'); ?></button>
					</form>
				</div>
			</div>
		</div>
		<div class="wrpFormBlockMob">
			<form class="formSmall">
				<h4 class="wrpFormBlockMobTitle"><?php the_field('categoryMainPageCooperationMob'); ?></h4>
				<label for="fname">Name:</label>
				<input placeholder="Name" type="text" id="fname" name="fname">
				<label for="lname">Email:</label>
				<input placeholder="Email" type="text" id="lname" name="lname">
				<label for="lnames">Text:</label>
				<input placeholder="Text" type="text" id="lnames" name="lnames">
				<button class="btnBasic"><?php the_field('categoryMainPageCooperationMobBtn'); ?></button>
			</form>
		</div>
	</div>
</section>
<section id="cooperation">
	<div class="container">
		<div class="wrapperCooperation">
			<div class="wrapperCooperationImageBlock">
				<img src="<?php the_field('formMainPageImg'); ?>" alt="">
			</div>
			<div class="wrapperCooperationItem">
				<div class="wrapperCooperationItems">
					<h4 class="wow bounceIn animate__animated animate__fadeInRightBig animate__delay-0.5s"><?php the_field('formMainPageTitle'); ?></h4>
					<div class="wrapperHrOrange">
						<div class="hrOrangeOption animate__animated animate__fadeInRightBig animate__delay-1.4s">
						</div>
					</div>
					<div class="wrpFormOptions">
						<form class="formCooperationNormal">
							<label for="fname">Name:</label>
							<input placeholder="Name" type="text" id="fname" name="fname">
							<label for="lname">Email:</label>
							<input placeholder="Email" type="text" id="lname" name="lname">
							<label for="lname">Text:</label>
							<input placeholder="Text" type="text" id="lname" name="lname">
							<button class="btnBasic">Send a letter</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="cooperationSectionMob" style="background: -webkit-gradient( linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))), url('<?php the_field('formMainPageImg'); ?>');
    background: -o-linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php the_field('formMainPageImg'); ?>');
    background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php the_field('formMainPageImg'); ?>');     background-size: cover;
    background-repeat: no-repeat;">
	<div class="container">
		<div class="wrapperCooperationSectionMob">
			<h3>Have a questions?</h3>
			<!-- <div class="hrOrangeCooperation"></div>
            <p>Ask me for translation by mail</p> -->
			<form class="formSmallMob">
				<label for="fname">Name:</label>
				<input placeholder="Name" type="text" id="fname" name="fname">
				<label for="lname">Email:</label>
				<input placeholder="Email" type="text" id="lname" name="lname">
				<label for="lname">Text:</label>
				<input placeholder="Text" type="text" id="lname" name="lname">
				<div class="wrpBtnMobForm">
					<button class="btnBasic">Send a letter</button>
				</div>
			</form>
		</div>
	</div>
</section>

<?php
get_footer();
