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
							<img src="../../images/software-img/azure.jpg" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>Use GitHub Actions to deploy code to Azure</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">Microsoft’s GitHub Actions for Azure let you automate your Azure development lifecycle from inside GitHub</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>There’s a lot more to building modern applications than hitting F5 and building your app. Code is only part of the process. Building an effective CI/CD (continuous integration/continuous delivery) service is a key part of fostering a devops culture and automating the software development lifecycle.

Automation is an important aspect of the process. You need to be able to run tests, drive builds, package your code, and even deploy it, simply by checking in an update or merging a pull request. Tools such as Microsoft-owned GitHub are increasingly important repositories for code, both public and private, and the workflows we build around them are key to automating the building of software.</p>

<h3>Introducing GitHub Actions</h3>
<p>GitHub recently made its GitHub Actions automation tool generally available. Unlike build-centric CI/CD tooling such as Jenkins or Travis, GitHub Actions is focused on your code. That’s an approach that not only makes sense for GitHub, but also can work better for developers than other tools. You’re likely already using a Git-based development workflow, using branches, pull requests, code reviews, and merges to manage the way a team of developers collaborates on an application.
GitHub Actions is an event-based workflow service that uses common GitHub events to trigger operations, either inside GitHub, or in other development tools. Code hosted in GitHub can be tested and run in GitHub-hosted environments, or you can host your own runners in your own environments. As workflow steps are executed, results are displayed inside your GitHub views, and you can proceed from step to step at your own pace.

You write workflows in YAML, with a series of jobs that are associated with a trigger. Jobs can run in series or in parallel, so you can get significant speed if you tune your GitHub Actions appropriately. The resulting workflow description is human-readable, and because it’s code, you can store and manage your various Actions in GitHub. A library of starter workflows can help speed up automating your development processes.
</p>

<h3>Using GitHub Actions with Azure</h3>
<p>Microsoft has been developing a set of GitHub Actions for use with Azure, and these are also now generally available. The initial set focuses on deploying artifacts from GitHub to Azure. Hosted in GitHub repositories, they’re best thought of as the end points of a set of Actions, taking built code and containers and delivering them to Azure’s platform services. One set integrates GitHub Actions with Azure App Services, and another controls deployment to Azure Kubernetes Services. You can use Azure CLI as a runner, using GitHub Actions to trigger scripts that manage your Azure resources. Other actions include managing Azure databases and building and deploying Azure Functions.

You first need to log in to Azure, using a pregenerated service principle. GitHub Actions includes its own secrets store, so you can create a token using the Azure CLI and then copy it to the Action’s store for use in every future connection. Having one token in a secure store reduces risk while still allowing Actions to automate its interactions with Azure. Additional log-in actions manage connecting to AKS and Azure’s container registry.

Deploying from a GitHub Action to Azure App Service supports working with common archive formats or using containers. It’s important to note that Microsoft’s actions do have dependencies on other GitHub Actions, for example setting up a .NET environment for your code.

Microsoft is providing a set of starter GitHub Actions for Azure to help you integrate them into your development workflow. The sample code shows how the GitHub Actions for Azure operate and how they work with other Actions. The published YAML shows a mix of GitHub’s own actions, for example handling repository checkout and installing a Node.js runner to build and test code before deploying it via one of the Github Actions for Azure.</p>

<p>The actual deployment is simple enough; all you need is a stored secret and an app name. Secrets can be either publish profile credentials, or for more complex deployments (delivering a container), you can use a set of service principles and log in to your Azure account. Don’t forget to log out when your Action is complete!

Perhaps one of the more interesting aspects of automating CI/CD is that we’re not limited to one platform. We’re using open APIs to connect servers and services together. An automation can start in Visual Studio, continue through GitHub Actions, and then into Azure Pipelines, before storing build artifacts in a GitHub repository. It’s the ability to mix and match that’s key. We’re not limited to one way of doing things; we can choose the tools and configure them in a manner that best suits our workflows. If you need to use Jenkins for part of your development, you can, alongside Azure DevOps or any other platform that works in your environment.

At heart it’s a completely different way of managing application development, one that’s now driven by our source code repositories. That’s led to GitHub rethinking its role in the development ecosystem, as it’s clearly no longer a place where all we do is store and review code.</p>

<h3>Archiving code for the millennium</h3>
<p>Building on its capability of searching and indexing its many millions of lines of public code, GitHub is using that knowledge to try and make the code we build safer, adding integrated tools for identifying security issues early, for security reporting, and for managing security incidents in public repositories. Our code now depends on many different open source development teams, and that requires automating remediation of dependency issues, using the tools GitHub acquired from Dependabot earlier in the year.

With a role at the heart of the code ecosystem, GitHub is now planning to keep your code for not tens, but hundreds and even thousands of years. As part of that plan it recently made its first deposit in a Svalbard mine, close to the Global Seed Bank. High in the Arctic, and deep under rock where there’s little oxygen, the canisters of optically encoded data should last at least 500 years. The next stage of the project will image all the public repositories on 02/02/2020, storing them in the same vault.

GitHub is looking at other ways of archiving code, working with organizations such as the Long Now Foundation, the University of Oxford’s Bodleian Library, and the Internet Archive to preserve not just our code, but the social networks and discussions we build around it. There’s even the possibility of using Microsoft Research’s Project Silica 3D glass-based storage to produce even longer-lived archives.

Our industry is less than a century old and we’re already building libraries of code that will last thousands of years. It’s a sign of the importance of software, of development, and what it means for civilization. That’s a big responsibility for developers.</p>
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