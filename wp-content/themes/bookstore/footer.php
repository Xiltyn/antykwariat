<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package antykwariat
 */

?>

<footer class="footer">

<div class="content">
	<div class="left site-info">
		<ul class="menu">
			<h4>Mapa Strony</h4>
			<li class="small-text">Sklep</li>
			<li class="small-text">Strona Główna</li>
			<li class="small-text">O Nas</li>
			<li class="small-text">Kontakt</li>
		</ul>
		<ul class="social-links">
			<h4>Śledź nas na</h4>
			<li class="small-text">Facebook</li>
			<li class="small-text">Twitter</li>
			<li class="small-text">Instagram</li>
		</ul>
		<ul class="address">
			<h4>Tu jesteśmy</h4>
			<li class="small-text">4271 Delta Parkways</li>
			<li class="small-text">23-450 Deangeloland</li>
			<li class="small-text">Monaco</li>
		</ul>
	</div>
	<div class="right socials">

	</div>
</div>

<svg class="bg-shape" width="770px" height="231px" viewBox="0 0 770 231" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
	<defs>
		<linearGradient x1="23.9703475%" y1="76.4068709%" x2="81.9751205%" y2="100%" id="linearGradient-1">
			<stop stop-color="#C5243F" offset="0%"></stop>
			<stop stop-color="#7456CF" offset="100%"></stop>
		</linearGradient>
	</defs>
	<g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
		<g id="Desktop-HD-::-Footer" transform="translate(-670.000000, 0.000000)">
			<g id="mask">
				<g transform="translate(0.000000, -1129.000000)">
					<path d="M1489.39137,107.773585 L1501.98456,108.691146 L1710.03142,427.580684 L1775.18391,1076.87524 L1551.69051,1346.19799 C1551.69051,1346.19799 1048.58527,1437.37184 684.759003,1140.67694 C674.851154,1132.59723 665.516399,1124.65246 656.72957,1116.83625 C657.072022,1117.11631 657.415167,1117.39654 657.759003,1117.67694 C1021.58527,1414.37184 1524.69051,1323.19799 1524.69051,1323.19799 L1748.18391,1053.87524 L1683.03142,404.580684 L1489.39137,107.773585 Z M591.807997,377.975341 C441.731037,267.621509 123.571851,271.37681 38.3658358,174.35834 C158.172055,253.852864 467.952356,254.587121 591.807909,377.975253 Z" id="Combined-Shape" fill="url(#linearGradient-1)"></path>
					<path d="M0,104.901427 C0,293.973358 583.780479,217.449758 648.333641,466.344594 C712.886802,715.239429 303.932739,829.982033 667.759003,1126.67694 C1031.58527,1423.37184 1534.69051,1332.19799 1534.69051,1332.19799 L1758.18391,1062.87524 L1693.03142,413.580684 L1484.98456,94.6911462 L735.231083,40.0628398 C735.231083,40.0628398 1.1616215e-14,-84.1705035 0,104.901427 Z" id="Path-6-Copy-2" fill="#FFFFFF"></path>
				</g>
			</g>
		</g>
	</g>
</svg>
</footer>

<!-- COMICS END -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<!-- <script>
(function ( b, o, i, l, e, r ) {
	b.GoogleAnalyticsObject = l;
	b[ l ] || (b[ l ] =
		function () {(b[ l ].q = b[ l ].q || []).push( arguments )});
	b[ l ].l = +new Date;
	e = o.createElement( i );
	r = o.getElementsByTagName( i )[ 0 ];
	e.src = 'https://www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore( e, r )
}( window, document, 'script', 'ga' ));
ga( 'create', 'UA-XXXXX-X' );
ga( 'send', 'pageview' );
</script> -->

<?php wp_footer() ?>

<!-- build:js scripts/main.js -->
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<!-- endbuild -->
</body>
</html>
