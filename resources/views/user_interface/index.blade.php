<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>SAHABATECH</title>
<link rel="icon" href="{{url('public/frontend/img/shbt-fav.png')}}" type="image/png">
<link href="{{url('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('public/frontend/css/style.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{url('public/frontend/css/font-awesome.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{url('public/frontend/css/animate.css')}}" rel="stylesheet" type="text/css">
<link href="{{url('public/frontend/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css">

</head>
<body>

<header id="header_wrapper">
  <div class="container">
    <div class="header_box">
      <div class="logo"><a href="#"><img src="{{url('public/frontend/img/text-logo.png')}}" alt="logo"></a></div>
	  <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
	    <div id="main-nav" class="collapse navbar-collapse navStyle">
			<ul class="nav navbar-nav" id="mainNav">
			  <li class="active"><a href="#hero_section" class="scroll-link">Home</a></li>
			  <li><a href="#aboutUs" class="scroll-link">About Us</a></li>
			  <li><a href="#service" class="scroll-link">Services</a></li>
			  <li><a href="#Portfolio" class="scroll-link">Portfolio</a></li>
     <li><a href="#team" class="scroll-link">Team</a></li>
			  <li><a href="#contact" class="scroll-link">Contact</a></li>
			</ul>
      </div>
	 </nav>
    </div>
  </div>
</header>

<!-- Home -->
<section id="hero_section" class="top_cont_outer" style="background-color: #3498DB">
  <div class="hero_wrapper">
    <div class="container">
      <div class="hero_section">
        <div class="row">
          <div class="col-lg-6 col-sm-7" style="margin-top: 0px;">
            <div class="top_left_cont zoomIn wow animated"> 
              <h2><strong>SahabaTech </strong>Memberikan Solusi Atas Permasalahan Alat Kerja Anda</h2>
              <br>
              <br>
              <a href="#aboutUs" class="read_more2" class="scroll-link">Tentang Kami</a> </div>
          </div>
          <div class="col-lg-6 col-sm-5" id="img-home" style="margin-top: 50px;">
			       <img src="public/frontend/img/logo-main1.png" class="zoomIn wow animated" alt="" />
		      </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Home -->

<!-- About -->
<section id="aboutUs">
<div class="inner_wrapper">
  <div class="container">
    <div class="inner_section">
    	<div class="row" style="margin-top: -70px;">
          <div class=" col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right" style="margin-top: 70px;"><img src="{{url('public/frontend/img/about-img2.png')}}" class="img-circle delay-03s animated wow zoomIn" alt=""></div>
          	<div class=" col-lg-7 col-md-7 col-sm-7 col-xs-12 pull-left">
            	<div class=" delay-01s animated fadeInDown wow animated">
    			       <h1><strong>Tentang Kami</strong></h1>
                  <p>Sahabatech merupakan solusi untuk setiap permasalahan yang ada pada bidang teknologi, sahabatech berdiri sejak 2017 yang berfokus pada bidang teknologi terutama pada bidang perangkat keras dan perangkat lunak, namun kami selalu berusaha untuk menangani semua permasalahan yang ada sesuai kebutuhan dari client dan memberikan solusi terbaik akan setiap permasalahan.</p>
                  <h4> Visi</h4>
                  <p>Sahabatech memiliki visi menjadi partner IT Solutions terbaik dan menjadi sebuah jasa service komputer dan lainnya yang dapat dipercaya serta menjadi sebuah usaha yang bisa lebih dikenal luas oleh masyarakat pada umumnya.</p>
                  <h4> Misi</h4>
                  <p>Kualitas dalam hal pelayanan sehingga menjadi efektif dan efisien<br/>Harga yang ekonomis dengan kualitas yang baik, bagus dan terpercaya<br/>Penyelesaian pekerjaan secara tepat waktu<br/>Bertanggung jawab terhadap segala sesuatu yang telah disepakati bersama</p>
              </div>
              <div class="work_bottom"> <span>Layanan Kami ...</span> <a href="#contact" class="contact_btn">Hubungi Kami</a></div>       
    	     </div>
      </div>
    </div>
  </div> 
  </div>
</section>
<!--Aboutus--> 


<!--Service-->
<section  id="service">
  <div class="container">
    <h2>Services</h2>
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-6" style="margin-top: -30px;">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><i class="fa fa-laptop"></i></span> </div>
            <h3 class="animated fadeInUp wow">Perbaikan PC & Laptop</h3>
            <p class="animated fadeInDown wow">Menerima perbaikan komputer atau laptop dengan pelayanan upgrade perangkat, instalasi sistem operasi ataupun mati total.</p>
          </div>
        </div>
        <div class="col-lg-6 borderLeft" style="margin-top: -30px;">			
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><i class="fa fa-wifi"></i></span> </div>
            <h3 class="animated fadeInUp wow">Instalasi Jaringan</h3>
            <p class="animated fadeInDown wow">Menerima pemasangan jaringan internet kantor dengan ruang lingkup lokal area ataupun public.</p>
          </div>
        </div>
        <div class="col-lg-6 borderLeft" style="margin-top: 20px;">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><i class="fa fa-code"></i></span> </div>
            <h3 class="animated fadeInUp wow">Pembuatan Software</h3>
            <p class="animated fadeInDown wow">Menerima pembuatan program Web, Desktop dan Android App.</p>
          </div>
        </div>
        <div class="col-lg-6 borderLeft" style="margin-top: 20px;">
          <div class="service_block">
            <div class="service_icon icon4  delay-03s animated wow zoomIn"> <span><i class="fa fa-wrench"></i></span> </div>
            <h3 class="animated fadeInUp wow">Perawatan Dan Lainnya</h3>
            <p class="animated fadeInDown wow">Menerima permintaan diluar kategory seperti maintenance alat kerja dan perbaikan perangkat keras.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--Service-->




<!-- Portfolio -->
<section id="Portfolio" class="content"> 
  
  <!-- Container -->
  <div class="container portfolio_title"> 
    
    <!-- Title -->
    <div class="section-title">
      <h2>Portfolio</h2>
    </div>
    <!--/Title --> 
    
  </div>
  <!-- Container -->
  
  <div class="portfolio-top"></div>
    
    <!-- Portfolio Wrapper -->
    <div class="isotope fadeInLeft animated wow" style="position: relative; overflow: hidden; height: 480px;" id="portfolio_wrapper"> 
      
      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   appleIOS isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic1.jpg')}}"  alt="Portfolio 1"> </div>        
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">SMS Mobile App</h4>
          </div>
        </div>
        </div>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic2.jpg')}}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">Finance App</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design  isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic3.jpg')}}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">GPS Concept</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item--> 
      
      <!-- Portfolio Item-->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 0px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  android  prototype web isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic4.jpg')}}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">Shopping</h4>
          </div>
        </div>
      </div>
      <!-- Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic5.jpg')}}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">Managment</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(337px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  web isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic6.jpg')}}" alt="Portfolio 1"> </div>
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">iPhone</h4>
          </div>
        </div>
      </div>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item  -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(674px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four  design web isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic7.jpg')}}" alt="Portfolio 1"> </div>       
        <div class="item_overlay">
          <div class="item_info"> 
            <h4 class="project_name">Nexus Phone</h4>
          </div>
        </div>
       </div>
      <!--/Portfolio Item --> 
      
      <!-- Portfolio Item -->
      <div style="position: absolute; left: 0px; top: 0px; transform: translate3d(1011px, 240px, 0px) scale3d(1, 1, 1); width: 337px; opacity: 1;" class="portfolio-item one-four   android isotope-item">
        <div class="portfolio_img"> <img src="{{url('public/frontend/img/portfolio_pic8.jpg')}}" alt="Portfolio 1"> </div>       
        <div class="item_overlay">
          <div class="item_info"> 
				<h4 class="project_name">Android</h4>
          </div>
        </div>
        </a> </div>
      <!--/Portfolio Item --> 
      
    </div>
    <!--/Portfolio Wrapper --> 
    
  </div>
  <!--/Portfolio Filters -->
  
  <div class="portfolio_btm"></div>
  
  
  <div id="project_container">
    <div class="clear"></div>
    <div id="project_data"></div>
  </div>
 
  
</section>
<!--/Portfolio --> 

<section class="page_section" id="team">
  <h2>Team</h2>
<div class="client_logos">
  <div class="container">
    <ul class="fadeInRight animated wow">
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/jamet1.png')}}" alt="">
              <h4>Fany Firmansyah</h4>
          </a>
      </li>
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/team2.png')}}" alt="">
             <h4>Robby Christie</h4>
          </a>
      </li>
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/team3.png')}}" alt="">
             <h4>Septian Rachmat</h4>
          </a>
      </li>
      <li><a href="javascript:void(0)"><img src="{{url('public/frontend/img/team4.png')}}" alt="">
             <h4>Farhan Yusuf</h4>
          </a>
      </li>
    </ul>
  </div>
</div>
</section>


<!--Footer-->
<footer class="footer_wrapper" id="contact">
  <div class="container">
    <section class="page_section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            
          </div>
          <div class="col-lg-4">
           
          </div>
          <div class="col-lg-4">
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 wow fadeInLeft">	
		 <div class="contact_info">
                            <div class="detail">
                                <h4>Alamat</h4>
                                <p>Jl. Cakra Buana VI No.12, RT.007/RW.001, Kunciran, Kec. Pinang, Kota Tangerang, Banten 15144</p>
                            </div>
                            <div class="detail">
                                <h4>Telp</h4>
                                <p>+6289633026304</p>
                            </div>
                            <div class="detail">
                                <h4>Email</h4>
                                <p>sahabatech.id@gmail.com</p>
                            </div> 
                        </div>
       		  
			  
          
          <ul class="social_links">
            <li class="twitter animated bounceIn wow delay-02s"><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
            <li class="facebook animated bounceIn wow delay-03s"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
            <li class="pinterest animated bounceIn wow delay-04s"><a href="javascript:void(0)"><i class="fa fa-pinterest"></i></a></li>
            <li class="gplus animated bounceIn wow delay-05s"><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li> 
          </ul>
        </div>
        <div class="col-lg-7 wow fadeInRight delay-06s">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4358.778478741827!2d106.67405174254746!3d-6.217183461739037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9ce14a41223%3A0xdfa56930c015ef24!2sSahabatTech%20Service%20Laptop%20Tangerang!5e0!3m2!1sid!2sid!4v1600336773890!5m2!1sid!2sid" width="500" height="350" frameborder="0" style="border:2;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       
        </div>
      </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"><span>Copyright © 2020 Sahabatech</a> </span> </div>
  </div>
</footer>

<script type="text/javascript" src="{{url('public/frontend/js/jquery-1.11.0.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/jquery-scrolltofixed.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/jquery.nav.js')}}"></script> 
<script type="text/javascript" src="{{url('public/frontend/js/jquery.easing.1.3.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/jquery.isotope.js')}}"></script>
<script type="text/javascript" src="{{url('public/frontend/js/wow.js')}}"></script> 
<script type="text/javascript" src="{{url('public/frontend/js/custom.js')}}"></script>

</body>
</html>