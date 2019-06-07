<?php
/*******************************************************
For this piece of the test, you will have a several HTML, CSS and PHP questions.

PHP and HTML
	1. Fill in your name and the date in the "By" line.
	2. In the first text box, labeled "Current Date and Time", display the date and time that the page loaded. Make the date in Month/Day/Year formatting and the time in Hour:Minutes:Seconds formatting.
	3. Disable modifying the date and time in the first text box, labeled "Current Date and Time". 
	4. Fill in the drop down, labeled "Favorite Programming Language", with the $programmingLanguages array.
	
CSS 
	For the CSS portion, getting the basics is the most important which will be listed below, however if you consider yourself a web designer and want to do more than the list, please do.  

	1. Center all items in the body (inputs, labels and headers) horizontally.
	2. The background needs to be or contain a dark blue.
	3. The top 2 headers need to be white
	4. The labels for inputs and the footer need to be a red or pink
	
*******************************************************/

// Use this array to fill in the drop down
$programmingLanguages = array(
	"A# .NET",
	"A-0 System",
	"A+",
	"A++",
	"ABAP",
	"ABC",
	"ABC ALGOL",
	"ABSET",
	"ABSYS",
	"ACC",
	"Accent",
	"Ace DASL (Distributed Application Specification Language)",
	"ACL2",
	"ACT-III",
	"Action!",
	"ActionScript",
	"Actor",
	"Ada",
	"Adenine",
	"Agda",
	"Agilent VEE",
	"Agora",
	"AIMMS",
	"Aldor",
	"Alef",
	"ALF",
	"ALGOL 58",
	"ALGOL 60",
	"ALGOL 68",
	"ALGOL W",
	"Alice",
	"Alma-0",
	"AmbientTalk",
	"Amiga E",
	"AMOS",
	"AMPL",
	"AngelScript",
	"Apex",
	"APL",
	"App Inventor for Android's visual block language",
	"AppleScript",
	"APT",
	"Arc",
	"ARexx",
	"Argus",
	"AspectJ",
	"Assembly language",
	"ATS",
	"Ateji PX",
	"AutoHotkey",
	"Autocoder",
	"AutoIt",
	"AutoLISP / Visual LISP",
	"Averest",
	"AWK",
	"Axum",
	"Active Server Pages",
	"B",
	"Babbage",
	"Ballerina",
	"Bash",
	"BASIC",
	"bc",
	"BCPL",
	"BeanShell",
	"Batch file (Windows/MSDOS)",
	"Bertrand",
	"BETA",
	"BLISS",
	"Blockly",
	"BlooP",
	"Boo",
	"Boomerang",
	"Bourne shell (including bash and ksh)",
	"BPEL",
	"Business Basic",
	"C",
	"C--",
	"C++ (C plus plus) – ISO/IEC 14882",
	"C*",
	"C# – ISO/IEC 23270",
	"C/AL",
	"Caché ObjectScript",
	"C Shell (csh)",
	"Caml",
	"Cayenne",
	"CDuce",
	"Cecil",
	"Cesil",
	"Céu",
	"Ceylon",
	"CFEngine",
	"Cg",
	"Ch",
	"Chapel",
	"Charity",
	"Charm",
	"CHILL",
	"CHIP-8",
	"chomski",
	"ChucK",
	"Cilk",
	"Citrine",
	"CL (IBM)",
	"Claire",
	"Clarion",
	"Clean",
	"Clipper",
	"CLIPS",
	"CLIST",
	"Clojure",
	"CLU",
	"CMS-2",
	"COBOL – ISO/IEC 1989",
	"CobolScript – COBOL Scripting language",
	"Cobra",
	"CoffeeScript",
	"ColdFusion",
	"COMAL",
	"Combined Programming Language (CPL)",
	"COMIT",
	"Common Intermediate Language (CIL)",
	"Common Lisp (also known as CL)",
	"COMPASS",
	"Component Pascal",
	"Constraint Handling Rules (CHR)",
	"COMTRAN",
	"Cool",
	"Coq",
	"Coral 66",
	"CorVision",
	"COWSEL",
	"CPL",
	"Cryptol",
	"Crystal",
	"Csound",
	"CSP",
	"Cuneiform",
	"Curl",
	"Curry",
	"Cybil",
	"Cyclone",
	"Cython",
	"D",
	"DASL (Datapoint's Advanced Systems Language)",
	"Dart",
	"Darwin",
	"DataFlex",
	"Datalog",
	"DATATRIEVE",
	"dBase",
	"dc",
	"DCL",
	"DinkC",
	"DIBOL",
	"Dog",
	"Draco",
	"Dragon",
	"DRAKON",
	"Dylan",
	"DYNAMO",
	"DAX (Data Analysis Expressions)",
	"E",
	"Ease",
	"Easy PL/I",
	"EASYTRIEVE PLUS",
	"eC",
	"ECMAScript",
	"Edinburgh IMP",
	"EGL",
	"Eiffel",
	"ELAN",
	"Elixir",
	"Elm",
	"Emacs Lisp",
	"Emerald",
	"Epigram",
	"EPL (Easy Programming Language)",
	"EPL (Eltron Programming Language)",
	"Erlang",
	"es",
	"Escher",
	"ESPOL",
	"Esterel",
	"Etoys",
	"Euclid",
	"Euler",
	"Euphoria",
	"EusLisp Robot Programming Language",
	"CMS EXEC (EXEC)",
	"EXEC 2",
	"Executable UML",
	"Ezhil",
	"F",
	"F#",
	"F*",
	"Factor",
	"Fantom",
	"FAUST",
	"Fjölnir"
);
?>

<?php 
// Center all items horizontally
// The background needs to be or contain a dark blue
// Make the top 2 headers white
// Make the labels for inputs and the footer a red or pink
?>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>World Shipping, Inc.</title>



<!-- Mobile Devices Viewport Resset-->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- <meta name="viewport" content="initial-scale=1.0, user-scalable=1" /> -->





<link rel="alternate" type="application/rss+xml" title="World Shipping, Inc. RSS" href="https://www.worldshipping.com/feed/" />
<link rel="pingback" href="https://www.worldshipping.com/xmlrpc.php" />
<link rel="shortcut icon" type="image/x-icon" href="https://www.worldshipping.com/wp-content/uploads/2019/03/World-Shipping-Full-Color-Logo-RGB-150dpi-512x512-01.png" />

<!--[if lt IE 9]>
<script src="https://www.worldshipping.com/wp-content/themes/thestory/js/html5shiv.js"></script>
<![endif]-->

<link rel='dns-prefetch' href='//js.hs-scripts.com' />
<link rel='dns-prefetch' href='//www.youtube.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="World Shipping, Inc. &raquo; Feed" href="https://www.worldshipping.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="World Shipping, Inc. &raquo; Comments Feed" href="https://www.worldshipping.com/comments/feed/" />
	<script type="text/javascript">
	  window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.worldshipping.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.10"}};
	  !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
	</script>
	<style type="text/css">
img.wp-smiley,
img.emoji {
  display: inline !important;
  border: none !important;
  box-shadow: none !important;
  height: 1em !important;
  width: 1em !important;
  margin: 0 .07em !important;
  vertical-align: -0.1em !important;
  background: none !important;
  padding: 0 !important;
}
</style>
<link rel='stylesheet' id='contact-form-7-css'  href='https://www.worldshipping.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=4.4.2' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='//www.worldshipping.com/wp-content/plugins/woocommerce/assets/css/select2.css?ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='//www.worldshipping.com/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=2.4.12' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='//www.worldshipping.com/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=2.4.12' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='wp-pagenavi-css'  href='https://www.worldshipping.com/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<link rel='stylesheet' id='pexeto-font-0-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C400italic%2C700&#038;ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='pexeto-font-1-css'  href='https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;ver=4.9.10' type='text/css' media='all' />
<link rel='stylesheet' id='pexeto-fullpage-css-css'  href='https://www.worldshipping.com/wp-content/themes/thestory/css/fullpage.css?ver=1.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='pexeto-pretty-photo-css'  href='https://www.worldshipping.com/wp-content/themes/thestory/css/prettyPhoto.css?ver=1.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='pexeto-woocommerce-css'  href='https://www.worldshipping.com/wp-content/themes/thestory/css/woocommerce.css?ver=1.7.1' type='text/css' media='all' />
<link rel='stylesheet' id='pexeto-stylesheet-css'  href='https://www.worldshipping.com/wp-content/themes/thestory-child/style.css?ver=1.7.1' type='text/css' media='all' /><style id='pexeto-stylesheet-inline-css' type='text/css'>
button, .button , input[type="submit"], input[type="button"], 
				#submit, .left-arrow:hover,.right-arrow:hover, .ps-left-arrow:hover, 
				.ps-right-arrow:hover, .cs-arrows:hover,.nivo-nextNav:hover, .nivo-prevNav:hover,
				.scroll-to-top:hover, .services-icon .img-container, .services-thumbnail h3:after,
				.pg-pagination a.current, .pg-pagination a:hover, #content-container .wp-pagenavi span.current, 
				#content-container .wp-pagenavi a:hover, #blog-pagination a:hover,
				.pg-item h2:after, .pc-item h2:after, .ps-icon, .ps-left-arrow:hover, .ps-right-arrow:hover,
				.pc-next:hover, .pc-prev:hover, .pc-wrapper .icon-circle, .pg-item .icon-circle, .qg-img .icon-circle,
				.ts-arrow:hover, .section-light .section-title:before, .section-light2 .section-title:after,
				.section-light-bg .section-title:after, .section-dark .section-title:after,
				.woocommerce .widget_price_filter .ui-slider .ui-slider-range,
				.woocommerce-page .widget_price_filter .ui-slider .ui-slider-range, 
				.controlArrow.prev:hover,.controlArrow.next:hover, .pex-woo-cart-num,
				.woocommerce span.onsale, .woocommerce-page span.onsale.woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li span.current,
				.woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current,
				.woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current,
				.woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover,
				.woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover,
				.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:focus,
				.woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus,
				.pt-highlight .pt-title{background-color:#4a6ea7;}a, a:hover, .post-info a:hover, .read-more, .footer-widgets a:hover, .comment-info .reply,
				.comment-info .reply a, .comment-info, .post-title a:hover, .post-tags a, .format-aside aside a:hover,
				.testimonials-details a, .lp-title a:hover, .woocommerce .star-rating, .woocommerce-page .star-rating,
				.woocommerce .star-rating:before, .woocommerce-page .star-rating:before, .tabs .current a,
				#wp-calendar tbody td a, .widget_nav_menu li.current-menu-item > a, .archive-page a:hover{color:#4a6ea7;}.accordion-title.current, .read-more, .bypostauthor, .sticky,
				.pg-cat-filter a.current{border-color:#4a6ea7;}.pg-element-loading .icon-circle:after{border-top-color:#4a6ea7;}.header-wrapper, .pg-navigation, .mobile.page-template-template-fullscreen-slider-php #header, .mobile.page-template-template-fullscreen-slider-php .header-wrapper{background-color:#002d72;}.dark-header #header{background-color:rgba(74,110,167,0.7);}.fixed-header-scroll #header{background-color:rgba(74,110,167,0.95);}.nav-menu li.mega-menu-item > ul, .nav-menu ul ul li{background-color:#004b8d;}.mob-nav-menu{background-color:rgba(0,75,141,0.96);}#footer, #footer input[type=text], #footer input[type=password], 
				#footer textarea, #footer input[type=search]{background-color:#004b8d;}.footer-bottom{background-color:#4a6ea7;}.content h1,.content h2,.content h3,.content h4,.content h5,
			  .content h6, h1.page-heading, .post h1, 
			  h2.post-title a, .content-box h2, #portfolio-categories ul li,
			  .item-desc h4 a, .item-desc h4, .content table th, 
			  .post-title, .archive-page h2, .page-heading, .ps-title,
			  .tabs a {color:#004b8d;}.sidebar h1,.sidebar h2,.sidebar h3,.sidebar h4,.sidebar h5,
				.sidebar h6, .sidebar h1 a,.sidebar h2 a,.sidebar h3 a,.sidebar h4 a,.sidebar h5 a,
				.sidebar h6 a, .sidebar-post-wrapper h6 a, #comments h3, #portfolio-slider .pc-header h4,
				#comments h4, #portfolio-gallery .pc-header h4, .tax-product_cat.woocommerce .content-box>h1,
				.tax-product_tag.woocommerce .content-box>h1{color:#004b8d;}#logo-container img{width:190px; }.page-title-wrapper{min-height:150px; height:150px;}.large-header .page-title-wrapper{min-height:150px; height:150px;}
</style>
<!--[if lte IE 8]>
<link rel='stylesheet' id='pexeto-ie8-css'  href='https://www.worldshipping.com/wp-content/themes/thestory/css/style_ie8.css?ver=1.7.1' type='text/css' media='all' />
<![endif]-->
<!-- This site uses the Google Analytics by Yoast plugin v5.4.6 - Universal enabled - https://yoast.com/wordpress/plugins/google-analytics/ -->
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','__gaTracker');

  __gaTracker('create', 'UA-74446729-1', 'auto');
  __gaTracker('set', 'forceSSL', true);
  __gaTracker('require', 'displayfeatures');
  __gaTracker('require', 'linkid', 'linkid.js');
  __gaTracker('send','pageview');

</script>
<!-- / Google Analytics by Yoast -->
<script type='text/javascript' src='https://www.worldshipping.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://www.worldshipping.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='https://www.worldshipping.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.worldshipping.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.worldshipping.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.10" />
<meta name="generator" content="WooCommerce 2.4.12" />
<link rel="canonical" href="https://www.worldshipping.com/" />
<link rel='shortlink' href='https://www.worldshipping.com/' />
<link rel="alternate" type="application/json+oembed" href="https://www.worldshipping.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.worldshipping.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.worldshipping.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.worldshipping.com%2F&#038;format=xml" />
<!-- styles for Simple Google Map -->
<style type='text/css'>
#SGM {width:100%; height:300px;}
#SGM .infoWindow {line-height:13px; font-size:10px;}
#SGM input {margin:4px 4px 0 0; font-size:10px;}
#SGM input.text {border:solid 1px #ccc; background-color:#fff; padding:2px;}
</style>
<!-- end styles for Simple Google Map -->
<link rel="icon" href="https://www.worldshipping.com/wp-content/uploads/2019/03/cropped-World-Shipping-Full-Color-Logo-RGB-150dpi-512x512-01-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.worldshipping.com/wp-content/uploads/2019/03/cropped-World-Shipping-Full-Color-Logo-RGB-150dpi-512x512-01-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://www.worldshipping.com/wp-content/uploads/2019/03/cropped-World-Shipping-Full-Color-Logo-RGB-150dpi-512x512-01-180x180.png" />
<meta name="msapplication-TileImage" content="https://www.worldshipping.com/wp-content/uploads/2019/03/cropped-World-Shipping-Full-Color-Logo-RGB-150dpi-512x512-01-270x270.png" />

<style>
body{
 background-image: url("https://www.worldshipping.com/wp-content/uploads/2018/09/website-masthead-wsi-opt-1.jpg");
 height: 100%;
 text-align: center;

}
h1{
    background-color: white;
    width: 60%;
    margin-top: 20pt;
    margin-bottom: 20pt;
    margin-right: 20%;
    margin-left: 20%;
    border-radius: 3pt;
    padding: 20px;
    color: #526DA3;

}
h2{
    
    background-color: white;
    color: #526DA3;
    width: 50%;
    margin-right: 25%;
    margin-left: 25%;
    border-radius: 3pt;
    padding: 4px;

}
input{
	width: 10%;
    height: 20pt;
}
select{
	width: 10%;
    height: 20pt;
}
h3{
    background-color: #611434;
	color: white;
    width: 50%;
    margin-right: 25%;
    margin-left: 25%;
	margin-bottom: 10pt;
    border-radius: 3pt;
    padding: 4px;
}

.languages{
	margin: 20px;
	padding: 40px;
}
footer{
	position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
	padding: 20px;
    color: #611434;
    background-color: #FAF5F3;

}
</style>
<div class="header-wrapper" >
    
	<header id="header">
  <div class="section-boxed section-header">
		<div id="logo-container">
			<a href="https://www.worldshipping.com/"><img src="https://www.worldshipping.com/wp-content/uploads/2019/03/World-Shipping-Full-Color-Logo-CMYK-300dpi-e1552315515897.png" alt="World Shipping, Inc." /></a>
  </div>	

  
  <div class="mobile-nav">
	<span class="mob-nav-btn">Menu</span>
  </div>
   <nav class="navigation-container">
	<div id="menu" class="nav-menu">
	<ul id="menu-navigation" class="menu-ul"><li id="menu-item-2397" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-53 current_page_item menu-item-2397"><a href="https://www.worldshipping.com/">Home</a></li>
<li id="menu-item-35" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-35"><a href="https://www.worldshipping.com/about/">About</a>
<ul class="sub-menu">
<li id="menu-item-2339" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2339"><a href="https://www.worldshipping.com/about/">The World Group</a></li>
<li id="menu-item-2202" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2202"><a href="https://www.worldshipping.com/portfolio/vessel-agency-operations/">Vessel Operations</a></li>
<li id="menu-item-2731" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2731"><a href="https://www.worldshipping.com/portfolio/cruise-ship-agent/">Cruise Ship Agency</a></li>
<li id="menu-item-2193" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2193"><a href="https://www.worldshipping.com/accolades-articles/">Accolades &#038; Articles</a></li>
<li id="menu-item-2192" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2192"><a href="https://www.worldshipping.com/press-releases/">Press Releases</a></li>
</ul>
</li>
<li id="menu-item-43" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children mega-menu-item menu-item-43"><a href="https://www.worldshipping.com/services/">Services</a>
<ul class="sub-menu">
<li id="menu-item-2076" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2076"><a href="https://www.worldshipping.com/portfolio/vessel-agency-operations/">Vessel Operations</a></li>
<li id="menu-item-2067" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2067"><a href="https://www.worldshipping.com/portfolio/air-freight/">Air Freight</a></li>
<li id="menu-item-2068" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2068"><a href="https://www.worldshipping.com/portfolio/rail-freight/">Rail Freight</a></li>
<li id="menu-item-2070" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2070"><a href="https://www.worldshipping.com/portfolio/project-cargo/">Project Cargo</a></li>
<li id="menu-item-2730" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2730"><a href="https://www.worldshipping.com/portfolio/cruise-ship-agent/">Cruise Ship Agents</a></li>
<li id="menu-item-2066" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2066"><a href="https://www.worldshipping.com/portfolio/ocean-freight/">Ocean Freight</a></li>
<li id="menu-item-2073" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2073"><a href="https://www.worldshipping.com/portfolio/container-trucking/">Container Trucking</a></li>
<li id="menu-item-2351" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2351"><a href="https://www.worldshipping.com/portfolio/grain-forwarding/">Grain Forwarding</a></li>
<li id="menu-item-2075" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2075"><a href="https://www.worldshipping.com/portfolio/bulk-liquid-logistics/">Bulk Liquid Logistics</a></li>
<li id="menu-item-2064" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2064"><a href="https://www.worldshipping.com/portfolio/freight-forwarding/">Freight Forwarding</a></li>
<li id="menu-item-2071" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2071"><a href="https://www.worldshipping.com/portfolio/cross-dock-operations/">Cross-Dock Operations</a></li>
<li id="menu-item-2072" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2072"><a href="https://www.worldshipping.com/portfolio/transloading/">Transloading</a></li>
<li id="menu-item-2354" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2354"><a href="https://www.worldshipping.com/portfolio/dry-bulk-logistics/">Dry Bulk Logistics</a></li>
<li id="menu-item-2065" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2065"><a href="https://www.worldshipping.com/portfolio/customs-house-brokerage/">Customs House Brokerage</a></li>
<li id="menu-item-2074" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2074"><a href="https://www.worldshipping.com/portfolio/warehousing-distribution/">Warehousing &#038; Distribution</a></li>
<li id="menu-item-2069" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-2069"><a href="https://www.worldshipping.com/portfolio/break-bulk/">Break Bulk Logistics</a></li>
</ul>
</li>
<li id="menu-item-38" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-38"><a href="https://www.worldshipping.com/companies/">Companies</a>
<ul class="sub-menu">
<li id="menu-item-50" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-50"><a href="https://www.worldshipping.com/portfolio/world-shipping-inc/">World Shipping, Inc.</a></li>
<li id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-45"><a href="https://www.worldshipping.com/portfolio/containerport-group/">ContainerPort Group</a></li>
<li id="menu-item-48" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-48"><a href="https://www.worldshipping.com/portfolio/uwl/">UWL</a></li>
<li id="menu-item-49" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-49"><a href="https://www.worldshipping.com/portfolio/world-distribution-services/">World Distribution Services</a></li>
<li id="menu-item-47" class="menu-item menu-item-type-post_type menu-item-object-portfolio menu-item-47"><a href="https://www.worldshipping.com/portfolio/tankbag/">TankBag</a></li>
</ul>
</li>
<li id="menu-item-40" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-40"><a href="https://www.worldshipping.com/innovation/">Innovation</a></li>
<li id="menu-item-36" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-36"><a href="https://www.worldshipping.com/blog/">Blog</a></li>
<li id="menu-item-2567" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2567"><a href="https://recruiting.ultipro.com/WOR1017/JobBoard/258f2717-583b-e122-22b3-192fc0807b2d" onclick="__gaTracker('send', 'event', 'outbound-widget', 'https://recruiting.ultipro.com/WOR1017/JobBoard/258f2717-583b-e122-22b3-192fc0807b2d', 'Careers');">Careers</a></li>
<li id="menu-item-39" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-39"><a href="https://www.worldshipping.com/contact/">Contact</a></li>
</ul>				</div>
	
	<div class="header-buttons">
	<div class="pex-woo-cart-btn-wrap"><div class="pex-woo-cart-btn"><div class="pex-woo-cart-num" data-num="0">0</div></div><div class="pex-woo-cart-holder"><div class="pex-woo-cart">

<ul class="cart_list product_list_widget ">


<li class="empty">No products in the cart.</li>


</ul>


</div></div></div><div class="header-search">
		<div class="search-wrapper">
<form role="search" method="get" class="searchform" action="https://www.worldshipping.com" >
<input type="text" name="s" class="search-input placeholder"  placeholder="Search" />
<input type="submit" value="" class="search-button"/>
</form>
</div>
	  <a href="#" class="header-search-btn">Search</a></div>
	  <div class="social-profiles"><ul class="social-icons">
<li>
<a href="https://www.linkedin.com/company/9426555/" target="_blank"  title="LinkedIn">
  <div>
	<img src="https://www.worldshipping.com/wp-content/themes/thestory/images/icons_white/linkedin.png" alt="" />
  </div>
</a>
</li>
<li>
<a href="https://plus.google.com/114716131978771157436" target="_blank"  title="Google+">
  <div>
	<img src="https://www.worldshipping.com/wp-content/themes/thestory/images/icons_white/googleplus.png" alt="" />
  </div>
</a>
</li>
</ul></div>
	  </div>
  </nav>

	
  <div class="clear"></div>       
  <div id="navigation-line"></div>
</div>
</header>

</div>
    <section>
        <div class="container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <h1> My Favorite Programming Languages </h1>
	  
                        <h2> By: Melinda Russell - June 6, 2019</h2>
                </div>
            </div>
			<br>
            <div class="row time">
                <div class="col-lg-12">
                        <?php
                        // Display the time of the page loading 
                        // Format: date (Month/Day/Year) and time (Hour:Minutes:Seconds)
                        // Disable modifying the text box after loading
                        date_default_timezone_set("America/New_York");
                        $dateTime = date("m/d/Y h:i:s");
                        
                        echo '<h3>Current Date and Time:</h3>';
                        echo '<input style="opacity: 1" type="text" value="'.$dateTime.'" disabled >';
                        ?>
                </div>
            </div>
            <div class="row languages">
                <div class="col-lg-12">
                        <?php
                        // Fill in the below Drop Down with above array data
                        ?>
                        <h3>Favorite Programming Language:</h3>
                        <select>
                        
                        <?php
                        foreach($programmingLanguages as $key => $value):
                            echo '<option value="'.$key.'">'.$value.'</option>';
                        endforeach;
                                            
                        ?>						
                                                    
                        </select>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <footer>&#169; 2019 World Shipping, Inc.</footer>
