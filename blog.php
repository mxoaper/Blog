<body>
<?php
// Requires login-verify.php in the blog
require_once(__DIR__ . "/controller/login-verify.php");
// Requires header.php in the blog
require_once(__DIR__ . "/view/header.php");
// This If statement will only run if the user has been authenticated or not
if(authenticateUser()) {
	//  Requires navigation.php in the blog
	require_once(__DIR__ . "/view/navigation.php");
}
// Checks if the fille is already their. If not, requires it.
 require_once(__DIR__ . "/controller/create-db.php");
 // Requires footer.php in the blog
 require_once(__DIR__ . "/view/footer.php");
 // Requires read-posts.php in the blog
 require_once(__DIR__ . "/controller/read-posts.php");
?>
</body>