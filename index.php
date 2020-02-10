<?php
  $load = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
  $action = (isset($_GET['action']) && $_GET['action'] != '') ? $_GET['action'] : '';
?>
<!DOCTYPE html>
<html>
  <head>
    <title> Vegan Lifestyle </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Josefin+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="sidenav">
      <img src="img/icon.png">
      <a href="index.php?page=home">Home</a>
      <a href="index.php?page=vfood">Vegan Foods</a>
      <a href="index.php?page=vnews">Vegan News</a>
    </div>
    <div class="content">
			<?php
			switch ($load) {
				case 'vfood':
				    require_once('page-food.php');
				        break;
				case 'vnews':
			      require_once('page-news.php');
			          break;
				default:
					  require_once('home.php');
					      break;
				}
			?>
    </div>
  </body>
</html>
