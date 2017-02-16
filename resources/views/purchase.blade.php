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

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '724210990971326'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=724210990971326&ev=PageView&noscript=1"
  /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->

</head>

<body>



  <!-- mobile only navigation : starts -->
  <nav class="mobile-nav">
    {!! Menu::display('main') !!}
  </nav>
  <!-- mobile only navigation : ends -->

  <a class="onscreen-trigger" href="/#"><img alt="" title="" src="images/next.svg"/></a>

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
                </article>
              </div>
            </div>
        </section>


              <div id="works-container" class="works-container works-masonry-container clearfix white-bg">
                <div class="col-md-6">
                  <img src="{{url($product->image)}}" class="img-responsive col-md-12" alt="" />
                </div>
                <div class="col-md-6">
                  <h4 class="font2 dark">{{$product->name}}</h4>

                  {!! $product->description !!}
                  <hr>
                  <!-- end : works-container -->
                  {{!! $product->stripe_form !!}}
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
  <!-- Add event to the button's click handler -->
  <script type="text/javascript">
  $( '#addToCartButton' ).click(function() {
  fbq('track', 'AddToCart', {
  content_ids: ['1234'],
  content_type: 'product',
  value: 2.99,
  currency: 'USD'
  });
  });
  </script>
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '724210990971326'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=724210990971326&ev=PageView&noscript=1"
  /></noscript>
  <script src="/javascripts/libs/common.js"></script>
  <script src="/javascripts/libs/bootstrap.min.js"></script>
  <script src="/javascripts/custom/main.js"></script>

</body>
</html>
