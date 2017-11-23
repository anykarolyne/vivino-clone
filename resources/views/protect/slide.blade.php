@extends('protect.index')
@section('content')


<div class="banner-main">

      <section class="slider">
           <div class="flexslider">
             <ul class="slides">
                   <li>
                   <img style="width: 347px; height: 387px" src="{{ URL::asset('public/images/4444.png') }}"
                   <h3>Compre sua próxima garrafa de vinho com a ajuda de 27 milhões de amigos</h3>
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