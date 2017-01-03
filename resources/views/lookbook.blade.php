<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Info
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Get Real Clothing</title>
  <meta name="description" content="Clothing Skateboarding Chicago Goodness">
  <meta name="author" content="Get Real">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="{{Voyager::setting('logo')}}" />

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
  <meta property="og:image" content="http://getrealclothing.com/lookbook/_55A7185%20(1)-min.jpg"/>
  <meta property="og:title" content="Get Real Clothing Lookbook 2017"/>
  <meta property="og:site_name" content="Get Real Clothing "/>
  <meta property="og:url" content="http://getrealclothing.com/Lookbook-2017"/>



</head>

<body>


  <!-- Preloader
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <div id="preloader">
    <div id="status"></div>
  </div>

    <!-- mobile only navigation : starts -->
      <nav class="mobile-nav">
        <ul class="slimmenu">
          <li><a  href="/">Feed</a></li>
          <li><a  href="/Lookbook-2017">Lookbook</a></li>

        </ul>
      </nav>

      <!-- mobile only navigation : ends -->
  <a class="onscreen-trigger" href="#"><img alt="" title="" src="images/next.svg"/></a>

  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="masthead white-bg fullheight">
    <div class="valign">
      <div class="inner">
          <a class="ajax-link" ><img alt="" title="" style="height:50px" class="logo" src="{{Voyager::setting('logo')}}"/></a>
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



  <div id="works-container" class="works-container works-masonry-container clearfix white-bg">




                <div id="works-container" class="works-container works-masonry-container clearfix white-bg">

                      @foreach($files as $file)
                      <!-- start : works-item -->
                      <div class="works-item works-item-one-third-spaced zoom ui web">
                              <img alt="" title="" class="img-responsive" src="{{$file}}"/>
                              <a  class="venobox" data-gall="portfolio-gallery" href="{{$file}}">
                                  <div class="works-item-inner">

                                  </div>
                              </a>
                      </div>
                      <!-- end : works-item -->


                  @endforeach



                            </div>
                            <!-- end : works-container -->



              </div>
              <!-- end : works-container -->




  </section>
  <!-- end : mastwrap -->

</section>
<!-- mastwrap-outer ends -->

<!--Links to Frinds :starts -->
  @include('components.linksToFriends')
<!-- Links to Frinds :ends -->



  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <script src="javascripts/libs/common.js"></script>
  <script src="javascripts/libs/bootstrap.min.js"></script>
  <script src="javascripts/custom/main.js"></script>

</body>
</html>
