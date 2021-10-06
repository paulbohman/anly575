<?php
/**
 * Define default file paths for the header, nav, footer
 */
new Base;
if (!($values->header)) {
	$values->header = TEMPLATE_PATH . 'main.header.template.php';
}
if (!($values->nav)) {
	$values->nav = TEMPLATE_PATH . 'main.nav.template.php';
}
if (!($values->footer)) {
	$values->footer = TEMPLATE_PATH . 'main.footer.template.php';
}
$page->header = Base::renderExternalFile($values->header);
$page->nav = Base::renderExternalFile($values->nav);
$page->footer = Base::renderExternalFile($values->footer);

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

<?php 
if ($page->header) {
	echo "<header>\n<div class=\"innerContainer\">\n$page->header</div></header>\n";
}?>

<?php 
if ($page->nav) {
	echo "<nav>\n<div class=\"innerContainer\">\n$page->nav</div></nav>\n";
}?>

<main>
<div class="innerContainer">
<?php 
if ($page->heading) {
	echo "<h1>$page->heading</h1>\n";
}?>
<?php echo $page->content;?>
</div>
</main>

<?php 
if ($page->footer) {
	echo "<footer>\n<div class=\"innerContainer\">\n$page->footer</div></footer>\n";
}?>

</div>

</body>
</html>