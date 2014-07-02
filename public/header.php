<!DOCTYPE html>
<html>

<head>
	<title>Ezbayan</title>

	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

	<link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="style.css">
</head>

<?php $body_class = 'page-'.str_replace('.php', '', basename($_SERVER['PHP_SELF']));?>
<?php
	$body_style = '';
	if ($body_class == 'page-sentences' || 'page-quiz') {
		if (isset($_GET['chapter_id'])) {
			$chapter_id = $_GET['chapter_id'];
			$body_style = 'style="'.
						'background: url(img/dereza/chapter-'.$chapter_id.'-bg.png) fixed; '.
						'background-size: cover; '.
						'background-position: center 110%;"';
		} 
	} 
?>
<body class="<?php echo $body_class; ?>" <?php echo $body_style; ?>>

	<header>
		<div class="container">
			<div class="row">
				<div class="col-xs-3 logo"><a href="chapters.php">Ez Bayan</a></div>
				<section class="col-xs-9 trackers">
					<?php include('header-login.php'); ?>


