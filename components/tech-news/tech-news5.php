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
							<img src="../../images/tech-img/blockchain.gif" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>Blockchain-based storage service takes on Amazon AWS, unveils pricing</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">A decentralized storage service that rents capacity from users around the globe is among a small cadre of vendors claiming their 
								capacity is cheaper and more resilient than big players such as Amazon S3.</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>A cloud storage service first announced in 2015 that uses the decentralized, peer-to-peer architecture of 
								blockchain to store encrypted data on the computers of users around the globe has unveiled its pricing model 
								and production launch date. Storj Labs, which operates a beta storage service for developers, businesses 
								and consumers, initially launched the Tardigrade Decentralized Cloud Storage Service in August. Today, it 
								announced its Beta 2 release and pricing, taking aim at Amazon's AWS S3 cloud service with what it says is 
								a more cost-effective and resilient approach. The Tardigrade storage service claims 99.97% availability, 
								and said its prices are less than half the starting prices of legacy cloud storage providers. For example, 
								Amazon S3 list prices are currently $23 per terabyte for static storage per month. Amazon S3 also claims 
								uptimes that range from 95% to 99%.</p> 

							<p>"Across the three main providers, those prices average at $22 per terabyte for static storage and $99 per 
								terabyte for bandwidth," Storj Labs said in a blog post. "Furthermore, the prices quoted by legacy providers 
								often don't include features like encryption and multi-zone redundancy, which come standard with Tardigrade 
								at no additional cost." Storj's Tardigrade storage service beta currently has 400 active users. Users who 
								rent out space on their hard drives earn STORJ, a form of currency that can be used to purchase capacity 
								on Storj's Tardigrade service. (The users earn STORJ by selling excess hard drive space and can use it to 
								purchase space on the Storj Tardigrade Decentralized Cloud Storage Service via the company's file sharing app.) 
								Storj is by no means alone. P2P compute storage services have grown over the past several years to include a 
								dozen options, but none have seen "reasonable" enterprise adoption, according to Raj Bala, a Gartner research 
								director.</p>	

							<p>"These services may be half the price of Amazon S3, but they’re 100 times greater risk given the decentralized 
								nature of the storage and the nascent companies behind them," Bala said via email. "Comparatively, AWS is a 
								trusted provider with 10s of exabytes under management. I am also very skeptical of the performance claims 
								being made relative to S3, particularly when objects need to be rebuilt in case a peer in the storage network 
								disappears." Cloud storage provider Backblaze offers capacity through its B2 service at a quarter the price of 
								Amazon AWS, but without the risk a P2P architecture poses, Bala said. "B2 is built and operated by sophisticated 
								people from a technical perspective with a successful track record. </p>
								
							<p>So one need not use a P2P storage service just to save money," Bala said. Bala also criticized P2P-based storage services for claiming to use blockchain's innate 
								cryptography and resilliency when, in fact, the distributed ledger technology is only used for the purposes of payment. 
								Storj Labs' CEO Ben Golub, however, pointed out that in 2017 Amazon AWS storage service experienced a massive outage 
								in the US-EAST-1 region, and while due to human error, it was because of the more centralized nature of the vendor. 
								Storj's Tardigarde service is fault tolerant because the hard drives are located throughout the world and data is 
								stored in a way similar to a RAID configuration in a traditional storage server – redundancy is built into the scheme.</p>	
								
							<p>"The data is encrypted first, so we never see it, and then we tyipcally break it up into 80 pieces of which 29 are 
								necessary to put it back together," Golub said. "But, we can change that math depending on the use case." The 
								Tardigrade service charges $10 per terabyte per month, or 1 cent per gigabyte, for static storage. (Storing 1 
								terabyte for 30 days, two terabytes of data for 15 days or three terabytes for 10 days would each be the equivalent 
								of 1 terabyte month). The service charges $45 per terabyte, or 45 cents per gigabyte, of download bandwidth consumed. 
								(Storj does not charge for upload bandwidth.)</p>	

							<p>"If you choose to take data out, then we charge below our costs to get that data out," said John Gleeson, Storj's 
								vice president of Operations. "Unlike others, we don't want to charge if you want to take your data out." Atlanta-based 
								Storj Labs is using blockchain to manage a storage aggregator that rewards those who rent out unused storage on their 
								computers with cryptocurrency or with free storage and network capacity. The storage service uses what it calls 
								"gates" or performance metrics to track its service level agreements. Those metrics include the total number of 
								vetted storage nodes (currently about 3,000); the number of active Tardigrade users (about 400) and node churn, 
								or the number of nodes that opt out and in of the P2P architecture over time (about 1.5% per month). The Tardigrade 
								Cloud Service now operates with between 4.3 and 7 petabytes of storage capacity. At production launch in January, 
								it plans to have 6PB available for developers and users.</p>

							<p>The Tardigrade Cloud Service breaks up a file into 30 pieces that are stored across 80 drives from a pool of 3,000 
								distributed throughout any of 183 different countries or territories, Golub said. "This is blockchain at its best, 
								frankly — peer-to-peer networks where underutilized servers are traded," Avivah Litan, a Gartner vice president of 
								research, said in an earlier interview. "It's more or less Uber for computers on a blockchain, so by default the 
								design eliminates the Uber-like central authority and operator and replaces it with smart contracts in a system 
								where no one entity is in control." The storage service works by first encrypting a file and then breaking that 
								file up and spreading it across 80 or more user drives for redundancy. If one portion of a global network is slow 
								or not maintaining the standard for downloads/uploads, the service automatically chooses different paths with higher 
								bandwidth.</p>

							<p>"This is where the power of being decentralized really matters. When we're trying to serve you a file you stored, 
								we need to get 30 pieces to you, but we can get those 30 pieces from any of 80 or more drives that have those 
								pieces on them," Golub said. "If one of them is busy or some of them are on a slow network, it doesn't matter 
								because we're able to take advantage of the fact that we're decentralized and can maintain really high availability 
								and really high durability and performance." For example, if more than a few thousand users want to view a file 
								stored on the Tardigrade Cloud Service, it can be divided up into 200, 300 or more pieces using dynamic caching 
								and dispersed in a wider global pattern; in the end, only 30 pieces are needed to reassemble the file for use.</p>	
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