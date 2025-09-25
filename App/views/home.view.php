<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>HBS Resources</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon ============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

	<!-- master CSS ============================================ -->
	<link rel="stylesheet" href="https://cdn.hbsresources.org/master.css">
	<!-- CHAT BOX STYLING -->
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'> -->
	<!-- <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/4.0.2/bootstrap-material-design.css'> -->
	<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>

	<!-- Color Css Files Start -->
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-one.css" title="color-one" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-two.css" title="color-two" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-three.css" title="color-three" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-four.css" title="color-four" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-five.css" title="color-five" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-six.css" title="color-six" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-seven.css" title="color-seven" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-eight.css" title="color-eight" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-nine.css" title="color-nine" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-ten.css" title="color-ten" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-eleven.css" title="color-eleven" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/color-twelv.css" title="color-twelve" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/pattren1.css" title="pattren1" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/pattren2.css" title="pattren2" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/pattren3.css" title="pattren3" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/pattren4.css" title="pattren4" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/pattren5.css" title="pattren5" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/background1.css" title="background1" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/background2.css" title="background2" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/background3.css" title="background3" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/background4.css" title="background4" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="https://cdn.hbsresources.org/switcher/background5.css" title="background5" media="screen">

	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.1.4/tailwind.min.css'>

	<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

	<style>
		#chat-circle {
			position: fixed;
			bottom: 50px;
			right: 50px;
			background: #5A5EB9;
			width: 80px;
			height: 80px;
			border-radius: 50%;
			color: white;
			padding: 28px;
			cursor: pointer;
			box-shadow: 0px 3px 16px 0px rgba(0, 0, 0, 0.6), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
		}

		.btn#my-btn {
			background: white;
			padding-top: 13px;
			padding-bottom: 12px;
			border-radius: 45px;
			padding-right: 40px;
			padding-left: 40px;
			color: #5865C3;
		}

		#chat-overlay {
			background: rgba(255, 255, 255, 0.1);
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			border-radius: 50%;
			display: none;
		}


		.chat-box {
			display: none;
			background: #efefef;
			position: fixed;
			right: 30px;
			bottom: 50px;
			width: 350px;
			max-width: 85vw;
			max-height: 100vh;
			border-radius: 5px;
			/*   box-shadow: 0px 5px 35px 9px #464a92; */
			box-shadow: 0px 5px 35px 9px #ccc;
		}

		.chat-box-toggle {
			float: right;
			margin-right: 15px;
			cursor: pointer;
		}

		.chat-box-header {
			background: #5A5EB9;
			height: 70px;
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
			color: white;
			text-align: center;
			font-size: 20px;
			padding-top: 17px;
		}

		.chat-box-body {
			position: relative;
			height: 370px;
			height: auto;
			border: 1px solid #ccc;
			overflow: hidden;
		}

		.chat-box-body:after {
			content: "";
			background-image: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDIwMCAyMDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTAgOCkiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PGNpcmNsZSBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIgY3g9IjE3NiIgY3k9IjEyIiByPSI0Ii8+PHBhdGggZD0iTTIwLjUuNWwyMyAxMW0tMjkgODRsLTMuNzkgMTAuMzc3TTI3LjAzNyAxMzEuNGw1Ljg5OCAyLjIwMy0zLjQ2IDUuOTQ3IDYuMDcyIDIuMzkyLTMuOTMzIDUuNzU4bTEyOC43MzMgMzUuMzdsLjY5My05LjMxNiAxMC4yOTIuMDUyLjQxNi05LjIyMiA5LjI3NC4zMzJNLjUgNDguNXM2LjEzMSA2LjQxMyA2Ljg0NyAxNC44MDVjLjcxNSA4LjM5My0yLjUyIDE0LjgwNi0yLjUyIDE0LjgwNk0xMjQuNTU1IDkwcy03LjQ0NCAwLTEzLjY3IDYuMTkyYy02LjIyNyA2LjE5Mi00LjgzOCAxMi4wMTItNC44MzggMTIuMDEybTIuMjQgNjguNjI2cy00LjAyNi05LjAyNS0xOC4xNDUtOS4wMjUtMTguMTQ1IDUuNy0xOC4xNDUgNS43IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIi8+PHBhdGggZD0iTTg1LjcxNiAzNi4xNDZsNS4yNDMtOS41MjFoMTEuMDkzbDUuNDE2IDkuNTIxLTUuNDEgOS4xODVIOTAuOTUzbC01LjIzNy05LjE4NXptNjMuOTA5IDE1LjQ3OWgxMC43NXYxMC43NWgtMTAuNzV6IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIvPjxjaXJjbGUgZmlsbD0iIzAwMCIgY3g9IjcxLjUiIGN5PSI3LjUiIHI9IjEuNSIvPjxjaXJjbGUgZmlsbD0iIzAwMCIgY3g9IjE3MC41IiBjeT0iOTUuNSIgcj0iMS41Ii8+PGNpcmNsZSBmaWxsPSIjMDAwIiBjeD0iODEuNSIgY3k9IjEzNC41IiByPSIxLjUiLz48Y2lyY2xlIGZpbGw9IiMwMDAiIGN4PSIxMy41IiBjeT0iMjMuNSIgcj0iMS41Ii8+PHBhdGggZmlsbD0iIzAwMCIgZD0iTTkzIDcxaDN2M2gtM3ptMzMgODRoM3YzaC0zem0tODUgMThoM3YzaC0zeiIvPjxwYXRoIGQ9Ik0zOS4zODQgNTEuMTIybDUuNzU4LTQuNDU0IDYuNDUzIDQuMjA1LTIuMjk0IDcuMzYzaC03Ljc5bC0yLjEyNy03LjExNHpNMTMwLjE5NSA0LjAzbDEzLjgzIDUuMDYyLTEwLjA5IDcuMDQ4LTMuNzQtMTIuMTF6bS04MyA5NWwxNC44MyA1LjQyOS0xMC44MiA3LjU1Ny00LjAxLTEyLjk4N3pNNS4yMTMgMTYxLjQ5NWwxMS4zMjggMjAuODk3TDIuMjY1IDE4MGwyLjk0OC0xOC41MDV6IiBzdHJva2U9IiMwMDAiIHN0cm9rZS13aWR0aD0iMS4yNSIvPjxwYXRoIGQ9Ik0xNDkuMDUgMTI3LjQ2OHMtLjUxIDIuMTgzLjk5NSAzLjM2NmMxLjU2IDEuMjI2IDguNjQyLTEuODk1IDMuOTY3LTcuNzg1LTIuMzY3LTIuNDc3LTYuNS0zLjIyNi05LjMzIDAtNS4yMDggNS45MzYgMCAxNy41MSAxMS42MSAxMy43MyAxMi40NTgtNi4yNTcgNS42MzMtMjEuNjU2LTUuMDczLTIyLjY1NC02LjYwMi0uNjA2LTE0LjA0MyAxLjc1Ni0xNi4xNTcgMTAuMjY4LTEuNzE4IDYuOTIgMS41ODQgMTcuMzg3IDEyLjQ1IDIwLjQ3NiAxMC44NjYgMy4wOSAxOS4zMzEtNC4zMSAxOS4zMzEtNC4zMSIgc3Ryb2tlPSIjMDAwIiBzdHJva2Utd2lkdGg9IjEuMjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIvPjwvZz48L3N2Zz4=');
			opacity: 0.1;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			height: 100%;
			position: absolute;
			z-index: -1;
		}

		#chat-input {
			background: #f4f7f9;
			width: 100%;
			position: relative;
			height: 47px;
			padding-top: 10px;
			padding-right: 50px;
			padding-bottom: 10px;
			padding-left: 15px;
			border: none;
			resize: none;
			outline: none;
			border: 1px solid #ccc;
			color: #888;
			border-top: none;
			border-bottom-right-radius: 5px;
			border-bottom-left-radius: 5px;
			overflow: hidden;
		}

		.chat-input>form {
			margin-bottom: 0;
		}

		#chat-input::-webkit-input-placeholder {
			/* Chrome/Opera/Safari */
			color: #ccc;
		}

		#chat-input::-moz-placeholder {
			/* Firefox 19+ */
			color: #ccc;
		}

		#chat-input:-ms-input-placeholder {
			/* IE 10+ */
			color: #ccc;
		}

		#chat-input:-moz-placeholder {
			/* Firefox 18- */
			color: #ccc;
		}

		.chat-submit {
			position: absolute;
			bottom: 3px;
			right: 10px;
			background: transparent;
			box-shadow: none;
			border: none;
			border-radius: 50%;
			color: #5A5EB9;
			width: 35px;
			height: 35px;
		}

		.chat-logs {
			padding: 15px;
			height: 370px;
			overflow-y: scroll;
		}

		.chat-logs::-webkit-scrollbar-track {
			-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
			background-color: #F5F5F5;
		}

		.chat-logs::-webkit-scrollbar {
			width: 5px;
			background-color: #F5F5F5;
		}

		.chat-logs::-webkit-scrollbar-thumb {
			background-color: #5A5EB9;
		}

		@media only screen and (max-width: 500px) {
			.chat-logs {
				height: 40vh;
			}
		}

		.chat-msg.user>.msg-avatar img {
			width: 45px;
			height: 45px;
			border-radius: 50%;
			float: left;
			width: 15%;
		}

		.chat-msg.self>.msg-avatar img {
			width: 45px;
			height: 45px;
			border-radius: 50%;
			float: right;
			width: 15%;
		}

		.cm-msg-text {
			background: white;
			padding: 10px 15px 10px 15px;
			color: #666;
			max-width: 75%;
			float: left;
			margin-left: 10px;
			position: relative;
			margin-bottom: 20px;
			border-radius: 30px;
		}

		.chat-msg {
			clear: both;
		}

		.chat-msg.self>.cm-msg-text {
			float: right;
			margin-right: 10px;
			background: #5A5EB9;
			color: white;
		}

		.cm-msg-button>ul>li {
			list-style: none;
			float: left;
			width: 50%;
		}

		.cm-msg-button {
			clear: both;
			margin-bottom: 70px;
		}
	</style>
</head>

<body>
	<!-- Start main area -->
	<div class="main-area">
		<!-- Start header -->
		<header>
			<!-- Start header top -->
			<!-- End header top -->
			<!-- Start main menu area -->
			<div class="main-menu-area" id="sticker">
				<div class="container">
					<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
						<a class="text-3xl font-bold leading-none" href="#">
							<img src="https://cdn.hbsresources.org/img/hbs_logo.png" alt="" width="100">
						</a>
						<div class="lg:hidden">
							<button class="navbar-burger flex items-center text-blue-600 p-3">
								<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
									<title>Mobile menu</title>
									<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
								</svg>
							</button>
						</div>
						<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
							<li><a class="text-sm text-blue-600 font-bold " href="#">Home</a></li>
							<li class="text-gray-300"></li>
							<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">About Us</a></li>
							<li class="text-gray-300"></li>
							<li><a class="text-sm text-gray-400 hover:text-gray-500" href="#">Contact</a></li>
							<li class="text-gray-300"></li>
						</ul>
						<!-- <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200" href="#">Sign In</a> -->
						<!-- <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Sign up</a> -->
					</nav>
					<div class="navbar-menu relative z-50 hidden">
						<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
						<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
							<div class="flex items-center mb-8">
								<a class="mr-auto text-3xl font-bold leading-none" href="#">
							<img src="https://cdn.hbsresources.org/img/hbs_logo.png" alt="" width="100">
								</a>
								<button class="navbar-close">
									<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
									</svg>
								</button>
							</div>
							<div>
								<ul>
									<li class="mb-1">
										<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Home</a>
									</li>
									<li class="mb-1">
										<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">About Us</a>
									</li>
									<li class="mb-1">
										<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" href="#">Contact</a>
									</li>
								</ul>
							</div>
							<div class="mt-auto">
								<div class="pt-6">
									<!-- <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="#">Sign in</a> -->
									<!-- <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="#">Sign Up</a> -->
								</div>
								<p class="my-4 text-xs text-center text-gray-400">
									<span>Copyright © HBS Resources 2025</span>
								</p>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div id="body">
		<div id="chat-circle" class="btn btn-raised">
			<div id="chat-overlay"></div>
			<i class="material-icons">chat</i>
		</div>
		<div class="chat-box">
			<div class="chat-box-header">
				HBS Customer Support
				<span class="chat-box-toggle"><i class="material-icons">close</i></span>
			</div>
			<div class="chat-box-body">
				<div class="chat-box-overlay">
				</div>
				<div class="chat-logs">
				</div><!--chat-log -->
			</div>
			<div class="chat-input">
				<form>
					<input type="text" id="chat-input" placeholder="Send a message..." />
					<button type="submit" class="chat-submit" id="chat-submit"><i class="material-icons">send</i></button>
				</form>
			</div>
		</div>
	</div>

	<script id="rendered-js">
		// Burger menus
		document.addEventListener('DOMContentLoaded', function() {
			// open
			const burger = document.querySelectorAll('.navbar-burger');
			const menu = document.querySelectorAll('.navbar-menu');

			if (burger.length && menu.length) {
				for (var i = 0; i < burger.length; i++) {
					if (window.CP.shouldStopExecution(0)) break;
					burger[i].addEventListener('click', function() {
						for (var j = 0; j < menu.length; j++) {
							if (window.CP.shouldStopExecution(1)) break;
							menu[j].classList.toggle('hidden');
						}
						window.CP.exitedLoop(1);
					});
				}
				window.CP.exitedLoop(0);
			}

			// close
			const close = document.querySelectorAll('.navbar-close');
			const backdrop = document.querySelectorAll('.navbar-backdrop');

			if (close.length) {
				for (var i = 0; i < close.length; i++) {
					if (window.CP.shouldStopExecution(2)) break;
					close[i].addEventListener('click', function() {
						for (var j = 0; j < menu.length; j++) {
							if (window.CP.shouldStopExecution(3)) break;
							menu[j].classList.toggle('hidden');
						}
						window.CP.exitedLoop(3);
					});
				}
				window.CP.exitedLoop(2);
			}

			if (backdrop.length) {
				for (var i = 0; i < backdrop.length; i++) {
					if (window.CP.shouldStopExecution(4)) break;
					backdrop[i].addEventListener('click', function() {
						for (var j = 0; j < menu.length; j++) {
							if (window.CP.shouldStopExecution(5)) break;
							menu[j].classList.toggle('hidden');
						}
						window.CP.exitedLoop(5);
					});
				}
				window.CP.exitedLoop(4);
			}
		});
	</script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
	<script id="rendered-js">
		$(function() {
			var INDEX = 0;
			$("#chat-submit").click(function(e) {
				e.preventDefault();
				var msg = $("#chat-input").val();
				if (msg.trim() == '') {
					return false;
				}
				generate_message(msg, 'self');
				var buttons = [{
						name: 'Existing User',
						value: 'existing'
					},

					{
						name: 'New User',
						value: 'new'
					}
				];


				setTimeout(function() {
					generate_message('Hello, welcome to HBS customer support', 'user');
				}, 1000);
				setTimeout(function() {
					generate_message("Please note: this customer support chatbox isn't fully functional yet.", 'user');
				}, 1500);
				setTimeout(function() {
					generate_message('How can we help you?', 'user');
				}, 2000);

			});

			function generate_message(msg, type) {
				INDEX++;
				var str = "";
				str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg " + type + "\">";
				str += "          <span class=\"msg-avatar\">";
				if (type === 'user') {
					str += "<img src=\"https:\/\/cdn.hbsresources.org\/img\/operator_avatar.png\">";
				} else {
					str += "<img src=\"https:\/\/cdn.hbsresources.org\/img\/user_avatar.jpg\">";
				}
				str += "          <\/span>";
				str += "          <div class=\"cm-msg-text\">";
				str += msg;
				str += "          <\/div>";
				str += "        <\/div>";
				$(".chat-logs").append(str);
				$("#cm-msg-" + INDEX).hide().fadeIn(300);
				if (type == 'self') {
					$("#chat-input").val('');
				}
				$(".chat-logs").stop().animate({
					scrollTop: $(".chat-logs")[0].scrollHeight
				}, 1000);
			}

			function generate_button_message(msg, buttons) {
				/* Buttons should be object array 
				  [
				    {
				      name: 'Existing User',
				      value: 'existing'
				    },
				    {
				      name: 'New User',
				      value: 'new'
				    }
				  ]
				*/
				INDEX++;
				var btn_obj = buttons.map(function(button) {
					return "              <li class=\"button\"><a href=\"javascript:;\" class=\"btn btn-primary chat-btn\" chat-value=\"" + button.value + "\">" + button.name + "<\/a><\/li>";
				}).join('');
				var str = "";
				str += "<div id='cm-msg-" + INDEX + "' class=\"chat-msg user\">";
				str += "          <span class=\"msg-avatar\">";
				if (type === 'user') {
					str += "<img src=\"https:\/\/cdn.hbsresources.org\/img\/operator_avatar.png\">";
				} else {
					str += "<img src=\"https:\/\/cdn.hbsresources.org\/img\/user_avatar.jpg\">";
				}
				str += "          <\/span>";
				str += "          <div class=\"cm-msg-text\">";
				str += msg;
				str += "          <\/div>";
				str += "          <div class=\"cm-msg-button\">";
				str += "            <ul>";
				str += btn_obj;
				str += "            <\/ul>";
				str += "          <\/div>";
				str += "        <\/div>";
				$(".chat-logs").append(str);
				$("#cm-msg-" + INDEX).hide().fadeIn(300);
				$(".chat-logs").stop().animate({
					scrollTop: $(".chat-logs")[0].scrollHeight
				}, 1000);
				$("#chat-input").attr("disabled", true);
			}

			$(document).delegate(".chat-btn", "click", function() {
				var value = $(this).attr("chat-value");
				var name = $(this).html();
				$("#chat-input").attr("disabled", false);
				generate_message(name, 'self');
			});

			$("#chat-circle").click(function() {
				$("#chat-circle").toggle('scale');
				$(".chat-box").toggle('scale');
			});

			$(".chat-box-toggle").click(function() {
				$("#chat-circle").toggle('scale');
				$(".chat-box").toggle('scale');
			});

		});
		//# sourceURL=pen.js
	</script>


	<script src="https://cdn.hbsresources.org/js/vendor/modernizr-3.6.0.min.js"></script>

	<!-- jquery-3.6.0.min js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/vendor/jquery-3.6.0.min.js"></script>

	<!-- jquery-migrate-3.3.2.min js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/vendor/jquery-migrate-3.3.2.min.js"></script>

	<!-- bootstrap js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/bootstrap.bundle.min.js"></script>

	<!-- owl.carousel.min js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/owl.carousel.min.js"></script>

	<!-- jquery.nivo.slider.pack js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/jquery.nivo.slider.pack.js"></script>

	<!-- jquery.mixitup.min js
        ============================================ -->
	<script src="https://cdn.hbsresources.org/js/jquery.mixitup.min.js"></script>

	<!-- jquery.magnific-popup.min js
        ============================================ -->
	<script src="https://cdn.hbsresources.org/js/jquery.magnific-popup.min.js"></script>

	<!-- jquery.meanmenu js
        ============================================ -->
	<script src="https://cdn.hbsresources.org/js/jquery.meanmenu.js"></script>

	<!-- jquery.syotimer.min js
        ============================================ -->
	<script src="https://cdn.hbsresources.org/js/jquery.syotimer.min.js"></script>

	<!-- wow js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/wow.js"></script>

	<!-- jquery.scrollUp.min js
        ============================================ -->
	<script src="https://cdn.hbsresources.org/js/jquery.scrollUp.min.js"></script>

	<!-- jquery.ajaxchimp.min js
        ============================================ -->
	<script src="https://cdn.hbsresources.org/js/jquery.ajaxchimp.min.js"></script>

	<!-- plugins js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/plugins.js"></script>

	<script>
		new WOW().init();
	</script>

	<!-- styleswitch js
        ============================================ -->
	<script src="https://cdn.hbsresources.org/js/styleswitch.js"></script>

	<!-- main js
		============================================ -->
	<script src="https://cdn.hbsresources.org/js/main.js"></script>
</body>

</html>