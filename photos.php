<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>GELIFT - Photo's <?= intval($_GET['y']) ?></title>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet" type="text/css">
		
        <!--[if IE]>
            <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
		<style>
			html {
				height: 100%;
			}
		</style>
    </head>
    <body class="" style="height: 100%">
		<?php include('navigation.php'); ?>
        <div style="height: calc(100% - 60px); width: 100%;">
		<iframe src="<?php
			switch($_GET['y']) {
				case '2016':
				echo 'https://gewis.nl/photo/album/1393';
				break;
				case '2015':
				echo 'https://gewis.nl/photo/album/712';
				break;
				case '2014':
				echo 'https://gewis.nl/photo/album/831';
				break;
			}
		
		?>" width="100%" height="100%"></iframe>
		</div>
    </body>
</html>

<!-- http://www.flaticon.com/free-icon/trophy-of-sports-with-number-1_48459 -->