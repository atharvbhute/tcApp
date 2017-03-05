@extends('layouts.app-content')

@section('app-content')
    <div class="list-inline">
        <li class="bg-info"><a href="#">all</a></li>
        <li class="bg-info"><a href="#">sports</a></li>
        <li class="bg-info"><a href="#">gaming</a></li>
        <li class="bg-info"><a href="#">adventures</a></li>
        <li class="bg-info"><a href="#">technical</a></li>
    </div>


    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <a href="">
                <div class="thumbnail">
                    <img src="http://placehold.it/350x200" alt="...">
                    <div class="caption" style="background-color: white">
                        <p><strong>name :-</strong> Cs:Go</p>
                        <p><strong>organiser :-</strong> mindsparks</p>
                        <p><strong>address :-</strong>Wellesley Road, Shivajinagar, Pune, Maharashtra 411005</p>
                        {{--<p><a href="#" class="btn btn-primary" role="button">details</a></p>--}}
                    </div>
                </div>
            </a>

        </div>
    </div>
@endsection
