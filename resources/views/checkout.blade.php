@extends('layouts.app')
<!DOCTYPE html>
<html lang="pl">
  <head>
    <title>WędkaVendor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">123 456 789</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">sklep@wedka.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">Dostawa w 3-5 dni roboczych &amp; darmowe zwroty</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index">WędkaVendor</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index" class="nav-link">Start</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zakupy</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop">Kupuj</a>
                <a class="dropdown-item" href="cart">Koszyk</a>
                <a class="dropdown-item" href="checkout">Podsumowanie</a>
              </div>
            </li>
	          <li class="nav-item"><a href="about" class="nav-link">O nas</a></li>
	          <li class="nav-item"><a href="contact" class="nav-link">Kontakt</a></li>
	          <li class="nav-item cta cta-colored"><a href="cart" class="nav-link"><span class="icon-shopping_cart"></span>Koszyk</a></li>
			  <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap hero-bread" style="background-image: url('myimages/bg_1.webp');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <br/>
            <h1 class="mb-0 bread">Podsumowanie</h1>
          </div>
        </div>
      </div>
    </div>
	<?php
                $razem = 0;
				?>
				@foreach($items as $item)
				{{csrf_field()}}
				<?php
					$razem += $item->cena * $item->ilosc;
				?>
				@endforeach
	@guest
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
				<form action ="{{ route('checkoutStore', ['wartosc' => $razem])}}" role ="form" method ="post" enctype="multipart/form-data">  
				{{csrf_field()}}
                            <br/>
							<h3 class="mb-4 billing-heading">Dane do wysyłki</h3>
	          	<div class="row align-items-end">
	          		<div class="col-md-6">
	                <div class="form-group">
	                	<label>Imie</label>
	                  <input type="text" class="form-control" required placeholder="Imie" id = "imie" name = "imie">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label>Nazwisko</label>
	                  <input type="text" class="form-control" required placeholder="Nazwisko" id = "nazwisko" name = "nazwisko">
	                </div>
                </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label>Kraj</label>
	                  <input type="text" class="form-control" required placeholder="Kraj" id = "kraj" name = "kraj">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label>Ulica</label>
	                  <input type="text" class="form-control" required placeholder="Nazwa ulicy" id = "ulica" name = "ulica">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
						<label>Numer budynku</label>
	                  <input type="number" class="form-control" required placeholder="(xxx)" id = "nr_budynku" name = "nr_budynku">
	                </div>
		            </div>
                    <div class="col-md-6">
		            	<div class="form-group">
						<label>Numer mieszkania</label>
	                  <input type="number" class="form-control" placeholder="(xxx)" id = "nr_mieszkania" name = "nr_mieszkania">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label>Miasto</label>
	                  <input type="text" class="form-control" required placeholder="Miasto" id = "miasto" name = "miasto">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label>Kod pocztowy</label>
	                  <input type="number" pattern="[0-9]{5}" class="form-control" required placeholder="(xxxxx)" id = "kod_pocztowy" name = "kod_pocztowy">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label>Numer telefonu</label>
	                  <input type="tel" pattern="[0-9]{9}" class="form-control" required placeholder="(xxxxxxxxx)" id = "nr_telefonu" name = "nr_telefonu">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label>Adres email</label>
	                  <input type="email" required class="form-control" placeholder="(xxx@xxx.xx)" id = "email" name = "email">
	                </div>
                </div>
                <div class="w-100"></div>

	            </div>
	          <!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
    					<p class="d-flex">
                            <table>
                            <tr>
                            <p class="d-flex">
                                <td><span>Wartość zamówienia ($)</span></td>
                                <?php
                                    echo ("<td><span><input type='text' class='quantity form-control input-number' value = '$razem' disabled></span></td>");
                                ?>
                            </p>
                            </tr>
                            <tr>
                            <p class="d-flex">
                                <td><span>Dostawa ($)</span></td>
                                <?php
									$dostawa = 10;
                                    echo ("<td><span><input type='text' class='quantity form-control input-number' value = '$dostawa' disabled></span></td>");
                                ?>
                            </p>
                            </tr>
                            <hr>
                            <tr>
                            <p class="d-flex">
                                <td><span>Cena końcowa ($)</span></td>
                                <?php
									$razem += $dostawa;
                                    echo ("<td><span><input type='text' class='quantity form-control input-number' id='razem' name = 'razem' value = '$razem' disabled></span></td>");
                                ?>
                            </p>
                            </tr>
                        </table>
								</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Metoda płatności</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="platnosci" id="przelew" value ="przelew" class="mr-2"> Przelew bankowy</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="platnosci" id="blik" value = "blik" class="mr-2"> Płatność BLIK</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="platnosci" id ="paypal" value ="paypal" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" class="mr-2"> Przeczytałem i akceptuję warunki umowy</label>
											</div>
										</div>
									</div>
									<p><button type ="submit" value ="Zamawiam" class="btn btn-primary py-3 px-5">Zamawiam</button></p>
                    	</form>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
@else
<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
                <form role="form" action="{{ route('checkoutStore', ['wartosc' => $razem])}}" id ="checkout-form" method = "post" enctype = "multipart/form-data" class="billing-form">
                    {{csrf_field()}}
                            <br/>
							<h3 class="mb-4 billing-heading">Dane do wysyłki</h3>
	          	<div class="row align-items-end">

	              <div class="col-md-6">
	                <div class="form-group">
	                	<label>Nazwisko</label>
	                  <input type="text" class="form-control" required placeholder="Nazwisko" id = "nazwisko" name = "nazwisko">
	                </div>
                </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label>Kraj</label>
	                  <input type="text" class="form-control" required placeholder="Kraj" id = "kraj" name = "kraj">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label>Ulica</label>
	                  <input type="text" class="form-control" required placeholder="Nazwa ulicy" id = "ulica" name = "ulica">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
						<label>Numer budynku</label>
	                  <input type="number" class="form-control" required placeholder="(xxx)" id = "nr_budynku" name = "nr_budynku">
	                </div>
		            </div>
                    <div class="col-md-6">
		            	<div class="form-group">
						<label>Numer mieszkania</label>
	                  <input type="number" class="form-control" placeholder="(xxx)" id = "nr_mieszkania" name = "nr_mieszkania">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
		            	<div class="form-group">
	                	<label>Miasto</label>
	                  <input type="text" class="form-control" required placeholder="Miasto" id = "miasto" name = "miasto">
	                </div>
		            </div>
		            <div class="col-md-6">
		            	<div class="form-group">
		            		<label>Kod pocztowy</label>
	                  <input type="number" pattern="[0-9]{5}" class="form-control" required placeholder="(xxxxx)" id = "kod_pocztowy" name = "kod_pocztowy">
	                </div>
		            </div>
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label>Numer telefonu</label>
	                  <input type="tel" pattern="[0-9]{9}" class="form-control" required placeholder="(xxxxxxxxx)" id = "nr_telefonu" name = "nr_telefonu">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                </div>
                </div>
                <div class="w-100"></div>

	            </div>
	          <!-- END -->
					</div>
					<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
    					<p class="d-flex">
                            <table>
                            <tr>
                            <p class="d-flex">
                                <td><span>Wartość zamówienia ($)</span></td>
                                <?php
                                    echo ("<td><span><input type='text' class='quantity form-control input-number' value = '$razem' disabled></span></td>");
                                ?>
                            </p>
                            </tr>
                            <tr>
                            <p class="d-flex">
                                <td><span>Dostawa ($)</span></td>
                                <?php
									$dostawa = 10;
                                    echo ("<td><span><input type='text' class='quantity form-control input-number' value = '$dostawa' disabled></span></td>");
                                ?>
                            </p>
                            </tr>
                            <hr>
                            <tr>
                            <p class="d-flex">
                                <td><span>Cena końcowa ($)</span></td>
                                <?php
									$razem += $dostawa;
                                    echo ("<td><span><input type='text' class='quantity form-control input-number' id='razem' name = 'razem' value = '$razem' disabled></span></td>");
                                ?>
                            </p>
                            </tr>
                        </table>
								</div>
	          	<div class="col-md-12">
	          		<div class="cart-detail p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Metoda płatności</h3>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="platnosci" id="przelew" value ="przelew" class="mr-2"> Przelew bankowy</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="platnosci" id="blik" value ="blik" class="mr-2"> Płatność BLIK</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="radio">
											   <label><input type="radio" name="platnosci" id ="paypal" value = "paypal" class="mr-2"> Paypal</label>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-12">
											<div class="checkbox">
											   <label><input type="checkbox" class="mr-2"> Przeczytałem i akceptuję warunki umowy</label>
											</div>
										</div>
									</div>
									<p><button type ="submit" value ="Zamawiam" class="btn btn-primary py-3 px-5">Zamawiam</button></p>
                    	</form>
								</div>
	          	</div>
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->
	@endguest

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
		<div class="container py-4">
			<div class="row d-flex justify-content-center py-5">
				<div class="col-md-6">
				</div>
			</div>
		</div>
    </section>
    <footer class="ftco-footer ftco-section">
      <div class="container">
      	<div class="row">
      		<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
      	</div>
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">WędkaVendor</h2>
              <p>Idealny do wyprawy w gąszcz mazurskiej trzciny, kamienie górskiego potoku lub dorzecze Amazonki...</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Menu</h2>
              <ul class="list-unstyled">
                <li><a href="shop" class="py-2 d-block">Zakupy</a></li>
                <li><a href="about" class="py-2 d-block">O nas</a></li>
                <li><a href="contact" class="py-2 d-block">Kontakt</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Pomoc</h2>
              <div class="d-flex">
	              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
	                <li><a href="checkout" class="py-2 d-block">Dostawa</a></li>
	                <li><a href="#" class="py-2 d-block">Zwroty</a></li>
	                <li><a href="#" class="py-2 d-block">RODO</a></li>
	              </ul>
	            </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Odwiedź nasz sklep stacjonarny</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><p>Gizycko, Polska</p></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">123 456 789</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sklep@wedka.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  </body>
</html>