@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul class="list-inline">
                    <li><a class="btn btn-block btn-primary" href="#">People</a></li>
                    <li><a class="btn btn-block btn-primary" href="#">Competitions</a></li>
                    <li><a class="btn btn-block btn-primary" href="#">News</a></li>
                </ul>
                <div>
                    @yield('app-content')
                </div>
            </div>
        </div>
    </div>
@endsection