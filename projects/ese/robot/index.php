<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Justin Turcotte - Portfolio</title>
		<link rel="logo icon" type="image/png" href="/imgs/logo.png" />
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Bootstrap & Stylesheet Links -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<!-- CSS Stylesheet -->
		<link rel="stylesheet" href="/css/style.css">
	</head>
		
	<body>
		<?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/header.html'); 
    ?>

		<div class="container my-5">
			<div class="row">
				<div class="col-12 d-flex justify-content-center my-3 text-center">
					<h1>Wireless Robot Project</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-start">
					<h1>Status</h1>
				</div>

				<div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end my-auto">
					<h5>January 2019 - December 2019</h5>
				</div>

				<div class="col">
					<p>
						This is my second year group project for my electronic systems engineering degree program at Conestoga College.
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Relevant Skills & Tools</h1>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>C</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Circuit Design</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Circuit Analysis</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Simulink</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Linux</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Matlab</li>
					</ul>
				</div>

				<div class="col-6 col-md-4">
					<ul>
						<li>Altium</li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Summary</h1>
				</div>

				<div class="col">
					<p>
						The goal of this project was to develop a working prototype for a robot capable of wireless movement with a joystick. A small camera module connected to a 
						servo motor allows for looking around. A wireless connection to a linux host pc allows for camera feed to enable wireless control.
					</p>

					<div class="d-flex justify-content-center my-2">
						<img src="imgs/robot-fig-1.jpg" alt="Robot Image" class="col-12 col-md-6 col-lg-3">
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Details</h1>
				</div>

				<div class="col">
					<p>
						This project was split into two parts, each given their own semester to complete. The first part was individual and involved designing a microcontroller-based 
						embedded controller board for low-level operation of motors, actuators, and motion-related sensors, and communication with a host computer. The circuit boards 
						were fabricated by a third party. Design, population of the board, and reflow, was done by me. An additional feature had to be added so I chose to add a buzzer 
						for some "beep" sounds.
					</p>

					<div class="d-flex justify-content-center my-2">
						<img src="imgs/robot-fig-2.jpg" alt="Robot Control Board Design" class="col-12 col-lg-10">
					</div>

					<p>
						The second part of the project was group-based and included implementing one of our designed boards and creating the operating robot seen in the photo above. 
						Unfortunately my control board has some issues and so we were unable to use it. I made a fatal mistake in the design of the power circuit and also decided to 
						put similar components together in the PCB layout. This meant resistors with resistors, capacitors with capacitors, etc. This is an issue because the many 
						components of the circuit become mingled. This is especially bad for the power circuit since I may have created some sort of loop antenna unintentionally, 
						helping cause the issues I faced. We used a different team-members control board instead.
					</p>
					<p>
						In order to get a functioning robot, we needed to design C code in both the linux and embedded environments. This code would allow for joystick input to the 
						robot, camera feed from the robot, and any additional diagnostic information. I was in charge of the linux-side software except for the gamepad input. 
						I designed a program that utilized Linux pipes to send/receive from a script that was set to read the gamepad. The input was sent to the robot through either 
						UART (for initial testing) or wireless communications (utilising the TCP protocol for stable data flow). 
					</p>
					<p>
						Some challenges we face was that commands would end up backing up creating a movement delay for the robot. This was caused by us forwarding all gamepad 
						inputs to the robot. Since the linux software can receive input commands faster than it can transfer them to the robot for execution, the commands would back up. 
						We solved this by modifying the program such that the robot requests an input and only upon request do we read the latest gamepad input. This solved the delay 
						issue since we only send input to the robot when it wants to receive it.
					</p>
					<p>
						The camera feed was mostly handled by a third party software and was not programmed completely by us. In the video demonstrations below, the robot is going 
						to smash into walls or display odd behaviour. This is due to dead zones in our school's WI-FI.
					</p>

					<div class="d-flex justify-content-center my-2">
						<iframe src="https://www.youtube.com/embed/lZ1f9BNhYtE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 d-flex justify-content-center justify-content-md-start">
					<h1>Documentation</h1>
				</div>

				<div class="col d-flex justify-content-center justify-content-md-start">
					<a href="https://github.com/JKTurcotte/ese-wireless-robot-project" class="border border-2"><img src="/imgs/github.ico" alt="Github Link Icon" class="d-inline link-icons mx-1">Code Base</a>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start my-2">
					<a class="btn btn-primary home-downloads" href="docs/robot-report.pdf" role="button">Project Report</a>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start my-2">
					<a class="btn btn-primary home-downloads" href="docs/robot-board-design.pdf" role="button">Control Board Design</a>
				</div>

				<div class="col-12 d-flex justify-content-center justify-content-md-start my-2">
					<a class="btn btn-primary home-downloads" href="docs/robot-functional-requirements.pdf" role="button">Functional Requirements</a>
				</div>
			</div>
    </div>

		<?php 
      require($_SERVER['DOCUMENT_ROOT'] . '/html/footer.html'); 
    ?>
		
		<!-- Bootstrap JS & Dependencies Bundle -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
