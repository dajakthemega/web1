<?php
print '
<!DOCTYPE html>
<html lang="hr">
<head>
<link href="https://fonts.googleapis.com/css?family=Black+And+White+Picture" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css.css">
<link rel="icon"  href="jaki5.jpg">
<title>GTA</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="wabapp, vvg">
<meta name="description" content="Projektni zadatak iz predmeta Web aplikacije">
<meta name="author" content="Ivica Dajaković">

</head>
<body>';

include("nav.php");
print '

<main>';

		if (!isset($_GET['menu']) || $_GET['menu'] == 0) { include("home1.php"); }
		
		else if ($_GET['menu'] == 1) { include("news.php"); }
                        
        else if ($_GET['menu'] == 2) { include("contact.php"); }	
				
		else if ($_GET['menu'] == 3) { include("about.php"); }			
			
        else if ($_GET['menu'] == 4) { include("gallery.php"); }	
        
        else if ($_GET['menu'] == 5) { include("michel.php"); }

        else if ($_GET['menu'] == 6) { include("trevor.php"); }

        else if ($_GET['menu'] == 7) { include("franklin.php"); }
				
print '
</main>
</body>';
include("foot.php");
print '

</html>';
?>