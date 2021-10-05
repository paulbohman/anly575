<?php
/**
 * Define default file paths for the header, nav, footer
 */
new Base;
if (!($values->header)) {
	$values->header = Base::renderExternalFile(TEMPLATE_PATH . 'main.header.template.php');
}
if (!($values->nav)) {
	$values->nav = Base::renderExternalFile(TEMPLATE_PATH . 'main.nav.template.php');
}
if (!($values->footer)) {
	$values->footer = Base::renderExternalFile(TEMPLATE_PATH . 'main.footer.template.php');
}

/** Get URL root
 */
$hostname = $_SERVER['SERVER_NAME'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page->title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo URL_ROOT; ?>styles/styles.css">
	<?php echo $page->cssFiles;?>
	<?php echo $page->headStyles;?>
</head>

<body>

<div id="container">

<header>
<div class="innerContainer">
<?php echo $page->header;?>
</div>
</header>

<nav>
<div class="innerContainer">
<?php echo $page->nav;?>
</div>
</nav>

<main>
<div class="innerContainer">
<h1><?php echo $page->heading;?></h1>
<?php echo $page->content;?>
</div>
</main>

<footer>
<div class="innerContainer">
<?php echo $page->footer;?>
</div>
</footer>

</div>

</body>
</html>