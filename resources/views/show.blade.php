<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Basic Page Info
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Get Real Clothing | {{$post->title}}</title>
  <meta name="description" content="{{str_limit($post->body,150)}}">
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


  <!-- Header
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  @include('nav.header')

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

<section class="mastwrap-outer cd-main-content">

  <!-- MASTER CONTENT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="ajax-content" class="mastwrap spaced-left">



      <div class="container">
        <div class="row">

          <article class="col-md-10">
            <br>
            <h2 class="project-title font2 dark">{{$post->title}}</h2>
            <div class="liner color-bg"></div>
            <br>
            <section class="project-cover halfheight">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="{{$post->excerpt}}"></iframe>
              </div><!-- Comments start -->
            </section>


            @if($post->body)
              <div class="row">
                <div class="col-md-11">
                  <section class="project-cover " style="margin-top:175px">
                    {!! $post->body !!}
                  </section>
                </div>
              </div>
            @endif



          <div class="comments" style="margin-top:150px" >
            <div id="disqus_thread"></div>
            <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES * * */
            var disqus_shortname = 'getrealsk8';

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
          </div>
          <!-- Content column end -->
        </article>
      </div>

  </section>
      </div>


  </section>
  <!-- end : mastwrap -->

</section>
<!-- mastwrap-outer ends -->

  <!-- JS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <script src="javascripts/libs/common.js"></script>
  <script src="javascripts/libs/bootstrap.min.js"></script>
  <script src="javascripts/custom/main.js"></script>
</body>
</html>
