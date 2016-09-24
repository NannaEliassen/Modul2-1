<!--dette skrives for at aktivere "active" linket-->
<?php $curpage = basename ($_SERVER['PHP_SELF']); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Projekt 2 - opgave 1 - menu</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="menu">
<?php 
/*Her hentes menuen*/
include '../Projekt2/menu.php';
?>


<!--Nu kan du skrive html igen-->

<h1>Home</h1>
<p>Velkommen til min side</p>
<p>Er er lidt sider, du kan kigge på.</p>


</body>
</html>
 