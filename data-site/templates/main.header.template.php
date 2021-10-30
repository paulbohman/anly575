<div id="logo">
	<a href="<?php echo URL_ROOT; ?>">My Website</a>
	<?php if (isset($_SESSION['firstname'])) {
		echo '<div id="loginWrapper">Welcome ' . $_SESSION['firstname'] . '</div>';
	} else {
		echo '<div id="loginWrapper"><a href="' . URL_ROOT . 'login.php" class="button">Login</a>';
	}
	?>
	
</div>