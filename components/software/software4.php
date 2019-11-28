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
							<img src="../../images/software-img/c-lang.jpg" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>C#: What the merger of .NET Standard and .NET Core means</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">Microsoft makes its open source .NET the future of the platform, with some enterprise-ready tweaks</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>Microsoft’s .NET strategy may have been a little unclear recently, with two distinct strands of development in the familiar .NET Framework and the new, open-source .NET Core. A common set of .NET Standard libraries aimed to bring the two together, giving developers a single way to work with any of the different .NET versions on all their target platforms, from Windows to mobile to the web. But that still meant having to think about which .NET runtime to use: Core, Xamarin, Mono, or Framework?</p>
							<h3>Introducing .NET 5, the future of .NET</h3>
							<p>At Build 2019 Microsoft unveiled its plans for the future of .NET, announcing that the next major release after .NET Core 3 would be a single version of .NET called .NET 5. Building on the rapid growth in the refactored and reinvigorated .NET Core, Microsoft aims to have many existing .NET Framework 4.8 APIs and features run on .NET 5, along with new APIs and services. It’s not only the base class libraries that are converging; Microsoft is taking the opportunity to bring its different .NET compilers together, evolving both .NET Core’s JIT (just-in-time) and Mono’s ahead-of-time compilation models.
							It’s not a surprising decision. The .NET Framework wasn’t advancing as quickly as .NET Core, weighed down by legacy code. That, combined with Microsoft’s growing focus on cross-platform development, ensured that a decisive move from the nearly twenty-year-old Framework to the newer Core was inevitable. Dropping Core from the name is logical, too. With the APIs added since launch and support for the .NET Standard libraries .NET Core really isn’t a cut-down core refactoring any more. With .NET 5 signaling the end of development for the .NET Framework, it’s clearly time for a new name. Even so, it’s not 
							going to be an overnight change. .NET Core 3 is still to ship, and we won’t see .NET 5 until the fall of 2020. A planned ship date of November 2020 gives us nearly 18 months to get our code ready, with preview versions available some time in the first half of 2020.
							</p>
							<h3>What happens to the .NET Framework?</h3>
							<p>One thing Microsoft is making clear: .NET Core 3 will be the last release to port .NET Framework APIs. So there won’t be any additional Framework APIs in .NET 5, and some older technologies such as Web Forms and the Windows Communication Foundation won’t be part of the new platform. If you want to transition from .NET Framework 4.8 then you’ll need to find alternative, supported, technologies. Currently Microsoft recommends Blazor to replace Web Forms and gRPC to replace WCF. They’re sensible alternatives, giving you cross-platform support that wouldn’t be available through older technologies, and with Blazor using Web Assembly or offering server-side controls in ASP.NET, they’re now supporting much newer and higher-performance technologies.

Microsoft’s advice to developers is to begin using .NET Core 3 for all new applications, but it’s important to note that this isn’t the end of your .NET Framework applications. Microsoft is committing to long-term support of the .NET Framework, so if you have code running on .NET Framework 4.8 it won’t need to be updated until you’re ready to make the shift. After all, it’s currently shipping core developer tools, including Visual Studio, built using the .NET Framework. Even then, with base class compatibility between much of the new .NET and the old thanks to .NET Standard, migration shouldn’t be painful and will give you the opportunity to run that code in many more places.

However, simply migrating code will miss out on the opportunity to refactor and redesign applications for cloud and for microservices. .NET 5 is being developed for the IT world of today, with hybrid cloud and containerized distributed systems high on its agenda, rather than the client-server world that gave birth to the original .NET back in the late 1990s.</p>

<h3>A cross-platform runtime for a cross-platform world</h3>
<p>By unifying .NET Core, .NET Standard, and Xamarin in one platform, Microsoft aims to seize the cross-platform high ground. Your code (with some UI work) will be able to run on Windows, Linux, iOS, Android, and more, with support for many different classes of device. Adding .NET Core 3’s support for the Windows desktop, there’s a wide range of applications that can be built in .NET 5, especially if you take advantage of run-anywhere UWP controls thanks to support from third-party .NET tools from Uno and others.

As .NET implementations go beyond .NET Core, there will still be a place for the .NET Standard libraries. Common libraries make it easier to target multiple versions of .NET from the same source code, and all your .NET 5 code will use .NET Standard, simplifying bringing code forward from older versions of .NET Core and from other .NET implementations such as Mono or Xamarin.</p>

<h3>Getting .NET’s enterprise footing right</h3>
<p>One aspect of the .NET 5 announcement is a regular release schedule for .NET. Putting .NET on a yearly cadence, with a biannual long-term support release, should relieve additional pressure on developers, adding a level of predictability that’s been missing. Knowing that .NET 6 will be along in 2021, to be followed by .NET 7 a year later, and with four years of support for the long-term support releases will make it easier to plan for new features and for application life cycles. It’ll allow Microsoft and the rest of the.NET Foundation to publish clear road maps of what to expect and when to expect it.

Outside the .NET ecosystem, there’s another opportunity here for Microsoft and its focus on developer tool subscriptions. With Oracle’s changed licensing conditions for Java, a royalty-free open source enterprise runtime is going to be attractive to many existing Java development teams. That 18-month runup to the launch of .NET 5 could be seen as time to train your developers in new languages and tools and to plan application reimplementation in .NET’s microservices.

Putting it all together, the result is an enterprise-developer-friendly .NET road map. Microsoft and the .NET Foundation are committing to regular updates and a single, cross-platform runtime, while still making sure older .NET Framework applications aren’t abandoned. Long-term support should help development teams plan application life cycles, choosing what to upgrade and when. You can get started with the current previews of .NET Core 3, ready for 2020 releases.</p>
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