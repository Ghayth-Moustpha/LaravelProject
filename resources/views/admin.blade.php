@extends ("layouts.control") 


@section("content") 

<h1 class="p-10 m-5 "> welecom admin |  {{ Auth::user()->name }} </h1> 

@endsection