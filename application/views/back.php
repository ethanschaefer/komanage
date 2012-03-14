<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<?php if (!$is_ajax): ?>
<head> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
<meta name="description" content="<?= $config['meta-description'] ?>" />
<meta name="language" content="en-us" /> 
<title><?= $title ?></title>
<link href="/assets/css/default/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
<script type="text/javascript" src="/assets/jquery/colorbox/jquery.colorbox.js"></script>
<script type="text/javascript" src="/assets/js/application.js"></script>
<link href="/assets/jquery/colorbox/colorbox.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/assets/jquery/chosen/chosen.jquery.js"></script>
<link href="/assets/jquery/chosen/chosen.css" type="text/css" rel="stylesheet" />
<style type="text/css">
	body {
		margin: 0;
		padding: 0;
}

.error {
    color: red;
}
.message {
    padding: 10px;
    background-color: yellow;
}

#alert {
	display: none;
	text-align: center;
	font-size: 1.3em;
	width: 100%;
	background-color: rgba(100,255,100,0.9);
	color: rgba(255,255,255,0.5);
}

#alert.error {
	background-color: rgba(255,100,100,0.9);
}

body {
	position: relative;
}
</style>
</head>
<?php endif; ?>
<body>
	<?php if (!$is_ajax): ?>
	<div id="alert">
	</div>
    <header>
		<h1>
			<?= $config['title'] ?>
		</h1>
		<nav>
			<?php include Kohana::find_file("views", "$template/shared/navigation"); ?>
		</nav>
	</header>
	<?php endif; ?>
    <div id="content">
        <?= $content; ?>
    </div>
</body>
</html>
