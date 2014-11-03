<?php
// Requires header.php in the blog
	require_once(__DIR__ . "/view/header.php");
	require_once(__DIR__ . "/view/navigation.php");
// Checks if the fille is already their. If not, requires it.
 require_once(__DIR__ . "/controller/create-db.php");
 // Requires footer.php in the blog
 require_once(__DIR__ . "/view/footer.php");
?>