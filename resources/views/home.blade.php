@extends('base')

@section('content')

<div class="jumbotron" style="margin-top: 190px;">
  <h1 class="display-4">Welcome to my CRUD App!</h1>
  <!-- <p class="lead">Create,</p> -->
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="text-decoration-none text-dark" href="{{url('/stores')}}">Get Started &nbsp;<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
</div>

@stop