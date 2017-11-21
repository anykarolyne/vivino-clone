@extends('welcome')
@section('carteira')

    <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="widget widget-default widget-item-icon">
                <div class="widget-item-left">
                    <span class="fa  fa-glass"></span>
                </div>
                <div class="widget-data">
                    <div>
                        <div class="widget-title"><center><h1>Vinhos</h1></center></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Vinhos</h3>
                        <span></span>
                    </div>
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>

                    </ul>
                </div>
                <div class="panel-body">
                    <table class="table datatable_simple">
                        <thead>
                        <tr>
                            <th> Produtor</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($wines as $wine)
                            <tr>
                                <td><strong>{{$wine->producer}}</strong></td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection