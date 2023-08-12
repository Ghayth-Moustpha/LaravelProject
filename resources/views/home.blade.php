
@extends('layouts.app')

@section('content')


    <div class="row justify-content-center">
        <div class="col-12">
        
        <section class="hero">
    <div class="container">

      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="display-4">Find the Perfect Template for Your Website</h1>
          <p class="lead">Browse through a wide range of professionally designed templates for your website. Customizable and ready to use.</p>
          <a href="#" class="btn btn-primary btn-lg">View Templates</a>
        </div>
        <div class="col-lg-6">
          <img src="https://i.ytimg.com/vi/ralQKHBYGlc/maxresdefault.jpg" alt="Hero Image" class="img-fluid">
        </div>
      </div>
    </div>
  </section>

  <!-- Featured Templates Section -->
  <section class="featured-templates py-5">
    <div class="container">
      <h2 class="text-center mb-4">Featured Templates</h2>
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <img src="images/template1.jpg" class="card-img-top" alt="Template 1">
            <div class="card-body">
              <h5 class="card-title">Template 1</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, voluptate.</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-4">
            <img src="images/template2.jpg" class="card-img-top" alt="Template 2">
            <div class="card-body">
              <h5 class="card-title">Template 2</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, voluptate.</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mb-4">
            <img src="images/template3.jpg" class="card-img-top" alt="Template 3">
            <div class="card-body">
              <h5 class="card-title">Template 3</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, voluptate.</p>
              <a href="#" class="btn btn-primary">View Details</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
            </div>
        

</div>
<section class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="display-4">Discover Our Amazing Web Project</h2>
          <p class="lead">this is A core php web application try to help with the development process under CMMI (Capability Maturity Model Integration) is typically referred to as a "CMMI tool" or a "CMMI software tool." These tools are designed to support the implementation of CMMI best practices and help organizations improve their development processes.</p>
          <a href="https://cpl.eliejah.com" class="btn btn-danger btn-lg">Go To cpl.eliejah.com</a>
        </div>
        <div class="col-md-6">
          <img src="img/cpl.jpg" alt="Web Project" class="img-fluid" target="_blank">
        </div>
      </div>
    </div>
  </section>
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
          <p>Maya  is a passionate software engineer with a focus on developing innovative projects. she believes in using technology to solve real-world problems and make a positive impact on society.</p>
        </div>
        <div class="col-md-4">
          <img src="{{asset('img/mohammad.jpg')}}" alt="Student 2" class="img-fluid mb-3">
          <h2>Mohammad Hariri</h2>
          <p>Software Engineering Student</p>
          <p>Mohammad loves coding and creating software applications that improve people's lives. phphe enjoys collaborating with others and exploring new technologies to expand her skills and knowledge.</p>
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


