<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title>Welcome to Jobster's Online !!</title>
	<script src = "JS/jquery-1.8.2.min.js"></script>
    <script src = "JS/jquery-ui-1.9.0.custom.min.js"></script>
   	<script src = "JS/page_functionality.js"></script>
	<script src = "JS/page_script.js"></script>
	<link rel = "stylesheet" href = "CSS/jquery-ui-1.9.0.custom.min.css" />
	<link href = "CSS/main_page_stylesheet.css" rel = "stylesheet" />
	<link rel = "shortcut icon" href = "CSS/IMAGES/logo.jpg" />
	<script>
		$(function() {
		$( "#tabs" ).tabs();
		});
	</script>
</head>
<body>
	<div id = "container">
		<img src = "CSS/IMAGES/head.jpg" id = "head">
		<br /><br />
		<div id = "tabs">
			<ul>
				<li><a href = "#home_tab" class = "main_tabs">HOME</a></li>
				<li><a href = "#about_tab" class = "main_tabs">ABOUT</a></li>
				<li><a href = "#jobs_tab" class = "main_tabs">JOBS</a></li>
				<a href = "sign_up.php" class = "main_tabs" id = "sign">SIGN UP</a>
				<a href = "log_in.php" class = "main_tabs" id = "sign">SIGN IN</a>
			</ul>
			<div id = "tabs_style">
				<div id = "home_tab">
					<br /><br />
					<img src = "CSS/IMAGES/ex_of_white_collar_work.jpg" id = "top_left_side">
					<p class = "top">White collar worker</p>
					<p id ="top_right_side"><br /> - The term white-collar worker refers to a person who performs professional, 
					managerial, or administrative work, in contrast with a blue-collar worker, whose job requires manual labor. 
					Typically, white collar work is performed in an office or cubicle.</p>
					<br /><br />
					<img src = "CSS/IMAGES/blue_collar_worker.jpg" id = "right_side">
					<p class = "top">Blue collar worker</p>
					<p id = "left_side"><br /> -  A blue-collar worker is a working class person who performs manual labor. 
					Blue-collar work may involve skilled or unskilled, manufacturing, mining, construction, mechanical, maintenance, 
					technical installation and many other types of physical work. Often something is physically being built or maintained.<br /><br />
					In contrast, the white-collar worker typically performs work in an office environment and may involve sitting at a computer or desk. 
					A third type of work is a service worker (pink collar) whose labor is related to customer interaction, entertainment, sales or other 
					service oriented work. Many occupations blend blue, white and/or pink (service) industry categorizations.<br /><br />
					Blue-collar work is often paid hourly wage-labor, although some professionals may be paid by the project or salaried. 
					There is a wide range of payscales for such work depending upon field of specialty and experience.</p>
					<br /><br />
					<img src = "CSS/IMAGES/white_and_blue_collar_workers.jpg" id = "scnd_2_d_last_left">
					<p class = "top">What Is a Blue-Collar Worker and a White-Collar Worker?</p>
					<p id = "scnd_2_d_last_right"> <br /> - The terms "blue collar" and "white collar" are occupational classifications that distinguish workers who perform manual labor from workers who perform professional jobs. Historically, blue-collar workers wore uniforms, usually blue, and worked in trade occupations. White-collar workers typically wore white, button down shirts. and worked in office settings. 
						Other aspects that distinguish blue-collar and white-collar workers include earnings and education level.</p>
					<br /><br />
					<img src = "CSS/IMAGES/blue_collar.jpg" id = "last_right_side">
					<p class = "top">Blue Collar</p>
					<p id = "last_left_side"><br /> - Blue-collar workers perform labor jobs and typically work with their hands. 
						The skills necessary for blue-collar work vary by occupation. 
						Some blue-collar occupations require highly skilled personnel who are formally trained and certified. 
						These workers include aircraft mechanics, plumbers, electricians and structural workers. 
						Many blue-collar employers hire unskilled and low-skilled workers to perform simple tasks such as cleaning, 
						maintenance and assembly line work.</p>
					<br /><br />
					<img src = "CSS/IMAGES/white_collar_workers.jpg" id = "last_left">
					<p class = "top">White Collar</p>
					<p id = "last_right"><br /> - White-collar workers usually perform job duties in an office setting. 
						They are highly skilled and formally trained professionals. 
						Many white-collar workers, such as accountants, bankers, attorneys and real estate agents, provide professional services to clients. 
						Other white-collar workers, such as engineers and architects, provide services to businesses, corporations and government agencies.</p>
					<br /><br />
					<p id = "Edu_head">Educational Attainment</p>
					<p id = "Edu_body">Education level is a major difference in blue-collar and white-collar jobs. 
						White-collar work generally requires formal education. White-collar workers typically have at least a high
						school diploma, while most complete an associate's, bachelor's, master's or professional degree. 
						Blue-collar workers employed in skilled trades, such as carpentry, receive formal, vocational education, though 
						some blue-collar workers acquire their skills on the job. Most blue-collar 
						occupations do not require formal education to perform basic job duties.</p>
					<p id = "Earn_head">Earnings</p>
					<p id = "Earn_body">White-collar jobs generally pay well because of the education level required for entry into most occupations. 
						White-collar workers usually earn a salary. For example, the median annual wage for lawyers as of May 2009 was $113,240 according 
						to the Bureau of Labor Statistics. The median wage for financial managers was $101,190, while the median wage for civil engineers 
						was $76,590. Blue collar jobs usually pay by the hour although some trade professionals earn salaries. For instance, electricians 
						earned median annual wages of $47,180 as of May 2009 according to the Bureau of Labor Statistics. Truck drivers earned $37,730 as 
						of that time. Other blue collar workers such as janitors, grounds maintenance workers and auto mechanics earned median hourly 
						wages ranging from $10.56 per hour to $17.03 per hour according to 2009 BLS wage estimates.</p>
				</div><!-- home_tab -->

				<div id = "about_tab">
					<img src = "CSS/IMAGES/elle.jpg" id = "me">
					<p id = "about_p">In 2012, Princess “Elle” Espiel (Developer of Jobsters Online) heard about Odesk.com at the radio station. 
						The next morning her instructor Mr. Gilbert A. Carilla told them to make their own web app (she was still a student of ICOTP-ICT that time).
						<br /><br /> Since she wanted a unique app, she thought of something different from the apps her classmates doing. The first thing that came to her
						 mind was the word “Job” and she remembered that almost all people wanted to find a job easily. So through that she decided to create a
						 Job Hunting System, since no one on their class was making one. The name “Jobster's Online” came from the word “job” itself and the “ster” from the 
						 site friendster, since it was used at the browser she added Online throught it.</p>
				</div><!-- about_tab -->

				<div id = "jobs_tab">
					<p>jobs tab still in process . . .</p>
				</div><!-- jobs_tab -->
		</div><!-- tabs_style -->
			
		</div><!--tabs -->
	</div><!--container -->
	<footer>
        <p>&copy; ICOTP-ICT<br />IT-Data Center<br /> Campetic, Palo, Leyte Visayas Phillippines<br /> batch 2012-2013 &middot; <br />
        <a href="#">Privacy</a> &middot; <a href="#">Terms</a><br />Elle Espiel ..</p>	
	</footer>
</body>
</html>
