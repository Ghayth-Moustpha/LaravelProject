@extends("layouts.app")
@section("content")
<div class="h-1 pb-5"></div>

<h1 class="text-center">Welcome to <span class="text-danger">TempHoster</span> Template</h1>
<div class="h-1 pb-5"></div>

<section class="services">
    <div class="container">
        <div class="row">
            @foreach($templates as $temp) 
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $temp['image'] }}" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $temp['name'] }}</h5>

                        <a  download href="{{asset($temp['download'])}}" class="btn btn-primary m-2">Download</a>
                        <a  download href="{{asset($temp['download'])}}" class="btn btn-danger m-2">Demo</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection