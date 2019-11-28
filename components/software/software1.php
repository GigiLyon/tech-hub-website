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
							<img src="../../images/software-img/kubernetes2.png" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>Microsoft KEDA brings event-driven scaling to Kubernetes</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">With KEDA, Kubernetes can scale containers on demand based on pending messages in event queues such as Apache Kafka or RabbitMQ</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>Microsoft has released KEDA 1.0, a production-ready version of KEDA—an open source component for Kubernetes 
								that provides event-driven autoscaling for containers. Scaling is based on the size of an event or message 
								queue, like Apache Kafka or RabbitMQ. Kubernetes already has the capacity to scale containers based on 
								demand. However, out of the box Kubernetes only supports autoscaling based on CPU and memory demand. 
								Scaling on other triggers—such as the number of messages waiting in an event queue—requires custom 
								programming (e.g., in the Horizontal Pod Autoscaler). KEDA (short for Kubernetes-based event driven 
								autoscaling) makes it possible to scale Kubernetes using event queue activity as a metric. KEDA works 
								as a Kubernetes metrics server, providing information about the number of pending events to be processed 
								in commonly used queues—Kafka, Amazon CloudWatch, Azure Event Hubs or Azure Service Bus, Prometheus, 
								Redis Lists, NATS, Google Cloud Platform Pub/Sub, and more.</p> 
								
							<p>It’s also possible to build your own scaler 
								for a custom queue or message bus or to use an external scaler. You can use Kubernetes Deployments as 
								the default way to scale actions, allowing a container deployment to be completely zeroed out if there’s 
								no pending demand. You can also use Kubernetes’s container lifecycle hooks or Kubernetes’s job control 
								functions to manage how containers survive for long-running processing events. Microsoft provides Helm charts 
								to deply KEDA into any Kubernetes cluster, but KEDA can also be deployed manually with kubectl, and it will 
								work in Minikube clusters as well. As KEDA is a Microsoft creation, naturally it comes with hooks for handling 
								event processing with Azure, such as using Kubernetes-deployed Azure Functions that fire on Azure Storage Queue 
								messages. But KEDA is also intended to work with other common Kubernetes implementations including Red Hat 
								OpenShift and Google Kubernetes Engine, even if it doesn’t support the same breadth of native features as 
								in Azure.
</p>
						
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