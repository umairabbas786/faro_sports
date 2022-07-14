<!-- Navbar -->

<style>
	.loader-logo {
  width: 300px;
  height: auto;
  max-width: 90%;
  overflow: hidden;
  transform: translatey(0px);
  -webkit-animation: float 3s ease-in-out infinite;
          animation: float 3s ease-in-out infinite;
}
.loader-logo img {
  width: 100%;
  height: auto;
}
.loader-logo svg {
  fill: #fff;
}

@-webkit-keyframes float {
  0% {
    transform: translatey(0px);
  }
  50% {
    transform: translatey(-20px);
  }
  100% {
    transform: translatey(0px);
  }
}

@keyframes float {
  0% {
    transform: translatey(0px);
  }
  50% {
    transform: translatey(-20px);
  }
  100% {
    transform: translatey(0px);
  }
}
</style>
<div class="navbar navbar-expand-lg is-transparent" id="mainnav">
			<nav class="container">
				<div class="loader-logo">
				<a class="navbar-brand animated nav-link menu-link d-flex justify-content-center" data-animate="fadeInDown" data-delay=".65" href="#header">
					<img class=" logo-dark" alt="logo" src="images/logo.png" srcset="images/logo2x.png ">
					<img style="width: 200px; height:35px;" class="logo logo-light"  alt="logo" src="images/logo-white.png" srcset="images/logo-white.png ">	
				</a>
</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggle">
					<span class="navbar-toggler-icon">
						<span class="ti ti-align-justify"></span>
					</span>
				</button>

				<div class="collapse navbar-collapse justify-content-end" id="navbarToggle">
					<ul class="navbar-nav animated" data-animate="fadeInDown" data-delay=".9">
						<li class="nav-item"><a class="nav-link menu-link" href="#header">Home</a></li>
                        <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Products</a>
							<div class="dropdown-menu">
								<a class="dropdown-item menu-link" href="#internet">Sports Wear</a>
                                <a class="dropdown-item menu-link" href="#internet">Sports Gear</a>
								<a class="dropdown-item menu-link" href="#internet">Accesories</a>
							</div>
						</li>
                        						
						 <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About</a>
							<div class="dropdown-menu">
								<a class="dropdown-item menu-link" href="#">Our Vision</a>
                                <a class="dropdown-item menu-link" href="#">Our Values</a>
                                <a class="dropdown-item menu-link" href="#">Our Production Facility</a>
								<a class="dropdown-item menu-link" href="#">Our Capabilites</a>

							</div>
						</li>
                        <li class="nav-item"><a class="nav-link menu-link" href="#contact">Let's Work Together</a></li>
					</ul>
					<ul class="navbar-nav navbar-btns animated" data-animate="fadeInDown" data-delay="1.15">
						<li class="nav-item"><a class="nav-link btn btn-sm btn-outline menu-link" href="payment.html">Contact Us</a></li>
					
					</ul>
				</div>
			</nav>
		</div>
		<!-- End Navbar -->