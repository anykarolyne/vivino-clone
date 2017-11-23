@extends('protect.index')
@section('content')
        <div class="price-range">
           <div class="well">
                <h2>Price Range</h2>
                 <div id="slider-range"></div>
                 <br>
                 <b class="pull-left">$
                     <input size="2" type="text" id="amount_start" name="start_price" 
                            value="15" style="border:0px; font-weight: bold; color:green" readonly="readonly" /></b>

                 <b class="pull-right">$ 
                     <input size="2" type="text" id="amount_end" name="end_price" value="65"
                            style="border:0px; font-weight: bold; color:green" readonly="readonly"/></b> 
           </div> 
         </div>
@endsection