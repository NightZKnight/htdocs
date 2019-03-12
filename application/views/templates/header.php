<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="<?php echo base_url('assets/master.css'); ?>">
		<script src="<?php echo base_url('assets/jquery.js'); ?>" charset="utf-8"></script>
      <script src="<?php echo base_url('assets/main.js'); ?>" charset="utf-8"></script>
      <link href="https://fonts.googleapis.com/css?family=Catamaran:500" rel="stylesheet">
      <title><?php echo $title ?></title>
   </head>
   <body>

		<header>
			<a href="<?php echo base_url(); ?>">
				<img class="flt-lt" src="<?php echo base_url('assets/img/text.svg') ?>" alt="logo-text">
			</a>

			<div class="avatar">
				<div class="overlay"></div>
				<img class="flt-rt" src="<?php echo base_url('assets/img/cookie-admin.jpg') ?>" alt="admin-pic">
				<svg class="carrot" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><g><path fill="inherit" d="M14.1711599,9.3535 L9.99925636,13.529 L5.82735283,9.3535 C5.51262415,9.0385 5.73543207,8.5 6.18054835,8.5 L13.8179644,8.5 C14.2630807,8.5 14.4858886,9.0385 14.1711599,9.3535"></path></g></svg>
				<ul class="hide">
					<li> <a href="parselinks">SIGN IN</a>  </li>
				</ul>
			</div>

			<input class="search-box flt-rt" type="text" name="search" value="" placeholder="Search">
		</header>
