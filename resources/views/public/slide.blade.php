@extends('public.public')
@section('content')


<div class="banner-main">

      <section class="slider">
           <div class="flexslider">
             <ul class="slides">
                   <li>
                   <img style="width: 347px; height: 387px" src="{{ URL::asset('public/images/4444.png') }}" class="img-responsive" alt="">
                   <h3>Buy your next bottle of wine with the help of 27 Million friends</h3>
                   </li>
          </ul>
        </div>
      </section>
    
</div>

<link rel="stylesheet" href="={{ URL::asset('public/css/flexslider.css')}}" type="text/css" media="screen" />
    <script defer src="{{ URL::asset('public/js/jquery.flexslider.js') }}"></script>
    <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

@endsection