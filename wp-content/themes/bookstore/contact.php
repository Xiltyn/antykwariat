<?php
/**
 * Template Name: Contact
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package antykwariat
 */

get_header();
?>

		<section class="contact-page">

			<div class="contact-content">
				<div class="left-col">
					<div class="credentials">
						<h3>
							Kontakt
						</h3>
						<ul class="credentials-list">
							<li class="list-el phone">
								<?php the_field('phone_number'); ?>
							</li>
							<li class="list-el email">
								<?php the_field('email'); ?>
							</li>
							<li class="list-el address">
								<?php the_field('address'); ?>
							</li>
							<li class="list-el details">
								<?php the_field('extra_info'); ?>
							</li>
						</ul>
					</div>
					<div class="who-are-we">
						<h3>
							Kim jesteśmy
						</h3>
						<p>
							<?php the_field('who_are_we_description'); ?>
						</p>
					</div>
				</div>
				<div class="right-col">
					<div class="map-wrapper">
						<h3>
							<?php the_field('our_shops_header'); ?>
						</h3>
						<p>
						<?php the_field('our_shops_description'); ?>
					</p>
						<div class="mapouter" style="margin-bottom:16px"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2561.0174938827045!2d19.929408415350217!3d50.06723402278451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b0890555cff%3A0x9b09a7fc56ea1b67!2sStefana+Batorego%2C+30-001+Krak%C3%B3w!5e0!3m2!1sen!2spl!4v1537997288400" width="560" height="200" frameborder="0" style="border:0" allowfullscreen></iframe><a href="https://www.pureblack.de/google-maps/">pureblack.de</a></div><style>.mapouter{text-align:right;height:130px;width:516px;}.gmap_canvas {overflow:hidden;background:none!important;height:130px;width:516px;}</style></div>
						<div class="mapouter"><div class="gmap_canvas"><iframe width="516" height="130" id="gmap_canvas2" src="https://maps.google.com/maps?q=pauli%C5%84ska%2014%2C%20krak%C3%B3w%2C%20POLAND&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de/google-maps/">pureblack.de</a></div><style>.mapouter{text-align:right;height:130px;width:516px;}.gmap_canvas {overflow:hidden;background:none!important;height:130px;width:516px;}</style></div>
					</div>
				</div>
			</div>

			<svg class="bg-shape" width="1269px" height="792px" viewBox="0 0 1269 792" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
					<defs>
							<rect id="path-1" x="0" y="0" width="1440" height="810"></rect>
							<linearGradient x1="53.9474055%" y1="59.7472479%" x2="24.3209615%" y2="20.9683165%" id="linearGradient-3">
									<stop stop-color="#FF297C" stop-opacity="0.65978827" offset="0%"></stop>
									<stop stop-color="#7860BE" stop-opacity="0.992799569" offset="100%"></stop>
									<stop stop-color="#7860C0" offset="100%"></stop>
							</linearGradient>
					</defs>
					<g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<g id="Desktop-HD-::-Contact" transform="translate(0.000000, -18.000000)">
									<g id="Background-shape">
											<mask id="mask-2" fill="white">
													<use xlink:href="#path-1"></use>
											</mask>
											<g id="Mask"></g>
											<g mask="url(#mask-2)">
													<g transform="translate(-18.000000, 18.000000)">
															<path d="M1286.80517,0 C1286.80517,0 1234.96578,37.1006927 1063.7486,37.1006927 C892.531426,37.1006927 343.510881,51.1995331 317.658496,182.833155 C291.806111,314.466777 641.398784,215.745895 550.192799,332.672551 C458.986814,449.599207 774.410405,438.415401 690.861673,517.667002 C607.312941,596.918602 600.044388,670.074993 611.526707,696.246904 C623.009025,722.418815 657.932892,766.701183 690.861673,793.777945 C723.790454,820.854706 695.828926,849.102032 695.828926,849.102032 L5.60252533,856.873746 L2,15.9374385 L1058.19934,10.5648863 L1286.80517,0 Z" id="Mask" fill="#232A2A"></path>
															<path d="M610.157114,692.622738 C610.576114,693.915097 611.034159,695.124228 611.526707,696.246904 C620.694868,717.144103 644.807881,749.587387 670.9173,775.599215 C676.927687,781.382429 683.097437,786.905007 689.293596,792 C690.825576,793.259721 692.049222,794.460255 692.989907,795.604383 C722.548145,822.109712 695.828926,849.102032 695.828926,849.102032 L5.60252533,856.873746 L5.43945926,818.809287 L0.688050201,818.809287 L0.688050201,19.0416152 L2.01323381,19.0266035 L2,15.9374385 L496.977856,13.4196426 L1055.9458,7.08765179 C1055.9458,7.08765179 1147.89349,-8.26704986 1095.04965,7.08765179 C1092.71671,7.76552721 1090.86482,8.4437803 1089.44132,9.12105652 L1286.80517,0 C1286.80517,0 1250.10596,26.2650844 1136.47793,34.5967881 C1132.71072,36.7397072 1113.52754,37.9908277 1064.95923,37.9908277 C992.396731,37.9908277 848.70627,40.3632395 705.241523,53.1170463 C517.302411,70.9190284 332.402126,107.762424 317.658496,182.833155 C291.806111,314.466777 641.398784,215.745895 550.192799,332.672551 C458.986814,449.599207 774.410405,438.415401 690.861673,517.667002 C615.026601,589.601676 602.03674,656.51467 608.871151,687.828615 C601.110299,655.015619 605.554545,589.111946 678.828926,519.606259 C762.377658,440.354659 441.986814,449.599207 533.192799,332.672551 C624.398784,215.745895 274.806111,314.466777 300.658496,182.833155 C315.55454,106.98637 510.189421,70.4568936 705.241523,53.1170463 C846.846547,39.703925 990.17668,37.1006927 1063.7486,37.1006927 C1090.90501,37.1006927 1115.05829,36.1673695 1136.47793,34.5967881 C1145.4049,29.5188151 1067.76727,19.4331686 1089.44132,9.12105652 L1058.19934,10.5648863 L496.977856,13.4196426 L2.01323381,19.0266035 L5.43945926,818.809287 L612.699561,818.809287 C612.699561,818.809287 712.268548,819.052452 692.989907,795.604383 C692.310559,794.995202 691.601484,794.386278 690.861673,793.777945 C684.225176,788.320869 677.50764,782.164922 670.9173,775.599215 C644.986141,750.648171 622.021269,720.84559 612.699561,699.598408 C611.805215,697.559907 610.944512,695.227798 610.157114,692.622738 Z" id="Combined-Shape" fill="url(#linearGradient-3)"></path>
													</g>
											</g>
									</g>
							</g>
					</g>
			</svg>

		</section>

<?php

get_footer();
