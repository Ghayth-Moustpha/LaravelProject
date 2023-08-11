@extends("layouts.app")
@section("content")
<div class="h-1 pb-5"></div>

<h1 class="text-center">Welcome to <span class="text-danger">TempHoster</span> Services</h1>
<div class="h-1 pb-5"></div>

<section class="services">
    <div class="container">
        <div class="row">
            @foreach($services as $service) 
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ $service['image'] }}" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title">{{ $service['title'] }}</h5>
                        <p class="card-text">{{ $service['details'] }}</p>
                        <a href="services/{{$service['id']}}" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection