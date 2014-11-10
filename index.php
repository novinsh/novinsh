<!DOCTYPE html>

<!--
  _   _  ______      _______ _   _    _____ _    _ 
 | \ | |/ __ \ \    / /_   _| \ | |  / ____| |  | | 
 |  \| | |  | \ \  / /  | | |  \| | | (___ | |__| |  
 | . ` | |  | |\ \/ /   | | | . ` |  \___ \|  __  | 
 | |\  | |__| | \  /   _| |_| |\  |  ____) | |  | |
 |_| \_|\____/   \/   |_____|_| \_| |_____/|_|  |_|
                                      PERSONAL PAGE
                      
  LOOKS YOU ARE INTERESTED IN THE SOURCE OF THIS WEBSITE!
  CHECK OUT MY GITHUB FOR THE WHOLE SOURCE! ;-)
	
-->
                                                                                                                                                                                                                                                                       <html lang="en-US">
	<head>
		<meta charset="UTF-8">
    <meta name="author" content="Your Name" />
    <meta name="description" content="Personal Website of Your Name" />
    <meta name="keywords" content="keywords" />
		<meta name=viewport content="width=device-width, initial-scale=1">

		<title>Your Name's Personal Page</title>

		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!--TODO: Find a workaround for js-less devices. (I've used javascript to add google font to my document to prevent render blocking) -->
		<!--<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>-->
		<style>
			body {
				margin-left: 10%;
				margin-right: 10%;
				font-family: 'Titillium Web', sans-serif;
			}

			p {
				text-align: justify;
			}

			a {
				text-decoration: none;
			}

			a:hover {
				color: #CC0033;
			}

			h2, h3 {
				text-transform: uppercase;
			}

			hr {
				border: 0;
				height: 1px;
				background: #333;
				background-image: -webkit-linear-gradient(left, #333, #333, #ccc); 
				background-image:    -moz-linear-gradient(left, #333, #333, #ccc); 
				background-image:     -ms-linear-gradient(left, #333, #333, #ccc); 
				background-image:      -o-linear-gradient(left, #333, #333, #ccc); 
				margin-top: -15px;
				margin-bottom: 20px;
			}

			hr.symmetry {
				border: 0;
				height: 1px;
				background: #333;
				background-image: -webkit-linear-gradient(left, #ccc, #333, #ccc); 
				background-image:    -moz-linear-gradient(left, #ccc, #333, #ccc); 
				background-image:     -ms-linear-gradient(left, #ccc, #333, #ccc); 
				background-image:      -o-linear-gradient(left, #ccc, #333, #ccc); 
				margin: 0;
			}

			#cover {
				text-align: center;
			}
			#cover_links {
				list-style-type: none;
				text-align: center;
			}

			#cover_links ul {
				padding: 0;
				margin: 0 auto;
				width: 55%;
			}

			#cover_links ul li {
				display: inline;
			}

			#cover_links ul li:after {
				content: "|"; 
				padding: 0 .5em;
			}

			#cover_links ul li:last-child:after {
				content: ''; 
			}

			#footer	{
				margin-bottom: 30px;
				margin-top: 75px;
			}

			#modificationTime {
				text-align: right;
			}

			#copyright {
				float: left;
				width: 40%;
				line-height: 1;
				margin-top: 7px;
			}

			#fastLink {
				float: left;
				width: 20%;
				text-align: center;
			}

			#modificationTime {
				float: right;
				width: 40%;
			}

			#ValidationButtons {
				font-size: small;
			}

			#portrait {
				display: block;
				position: relative;
				float: left;
				margin: 25px 30px 20px 0px;
				width: 200px;
				height: 200px;
				border-radius: 150px;
				-webkit-border-radius: 150px;
				-moz-border-radius: 150px;
				background: url(profile-pic.jpg) no-repeat;
				box-shadow: 0 0 8px rgba(0, 0, 0, .8);
				-webkit-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
				-moz-box-shadow: 0 0 8px rgba(0, 0, 0, .8);
			}		

			#search-box {
				margin: 0 auto;
				width: 400px;
			}

			.cse .gsc-control-cse, .gsc-control-cse {
				padding: 0px;
			}
			
			#publications {
				clear: both;
			}
			
			@media screen and (max-width: 500px) {
				body {
					margin-left: 5%;
					margin-right: 5%;
				}
				
				#cover_links ul {
					padding: 0;
					margin: 0 auto;
					width: 95%;
					font-size: 1.3em;
					line-height: 1.8em;
				}
				
				#search-box {
					margin: 0 auto;
					width: 100%;
				}
				
				#portrait {
					float: none;
					margin: 0 auto;
					margin-top: 30px;
				}
			}
		</style>
	</head>

	<body>
    <!-- Header -->
		<div id="cover">
			<div id="cover_title">
				<h1>Your Name <a href="#">&#9166;</a></h1>
			</div>
			
			<div id="search-box">
				<div class="gcse-search"></div>
			</div>

      <!-- Menu -->
			<div id="cover_links">
				<ul>
					<li><a href="#">Item 1</a></li>
					<li><a href="#">Item 2</a></li>
					<li><a href="#">Item 3</a></li>
					<li><a href="#">Item 4</a></li>
				</ul>
			</div>
		</div>

    <!-- Logo -->
		<div id="portrait"> </div>

    <!-- Contents START -->
		<div id="about">
			<h2>About me</h2>
			<hr/>
			<div id="about_text">
				<?php require_once("./about.htm"); ?>
			</div>
		</div>

		<div id="publications">
			<h2>Publications</h2>
		<hr/>
			<div id="media_text">
				<?php require_once("./publication.htm"); ?>
			</div>
		</div>
		
		<div id="contact">
			<h2>Contact</h2>
		<hr/>
			<div id="contact_text">
				Address:
				<address>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac libero et magna iaculis malesuada. Donec facilisis molestie congue. Quisque nec tincidunt metus. Pellentesque tristique accumsan nisl ut ultricies. Suspendisse turpis quam, consectetur molestie malesuada ut, congue in massa. Nam vehicula purus a est maximus ultricies. Etiam lacinia mi id dui laoreet accumsan. Vivamus cursus diam velit, maximus tempus sem placerat vitae. In at diam in mauris dictum euismod. Pellentesque id ultricies turpis. Donec mollis fermentum hendrerit.
				</address>
				<br />
			</div>
		</div>
    <!-- Contents END -->

    <!-- Footer -->
		<div id="footer">
			<hr class="symmetry" />
			<div id="copyright">
				<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0; vertical-align:bottom;" src="https://i.creativecommons.org/l/by-sa/4.0/80x15.png" /></a>&nbsp;This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>. This includes all images, documents, texts and any other medium that I have used on my website.
			</div>
			
			<div id="fastLink">
				<a href="#top">&#x2b06;top</a>
			</div>
			
			<div id="modificationTime">
				Last Update on 
				<?php

				$index_page = 'index.php';
				if (file_exists($index_page)) {
						echo date ("F d, Y.", filemtime($index_page));
				}
				else
				{
					echo "failed";
				}
				?>

				<div id="ValidationButtons">
					<a href="http://validator.w3.org/check?uri=<?php echo(($_SERVER['HTTPS'] ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]); ?>">VALID HTML!</a>&nbsp;&&nbsp;
					<a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo(($_SERVER['HTTPS'] ? 'https://' : 'http://').$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]); ?>">VALID CSS!</a>&nbsp;&nbsp;
				</div>
			</div>
		</div>

    <!-- Place all other js here -->
    <!-- Google Custome Search Engine Script HERE -->

    <!-- Google Font -->
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Titillium+Web::latin' ] }
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})(); 
		</script>

	</body>
</html>
