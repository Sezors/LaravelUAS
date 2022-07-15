@extends('layouts.app')

@section('content')
<div class="main">
		{{-- <header id="header" class="header">
			<h1>Shopping Cart</h1>
			<div class="iconShopping">
				<p>0</p>
				<i class="fa fa-shopping-cart"></i>
			</div>
		</header><!-- /header --> --}}
		<div class="itemsBox">
			<div class="item">
				<img src="https://m.media-amazon.com/images/I/71c4prQcTbL._AC_UL480_FMwebp_QL65_.jpg" alt="Men's Solid Regular Fit T-Shirt"/>
				<div class="itemInfo">
					<h1>Men's Solid Regular Fit T-Shirt</h1>
					<p>$<span>42.50</span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
			</div>
			<div class="item">
				<img src="https://m.media-amazon.com/images/I/71Zc8O9GW7L._AC_UL480_FMwebp_QL65_.jpg"/>
				<div class="itemInfo">
					<h1>SARAF SURGEON MASK SET OF 5</h1>
					<p>$<span>15.50</span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
			</div>
			<div class="item">
				<img src="https://m.media-amazon.com/images/I/61+7aqLHBoL._AC_UL480_FMwebp_QL65_.jpg"/>
				<div class="itemInfo">
					<h1>Men's Black Footwear UK</h1>
					<p>$<span>100.50</span></p>
					<a href="#" title="add to cart" class="attToCart">Add to cart</a>
				</div>
			</div>
		</div>
	</div>
	<div class="cartBox">
		<div class="cart">
			<i class="fa fa-close"></i>
			<h1>Cart</h1>
			<table></table>
		</div>
	</div>


	<!-- script -->
	<script src="index.js"></script>
    @endsection