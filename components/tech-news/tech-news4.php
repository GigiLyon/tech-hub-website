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
							<img src="../../images/tech-img/facebook.jpg" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>Facebook's iOS 'bug' secretly filmed users. IT, take note.</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">And a very different bug, planted by cyberthieves, presents even more frightening camera-spying issues with Android.</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>News reports last week — subsequently confirmed by a Facebook executive's tweet — that the Facebook iOS 
								app was videotaping users without notice should serve as a critical heads up to enterprise IT and security 
								execs that mobile devices are every bit as risky as they feared. And a very different bug, planted by 
								cyberthieves, presents even more frightening camera-spying issues with Android. On the iOS issue, the 
								confirmation tweet from Guy Rosen, who is Facebook's vice president of Integrity (go ahead and insert 
								whatever joke you want about Facebook having a vice president of integrity; for me, it's way too easy a 
								shot), said, "We recently discovered our iOS app incorrectly launched in landscape. In fixing that last 
								week in v246, we inadvertently introduced a bug where the app partially navigates to the camera screen 
								when a photo is tapped.</p> 
								
							<p>We have no evidence of photos/videos uploaded due to this." Please forgive me if don't immediately accept that 
								this filming was an error, nor that Facebook has no evidence of any photos/videos being uploaded. When it 
								comes to being candid about their privacy moves and the real intentions behind them, Facebook executives' 
								track record isn't great. Consider this Reuters story from earlier this month that cited court documents 
								establishing that "Facebook began cutting off access to user data for app developers from 2012 to squash 
								potential rivals while presenting the move to the general public as a boon for user privacy." And, of course, 
								who can forget Cambridge Analytica? In this case, though, intentions are irrelevant. This situation merely serves as a reminder of what apps can 
								do if no one is paying enough attention.</p>

							<p> This is what happened, according to a well-done summary of the incident in The Next Web (TNW): "The problem becomes evident due to a bug that shows the camera feed in a tiny sliver 
								on the left side of your screen, when you open a photo in the app and swipe down. TNW has since been able to 
								independently reproduce the issue." This all began when an iOS Facebaook user named Joshua Maddux tweeted 
								about his scary discovery. "In footage he shared, you can see his camera actively working in the background 
								as he scrolls through his feed." It seems as though the FB app for Android does not do the same video effort 
								— or, if it does happen on Android, it's better at hiding its stealthy behavior. If it is the case that this 
								only happens on iOS, that would suggest that it might indeed be just an accident. Otherwise, why wouldn't FB 
								have done it for both versions of its app?</p>	

							<p>As for iOS vulnerability — note that Rosen didn't say that the glitch was fixed or even promise when it would be 
								fixed — it seems to depend on the specific iOS version. From the TNW report: "Maddux adds he found the same 
								issue on five iPhone devices running iOS 13.2.2, but was unable to reproduce it on iOS 12. 'I will note that 
								iPhones running iOS 12 don’t show the camera, not to say that it’s not being used,' he said. The findings are 
								consistent with [TNW's] attempts. [Although] iPhones running iOS 13.2.2 indeed show the camera actively working 
								in the background, the issue doesn’t appear to affect iOS 13.1.3. We further noticed the issue only occurs if 
								you have given the Facebook app access to your camera. If not, it appears the Facebook app tries to access it, 
								but iOS blocks the attempt." How rare it is that iOS security actually comes through and helps, but it appears 
								to be the case here. Looking at this from a security and compliance perspective, though, is maddening.</p> 
								
							<p>Regardless of Facebook's intent here, the situation is allowing the videocamera on the phone or tablet to come alive at any 
								point and start capturing what is on the screen and where the fingers are positioned. What if the employee is 
								working on an ultra-sensitive acquisition memo at that moment? The obvious problem is what happens if Facebook 
								is breached and that particular video segment winds up on the dark web for thieves to purchase? Want to try 
								explaining that to your CISO, the CEO or the board? Even worse, what if this isn't an instance of a Facebook 
								security breach? What if a thief sniffs the communication as it travels from your employee's phone to Facebook? 
								One can hope that Facebook security is fairly robust, but this situation permits the data to be intercepted enroute.</p>	
							
							<p>Another scenario: What if the mobile device is stolen? Let's say that the employee properly created the document on a 
								corporate server accessed via a good VPN. By video-capturing the data while typing, it bypasses all security mechanisms. 
								The thief can now potentially access that video, which offers images of the memo. What if that employee downloaded a 
								virus that shares all phone content with the thief? Again, the data is out. There needs to be a way for the phone to 
								always flash an alert whenever an app attempts access and a way to shut it down before it happens. Until then, CISOs 
								are unlikely to sleep well. On the Android bug, other than accessing the phone in a highly naughty way, the problem 
								is very different. Security researchers at CheckMarx published a report that made it clear how attackers could sidestep 
								all security mechanisms and take over the camera at will.</p>

							<p>"After a detailed analysis of the Google Camera app, our team found that by manipulating specific actions and intents, 
								an attacker can control the app to take photos and/or record videos through a rogue application that has no permissions 
								to do so. Additionally, we found that certain attack scenarios enable malicious actors to circumvent various storage 
								permission policies, giving them access to stored videos and photos, as well as GPS metadata embedded in photos, to 
								locate the user by taking a photo or video and parsing the proper EXIF data.This same technique also applied to 
								Samsung’s Camera app," the report said. "In doing so, our researchers determined a way to enable a rogue application 
								to force the camera apps to take photos and record video, even if the phone is locked or the screen is turned off. 
								Our researchers could do the same even when a user was is in the middle of a voice call." The report drills into 
								the specifics of the attack approach. </p>

							<p>"It is known that Android camera applications usually store their photos and videos on the SD card. Since photos 
								and videos are sensitive user information, in order for an application to access them, it needs special 
								permissions: storage permissions. Unfortunately, storage permissions are very broad and these permissions give 
								access to the entire SD card. There are a large number of applications, with legitimate use-cases, that request 
								access to this storage, yet have no special interest in photos or videos. In fact, it’s one of the most common 
								requested permissions observed. This means that a rogue application can take photos and/or videos without specific 
								camera permissions, and it only needs storage permissions to take things a step further and fetch photos and videos 
								after being taken. Additionally, if the location is enabled in the camera app, the rogue application also has a way 
								to access the current GPS position of the phone and user," the report noted. "Of course, a video also contains sound.</p>
								
							<p>It was interesting to prove that a video could be initiated during a voice call. We could easily record the receiver’s 
								voice during the call and we could record the caller’s voice as well." And yes, more details make this even more 
								frightening: "When the client starts the app, it essentially creates a persistent connection back to the C&C server 
								and waits for commands and instructions from the attacker, who is operating the C&C server’s console from anywhere 
								in the world. Even closing the app does not terminate the persistent connection." In short, these two incidents 
								illustrate stunning security and privacy holes within a huge percentage of smartphones today. Whether IT owns these 
								phones or the devices are BYOD (owned by the employee) makes little difference here.</p> 
								
							<p>Anything created on that device can be easily stolen. And given that a rapidly increasing percentage of all enterprise 
								data is moving to mobile devices, this needs to be fixed and fixed yesterday. If Google and Apple won't fix this — 
								given that it's unlikely impact sales, since both iOS and Android have these holes, neither Google nor Apple has much 
								financial incentive to act quickly — CISOs must consider direct action. Creating a homegrown app (or convincing a major 
								ISV to do it for everyone) that will impose its own restrictions might be the only viable route.</p>
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