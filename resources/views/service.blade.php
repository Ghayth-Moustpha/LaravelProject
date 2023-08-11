@extends("layouts.app")
@section("content")
<div class="h-1 pb-5"></div>

<h1 class="text-center">Welcome to <span class="text-danger">TempHoster where </span> {{ $service['title'] }}</h1>
<div class="h-1 pb-5"></div>

<section class="services">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <img src="{{ asset($service['image'])   }}" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service['title'] }}</h5>
                        <p class="card-text">{{ $service['details'] }}</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection