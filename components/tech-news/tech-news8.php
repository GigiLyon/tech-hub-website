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
							<img src="../../images/tech-img/walmart.jpg" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>Walmart launches ‘world’s largest’ blockchain-based freight-and-payment network</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">Walmart Canada's blockchain hits the sweet spot for the supply chain industry as it solves issues such as 
								invoice dispute resolution and real-time data distribution.</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>The Canadian division of Walmart has launched a blockchain-based supply chain that includes freight tracking 
								and payment processing for 70 trucking companies whose goods are transported to more than 400 retail stores. 
								The system is now live and all of Walmart Canada's third-party freight carriers are scheduled to be on the 
								network by Feb. 1, 2020, the company said in a statement. Walmart claims the blockchain network is the 
								largest of its kind in the world, a claim not disputed by industry analysts. For example, TradeLens is a 
								blockchain-based supply chain launched by Maersk and IBM with more than 100 participants. Those participants 
								include four of the world's largest ocean carriers, three inland carriers and 61 ports around the globe. 
								But for all its participants, it purportedly has only 14 blockchain distributed nodes. Meanwhile, Cisco 
								runs a track-and-trace system for hundreds of its suppliers worldwide, reportedly with 12 nodes.</p>

							<p>Walmart's new private blockchain, in contrast, has 27 distributed nodes, some of them on premise, others 
								in the cloud – provided by a blockchain vendor. "It probably is the largest," said Avivah Litan, a Gartner 
								vice president of research. The distributed ledger network, called DL Asset Track, was created by Walmart 
								and its tech partner, Toronto-based DLT Labs. The system automates the tracking of freight shipments and 
								invoice creation; it uses IoT sensors and GPS tracking in semi-trailer trucks as well as a web portal and 
								a mobile app where information can be input manually by operators and suppliers. While Walmart's blockchain 
								may be industry leading, it's not without vulnerabilities. Unlike a public blockchain-based network such as 
								those used by Bitcoin or Ethereum, which can have thousands of nodes, a permissioned or private blockchain 
								like Walmart's only contains dozens of nodes.</p> 
								
							<p>The rule of thumb for blockchain is the more distributed nodes you have, the most secure the system is because 
								each node gets an immutable copy of the data, so gaming the system is nearly impossible. "It means your network 
								can tolerate corruption," Litan said. "The more nodes, the more the consensus" that the data being shared is 
								accurate and hasn't been tampered with. While Walmart and DLT Labs' blockchain supply chain may not have the 
								same resilience to attack and fault tolerance as a Bitcoin cryptocurrency network, what it does have over 
								traditional business databases is that it's a shared, immutable audit trail. Blockchain natively is a write-once, 
								append-many technology; once an entry is made, it cannot be changed. What also sets Walmart's blockchain apart 
								from other business blockchains is the deep level of integration with existing corporate data systems, according 
								to Martha Bennett, a vice president of research for Forrester.</p>

							<p>"And, we're talking proper technical integration, not just [electronic] message passing," Bennett said. "This 
								project also takes an innovative approach to invoice generation and payment, in that Walmart's payments [are] 
								triggered and executed automatically as part of the smart contract process. I've not seen that elsewhere yet 
								in a production system." The DL Asset Track is based on an iteration of Hyperledger Fabric – an open source, 
								enterprise-grade, permissioned blockchain platform developed by the Linux Foundation. Through a set of APIs, 
								the blockchain ledger can connect to Walmart and carrier legacy data systems, such as SAP ERP and accounting 
								systems, as well as transportation management systems, according to Louden Owen, CEO of DLT Labs. External data 
								sources such as ERP systems or transporation management systems  that feed information into a blockchain are known 
								as "oracles" in the industry.</p>

							<p>Because Hyperledger Fabric is open source, it can be readily adapted through APIs to communicate with any electronic 
								data source. "We're agnostic as to the blockchain, agnostic as to infrastructure, agnostic as to the cloud. Think 
								of it as a complete oracle offering for enterprise blockchain," Owen said. The blockchain ensures accuracy because 
								variable information, such as transport time input by freight truckers, is matched against IoT and GPS tracking 
								data automatically uploaded to the blockchain ledger in real time. Traditionally, supply chain invoices have been 
								generated primarily through third-party EDI (electronic data interchange) systems. They often depend on manual 
								data input. Walmart's blockchain network will eliminate the need for third-party invoice creation and reduce both 
								processing time, and – perhaps more importantly – invoice disputes and reconciliation. From 50% to 75% of all 
								invoices experience some form of dispute that requires resolution, and those disputes can take weeks or even up 
								to two months to resolve, according to Louden Owen, CEO of DLT Labs.</p>

							<p>"It's a gargantuan issue for everyone simply to verify these highly complex, highly variable transactions," Owen said. 
								Walmart Canada operates 8.75 million square feet of distribution center and moves more than 853 million cases of 
								merchandise a year. The goods are transported by a by a third-party fleet and Walmart Canada's own collection of 
								180 tractors, 2,000 trailers and more than 350 drivers. Each third-party trailer tracks approximately 200 data 
								points per shipment. Automating the data collection and management using blockchain can result in a significant 
								cost-saving, the company said. Transport and shipping systems invariably have both fixed and variable costs. For 
								example, the mileage reimbursement may be a fixed price, but vary depending on the contract. Delivery times can 
								vary between time spent on the road and time spent waiting to offload a shipment once a truck reaches its destination. 
								Often, trucks must wait in line for hours to offload shipments; the reimbursement for that is different than for 
								miles driven and can vary according to the amount of time spent in queue.</p>

							<p>Additionally, Walmart has more than 70 carriers and they all have different rates. "What was happening is that 
								Walmart and its carriers had their own set of data. It was getting mismatched and [settlement] was getting delayed," 
								said DLT Labs CTO Neeraj Srivastava. DLT Labs took Walmart's paper-based contracts with its carriers and converted 
								them  into a smart contract, Srivastava said. A smart contract is business software that can be embedded into a 
								blockchain network and automatically executed when certain conditions are met. Logistics and transportation is an 
								$8 trillion industry and as much as $140 billion per day can be tied up in disputes or settlements between supply 
								chain participants, according to Laurie Tolson, chief digital officer of GE Transportation. Disputes arise because 
								information between supply chain participants often varies,  depending on who's in-putting data, as well as poor 
								contract management at the outset of supplier-buyer relationships, according to Sarah Rathke, an attorney with the 
								international law firm Squire Patton Boggs.</p>

							<p>Having a real-time, actionable data for invoice creation, and a smart contract with terms for each carrier helps 
								head off any payment disputes, Owen said. "That's the real beauty of the system... real-time actionable data," 
								Owen said. "Walmart and a carrier, together, in real-time, agree on the invoice, which doesn't need a third-party 
								audit." For freight carriers, the blockchain network alleviates the need to find financing as they wait weeks or 
								months to be paid for goods because of invoice disputes. A single invoice can cost up to $11 to generate and if 
								they're not resolved, further expenses are incurred by shippers waiting for payment, according to Litan. More 
								accurate, real-time data can also be used for enhanced analytics and predictive modelling, Owen said. "They hit 
								all the sweet spots with this [blockchain network]. Invoice and payment resolution is low-hanging fruit because 
								there are so many disputes," Litan said. "It's really EDI 5.0. It's an immutable audit trail and a system of 
								shared processes. Because it's a private blockchain, it still means you have to trust all the participants."</p>

							<p>Bison Transport was the carrier partner in the pilot for the new freight and payment network. According to Rod 
								Hendrickson, vice president of finance for Bison Transport, the end result is "a mutually beneficial solution." 
								"This project is a new paradigm that will greatly improve workflows, reduce paperwork, and make the business we 
								do with Walmart more efficient," Hendrickson said. This is not Walmart's first foray into blockchain-based 
								track-and-trace systems. U.S.-based Walmart and Sam's Club have asked all their suppliers to come on board an 
								IBM-based blockchain supply chain system for tracking produce from farm to shelf. That project, however, is a 
								proof-of-concept restricted to the shipment of some farm produce, while DL Asset Track will literally track every 
								shipment to Walmart's Canadian stores. "Clearly, there are still dependencies on tech providers to ensure that 
								the system is running smoothly," Forrester's Bennett said. "Yes, Walmart is the dominant partner; but Walmart 
								Canada has put in a lot of work to ensure that there's benefit for the whole ecosystem – if ecosystem partners 
								don't see what's in it for them, they won't fully participate."</p> 
								
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