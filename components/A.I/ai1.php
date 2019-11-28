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
							<img src="../../images/AI-img/quantum2.jpg" style="height:580px;" alt="" />
						</div>
						<header class="special">
							<h2>Achieving quantum supremacy</h2>
							<p style="color:#808080; font-size:19px; font-weight:bold;">UC Santa Barbara/Google researchers demonstrate the power of 53 entangled qubits</p>
						</header>
						<div class="content" style="text-align:justify">
							<p>Researchers in UC Santa Barbara/Google scientist John Martinis' group have made good on their claim to quantum supremacy. Using 53 entangled quantum bits ("qubits"), their Sycamore computer has taken on -- and solved -- a problem considered intractable for classical computers.

"A computation that would take 10,000 years on a classical supercomputer took 200 seconds on our quantum computer," said Brooks Foxen, a graduate student researcher in the Martinis Group. "It is likely that the classical simulation time, currently estimated at 10,000 years, will be reduced by improved classical hardware and algorithms, but, since we are currently 1.5 trillion times faster, we feel comfortable laying claim to this achievement."

The feat is outlined in a paper in the journal Nature.

The milestone comes after roughly two decades of quantum computing research conducted by Martinis and his group, from the development of a single superconducting qubit to systems including architectures of 72 and, with Sycamore, 54 qubits (one didn't perform) that take advantage of the both awe-inspiring and bizarre properties of quantum mechanics.

"The algorithm was chosen to emphasize the strengths of the quantum computer by leveraging the natural dynamics of the device," said Ben Chiaro, another graduate student researcher in the Martinis Group. That is, the researchers wanted to test the computer's ability to hold and rapidly manipulate a vast amount of complex, unstructured data.

"We basically wanted to produce an entangled state involving all of our qubits as quickly as we can," Foxen said, "and so we settled on a sequence of operations that produced a complicated superposition state that, when measured, returns bitstring with a probability determined by the specific sequence of operations used to prepare that particular superposition. The exercise, which was to verify that the circuit's output correspond to the equence used to prepare the state, sampled the quantum circuit a million times in just a few minutes,
 exploring all possibilities -- before the system could lose its quantum coherence.</p>

                            <h3>'A complex superposition state'</h3>
							<p>"We performed a fixed set of operations that entangles 53 qubits into a complex superposition state," Chiaro explained. "This superposition state encodes the probability distribution. For the quantum computer, preparing this superposition state is accomplished by applying a sequence of tens of control pulses to each qubit in a matter of microseconds. We can prepare and then sample from this distribution by measuring the qubits a million times in 200 seconds."

"For classical computers, it is much more difficult to compute the outcome of these operations because it requires computing the probability of being in any one of the 2^53 possible states, where the 53 comes from the number of qubits -- the exponential scaling is why people are interested in quantum computing to begin with," Foxen said. "This is done by matrix multiplication, which is expensive for classical computers as the matrices become large."

According to the new paper, the researchers used a method called cross-entropy benchmarking to compare the quantum circuit's output (a "bitstring") to its "corresponding ideal probability computed via simulation on a classical computer" to ascertain that the quantum computer was working correctly.

"We made a lot of design choices in the development of our processor that are really advantageous," said Chiaro. Among these advantages, he said, are the ability to experimentally tune the parameters of the individual qubits as well as their interactions. </p>

<p>"We made a lot of design choices in the development of our processor that are really advantageous," said Chiaro. Among these advantages, he said, are the ability to experimentally tune the parameters of the individual qubits as well as their interactions.

While the experiment was chosen as a proof-of-concept for the computer, the research has resulted in a very real and valuable tool: a certified random number generator. Useful in a variety of fields, random numbers can ensure that encrypted keys can't be guessed, or that a sample from a larger population is truly representative, leading to optimal solutions for complex problems and more robust machine learning applications. The speed with which the quantum circuit can produce its randomized bit string is so great that there is no time to analyze and "cheat" the system.

"Quantum mechanical states do things that go beyond our day-to-day experience and so have the potential to provide capabilities and application that would otherwise be unattainable," commented Joe Incandela, UC Santa Barbara's vice chancellor for research. "The team has demonstrated the ability to reliably create and repeatedly sample complicated quantum states involving 53 entangled elements to carry out an exercise that would take millennia to do with a classical supercomputer. This is a major accomplishment. We are at the threshold of a new era of knowledge acquisition."</p>


							<h3>Looking ahead</h3>

							<p>With an achievement like "quantum supremacy," it's tempting to think that the UC Santa Barbara/Google researchers will plant their flag and rest easy. But for Foxen, Chiaro, Martinis and the rest of the UCSB/Google AI Quantum group, this is just the beginning.

"It's kind of a continuous improvement mindset," Foxen said. "There are always projects in the works." In the near term, further improvements to these "noisy" qubits may enable the simulation of interesting phenomena in quantum mechanics, such as thermalization, or the vast amount of possibility in the realms of materials and chemistry.

In the long term, however, the scientists are always looking to improve coherence times, or, at the other end, to detect and fix errors, which would take many additional qubits per qubit being checked. These efforts have been running parallel to the design and build of the quantum computer itself, and ensure the researchers have a lot of work before hitting their next milestone.

"It's been an honor and a pleasure to be associated with this team," Chiaro said. "It's a great collection of strong technical contributors with great leadership and the whole team really synergizes well."</p>

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