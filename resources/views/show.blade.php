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
  <link rel="icon" type="image/png" href="images/favicon.png" />

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



    <section class="sub-wrap add-top add-bottom project-info">
      <div class="container">
        <div class="row">

          <article class="col-md-11">
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
                <section class="project-cover halfheight">
                  {!! $post->body !!}
                </section>
              </div>
            @endif
            <br>
            <br>
            <br>
            <br>
            <br>
            <section class="halfheight">

              <div class="comments">
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

      <section class="project-nav silver-bg">
          <div class="container-fluid">
            <div class="row">
              <article class="col-md-12 text-left no-pad">
                 <ul class="project-nav-icon-wrap">
                   <li><a  href="project02.html"><img alt="" title="" src="images/prev.svg"/></a></li>
                   <li><a  href="works.html"><img alt="" title="" src="images/grid.svg"/></a></li>
                   <li><a  href="project02.html"><img alt="" title="" src="images/next.svg"/></a></li>
                 </ul>
              </article>
            </div>
          </div>
      </section>

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
