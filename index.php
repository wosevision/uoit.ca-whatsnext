
<?php
	require_once('inc/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Thanks for applying to UOIT!</title>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/powertip.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" href="css/main.css">
	<script type="text/javascript" src="js/modernizr.min.js"></script>
	<?php if (isset($_GET['level']) && $_GET['level'] == '105') { ?>
		<script type="text/javascript">
			// 105 CALENDAR BUTTON EVENTS
	    var eventData = [
	        {title: 'UOIT Closed',start: new Date('December 24, 2015 00:00'),duration: 120,end: new Date('January 4, 2016 23:00'),address: 'All UOIT buildings',description: 'The university is closed for the holidays and will reopen on January 5.'},
	        {title: 'University application deadline',start: new Date('January 13, 2016 00:00'),duration: 120,end: new Date('January 13, 2016 23:00'),address: 'Canada',description: 'Deadline for Ontario secondary school students to submit completed applications to the Ontario Universities\' Application Centre (OUAC).'},
	        {title: 'UOIT Winter Open House',start: new Date('February 27, 2016 09:00'),duration: 120,end: new Date('February 27, 2016 14:00'),address: 'UOIT, both locations',description: 'Connect with deans, faculty, staff and current students as you discover the many opportunities available at UOIT. Tours and information sessions will be held at both campus locations.'},
	        {title: 'Scholarship deadline',start: new Date('February 29, 2016 00:00'),duration: 120,end: new Date('February 29, 2016 23:00'),address: 'UOIT',description: 'Deadline to apply for the following scholarships: Chancellor\'s, President\'s and Founder\'s.'},
	        {title: 'UOIT March Break tours',start: new Date('March 14, 2016 00:00'),duration: 120,end: new Date('March 18, 2016 23:00'),address: 'UOIT, both locations',description: 'Visit http://uoit.ca/tours for information or to register'},
	        {title: 'FIRST Robotics Canada scholarship application deadline',start: new Date('March 31, 2016 00:00'),duration: 120,end: new Date('March 31, 2016 23:00'),address: 'UOIT',description: 'Visit http://uoit.ca/scholarships for information or to apply'},
	        {title: 'Response from UOIT deadline',start: new Date('May 27, 2016 00:00'),duration: 120,end: new Date('May 27, 2016 23:00'),address: 'Canada',description: 'Latest date secondary school applicants should expect one of the following responses from UOIT: offer of admission, refusal, position on a wait list.'},
	        {title: 'Residence application deadline',start: new Date('June 1, 2016 00:00'),duration: 120,end: new Date('June 1, 2016 23:00'),address: 'UOIT',description: 'Residence applications must be received by this date to guarantee a spot in residence.'},
	        {title: 'Tuition deposit deadline',start: new Date('June 15, 2016 00:00'),duration: 120,end: new Date('June 15, 2016 23:00'),address: 'UOIT',description: 'Deadline to submit tuition deposit; applicants must first accept their offers through OUAC before they can pay their deposits.'}
	    ];
		</script>
	<?php } else { ?>
		<script type="text/javascript">
			// 101 CALENDAR BUTTON EVENTS
	    var eventData = [
	        {title: 'UOIT Closed',start: new Date('December 24, 2015 00:00'),duration: 120,end: new Date('January 4, 2016 23:00'),address: 'All UOIT buildings',description: 'The university is closed for the holidays and will reopen on January 5.'},
	        {title: 'University application deadline',start: new Date('January 13, 2016 00:00'),duration: 120,end: new Date('January 13, 2016 23:00'),address: 'Canada',description: 'Deadline for Ontario secondary school students to submit completed applications to the Ontario Universities\' Application Centre (OUAC).'},
	        {title: 'UOIT Winter Open House',start: new Date('February 27, 2016 09:00'),duration: 120,end: new Date('February 27, 2016 14:00'),address: 'UOIT, both locations',description: 'Connect with deans, faculty, staff and current students as you discover the many opportunities available at UOIT. Tours and information sessions will be held at both campus locations.'},
	        {title: 'Scholarship deadline',start: new Date('February 29, 2016 00:00'),duration: 120,end: new Date('February 29, 2016 23:00'),address: 'UOIT',description: 'Deadline to apply for the following scholarships: Chancellor\'s, President\'s and Founder\'s.'},
	        {title: 'UOIT March Break tours',start: new Date('March 14, 2016 00:00'),duration: 120,end: new Date('March 18, 2016 23:00'),address: 'UOIT, both locations',description: 'Visit http://uoit.ca/tours for information or to register'},
	        {title: 'FIRST Robotics Canada scholarship application deadline',start: new Date('March 31, 2016 00:00'),duration: 120,end: new Date('March 31, 2016 23:00'),address: 'UOIT',description: 'Visit http://uoit.ca/scholarships for information or to apply'},
	        {title: 'Response from UOIT deadline',start: new Date('May 27, 2016 00:00'),duration: 120,end: new Date('May 27, 2016 23:00'),address: 'Canada',description: 'Latest date secondary school applicants should expect one of the following responses from UOIT: offer of admission, refusal, position on a wait list.'},
	        {title: 'University offer acceptance deadline',start: new Date('June 1, 2016 00:00'),duration: 120,end: new Date('June 1, 2016 23:00'),address: 'UOIT',description: 'Deadline for secondary school applicants to accept their offers of admission. Residence applications must be received by this date to guarantee a spot in residence.'},
	        {title: 'Tuition deposit deadline',start: new Date('June 15, 2016 00:00'),duration: 120,end: new Date('June 15, 2016 23:00'),address: 'UOIT',description: 'Deadline to submit tuition deposit; applicants must first accept their offers through OUAC before they can pay their deposits.'}
	    ];
		</script>
	<?php } ?>
</head>

<body>
	<script>
		// Analytics
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	  ga('create', 'UA-60683118-9', 'auto');
	  ga('send', 'pageview');
	</script>

	<a href="javascript:;" id="accessInfo" onclick="ga('send','event','menu','open','open_accessibility',true);" onkeyup="ga('send','event','menu','open','open_accessibility',true);">
		<span class="ion-ios-body"></span> &nbsp; Read accessibility info</span>
	</a>

	<nav id="controls" role="navigation">
		<label for="navcheck" tabindex="-1" onclick="ga('send','event','menu','open','open_navigation',true);">
			<span class="icon ion-android-apps navicon" title="Navigation" ></span>
		</label>
		<input type="checkbox" id="navcheck" aria-hidden="true" />
		<ul id="nav">
			<li><img src="img/sc_1_lr.png" alt="Page one" title="Skip to page one" class="vertCenter" /></li>
			<li><img src="img/sc_2_lr.png" alt="Page two" title="Skip to page two" class="vertCenter" /></li>
			<li><img src="img/sc_3_lr.png" alt="Page three" title="Skip to page three" class="vertCenter" /></li>
			<li><img src="img/sc_4_lr.png" alt="Page four" title="Skip to page four" class="vertCenter" /></li>
			<li><img src="img/sc_5_lr.png" alt="Page five" title="Skip to page five" class="vertCenter" /></li>
			<li><img src="img/sc_6_lr.png" alt="Page six" title="Skip to page six" class="vertCenter" /></li>
			<li><img src="img/sc_7_lr.png" alt="Page seven" title="Skip to page seven" class="vertCenter" /></li>
		</ul>
	</nav>

	<div id="home">
		<img src="img/stereo-blur.jpg" role="presentation" id="inner" style="transform: translateY(-50%) translateX(-50%) rotate(-0deg);">
		<div id="main">
			<section class="slide" id="page-one">
				<article id="mainTitle" class="hider">
					<img src="img/hunter1.png" alt="Thanks for applying!">
					<h1 class="horzCenter">Thanks for<br>applying<?php echo isset($_GET['name']) ? ', '.$_GET['name'] : ''; ?>!</h1>
				</article>
				<article class="panel rightCurve">
					<div class="vertCenter">
						<h2>Choosing a university is a big decision and we are thrilled you are considering us.</h2>
<!-- 				<p>
							The application you submitted through the Ontario Universities’ Application Centre (OUAC) indicates you are currently:
							<br>
							<strong class="studentType">
								<?php
								/*
									if ( isset($_GET['level']) ) {
										if ($_GET['level'] == 105) {
											echo '<span class="ion-close-circled"></span>&nbsp;not attending an Ontario high school';
										} else if ($_GET['level'] == 101) {
											echo '<span class="ion-checkmark-circled"></span>&nbsp;attending an Ontario high school';
										} else {
											echo '<span class="ion-paper-airplane"></span>&nbsp;just passing through';
										}
									} else {
										echo (isset($_GET['name']) && $_GET['name'] == 'wose') ? '<span class="ion-settings"></span>&nbsp;developing this website' : '<span class="ion-paper-airplane"></span>&nbsp;just passing through';
									}
								*/
								?>
							</strong>
						</p> -->
						
						<div class="notice">
							<p>You should have received an email from us containing your UOIT student number <a href="javascript:;" class="whiter tooltipTop" title="Your UOIT Student Number is a nine-digit number beginning with 100. This is different than your OUAC number."><strong>(100xxxxxx)</strong></a> and confirming the program(s) you have applied to.</p>
							<span class="ion-asterisk"></span>
						</div>
						<p>If you have not received this email, ensure the correct email address is listed on your Ontario Universities’ Application Centre (OUAC) application <span class="ion-information-circled tooltipTop" id="tip-ouac" tabindex="0"></span> &nbsp;or contact us at <?php echo (isset($_GET['level']) && $_GET['level'] == '105') ? '<a href="mailto:myapplication@uoit.ca">myapplication@uoit.ca</a>' : '<a href="mailto:futurestudent@uoit.ca">futurestudent@uoit.ca</a>'; ?>.</p>
						<button id="cta_btn_pg1" class="button nextButton righter" onclick="ga('send','event','button','click','click_cta_btn_pg1');" data-anchor="#page-two">So what's next?</button>
					</div>
				</article>
				<div class="edge" aria-hidden="true">
					<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
							 viewPort='0 0 1000 1000'>
			         <!-- put some content in here -->
			         <path d="M0,1200 Q100,800 0,-200z" fill="rgba(255,255,255,0.9)" role="presentation" />
			    </svg>
				</div>
			</section>
			<section class="slide" id="page-two">
				<article class="panel blue">
					<div class="vertCenter">
						<h2>View the status of your application</h2>
						<p class="bigger">To view your application status and any outstanding documentation required, follow these steps:</p>
					</div>
					<span class="ion-clipboard"></span>
				</article>
				<article>
					<ol class="blockier hider">
						<li>Visit the <a href="http://www.uoit.ca/mycampus/" target="_blank"><strong>Admissions portal login page</strong></a>. <span class="ion-information-circled tooltipBtm" id="tip-helpdesk" tabindex="0"></span></li>
						<li><strong>Log in</strong> using your student number as the username and your date of birth as the password (MMDDYY format). <span class="ion-information-circled tooltipTop" title="Your UOIT Student Number is a nine-digit number beginning with 100. This is different than your OUAC number." tabindex="0"></span></li>
						<li>Select the <strong>UOIT Applicant</strong> tab at the top left of your screen.</li>
						<li>Select the link to <strong>access administrative services</strong>.</li>
						<li>Select the <strong>UOIT Admissions</strong> link.</li>
						<li>Select the <strong>Application status</strong> link.</li>
						<li class="blockNote">If you have any questions about your application, contact us at <a href="tel:9057213190">905.721.3190</a>, <?php echo (isset($_GET['level']) && $_GET['level'] == '105') ? '<a href="mailto:myapplication@uoit.ca">myapplication@uoit.ca</a>' : '<a href="mailto:futurestudent@uoit.ca">futurestudent@uoit.ca</a>'; ?> or <a href="http://uoit.ca/chat" target="_blank">chat with us</a> online.</li>
					</ol>
				</article>
			</section>
			<section class="slide" id="page-three">
				<div id="hunterWrap" class="hider">
					<img src="img/hunter2.png" alt="UOIT mascot, Hunter">
				</div>
				<section class="hider" id="floatWrap">
					<div class="panel floater totCenter">
						<h2>Important Dates and Deadlines</h2>
						
						<?php
							if (isset($_GET['level']) && $_GET['level'] == '105') {
								include('inc/105cal.php');
							} else {
								include('inc/101cal.php');
							}
						?>

						<button id="cta_btn_pg3" class="button nextButton blockButton" onclick="ga('send','event','button','click','click_cta_btn_pg3');" data-anchor="#page-four">Tour the campus &nbsp;<span class="ion-chevron-right"></span></button>
					</div>
				</section>
			</section>

			<section class="slide" id="page-four">
				<div class="panel gallery horzCenter">
					<div id="gallery" class="grid">
						<div class="gridBox galleryHead">
							<h2>Tour UOIT</h2>
							<h3>The best way to experience UOIT is to visit campus!</h3>
							<hr/>
							<p>On a campus tour, our student tour ambassadors will take you on an exciting tour of our diverse and award-winning campus locations. You will have the opportunity to see buildings, classrooms, residence and student services. <a href="http://uoit.ca/main/future-students/undergraduate/campus-tours-and-events/book-a-campus-tour.php" title="Click to schedule a tour of UOIT" target="_blank">Schedule your campus tour</a>.</p>
							<div class="notice">
								<p>You can also explore our campus from home with a <strong>virtual tour!</strong></p>
								<span class="ion-map"></span>
							</div>
							<a href="http://uoit.ca/virtualtour" class="button blockButton" target="_blank">Visit virtual tour</a>
						</div>
					  <div class="gridBox"><img src="img/gallery/uoit-2.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-6.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-3.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-8.jpg" alt="" width="100%"></div> <!-- *** -->
					  <div class="gridBox"><img src="img/gallery/uoit-1.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-4.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-5.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-7.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-9.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-12.jpg" alt="" width="100%"></div> <!-- *** -->
					  <div class="gridBox"><img src="img/gallery/uoit-10.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><img src="img/gallery/uoit-11.jpg" alt="" width="100%"></div> <!-- *** -->
					  <div class="gridBox"><img src="img/gallery/uoit-13.jpg" alt="" width="100%"></div>
					  <div class="gridBox"><button id="cta_btn_pg4" class="button blockButton nextButton" onclick="ga('send','event','button','click','click_cta_btn_pg4');" data-anchor="#page-five">Tweet to UOIT! &nbsp;<span class="ion-chevron-right"></span></button></div>
					</div>
				</div>
				<div id="hunterTour">
					<!-- <span class="ion-chatbox-working tooltipTop" id="tip-tours"></span> -->
					<img src="img/hunter4.png" alt="Virtual tours">
				</div>
			</section>

			<section class="slide" id="page-five">
				<div class="panel tweetBox totCenter">
					<h2>Tweet to UOIT!</h2>
					<div class="tweetWrap">
						<textarea id="tweetInput" tabindex="-1">Application to the University of Ontario Institute of Technology: CHECK!&#13;#WhatsnextUOIT</textarea>
					</div>
					<button id="tweeter" class="button" onclick="ga('send','event','button','click','click_tweetbutton');">Tweet it!</button>
					<button id="cta_btn_pg5" class="button clearButton nextButton righter" onclick="ga('send','event','button','click','click_cta_btn_pg5');" data-anchor="#page-six">Join the conversation &nbsp;<span class="ion-chevron-right"></span></button>
				</div>
			</section>

			<section class="slide" id="page-six">
				<div class="panel gallery horzCenter">
				<div class="sectionHead">
					<h2>Follow our Student Speak Twitter account <nobr>@UOITstudentblog!</nobr></h2>
					<p>Experience UOIT with our students as they blog about academic life, campus events and offer up great advice along the way.</p>
				</div>
					<div id="tweetGrid" class="grid">
					</div>

					<?php //renderFeed(); ?>
				</div>
			</section>

			<section class="slide" id="page-seven">
				<article class="panel leftCurve">
					<div class="vertCenter addressWrap">
						<h2>What's next?</h2>
						<p>Admissions updates will be sent to the email address associated with your OUAC application and posted to your <a href="http://uoit.ca/mycampus/" title="Go to MyCampus">UOIT admissions portal</a>. Please check both regularly.</p>
						<p>If you have any questions about your application or UOIT programs and services, please contact us. We’re here to help!</p>
						<div class="notice">
							<address>
								<strong>Office of the Registrar - Admissions</strong><br/>
								University of Ontario Institute of Technology<br/>
								2000 Simcoe Street North<br/>
								Oshawa, Ontario L1H 7K4
							</address>
							<span class="ion-location"></span>
						</div>
						<div class="notice telephone">
							<p>
								<span class="ion-ios-telephone"></span> &nbsp;&nbsp;<a href="tel:9057213190">905.721.3190</a><br/>
								<span class="ion-email"></span> &nbsp;&nbsp;<?php echo (isset($_GET['level']) && $_GET['level'] == '105') ? '<a href="mailto:myapplication@uoit.ca">myapplication@uoit.ca</a>' : '<a href="mailto:futurestudent@uoit.ca">futurestudent@uoit.ca</a>'; ?>
							</p>
						</div>
						<p class="centerer">
							<a href="http://admissions.uoit.ca/uoit-admissions-chat-portal.php?utm_source=redirect&utm_medium=web&utm_campaign=chat" class="button clearButton smallButton">Chat with us online!</a>
							<a href="http://uoit.ca/main/future-students/undergraduate/campus-tours-and-events/book-a-campus-tour.php?utm_source=redirect&utm_medium=web&utm_campaign=tours" class="button clearButton smallButton">Campus tours</a>
							<a href="http://uoit.ca/virtualtour/" class="button clearButton smallButton">Virtual tour</a>
						</p>
						<p>Accepting your offer of admission is only the beginning. At UOIT, you’ll gain the knowledge and skills demanded by employers upon graduation. You’ll also have opportunities for experiential learning and to get involved in a dynamic campus environment. As a UOIT graduate, you’ll find that the answers to “What’s next?” are endless. We look forward to you joining our campus community!</p>
					</div>
				</article>
<!-- 				<div class="edgeL" aria-hidden="true">
					<svg xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'
							 viewPort='0 0 1000 1000'>
			         <path d="M0,1200 Q100,800 0,-200z" fill="rgba(255,255,255,0.9)" role="presentation" />
			    </svg>
				</div> -->
			</section>

		</div>
	</div>

	<div id="modal" class="totCenter" aria-hidden="true" aria-labelledby="modalTitle" aria-describedby="modalDescription" role="dialog">
		<button id="modalCloseButton" class="modalCloseButton" title="Close window"><span class="ion-close-circled"></span><span class="sr-label">Pressing return or escape will close this dialog and return focus to the main content </span></button>
		<div class="modalContent">
				<h2 id="modalTitle">Accessibility Info</h2>
				<p id="modalDescription">Building an inclusive and accessible environment is of utmost importance to UOIT. Here are some accessibility tips to make using this site more enjoyable:</p>
				<ul>
					<li>
						This site can be navigated fully using the <kbd title="Tab key">↹ tab</kbd> key – the focus order goes as follows:
						<ol>
							<li>The navigation arrows that move the pages forward and back</li>
							<li>The current page in its entirety</li>
							<li>The elements on the current page, in their natural order</li>
						</ol>
					</li>
					<li>Placing focus on the current page (for instance, by clicking anywhere in the screen outside this dialog) allows the pages to be browsed back and forth naturally with the arrow keys (<kbd title="Left arrow key">◀</kbd> and <kbd title="Right arrow key">▶</kbd>)</li>
					<li>Placing tab focus on one of the navigation arrows allows page skipping with the <kbd title="Return (enter) key">↩ return</kbd> key</li>
					<li>This information can be opened from anywhere on the site by using <kbd title="Control key">Ctrl</kbd>+<kbd title="Letter I key">i</kbd> (or <kbd title="Command key">⌘</kbd>+<kbd title="Letter I key">i</kbd>)</li>
					<li>Close this dialog window by pressing the <kbd title="Escape key">esc ⎋</kbd> key; your tab focus will be returned to the last place it was focused</li>
				</ul>
		</div>
	</div>
	<div id="modalOverlay" tabindex="-1"></div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/ouical.min.js"></script>
<script type="text/javascript" src="js/powertip.min.js"></script>
<script type="text/javascript" src="js/focus.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</script>
</body>
</html>