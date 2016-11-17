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

            <article class="col-md-10">
              <h2 class="project-title font2 dark">{{$post->title}}</h2>
              <div class="liner color-bg"></div>
              <h3 class="font4 grey remove-top">This is a sample web page to showcase any of your project</h3>
              <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="{{$post->excerpt}}"></iframe>
              </div><!-- Comments start -->
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



<!--featured works panel :starts -->
<section class="featured-panel cd-panel from-right">
    <div class="cd-panel-header white-bg">
      <h1 class="featured-projects-heading font3 dark">Featured Projects</h1>
      <a href="#0" class="cd-panel-close white">x</a>
    </div> <!-- cd-panel-header -->

    <div class="cd-panel-container">
      <div class="cd-panel-content">

          <!-- featured-item -->
          <div class="featured-item-block">
              <img alt="" title="" class="img-responsive" src="images/featured/01.jpg"/>
              <a  href="project01.html">
                <div class="featured-panel-item-overlay">
                  <div class="valign">
                    <h3 class="font2 white"><span>Project Title</span></h3>
                  </div>
                </div>
              </a>
          </div>

          <!-- featured-item -->
          <div class="featured-item-block">
              <img alt="" title="" class="img-responsive" src="images/featured/02.jpg"/>
              <a  href="project02.html">
                <div class="featured-panel-item-overlay">
                  <div class="valign">
                    <h3 class="font2 white"><span>Project Title</span></h3>
                  </div>
                </div>
              </a>
          </div>

          <!-- featured-item -->
          <div class="featured-item-block">
              <img alt="" title="" class="img-responsive" src="images/featured/03.jpg"/>
              <a  href="project01.html">
                <div class="featured-panel-item-overlay">
                  <div class="valign">
                    <h3 class="font2 white"><span>Project Title</span></h3>
                  </div>
                </div>
              </a>
          </div>

          <!-- featured-item -->
          <div class="featured-item-block">
              <img alt="" title="" class="img-responsive" src="images/featured/04.jpg"/>
              <a  href="project02.html">
                <div class="featured-panel-item-overlay">
                  <div class="valign">
                    <h3 class="font2 white"><span>Project Title</span></h3>
                  </div>
                </div>
              </a>
          </div>

          <!-- featured-item -->
          <div class="featured-item-block">
              <img alt="" title="" class="img-responsive" src="images/featured/05.jpg"/>
              <a  href="project01.html">
                <div class="featured-panel-item-overlay">
                  <div class="valign">
                    <h3 class="font2 white"><span>Project Title</span></h3>
                  </div>
                </div>
              </a>
          </div>

          <!-- featured-item -->
          <div class="featured-item-block">
              <img alt="" title="" class="img-responsive" src="images/featured/06.jpg"/>
              <a  href="project02.html">
                <div class="featured-panel-item-overlay">
                  <div class="valign">
                    <h3 class="font2 white"><span>Project Title</span></h3>
                  </div>
                </div>
              </a>
          </div>

          <!-- featured-item -->
          <div class="featured-item-block">
              <img alt="" title="" class="img-responsive" src="images/featured/07.jpg"/>
              <a  href="project01.html">
                <div class="featured-panel-item-overlay">
                  <div class="valign">
                    <h3 class="font2 white"><span>Project Title</span></h3>
                  </div>
                </div>
              </a>
          </div>


      </div> <!-- cd-panel-content -->
    </div> <!-- cd-panel-container -->
</section>
<!-- featured works panel :ends -->


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
