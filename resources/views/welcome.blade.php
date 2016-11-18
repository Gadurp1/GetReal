<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Info
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>OTTO - A premium web template from Designova</title>
  <meta name="description" content="OTTO - A premium web template from Designova">
  <meta name="author" content="Designova">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="{{Voyager::setting('logo ')}}" />

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600%7CMontserrat:400,700%7COpen+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

  <!-- ICONS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="stylesheets/ionicons.min.css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="stylesheets/bootstrap.css">
  <link rel="stylesheet" href="stylesheets/isotope.css">
  <link rel="stylesheet" href="stylesheets/venobox.css">
  <link rel="stylesheet" href="stylesheets/owl.carousel.css">
  <link rel="stylesheet" href="stylesheets/sidepanel.css">
  <link rel="stylesheet" href="stylesheets/elements.css">
  <link rel="stylesheet" href="stylesheets/slimmenu.css">
  <link rel="stylesheet" href="stylesheets/main.css">
  <link rel="stylesheet" href="stylesheets/main-bg.css">
  <link rel="stylesheet" href="stylesheets/main-responsive.css">

  <!-- LESS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet/less" type="text/css" href="less/color.less">
  <link rel="stylesheet/less" type="text/css" href="less/fonts.less">
  <script src="less/less.min.js"></script>


</head>

<body>

  <!-- Preloader
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div id="preloader">
    <div id="status"></div>
  </div>


  <!-- mobile only navigation : starts -->
  <nav class="mobile-nav">
    {!! Menu::display('main') !!}
  </nav>
  <!-- mobile only navigation : ends -->

  <a class="onscreen-trigger" href="#"><img alt="" title="" src="images/next.svg"/></a>

  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="masthead white-bg fullheight">
    <div class="valign">
      <div class="inner">
          <a class="ajax-link" href="index.html"><img alt="" title="" style="height:50px" class="logo" src="{{Voyager::setting('logo')}}"/></a>
          <nav class="mastnav font2">
            {!! Menu::display('main') !!}
          </nav>
      </div>
    </div>

    <div class="sticky-icons">
        <ul>
            <li><a class="fullscreen-toggle" href="#"><img alt="" title="" src="images/prev.svg"/></a></li>
        </ul>
    </div>
  </header>

  <!-- sub navigation panel : starts -->
  <section class="sub-nav-wrap fullheight dark-bg white font2">
    <div class="valign">

      <!-- sub navigation section -->
      <ul class="sub-nav sub-nav-intro">
        <li><a class="ajax-link" href="index01.html">masonry</a></li>
        <li><a class="ajax-link" href="index05.html">agency</a></li>
        <li><a class="ajax-link" href="index02.html">fashion</a></li>
        <li><a class="ajax-link" href="index07.html">photography</a></li>
        <li><a class="ajax-link" href="index06.html">personal</a></li>
        <li><a class="ajax-link" href="index04.html">fullscreen</a></li>
        <li><a class="ajax-link" href="index03.html">bg video</a></li>
      </ul>

    </div>
  </section>
  <!-- sub navigation panel : ends -->

  <!-- dummy overlay for whole page when sidebar is active -->
  <section class="featured-mask-overlay"></section>

  <section class="mastwrap-outer cd-main-content">

  <!-- MASTER CONTENT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="ajax-content" class="mastwrap spaced-left">

  <!--works filter panel :starts -->
  <section id="works-filter-panel" class="works-filter-panel white-bg">
  <div class="works-filter-wrap">
        <ul class="works-filter text-center clearfix font4light">
            <li><a id="all" href="#" data-filter="*" class="active"><span>All</span></a></li>
            <li><a href="#" data-filter=".branding"><span>Branding</span></a></li>
            <li><a href="#" data-filter=".graphics"><span>Graphics</span></a></li>
            <li><a href="#" data-filter=".logos"><span>Logos</span></a></li>
            <li><a href="#" data-filter=".ui"><span>UI</span></a></li>
            <li><a href="#" data-filter=".web"><span>Web</span></a></li>
        </ul>
  </div>
  </section>
  <!-- works filter panel :ends -->
  <section class="intro intro-05 agency-carousel-wrap fullheight">

    <!-- Set up your HTML -->
    <div class="agency-carousel owl-carousel owl-nav-sticky-wide">

      @foreach($products as $product)
      <div class="intro-05-item fullheight text-center img-bg" style="background-image: url({{$product->image}});">
        <span class="fullheight" >
            <div class="intro-05-overlay fullheight">
              <div class="valign">
                <h3 class="font2 dark"><span>{{$product->name}} </span></h3>
                <p style="color:#000;margin-top:35px">
                  <strong>Available Dec. 1</strong>
                </p>
              </div>
            </div>
        </span>
      </div>
      @endforeach

    </div>
  </section>

  <section id="yo" class="silver-bg project-cover halfheight">
    <div class="valign">
      <article class="welcome-heading text-center">
        <h1 class="dark"><span class="font2">What We've Been Up To</span></h1>
      </article>
    </div>
  </section>

  <div id="works-container" class="works-container works-masonry-container clearfix white-bg">

    @foreach($posts as $post)
      <!-- start : works-item -->
      <div class="works-item works-item-one-third-spaced zoom web logos" >
        <img alt="" title="" class="img-responsive" src="{{$post->image}}"/>
        <a  href="{{$post->slug}}">
          <div class="works-item-inner">
            <h3 class="color font2">{{$post->title}}</h3>
            <p><span class="dark font4">Video</span></p>
          </div>
        </a>
      </div>
      <!-- end : works-item -->
    @endforeach

    @foreach($instagram as $post)
      <!-- start : works-item -->
      <div class="works-item works-item-one-third-spaced zoom web logos">
        <img alt="" title="" class="img-responsive" src="  {{$post['images']['standard_resolution']['url']}}"/>
        <a  class="venobox" s="portfolio-gallery" href="  {{$post['images']['standard_resolution']['url']}}">
          <div class="works-item-inner">
            <h3 class="color font1">{{$post['caption']['text']}}</h3>
            <p><span class="dark font4">Instagram</span></p>
          </div>
        </a>
      </div>
      <!-- end : works-item -->
      @endforeach

    </div>
    <!-- end : works-container -->

  <!-- FOOTER
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <footer class="mastfoot container-fluid white-bg">
    <div class="row">
      <article class="credits col-md-6">
        <p class="font4 dark">Copyright &copy; 2015 <a target="_blank" href="http://wwww.designova.net">Designova</a>.<br/><a target="_blank" href="http://themeforest.net/user/designova/portfolio">Buy this template</a></p>
      </article>
      <ul class="foot-social col-md-6 text-right">
        <li><a href="#"><img alt="" title="" src="images/social/01.svg"/></a></li>
        <li><a href="#"><img alt="" title="" src="images/social/02.svg"/></a></li>
        <li><a href="#"><img alt="" title="" src="images/social/03.svg"/></a></li>
        <li><a href="#"><img alt="" title="" src="images/social/04.svg"/></a></li>
      </ul>
    </div>
  </footer>

  </section>
  <!-- end : mastwrap -->

</section>
<!-- mastwrap-outer ends -->

<!--Links to Frinds :starts -->
  @include('components.linksToFriends')
<!-- Links to Frinds :ends -->


<!--share panel :starts -->
<section class="share-panel white-bg fullheight">
      <a href="#0" class="share-panel-close white">x</a>
      <div class="share-panel-heading font3 dark">social share</div>
      <div class="valign">
          <ul>
            <li><a href="#"><span class="ion-social-twitter dark"></span></a></li>
            <li><a href="#"><span class="ion-social-facebook dark"></span></a></li>
            <li><a href="#"><span class="ion-social-pinterest dark"></span></a></li>
          </ul>
      </div>
</section>
<!-- share panel :ends -->

  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <script src="javascripts/libs/common.js"></script>
  <script src="javascripts/libs/bootstrap.min.js"></script>
  <script src="javascripts/custom/main.js"></script>

</body>
</html>
