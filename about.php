<!--dette skrives for at aktivere "active" linket-->
<?php $curpage = basename ($_SERVER['PHP_SELF']); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="menu">
<?php
/*Her hentes menuen*/
include '../Projekt2/menu.php';
?>

<h1>About</h1>
<p>Her vil jeg skrive lidt om mig selv.</p>
<p>så kan i lære mig bedre at kende</p>

</body>
</html>
