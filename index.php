<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grocery Store</title>

	<!--Code for font awesone cdn-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--Code for font awesone cdn-->

	<!--Code for linking css file-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--Code for linking css file-->
	<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<link rel="icon" type="image/x-icon" href="/images/favicon.ico">

</head>

<body>
	<!--Header Section-->
	<header class="header">
		<a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>grocery</a>

		<nav class="navbar">
			<a href="#home">Home</a>
			<a href="#home">Feature</a>
			<a href="#home">Products</a>
			<a href="#home">Categories</a>
			<a href="#home">Reviews</a>
			<a href="#home">Blogs</a>
		</nav>

		<div class="icons">
			<div class="fa fa-bars" id="menu-btn"></div>
			<div class="fa fa-search" id="search-btn"></div>
			<div class="fa fa-shopping-cart" id="cart-btn"></div>
			<div class="fa fa-user" id="login-btn"></div>
		</div>

		<form action="" class="search-form">
			<input type="search" id="search-box" placeholder="search-here">
			<label for="search-box" class="fa fa-search"></label>
		</form>

		<div class="shopping-cart">
			<div class="box">
				<i class="fa fa-trash"></i>
				<img src="image/image/cart-img-1.png" alt="">
				<div class="content">
					<h3>Watermelon</h3>
					<span class="price">100</span>
					<span class="quantity">Qty: 2</span>
				</div>
			</div>
			<div class="box">
				<i class="fa fa-trash"></i>
				<img src="image/image/cart-img-3.png" alt="">
				<div class="content">
					<h3>Chicken</h3>
					<span class="price">100</span>
					<span class="quantity">Qty: 2</span>
				</div>
			</div>
			<div class="box">
				<i class="fa fa-trash"></i>
				<img src="image/image/cart-img-2.png" alt="">
				<div class="content">
					<h3>Onion</h3>
					<span class="price">100</span>
					<span class="quantity">Qty: 2</span>
				</div>
			</div>
			<div class="total"> total : 300/-</div>
			<a href="#" class="btn" id="cart-btn">Checkout</a>
		</div>
		<form action="" class="login-form">
			<h3>Login now</h3>
			<input type="email" class="box" placeholder=" your email">
			<input type="password" class="box" placeholder=" your password">
			<p>Forget Your password <a href="">Click Here</a></p>
			<p>Dont Have An Account <a href="">Create Now</a></p>

			<input type="submit" value="Login Now" class="btn ">
		</form>

	</header>
	<!--Header Section-->

	<!--Banner Section-->
	<div class="home" id="home">
		<section class="content">
			<h3>Fresh And <span> Organic </span>Products For You</h3>
			<p>An online grocer is either a brick-and-mortar supermarket or grocery store that allows online ordering,
				or a standalone e-commerce service that includes grocery items. There is usually a delivery charge for
				this service.</p>
			<a href="#" class="btn">shop now</a>
	</div>

	</section>
	<!--Banner Section-->

	<!--Feature Section-->
	<section class="features" id="features">
		<h1 class="heading"> our <span>features</span> </h1>
		<div class="box-container">
			<div class="box">
				<img src="image/image/feature-img-1.png" alt="" srcset="">
				<h3>fresh and organic</h3>
				<p>Our website provides fresh and hygenic grocery items.We provide organic items to provide best quality products to the customer</p>
				<a href="#" class="btn">read more</a>
			</div>
			<div class="box">
				<img src="image/image/feature-img-2.png" alt="" srcset="">
				<h3>free delivery</h3>
				<p>Our website provides free delivery on all the products min(RS.500 and above).Our website provides one day delivery to the plus customer member.</p>
				<a href="#" class="btn">read more</a>
			</div>
			<div class="box">
				<img src="image/image/feature-img-3.png" alt="" srcset="">
				<h3>Easy Payments</h3>
				<p>Our website provides all the methods of payment i.e UPI payment, Credit card, Debit card.Our website uses end to end encription in storing details.</p>
				<a href="#" class="btn">read more</a>
			</div>
		</div>

	</section>
	<!--Feature Section-->

	<!--Products Section-->
	<section class="products" id="products">
		<h1 class="heading"> our <span>products</span> </h1>

		<div class="swiper product-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide box">
					<img src="image/image/product-1.png" alt="">
					<h1>fresh orange</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
				<div class="swiper-slide box">
					<img src="image/image/product-2.png" alt="">
					<h1>fresh onion</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
				<div class="swiper-slide box">
					<img src="image/image/product-3.png" alt="">
					<h1>fresh meat</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
				<div class="swiper-slide box">
					<img src="image/image/product-4.png" alt="">
					<h1>fresh cabbage</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
			</div>
		</div>



		<div class="swiper product-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide box">
					<img src="image/image/product-5.png" alt="">
					<h1>fresh potato</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
				<div class="swiper-slide box">
					<img src="image/image/product-6.png" alt="">
					<h1>fresh Guvava</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
				<div class="swiper-slide box">
					<img src="image/image/product-7.png" alt="">
					<h1>fresh carrot</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
				<div class="swiper-slide box">
					<img src="image/image/product-8.png" alt="">
					<h1>fresh lemon</h1>
					<div class="price">100/- - 200/-</div>
					<div class="stars">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half"></i>
					</div>
					<a href="" class="btn">add to cart</a>
				</div>
				
			</div>
			<div class="swiper-pagination"></div>
					</div>
	</section>
	<!--Products Section-->
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script src="js/script.js"></script>

</body>

</html>