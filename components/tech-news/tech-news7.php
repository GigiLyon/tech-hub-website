<!DOCTYPE HTML>

<html>
	<head>
		<title>The Tech Hub</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../../assets/css/main.css" />
		<link rel='icon' href='images/fav-icons/fav-icon1.jpg' type='image/x-icon'>
	</head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="logo">
				<a href="../../index">The Tech Hub</a> 
				<a href="../../index">
					<span style="margin-top:15px; font-weight:bolder; font-size:19px;">
						<i class="fa fa-chevron-left" style="margin-right:10px;"></i>
						Homepage	
					</span>
				</a>
			</div>
		</header>

		<!-- Main -->
			<section id="main">
				<div class="inner">

				<!-- One -->
					<section id="one" class="wrapper style1">

						<div class="image fit flush">
							<img src="../../images/tech-img/app.jpg" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>Mysterious app keeps you from shutting down — or does it?</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">Some people are finding that Windows shutdown is blocked by a running program called G. Except there is no G, no G.exe, nothing even resembling G. In spite of what you’ve read, 
								it isn’t a virus or other malware. It’s a bug — in Windows.</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>At last, we have a description of the mysterious shutdown-blocking G — and a fix for Microsoft’s G-generating 
								bug coming in the next version of Win10, commonly called 20H1. If you look online, you’ll see hundreds 
								(if not thousands) of reports about Win10 shutdown getting blocked by a mysterious app called, simply, G. Most 
								people assume it’s a virus, some other sort of malware or a harbinger of doom. In fact, it’s nothing of the sort. 
								It’s a bug in the way Windows reports a specific kind of hang, and the bug has been fixed in the latest versions 
								of Win10 20H1. In fact, people have been “reaching out” to Microsoft about this bug for years. I easily found 
								six complaints on Reddit (1, 2, 3, 4, 5, 6) going back two years. General consensus on Reddit, and elsewhere, 
								is that the afflicted machines are running malware of some sort or another.</p> 
								
							<p>General consensus is wrong. It’s a bug in the way the Blocked Shutdown Resolver pulls the name of the program 
								blocking a shutdown, and “G” may 
								result when there’s a GDI+ program (a program that draws stuff on the screen) that turns belly up as you’re 
								shutting down. Raymond Chen, one of my favorite Microsoft explainers, has a detailed (if weighty) discussion 
								on the Developer Blog. At the time the GDI+ library was written, it needed to support Windows 98, which had 
								very limited support for Unicode. Therefore, it was compiled as ANSI and consequently used the ANSI versions 
								of functions like Register­Class, like Create­Window, and Def­WindowProc to create and manage its helper window. 
								The lack of Unicode support in the helper window didn’t really cause a problem because the window never displayed 
								any UI and never processed any text. The window was there to do things like listen for WM_SETTINGS­CHANGE messages 
								so it knew when to invalidate its caches. </p>
								
							<p>A few years ago, the GDI+ team did a little cleanup, and one of the things they did was get rid of support for Windows 
								98. When a program prevents you from signing out or shutting down, Windows looks for a visible window belonging to 
								that program and uses that to represent it in the Blocked Shutdown Resolver (BSDR) screen. But if the program has 
								no visible windows, then the BSDR will take any window belonging to the program, visible or not. And sometimes the 
								invisible window that gets chosen is the one named “G”. So if you see that G is keeping you from shutting down, just 
								go ahead and manually override it. No harm, no foul — and know that it’ll be fixed (finally!) when the next version 
								of Win10 hits.</p>
					
						</div>
					</section>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright" style="font-weight:bolder;">
					<!-- &copy; Untitled. All rights reserved. Images <a href="https://unsplash.com">Unsplash</a> Design <a href="https://templated.co">TEMPLATED</a> -->
					&copy; All rights reserved.	Designed By: Gillian Ngugi
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>