<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hot Wheels</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />  

        
        <!-- Styles -->

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        

        
    </head>

    <header>
    
    <!-- <h1> Hot Wheels </h1> 

    <img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExdGttYnc2Yng3cGFwY3hjb3F2cG1nNmc0bmg0ZHdoNnYwdHA0MmMzayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/8K5xxe2CXsdyNP22Ez/giphy.gif" class="fixed-logo">
        <nav>
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">COLLECTION</a>
            <a href="#">WISHLIST</a>
            <a href="#">FAVORITES</a>
            <div id="indicator"></div>
        </nav>

    </header> -->
    
    <div class="menu-btn">
    <i class="fas fa-bars fa-2x"></i>
  </div>

  <div class="container">
    <!-- Nav -->
    <nav class="main-nav">
    <a href="../home" alt="Hot Wheels"><img src="https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExdGttYnc2Yng3cGFwY3hjb3F2cG1nNmc0bmg0ZHdoNnYwdHA0MmMzayZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/8K5xxe2CXsdyNP22Ez/giphy.gif" alt="Hot Wheels" class="logo"></a>
    <h1><a href="../home" alt="Hot Wheels">Hot Wheels</a></h1>

    <ul class="main-menu">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('collection') }}">Collection</a></li>
        <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
        <li><a href="{{ route('favorite') }}">Favorite</a></li>
        <li><a href="{{ route('about') }}">About</a></li>
    </ul>

    </nav>

    <body>

    <div class="titlecol"> Wishlist </div>

    <hr class="rounded">
    
    <div class="section-fluid-main">
		<div class="section-row">
			<div class="section-col">
				<div class="section">
					<div class="section-in">
						<img src="img/ae86.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="hover-text">
				<h2>'Toyota AE86 <br> Sprinter Trueno</h2>
			</div>
			<div class="section-col">
				<div class="section">
					<div class="section-in h10">
						<img src="img/ek9.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="hover-text">
				<h2>'99 Honda Civic <br> Type R (EK9)</h2>
			</div>
			<div class="section-col">
				<div class="section">
					<div class="section-in">
						<img src="img/r34.jpg" alt="">
					</div>
				</div>
			</div>
			<div class="hover-text">
				<h2>Nissan Skyline <br> GT-R  R34</h2>
			</div>
			<div class="section-col">
				<div class="section">
					<div class="section-in">
						<img src="img/eg.jpg" alt="">
					</div>
				</div>
			</div>
      <div class="hover-text">
				<h2>Honda Civic EG</h2>
			</div>

    <!-- Showcase -->
    
    <!-- <header class="showcase">
    </header>
    <div class="skyline">
        <img src="img/home1.png" alt="">
    </div>

    <div class="ae">
        <img src="img/home2.png" alt="">
    </div>
   <div class="description"> <h2>Collection</h2>
      <p>
      My personal collection of Hot Wheels
      </p>
    </div> -->

    <!-- Home cards 1 -->
    <!-- <section class="home-cards">
      <div>
        <img src="img/gtr.jpg" alt="">
        <h3>'17 Nissan GT-R (R35)</h3>
        <p>
          lorem ipsum
        </p>
        <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
      </div>
      <div class="">
        <img src="240z.jpg" alt="" />
        <h3>Custom Datsun 240z</h3>
        <p>
          lorem ipsum
        </p>
        <a href="#">Learn More <i class="fas fa-chevron-right"></i></a> 
      </div>
      <div>
        <img src="https://i.ibb.co/2cnshH6/card3.png" alt="" />
        <h3>Save $150 + free controller</h3>
        <p>
          Buy an Xbox One X console and double your fun with a free select
          extra controller. Starting at $349.
        </p>
        <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
      </div>
      <div>
        <img src="https://i.ibb.co/G57P0Pb/card4.png" alt="" />
        <h3>The new Microsoft Edge</h3>
        <p>
          Expect more. World class performance, with more privacy, more
          productivity, and more value.
        </p>
        <a href="#">Learn More <i class="fas fa-chevron-right"></i></a>
      </div>
    </section>  -->

    <!-- Xbox -->
    <!-- <section class="xbox">
      <div class="content">
        <h2>Xbox Game Pass Ultimate</h2>
        <p>Xbox Game Pass Ultimate Xbox Live Gold and over 100 high-quality
          console and PC games. Play together with friends and discover your
          next favorite game.</p>
          <a href="#" class="btn">
            Join Now <i class="fas fa-chevron-right"></i>
          </a>
      </div>
    </section> -->

    <!-- Home cards 2 -->
			<!-- <section class="home-cards">
				<div>
					<img src="https://i.ibb.co/zVqhWn2/card5.png" alt="" />
					<h3>Microsoft Teams</h3>
					<p>
						Unleash the power of your team.
					</p>
					<a href="#">Shop Now <i class="fas fa-chevron-right"></i></a>
				</div>
				<div>
					<img src="https://i.ibb.co/mGZcxcn/card6.jpg" alt="" />
					<h3>Unlock the power of learning</h3>
					<p>
						Get students future-ready with Windows 10 devices. Starting at $219.
					</p>
					<a href="#">Shop Now <i class="fas fa-chevron-right"></i></a>
				</div>
				<div>
					<img src="https://i.ibb.co/NpPvVHj/card7.png" alt="" />
					<h3>Windows 10 Enterprise</h3>
					<p>
						Download the free 90-day evaluation for IT professionals.
					</p>
					<a href="#">Download Now <i class="fas fa-chevron-right"></i></a>
				</div>
				<div>
					<img src="https://i.ibb.co/LkP4L5T/card8.png" alt="" />
					<h3>Explore Kubernetes</h3>
					<p>
						Learn how Kubernetes works and get started with cloud native app
						development today.
					</p>
					<a href="#">Get Started <i class="fas fa-chevron-right"></i></a>
				</div>
      </section> -->
      
      <!-- Carbon -->
      <!-- <section class="carbon dark">
        <div class="content">
          <h2>Commiting To Carbon Negative</h2>
          <p>Microsoft will be carbon negative by 2030 and by 2050 we will remove
            all carbon the company has emitted since it was founded in 1975</p>
            <a href="#" class="btn">
              Learn More <i class="fas fa-chevron-right"></i>
            </a>
        </div>
      </section> -->

      <!-- Follow -->
      <!-- <section class="follow">
        <p>Follow Microsoft</p>
        <a href="https://facebook.com">
          <img src="https://i.ibb.co/LrVMXNR/social-fb.png" alt="Facebook">
        </a>
        <a href="https://twitter.com">
          <img src="https://i.ibb.co/vJvbLwm/social-twitter.png" alt="Twitter">
        </a>
        <a href="https://linkedin.com">
          <img src="https://i.ibb.co/b30HMhR/social-linkedin.png" alt="Linkedin">
        </a>
      </section>
    </div> -->
      <!-- Links -->

      <!-- Footer -->
      <footer class="footer">
        <div class="footer-inner">
          <div><i class="fas fa-globe fa-2x"></i> English (United States)</div>
          <ul>
					<li><a href="#">&copy; Hot Wheels 2020</a></li>
          </ul>
        </div>
      </footer>
    </body>
</html>

