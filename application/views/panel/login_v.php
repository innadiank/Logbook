<!DOCTYPE html>
<html lang="id" >
  <head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <meta property="og:title" content="Nirwana Course" />
		<meta property="og:description" content="My playgrounds where I exercise funny ideas – In this first lab I wanted to create a login box that is more alive than what we are used to. It uses Foundation 5 for the framework (foundation.zurb.com) and GSAP JS for the javascript animations (www.greensock.com)" />
		<meta property="og:type" content="advertisment" />
		<meta property="og:url" content="http://www.nirwana-course.com/" />
		<meta property="og:site_name" content="Nirwana Course" />
		<meta property="og:image" content="<?php echo base_url('assets/panel/company.ico')?>" />
    <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url('assets/panel/company.ico')?>' />
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/css/normalize.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/css/foundation.min.css')?>">
    <!-- <link rel="stylesheet" href="<?php echo base_url('assets/panel/css/font-awesome.min.css')?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/foundation/6.2.0/foundation.min.css'> -->
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(https://fonts.googleapis.com/css?family=Montserrat);
      @import url(https://fonts.googleapis.com/css?family=Open+Sans);
      input[type=password]::-ms-reveal, input[type=password]::-ms-clear {
        display: none;
      }

      /* Removing this since I'll add it myself for browser compatibility */
      input[type="text"], input[type="password"], input[type="submit"] {
        -webkit-border-top-left-radius: 360px;
        -moz-border-top-left-radius: 360px;
        -ms-border-top-left-radius: 360px;
        border-top-left-radius: 360px;
        -webkit-border-top-right-radius: 360px;
        -moz-border-top-right-radius: 360px;
        -ms-border-top-right-radius: 360px;
        border-top-right-radius: 360px;
        -webkit-border-bottom-left-radius: 360px;
        -moz-border-bottom-left-radius: 360px;
        -ms-border-bottom-left-radius: 360px;
        border-bottom-left-radius: 360px;
        -webkit-border-bottom-right-radius: 360px;
        -moz-border-bottom-right-radius: 360px;
        -ms-border-bottom-right-radius: 360px;
        border-bottom-right-radius: 360px;
      }

      input[type="text"], input[type="password"] {
        padding-left: 2.75em;
      }

      input[type="submit"] {
        width: 100%;
        background-color: #003b64;
        color: white;
        border: 0;
        padding: 8px;
        -webkit-transition: all 0.25s ease-in-out;
        -moz-transition: all 0.25s ease-in-out;
        -ms-transition: all 0.25s ease-in-out;
        -o-transition: all 0.25s ease-in-out;
        transition: all 0.25s ease-in-out;
      }

      input[type="submit"]:hover {
        background-color: #1677bb;
      }

      label {
        display: inline;
        position: absolute;
        top: 0.65em;
        left: 2.30em;
        color: #999999;
      }

      form {
        position: relative;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
      }

      form .row .row {
        margin: 0 -0.9375rem;
      }

      body {
        color: #999999;
        background-image: url("<?php echo base_url('assets/panel/new5.jpg')?>");
        background-size: cover;
      }

      p.intro1, p.intro2 {
        text-align: center;
        color: white;
        font-size: 0.9em;
        margin-bottom: 40px;
        font-family: 'Open Sans';
      }

      p.intro2 {
        opacity: 0;
      }

      .wrapper, .morphHeader {
        font-family: "Montserrat", Helvetica, Arial, sans-serif;
        background-color: #f2f2f2;
        -webkit-border-top-left-radius: 6px;
        -moz-border-top-left-radius: 6px;
        -ms-border-top-left-radius: 6px;
        border-top-left-radius: 6px;
        -webkit-border-top-right-radius: 6px;
        -moz-border-top-right-radius: 6px;
        -ms-border-top-right-radius: 6px;
        border-top-right-radius: 6px;
        -webkit-border-bottom-left-radius: 6px;
        -moz-border-bottom-left-radius: 6px;
        -ms-border-bottom-left-radius: 6px;
        border-bottom-left-radius: 6px;
        -webkit-border-bottom-right-radius: 6px;
        -moz-border-bottom-right-radius: 6px;
        -ms-border-bottom-right-radius: 6px;
        border-bottom-right-radius: 6px;
      }

      .header, .footer, .morphHeader {
        text-align: center;
        text-transform: uppercase;
      }

      .header, .morphHeader {
        -webkit-border-top-left-radius: 6px;
        -moz-border-top-left-radius: 6px;
        -ms-border-top-left-radius: 6px;
        border-top-left-radius: 6px;
        -webkit-border-top-right-radius: 6px;
        -moz-border-top-right-radius: 6px;
        -ms-border-top-right-radius: 6px;
        border-top-right-radius: 6px;
        -webkit-border-bottom-left-radius: 0;
        -moz-border-bottom-left-radius: 0;
        -ms-border-bottom-left-radius: 0;
        border-bottom-left-radius: 0;
        -webkit-border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
        -ms-border-bottom-right-radius: 0;
        border-bottom-right-radius: 0;
        font-size: 1.7em;
        background-image: url("<?php echo base_url('assets/panel/newy.jpg')?>");
        padding: 2em;
        color: white;
      }

      .username {
        padding-top: 1.25rem;
      }

      .submit, .footer {
        padding-bottom: 1.25rem;
      }

      .morphButton {
        z-index: 999;
        -webkit-border-top-left-radius: 360px;
        -moz-border-top-left-radius: 360px;
        -ms-border-top-left-radius: 360px;
        border-top-left-radius: 360px;
        -webkit-border-top-right-radius: 360px;
        -moz-border-top-right-radius: 360px;
        -ms-border-top-right-radius: 360px;
        border-top-right-radius: 360px;
        -webkit-border-bottom-left-radius: 360px;
        -moz-border-bottom-left-radius: 360px;
        -ms-border-bottom-left-radius: 360px;
        border-bottom-left-radius: 360px;
        -webkit-border-bottom-right-radius: 360px;
        -moz-border-bottom-right-radius: 360px;
        -ms-border-bottom-right-radius: 360px;
        border-bottom-right-radius: 360px;
      }

      .morphButton, .morphHeader {
        opacity: 0;
        background-color: #1677bb;
        text-align: center;
      }

      .loading, .success, .failure {
        color: white;
        line-height: 34px !important;
        text-align: center;
      }

      .tooltip p {
        font-family: 'Open Sans';
        font-size: 13px;
        line-height: 16px;
      }

      .columns {
        position: relative;
      }
    </style>

    <script src="<?php echo base_url('assets/panel/js/prefixfree.min.js')?>"></script>
    <script src = "<?php echo base_url('assets/panel/js/jquery.min.js')?>" crossorigin = "anonymous"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" crossorigin = "anonymous"></script> -->
  </head>

<body>

  <!--
	Exercise from Briefbox.me
	Brief: Design a simple, fresh sign-up form

	Disclaimer:
	Background taken from https://sumry.me/login | Credits to them. I just didn't wanted to bother to create something like this
-->

<form method="post" autocomplete="off">
	<p class="intro1"></p>
	<p class="intro2"; style=color:red;background-color:white;margin-left:500px;margin-right:500px;font-family:Apple Chancery>The USERNAME or PASSWORD you entered is INCORRECT !!!</p>

	<div class="row">
		<div class="wrapper large-4 columns large-centered small-6 small-centered">
			<div class="row header">
				<div class="large-12 columns" style="color: white;font:bold;font-family:Verdana"><br>Log In</div>
			</div>

			<div class="row username">
				<div class="large-9 columns large-centered">
					<label for="userId"><i class="fa fa-user"></i></label>
					<input id="userId" type="text" name="userId" placeholder="User ID" required autocomplete="off" />
				</div>
			</div>

			<div class="row password">
				<div class="large-9 columns large-centered">
					<label for="userPass"><i class="fa fa-lock"></i></label>
					<input id="userPass" type="password" name="userPass" placeholder="Password" required autocomplete="off" />
				</div>
			</div>

			<div class="row submit">
				<div class="large-9 columns large-centered">
					<input type="submit" name="login" id="login" value="Login">
				</div>
			</div>
		</div>
	</div>
</form>

<span class='morphButton'>
	<img class="avatar"   src="<?php echo base_url('assets/panel/logo2.jpg')?>">
	<i class="fa fa-refresh fa-spin loading"></i>
	<i class="fa fa-check success"></i>
	<i class="fa fa-times failure"></i>
</span>

<span class="morphHeader"> W E L C O M E ! </span>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script src='<?php echo base_url('assets/panel/js/TweenMax.min.js')?>'></script>
<script type="text/javascript">var base_url = "<?php echo base_url()?>";</script>
<script  src="<?php echo base_url('assets/panel/js/index.js');?>"></script>
</body>
</html>