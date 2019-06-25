<?php //$model = new Home_Model(); ?>
<?php //$this->setSiteTitle('Home');  ?>
<?php $this->start('head');  ?>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="<?=PROOT?>css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="<?=PROOT?>css/animate.css">

<link rel="stylesheet" href="<?=PROOT?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=PROOT?>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?=PROOT?>css/magnific-popup.css">

<link rel="stylesheet" href="<?=PROOT?>css/aos.css">

<link rel="stylesheet" href="<?=PROOT?>css/ionicons.min.css">

<link rel="stylesheet" href="<?=PROOT?>css/bootstrap-datepicker.css">
<link rel="stylesheet" href="<?=PROOT?>css/jquery.timepicker.css">


<link rel="stylesheet" href="<?=PROOT?>css/flaticon.css">
<link rel="stylesheet" href="<?=PROOT?>css/icomoon.css">
<link rel="stylesheet" href="<?=PROOT?>css/style.css">
<link rel="stylesheet" href="<?=PROOT?>css/main.css">
<script src="<?=PROOT?>js/main.js"></script>
<?php $this->end();  ?>

<?php $this->start('body');  ?>

    
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">MF Bolig</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?=PROOT?>/home" class="nav-link">Hjem</a></li>
	          <li class="nav-item"><a href="<?=PROOT?>/home/aboutus" class="nav-link">Om os</a></li>
	          <li class="nav-item"><a href="<?=PROOT?>home/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?=PROOT?>home/Kontakt" class="nav-link">Kontakt</a></li>
	          <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Pris Beregner</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

  <div class="lol">
  </div>
 <div class="kontakt">


<div class="kon-right">
<div class="container">
	
		<section class="section2"> 
			<div class="contactform">
				<form action="#">
					<label for="firstname">
						<i class="cntfrmicn fa fa-user"></i>
						<input name="firstname" class="form-fields" type="text" placeholder="Navn">
					</label>
					<label for="email">
						<i class="cntfrmicn fa fa-envelope"></i>
						<input name="email" class="form-fields" type="text" placeholder="Email@email.com">
					</label>
					<label for="contact">
						<i class="cntfrmicn fa fa-phone"></i>
						<input name="contact" class="form-fields" type="text" placeholder="Telefonnr.">
					</label>
					<label for="textarea">
						<i class="cntfrmicn fa fa-comment"></i>
						<textarea class="form-fields" name="textarea" id="" cols="30" rows="10" placeholder="Besked..."></textarea>
					</label>
					<button class="form-fields button" value="Send" type="submit">Send <i class="fa fa-paper-plane"></i></button>
				</form>
			</div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.2214355435895!2d9.701736516089206!3d55.77202589797634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c86538dfb8ce9%3A0xb722621a3f76ff1c!2sHorsensvej+3%2C+8722+Hedensted!5e0!3m2!1sen!2sdk!4v1560935457562!5m2!1sen!2sdk" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
		
		</section>
	</div>
</div>

 </div>
    
    <section class="ftco-domain">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-lg-5 heading-white mb-4 mb-sm-4 mb-lg-0 ftco-animate">
    				<h2>Skal du have nyt tag?</h2>
    				<p>Søg efter din adresse og se hvad pris vi kan tilbyde dig.</p>
    			</div>
    			<div class="col-lg-7 p-5 ftco-wrap ftco-animate">
    				<form autocomplete="off" action="#" class="domain-form d-flex mb-3">
              <div class="form-group domain-name search-dawa-adr-box">
                <input type="text" class="form-control name px-4" placeholder="Skrive din adresse..." id="search-dawa-adr">
                <ul id="search-dawa-adr-list"></ul>
              </div>
              <div class="form-group domain-select d-flex">
	              <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                  	<option value="109">Betontegl i mellemgrå</option>
                    <option value="73">Betontegl i olivengrøn</option>
                    <option value="83">Betontegl i mellemgrå lys</option>
                    <option value="83">Betontegl i sort</option>
                  </select>
                </div>
                <input type="submit" class="search-domain btn btn-primary text-center" value="Search">
	            </div>
            </form>
            <p class="domain-price mt-2">
            	<span><small>Betontegl i mellemgrå</small> DKK 109/m2</span> 
            	<span><small>Betontegl i olivengrøn</small> DKK 73/m2</span> 
            	<span><small>Betontegl i mellemgrå lys</small> DKK 83/m2</span> 
            	<span><small>Betontegl i sort</small> DKK 83/m2</span>
            </p>
    			</div>
    		</div>
    	</div>
    </section>
  
	<footer class="footer-dis">
       <p>@ made by: Arne Skou Pedersen & Mark Ringtved Nielsen</p>
     </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=PROOT?>js/jquery.min.js"></script>
  <script src="<?=PROOT?>js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?=PROOT?>js/popper.min.js"></script>
  <script src="<?=PROOT?>js/bootstrap.min.js"></script>
  <script src="<?=PROOT?>js/jquery.easing.1.3.js"></script>
  <script src="<?=PROOT?>js/jquery.waypoints.min.js"></script>
  <script src="<?=PROOT?>js/jquery.stellar.min.js"></script>
  <script src="<?=PROOT?>js/owl.carousel.min.js"></script>
  <script src="<?=PROOT?>js/jquery.magnific-popup.min.js"></script>
  <script src="<?=PROOT?>js/aos.js"></script>
  <script src="<?=PROOT?>js/jquery.animateNumber.min.js"></script>
  <script src="<?=PROOT?>js/bootstrap-datepicker.js"></script>
  <script src="<?=PROOT?>js/jquery.timepicker.min.js"></script>
  <script src="<?=PROOT?>js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=PROOT?>js/google-map.js"></script>
  <script src="<?=PROOT?>js/main.js"></script>
  <script src="<?=PROOT?>js/dawa/autocomplet.js"></script>
    

<?php $this->end();  ?>