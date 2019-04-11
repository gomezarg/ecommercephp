<!DOCTYPE html>
<html>
<head>
	<title>Ecommerce - Optica</title>
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<header>
		<nav class="nav">
			<ul class="desktop-ul">
				<li class="elements"><a href="./"><i class="fas fa-glasses"></i> Productos</a></li>
				<li class="elements"><a href="pagar"><i class="fas fa-shopping-cart"></i> Pagar</a></li>
				<li class="elements li-buttons"><a href="login"><i class="fas fa-sign-in-alt"></i> Iniciar sesión</a></li>
				<li class="elements li-buttons"><a href="registro"><i class="fab fa-wpforms"></i> Registro</a></li>
			</ul>
		</nav>
		<nav class="responsive-nav">
			<i class="fas fa-angle-down icon-for-slide"></i>
			<ul class="responsive-ul">
				<li class="elements"><a href="./"><i class="fas fa-glasses"></i> Productos</a></li>
				<li class="elements"><a href="pagar"><i class="fas fa-shopping-cart"></i> Pagar</a></li>
				<li class="elements"><a href="login"><i class="fas fa-sign-in-alt"></i> Login</a></li>
				<li class="elements"><a href="registro"><i class="fab fa-wpforms"></i> Registro</a></li>
			</ul>
		</nav>
	</header>
	<section class="products">
		<div class="all-products">
			<div class="product-section">
				<div class="product">
					<div class="img-product">
						<img src="products/product1.png">
					</div>
					<div class="about-product">
						<b>Lentes de sol negro</b>
						<p>precio: <span>$399</span></p>
						<button class="buy" class="fas fa-shopping-cart" onclick="agregarProducto('lentes de sol','399')"><i></i> Agregar</button>
					</div>
				</div>
				<div class="product">
					<div class="img-product">
						<img src="products/product2.png">
					</div>
					<div class="about-product">
						<b>Anteojos de cristal</b>
						<p>precio: <span>$280</span></p>
						<button class="buy"  class="fas fa-shopping-cart" onclick="agregarProducto('Anteojos de cristal','280')"><i></i> Agregar</button>
					</div>
				</div>
				<div class="product">
					<div class="img-product">
						<img src="products/product3.png">
					</div>
					<div class="about-product">
						<b>Liquido de limpieza</b>
						<p>precio: <span>$320</span></p>
						<button class="buy" class="fas fa-shopping-cart" onclick="agregarProducto('Liquido','320')"><i></i> Agregar</button>
					</div>
				</div>
				<div class="product">
					<div class="img-product">
						<img src="products/product4.png">
					</div>
					<div class="about-product">
						<b>Lentes sol </b>
						<p>precio: <span>$310</span></p>
						<button class="buy" onclick="agregarProducto('Lentes sol','310')"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
			</div>
			<div class="product-section">
				<div class="product">
					<div class="img-product">
						<img src="products/product1.png">
					</div>
					<div class="about-product">
						<b>Lentes Armani</b>
						<p>precio: <span>$450</span></p>
						<button class="buy" onclick="agregarProducto('Lentes armani','450')"><i class="fas fa-shopping-cart" ></i> Agregar</button>
					</div>
				</div>
				<div class="product">
					<div class="img-product">
						<img src="products/product3.png">
					</div>
					<div class="about-product">
						<b>Gotas para ojos</b>
						<p>precio: <span>$53</span></p>
						<button class="buy" onclick="agregarProducto('Gotas para ojos','53')"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="product">
					<div class="img-product">
						<img src="products/product2.png">
					</div>
					<div class="about-product">
						<b>Lentes Pivot</b>
						<p>precio: <span>$31</span></p>
						<button class="buy"  onclick="agregarProducto('Lentes pivot','31')"><i class="fas fa-shopping-cart"></i> Agregar</button>
					</div>
				</div>
				<div class="product">
					<div class="img-product">
						<img src="products/product4.png">
					</div>
					<div class="about-product">
						<b>Glasses </b>
						<p>precio: <span>$32</span></p>
						<button class="buy" onclick="agregarProducto('Glasses','32')"><i class="fas fa-shopping-cart" ></i> Agregar</button>
					</div>
				</div>
			</div>
		</div>
		<div class="show-cart">
			<?php include("../private/show-cart.php"); ?>
		</div>
	</section>
<script src="js/default.js"></script>
<script src="js/index.js"></script>
</body>
</html>