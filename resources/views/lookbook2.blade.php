
      <div class="scroll">

        @foreach($files as $file)
        <!-- start : works-item -->

        <div class="works-item works-item-one-half-spaced zoom ui web">
                <img alt="" title="" class="img-responsive" src="{{$file}}"/>
                <a  class="venobox" data-gall="portfolio-gallery" href="{{$file}}">
                    <div class="works-item-inner">

                    </div>
                </a>
        </div>
        <!-- end : works-item -->


        @endforeach

      </div>
