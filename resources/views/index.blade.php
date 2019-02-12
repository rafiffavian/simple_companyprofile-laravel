<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Gusto</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rochester" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="#features" class="page-scroll">Specials</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>
        <li><a href="#team" class="page-scroll">Chef</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    @php($i=0)
    @foreach($banner as $v)
    <div class="carousel-item {{$i==0?'active':null}}">
      <img class="d-block w-100" src="{{url(Storage::url($v->file))}}" alt="First slide" height="550px">
      <div class="carousel-caption d-none d-md-block">
        <h5>{{$v->title}}</h5>
        <p>{{$v->description}}.</p>
      </div>
    </div>
    @php($i++)
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>
@include('error-form')
<div id="video">
  <iframe src="{{\App\Video::orderBy('created_at','desc')->first()->file}}" width="900px" height="80%" loop="true" frameborder="0" style="margin-left: 250px;margin-top: 80px"></iframe>
</div>
<!-- Features Section -->
<div id="features" class="text-center">
  <div class="container-fluid" style="margin-left: 400px;">
    <div class="section-title">
      <h2 style="margin-right: 1000px">Our Specials</h2>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="col-xs-12 col-sm-4">
          <div class="features-item">
            @foreach($special as $s)
              <h3>{{$s->tipeList->name}}</h3>
              <img src="{{url(Storage::url($s->file))}}" class="img-responsive" alt="">
              <p>{{$s->description}}.</p>
            @endforeach  
          </div>
        </div>
       </div> 
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      @if($test)
        <div class="col-xs-12 col-md-6 about-img" style="background: #444 url({{url(Storage::url($test->file))}}) center center no-repeat !important;"></div>
      @else
        <div class="col-xs-12 col-md-6 about-img" style="background: #444 url('http://previews.aspirity.com/arent/pic/properties_img_4.jpg') center center no-repeat !important;"></div>
      @endif  
      <div class="col-xs-12 col-md-3 col-md-offset-1">
        <div class="about-text">
          <div class="section-title">
           @if($test) 
              <h2>{{$test->judul}}</h2>
           @else
              <h2>Data Kosong</h2> 
           @endif 
          </div>
          @if($test)
            <p>{{$test->description}}</p>
          @else
            <p>data kosong</p>  
          @endif  
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<div id="restaurant-menu">
  <div class="container">
    <div class="section-title text-center">
      <h2>Menu</h2>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Breakfast & Starters</h2>
          @foreach($break as $b)
            <div class="menu-item">
              <div class="menu-item-name">{{$b->name}}</div>
              <div class="menu-item-price"> ${{$b->price}} </div>
              <div class="menu-item-description"> {{$b->description}} </div>
            </div> 
          @endforeach  
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Main Course</h2>
          @foreach($Main as $m)
            <div class="menu-item">
              <div class="menu-item-name">{{$m->name}}</div>
              <div class="menu-item-price"> {{$m->price}} </div>
              <div class="menu-item-description"> {{$m->description}}. </div>
            </div>
          @endforeach  
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Dinner</h2>
          <div class="menu-item">
            <div class="menu-item-name">Sesame-Ginger Beef</div>
            <div class="menu-item-price"> $15 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name">Crispy Fried Chicken</div>
            <div class="menu-item-price"> $17 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name">Mongolian Shrimp & Broccoli</div>
            <div class="menu-item-price"> $18 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name">Spicy Coconut Salmon</div>
            <div class="menu-item-price"> $20 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Desserts</h2>
          <div class="menu-item">
            <div class="menu-item-name">Chocolate Mud Cake</div>
            <div class="menu-item-price"> $11 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name">Bourbon-Pecan Tart</div>
            <div class="menu-item-price"> $14 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name">Texas Sheet Cake</div>
            <div class="menu-item-price"> $15 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name">Vanilla Cheesecake</div>
            <div class="menu-item-price"> $18 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="gallery">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="img/gallery/01.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="img/gallery/02.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="img/gallery/03.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-6 col-md-3">
        <div class="gallery-item"> <img src="img/gallery/04.jpg" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team">
  <div class="container">
    <div id="row">
      <div class="col-md-6">
        <div class="col-md-10 col-md-offset-1">
          <div class="section-title">
            <h2>{{$chef->name}}</h2>
          </div>
          <p>{{$chef->description}}</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="team-img"><img src="{{url(Storage::url($chef->file))}}" alt="..."></div>
      </div>
    </div>
  </div>
</div>
<div id="team">
  <div class="container">
    <div id="row">
      <div class="col-md-8">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.3742646979163!2d106.8505215142315!3d-6.3455559954079765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec4e225de661%3A0x3b0bdbe9ba4ea47d!2sPerumahan+Taman+Puspa!5e0!3m2!1sen!2sid!4v1545465755287" width="600" height="450" frameborder="0" style="border:0;margin-left:180px; " allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Reservations</h3>
      <div class="contact-item">
        <p>Please call</p>
        <p>{{$gege->no_tlp}}</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p>{{$gege->alamat}},{{$gege->kelurahan}}</p>
        <p>{{$gege->kecamatan}}, {{$gege->kota}}</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon-Thurs: {{$gege->shift1}}</p>
        <p>Fri-Sun: {{$gege->shift2}}</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title text-center">
      <h3>Send us a message</h3>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" novalidate method="post" action="{{ route('index.store') }}">
        @include('sweetalert::alert')
        @include('error-form')
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="" name="name" value="{{old('name')}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="" name="email" value="{{old('email')}}">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea id="message" class="form-control" rows="4" placeholder="Message" required name="pesan">{{old('pesan')}}</textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-6">
      <p>&copy; 2017 Gusto. All rights reserved. Design by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
    <div class="col-md-6">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

