	@extends('layouts.principal')

	@section('content')
	<div class="review-content">
			<div class="top-header span_top">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" alt="" /></a>
					<p>Movie Theater</p>
				</div>
				<div class="search v-search">
					<form>
						<input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"/>
						<input type="submit" value="">
					</form>
				</div>
				<div class="clearfix"></div>
			</div>





			<div class="reviews-section">
				<h3 class="head">Movie Reviews</h3>
					<div class="col-md-9 reviews-grids">

						@foreach($movies as $movie)

						<div class="review">
							<div class="movie-pic">
								<a href="single.html"><img src="movies/{{$movie->path}}" style="width:100px"></a>
							</div>
							<div class="review-info">
								<a class="span" href="single.html"> <i>{{$movie->name}}</i></a>
								
								<div class="clearfix"></div>								
								<p class="info">CAST:{{$movie->cast}}</p>
								<p class="info">DIRECTION:{{$movie->direction}}</p>
								<p class="info">GENRE:	{{$movie->genre}}</p>
								<p class="info">DURATION:	{{$movie->duration}}</p>
							</div>
							<div class="clearfix"></div>
						</div>	
						@endforeach



						
						
						
					</div>				
					<div class="clearfix"></div>
			</div>
			</div>





		<div class="review-slider">
			 <ul id="flexiselDemo1">
			<li><img src="images/r1.jpg" alt=""/></li>
			<li><img src="images/r2.jpg" alt=""/></li>
			<li><img src="images/r3.jpg" alt=""/></li>
			<li><img src="images/r4.jpg" alt=""/></li>
			<li><img src="images/r5.jpg" alt=""/></li>
			<li><img src="images/r6.jpg" alt=""/></li>
		</ul>
			<script type="text/javascript">
		$(window).load(function() {
			
		  $("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>	
		</div>

	@stop