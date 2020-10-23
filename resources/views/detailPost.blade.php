@extends('layout1')

@section('section')
<div class="jumbotron">
  <h1 class="display-4">{{$article -> title}}</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>{{$article -> body}}</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </p>
</div>


@stop