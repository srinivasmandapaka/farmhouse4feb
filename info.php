<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>FARMHOUSE JUICE</title>
    <meta name="keywords" content="FARMHOUSE JUICE"/>
    <meta name="description" content="FARMHOUSE JUICE"/>
    <meta name="robots" content="index, follow" />
    <link href='webstyle/style.css' rel='stylesheet' type='text/css'>
    <link href='webstyle/reset.css' rel='stylesheet' type='text/css'>
    <link href='webstyle/fonts.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" type="text/css" href="webstyle/ie8-fixs.css" />
    <![endif]-->
    <!--[if gt IE 8]>
    <link rel="stylesheet" type="text/css" href="webstyle/ie-fixs.css" />
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    
    
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
	
</head>
<body class="info">

<?php include("includes/header.php"); ?>

<section class="info-faq fixed-top group">
	<div class="wrapper group">
    	<div class="tab-box group">
			<div class="tabs group">
				<ul>
					<li><a href="#" class="active" id="tab1-click">WHY</a></li>
                    <li><a href="#" id="tab2-click">HOW</a></li>
                    <li><a href="#" id="tab3-click">TIPS</a></li>
                    <li><a href="#" id="tab4-click">STORY</a></li>
                    <li><a href="#" id="tab5-click">TECH</a></li>	
                </ul>
            </div>
            <div class="tab-content group">
             	<div id="tab1" class="display">
                	<img src="images/info/why.jpg" alt="#" class="full-width" />
                    <p>&nbsp;</p>
                    <p class="text-center">Because your’re obviously smart and know that the most obvious answer is usually the right one: eating whole, unadulterated food that’s packed with enzymes will allow your body to cleanse itself. And, the only potentially severe side effect of this program is finally fitting into your “skinny” jeans.</p>
                </div>
             	<div id="tab2">
                	<h3>HOW DOES THE FARMHOUSE JUICE CLEANSE WORK?</h3>
                    <p>&nbsp;</p>
                    <img src="images/info/how.jpg" alt="#" class="image-center" />
                    <p>&nbsp;</p>
                    <p class="text-justify">As the result of the pollutants in the air we breathe and chemicals in the food and water we consume, the body accumulates “toxins.” Every once in while the body needs to rid itself of these toxins. When the tissues release these materials, they enter into the bloodstream, which is the cause of all those “detox symptoms.” Farmhouse Juice is a NUTRITIONAL Cleanse that is effective in helping the body detoxify itself and move through this “low” or detox cycle faster and with fewer symptoms. Cleansing is recommended for many illnesses, as it gives the body the rest it needs to recover. Take away the work of digesting food, and one allows the system to rid itself of old toxins while facilitating healing. Depending on the length of the Farmhouse Juice Cleanse, it accomplishes different things.</p>
                </div>
                <div id="tab3">
                	<h3>TIPS</h3>
                    <img src="images/info/tips.jpg" class="image-center" />
                    <p>&nbsp;</p>
                    <ul>
                    	<li class="leaf">1-day Farmhouse Juice Cleanse aids in a quick spark of your system.</li>
                        <li class="orange">3-day Farmhouse Juice Cleanse helps the body rid itself of old built up matter and cleanses the blood.</li>
                        <li class="leaf">5-day Farmhouse Juice Cleanse starts the process of rebuilding and healing the immune system. </li>
                        <li class="orange">10-day Farmhouse Juice Cleanse will take care of problems before they arise and fight off degenerative diseases.</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>This is not A “fast” is something different, our cleanse is a nutritional one. It’s about nourishment, NOT deprivation. Our live juice cleanse both removes toxins and promotes healing simply by supplying the blood with vitamins, minerals and enzymes that one is able to easily assimilate.</p>
                    <p>It took years to wear your body down, and it will take time to build it back up to its prime condition. But it can be done. When you start to feel unwell, cleanse and feel better.</p>
                    
                </div>
                <div id="tab4">
                	<img src="images/info/story.jpg" class="image-center" />
                    <p>&nbsp;</p>
                    <h3>SAMPLE HEADING</h3>
                    <p>&nbsp;</p>
                    <p class="text-center">Whether you are looking to supplement a meal or to just enjoy as a stand alone beverage each of our juice combinations are designed to help detoxifying purify the mind and body,using freshly pressed vegetable and fruit juices. We believe in being practical, therefore we've come up with a suer-friendly system of drinking 1.5kg of vegetables and that works for all nutritional lifestyles. Farmhouse juice vows to give you everyday access to your favorite raw and unpasteurized juice combination.</p>
                </div>
                <div id="tab5">
                	<h3>OUR TECHNOLOGY</h3>
                    <p>&nbsp;</p>
                    <img src="images/info/tech.jpg" alt="#" class="image-center" />
                    <p>&nbsp;</p>
                    <p class="text-justify">Whether you are looking to supplement a meal or to just enjoy as a stand alone beverage each of our juice combinations are designed to help detoxifying purify the mind and body,using freshly pressed vegetable and fruit juices. We believe in being practical, therefore we've come up with a suer-friendly system of drinking 1.5kg of vegetables and that works for all nutritional lifestyles. Farmhouse juice vows to give you everyday access to your favorite raw and unpasteurized juice combination.</p>
                </div>
            </div>

		</div>
    </div>
</section>

<script>

		$('#tab1-click').click(function (e) {
			e.stopPropagation();
			$('#tab1').toggleClass('display');
			$(this).toggleClass('active');
			$('#tab3, #tab2, #tab4, #tab5').removeClass('display');
			$('#tab3-click, #tab2-click, #tab4-click, #tab5-click').removeClass('active');

		});
		$('#tab2-click').click(function (e) {
			e.stopPropagation();
			$('#tab2').toggleClass('display');
			$(this).toggleClass('active');
			$('#tab3, #tab1, #tab4, #tab5').removeClass('display');
			$('#tab3-click, #tab1-click, #tab4-click, #tab5-click').removeClass('active');
		});
		$('#tab3-click').click(function (e) {
			e.stopPropagation();
			$('#tab3').toggleClass('display');
			$(this).toggleClass('active');
			$('#tab1, #tab2, #tab4, #tab5').removeClass('display');
			$('#tab1-click, #tab2-click, #tab4-click, #tab5-click').removeClass('active');
		});
		$('#tab4-click').click(function (e) {
			e.stopPropagation();
			$('#tab4').toggleClass('display');
			$(this).toggleClass('active');
			$('#tab3, #tab2, #tab1, #tab5').removeClass('display');
			$('#tab3-click, #tab2-click, #tab1-click, #tab5-click').removeClass('active');
		});
		$('#tab5-click').click(function (e) {
			e.stopPropagation();
			$('#tab5').toggleClass('display');
			$(this).toggleClass('active');
			$('#tab3, #tab2, #tab4, #tab1').removeClass('display');
			$('#tab3-click, #tab2-click, #tab4-click, #tab1-click').removeClass('active');
		});
	
</script>

<?php include("includes/footer.php"); ?>

<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</body>
</html>