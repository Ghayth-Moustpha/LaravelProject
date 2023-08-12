@extends('layouts.app') 
@section('content')
<header class="bg-dark text-light p-2">
    <div class="container text-center">
      <h1 class="display-4 h3 font-weight-bold">Temp<span class="text-danger">Hoster</span>  Team</h1>
    </div>
  </header>
<section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{asset('img/maya.jpg')}}" alt="Student 1" class="img-fluid mb-3">
          <h2>Maya Al-Ahmad </h2>
          <p>Software Engineering Student</p>
          <p>Maya  is a passionate software engineer with a focus on developing innovative projects. He believes in using technology to solve real-world problems and make a positive impact on society.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('img/mohammad.jpg')}}" alt="Student 2" class="img-fluid mb-3">
          <h2>Mohammad Hariri</h2>
          <p>Software Engineering Student</p>
          <p>Mohammad loves coding and creating software applications that improve people's lives. She enjoys collaborating with others and exploring new technologies to expand her skills and knowledge.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('img/maher.jpg')}}" alt="Student 3" class="img-fluid mb-3">
          <h2>Maher Abo-Shanab</h2>
          <p>Software Engineering Student</p>
          <p>Maher is a dedicated software engineer who is passionate about creating impactful projects. He believes that technology can drive positive change and enjoys working on projects that make a difference.</p>
        </div>
      </div>
    </div>
  </section>
@endsection

