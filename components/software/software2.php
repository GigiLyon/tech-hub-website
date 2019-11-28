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
							<img src="../../images/software-img/programming.jpg" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>6 best programming languages for AI development</h2>
							<p style="color:#808080; font-weight:bold; font-size:19px;">Which programming language should you pick for your machine learning or deep learning project? These are your best options</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>AI (artificial intelligence) opens up a world of possibilities for application developers. By taking advantage of machine learning or deep learning, you could produce far better user profiles, personalization, and recommendations, or incorporate smarter search, a voice interface, or intelligent assistance, or improve your app any number of other ways. You could even build applications that see, hear, and react to situations you never anticipated.

Which programming language should you learn to plumb the depths of AI? You’ll want a language with many good machine learning and deep learning libraries, of course. It should also feature good runtime performance, good tools support, a large community of programmers, and a healthy ecosystem of supporting packages. That’s a long list of requirements, but there are still plenty of good options. 
Here are my picks for the six best programming languages for AI development, along with two honorable mentions. Some of these languages are on the rise, while others are slipping. Still others you only need to know about if you’re interested in historical deep learning architectures and applications. Let’s see how they all stack up. 
</p>
<h3>Python</h3>
<p>At number one, it’s still Python. How could it be anything else, really? While there are maddening things about Python, if you’re doing AI work, you almost certainly will be using Python at some point. And some of the rough spots have smoothed a little.

As we head into 2020, the issue of Python 2.x versus Python 3.x is becoming moot as almost every major library supports Python 3.x and is dropping Python 2.x support as soon as they possibly can. In other words, you can finally take advantage of all the new language features in earnest.

And while Python’s packaging nightmares—where every different solution is broken in a slightly different way—are still present, you can use Anaconda about 95% of the time and not worry about things too much. Still, it would be nice if the Python world would fix this long-standing issue once and for all.

That said, the math and stats libraries available in Python are pretty much unparalleled in other languages. NumPy has become so ubiquitous it is almost a standard API for tensor operations, and Pandas brings R’s powerful and flexible dataframes to Python. For natural language processing (NLP), you have the venerable NLTK and the blazingly-fast SpaCy. For machine learning, there is the battle-tested Scikit-learn. And when it comes to deep learning, all of the current libraries (TensorFlow, PyTorch, Chainer, Apache MXNet, Theano, etc.) are effectively Python-first projects.

If you’re reading cutting-edge deep learning research on arXiv, then you will find the majority of studies that offer source code do so in Python. Then there are the other parts of the Python ecosystem. While IPython has become Jupyter Notebook, and less Python-centric, you will still find that most Jupyter Notebook users, and most of the notebooks shared online, use Python. As for deploying models, the advent of microservice architectures and technologies such as Seldon Core mean that it’s very easy to deploy Python models in production these days.</p>

<h3>C++</h3>
<p>C++ is unlikely to be your first choice when developing an AI application, but when you need to wring every last bit of performance from the system—a scenario that becomes more common as deep learning comes to the edge and you need to run your models on resource-constrained systems—it’s time to step back into the terrifying world of pointers once more.

Thankfully, modern C++ can be pleasant to write (honest!). You have a choice of approaches. You can either dive in at the bottom of the stack, using libraries like Nvidia’s CUDA to write your own code that runs directly on your GPU, or you can use TensorFlow or PyTorch to obtain access to flexible high-level APIs. Both PyTorch and TensorFlow allow you to load models generated in Python (or PyTorch’s TorchScript subset of Python) and run them straight in a C++ runtime, getting you closer to the bare metal for production while preserving flexibility in development.

In short, C++ becomes a critical part of the toolkit as AI applications proliferate across all devices from the smallest embedded system to huge clusters. AI at the edge means it’s not just enough to be accurate anymore; you need to be good and fast.</p>
							
<h3>Java and other JVM languages</h3>
<p>The JVM family of languages (Java, Scala, Kotlin, Clojure, etc.) continues to be a great choice for AI application development. You have a wealth of libraries available for all parts of the pipeline, whether it’s natural language processing (CoreNLP), tensor operations (ND4J), or a full GPU-accelerated deep learning stack (DL4J). Plus you get easy access to big data platforms like Apache Spark and Apache Hadoop.

Java is the lingua franca of most enterprises, and with the new language constructs available in Java 8 and later versions, writing Java code is not the hateful experience many of us remember. Writing an AI application in Java may feel a touch boring, but it can get the job done—and you can use all your existing Java infrastructure for development, deployment, and monitoring.</p>

<h3>JavaScript</h3>
<p>You’re unlikely to learn JavaScript solely for writing AI applications, but Google’s TensorFlow.js continues to improve and offer an intriguing way of deploying your Keras and TensorFlow models to your browser or through Node.js using WebGL for GPU-accelerated calculations.

However, one thing we haven’t really seen since the launch of TensorFlow.js is a huge influx of JavaScript developers flooding into the AI space. I think that might be due to the surrounding JavaScript ecosystem not having the depth of available libraries in comparison to languages like Python.

Further, on the server side, there’s not really much of an advantage to deploying models with Node.js as opposed to one of the Python options, so we may see JavaScript-based AI applications remain mainly browser-based in the near future. But that still creates plenty of interesting opportunities for fun like the Emoji Scavenger Hunt.</p>

<h3>Swift</h3>
<p>In last year’s version of this article, I mentioned that Swift was a language to keep an eye on. This year, it breaks into my top six. What happened? Swift For TensorFlow. A fully-typed, cruft-free binding of the latest and greatest features of TensorFlow, and dark magic that allows you to import Python libraries as if you were using Python in the first place.

The Fastai team is working on a Swift version of their popular library, and we’re promised lots of further optimizations in generating and running models with moving a lot of tensor smarts into the LLVM compiler. Is it production ready right now? Not really, but it may indeed point the way to the next generation of deep learning development, so you should definitely investigate what’s going on with Swift.</p>

<h3>R language</h3>
<p>R comes in at the bottom of our list, and it’s trending downward. R is the language that data scientists love. However, other programmers often find R a little confusing, due to its dataframe-centric approach. If you have a dedicated group of R developers, then it can make sense to use the integrations with TensorFlow, Keras, or H2O for research, prototyping, and experimentation, but I hesitate to recommend R for production use or for greenfield development, due to performance and operational concerns. While you can write performant R code that can be deployed on production servers, it will almost 
	certainly be easier to take that R prototype and recode it in Java or Python.</p>

<h3>Other AI programming options</h3>
<p>Of course, Python, C++, Java, JavaScript, Swift, and R aren’t the only languages available for AI programming. Here are two more programming languages you might find interesting or helpful, though I wouldn’t count them as top priorities for learning.</p>	

<h3>Lua</h3>
<p>A few years ago, Lua was riding high in the world of artificial intelligence due to the Torch framework, one of the most popular machine learning libraries for both research and production needs. If you go delving in the history of deep learning models, you’ll often find copious references to Torch and plenty of Lua source code in old GitHub repositories.

To that end, it may be useful to have a working knowledge of the Torch API, which is not too far removed from PyTorch’s basic API. However, if, like most of us, you really don’t need to do a lot of historical research for your applications, you can probably get by without having to wrap our head around Lua’s little quirks.</p>

<h3>Julia</h3>
<p>Julia is a high-performance programming language that is focused on numerical computing, which makes it a good fit in the math-heavy world of AI. While it’s not all that popular as a language choice right now, wrappers like TensorFlow.jl and Mocha (heavily influenced by Caffe) provide good deep learning support. If you don’t mind the relatively small ecosystem, and you want to benefit from Julia’s focus on making high-performance calculations easy and swift, then Julia is probably worth a look.</p>
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