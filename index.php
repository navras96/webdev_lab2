<!DOCTYPE html>
<html>
<head>
	<title>Start Game</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="sortcut icon" type="image/x-icon" href="favicon.ico">
    <?php include_once("menu.php"); ?>
</head>
<body background="images/backgr.jpg">
<?php
$page = $_GET["page"];
if ($page == null) $page = 1;
Menu::renderMenu($page);
?>
<?php
$page = $_GET["page"];
if ($page == null) $page = 1;
Menu::getPage($page); ?>
</body>
</html>
