<!DOCTYPE html>

<html>

<head>


<?php wp_head();?>

<!-- /*FONTAWESOME CDN IMPORT*/ -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- /*GOOGLE FONTS CDN IMPORT*/ -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,400&display=swap" rel="stylesheet"> 

</head>

<body <?php body_class();?>>

<header class="sticky-top">

<div class="container pt-5 pb-5">


<nav class="navbar navbar-expand-lg">
	<?php wp_nav_menu(
	
		array(
		
			'theme_location' => 'top-menu',
			'menu_class' => 'navigation'
						
		)
	
	);?>


</nav>
</div>	

</header>