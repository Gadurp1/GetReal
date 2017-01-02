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
  <link rel="icon" type="image/png" href="/{{Voyager::setting('logo')}}" />

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href='//fonts.googleapis.com/css?family=Raleway:400,300,600%7CMontserrat:400,700%7COpen+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Inconsolata:400,700' rel='stylesheet' type='text/css'>

  <!-- ICONS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/stylesheets/ionicons.min.css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="/stylesheets/bootstrap.css">
  <link rel="stylesheet" href="/stylesheets/isotope.css">
  <link rel="stylesheet" href="/stylesheets/venobox.css">
  <link rel="stylesheet" href="/stylesheets/owl.carousel.css">
  <link rel="stylesheet" href="/stylesheets/sidepanel.css">
  <link rel="stylesheet" href="/stylesheets/elements.css">
  <link rel="stylesheet" href="/stylesheets/slimmenu.css">
  <link rel="stylesheet" href="/stylesheets/main.css">
  <link rel="stylesheet" href="/stylesheets/main-bg.css">
  <link rel="stylesheet" href="/stylesheets/main-responsive.css">

  <!-- LESS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet/less" type="text/css" href="/less/color.less">
  <link rel="stylesheet/less" type="text/css" href="/less/fonts.less">
  <script src="/less/less.min.js"></script>


</head>

<body>



  <!-- mobile only navigation : starts -->
    <nav class="mobile-nav">
      <ul class="slimmenu">
        <li><a  href="/">Feed</a></li>
      </ul>
    </nav>
    <!-- mobile only navigation : ends -->
  <!-- mobile only navigation : ends -->

  <a class="onscreen-trigger" href="/#"><img alt="" title="" src="images/next.svg"/></a>

  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="masthead white-bg fullheight">
    <div class="valign">
      <div class="inner">
          <a class="ajax-link" ><img alt="" title="" style="height:50px" class="logo" src="../{{Voyager::setting('logo')}}"/></a>
          <nav class="mastnav font2">
            {!! Menu::display('main') !!}
          </nav>
      </div>
    </div>

    <div class="sticky-icons">
        <ul>
            <li><a class="fullscreen-toggle" href="/#"><img alt="" title="" src="images/prev.svg"/></a></li>
        </ul>
    </div>
  </header>


  <!-- dummy overlay for whole page when sidebar is active -->
  <section class="featured-mask-overlay"></section>

  <section class="mastwrap-outer cd-main-content">

  <!-- MASTER CONTENT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="ajax-content" class="mastwrap spaced-left">

    <section class="sub-wrap about white-bg">
            <div class="container-fluid">
              <div class="row">
                <article class="col-md-12 text-left caption add-top-quarter">
                  <h1><span class="font2">{{$product->name}}</span></h1>
                  <hr>
                </article>
              </div>
            </div>
        </section>


              <div id="works-container" class="container works-masonry-container clearfix white-bg">
                <div class="col-md-6">
                  <img src="{{url($product->image)}}" class="img-responsive col-md-12" alt="" />
                </div>
                <div class="col-md-6">
                  <br>
                  <div class="row">
                    {!! $product->description !!}
                  </div>
                  <hr>
                  <!-- end : works-container -->
                  <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="6QJXRJCNDJTLU">
                <input type="hidden" name="on0" value="Sizes"></td></tr><tr><td>

                    <select name="os0" class="col-md-12 input input-lg form-control" style="margin-bottom:20px">
                  	<option value="Small">Small $60.00 USD</option>
                  	<option value="Medium">Medium $60.00 USD</option>
                  	<option value="Large">Large $60.00 USD</option>
                  	<option value="X - Large">X - Large $60.00 USD</option>
                  </select>
                  <br>
                  <br>
                  <input type="hidden" name="currency_code" value="USD">
                  <input type="image" src="https://dabuttonfactory.com/button.png?t=Checkout&f=Calibri-Bold&ts=24&tc=444&w=317&h=50&c=5&bgt=gradient&bgc=fff&ebgc=fff&bs=1&bc=666" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                  <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                  </form>

                </div>


                </div>

<!-- mastwrap-outer ends -->

<!--Links to Frinds :starts -->
  @include('components.linksToFriends')
<!-- Links to Frinds :ends -->


<!--share panel :starts -->
<section class="share-panel white-bg fullheight">
      <a href="/#0" class="share-panel-close white">x</a>
      <div class="share-panel-heading font3 dark">social share</div>
      <div class="valign">
          <ul>
            <li><a href="/#"><span class="ion-social-twitter dark"></span></a></li>
            <li><a href="/#"><span class="ion-social-facebook dark"></span></a></li>
            <li><a href="/#"><span class="ion-social-pinterest dark"></span></a></li>
          </ul>
      </div>
</section>
<!-- share panel :ends -->

  <!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <script src="/javascripts/libs/common.js"></script>
  <script src="/javascripts/libs/bootstrap.min.js"></script>
  <script src="/javascripts/custom/main.js"></script>

</body>
</html>
