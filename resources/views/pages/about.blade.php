@extends('layouts.layout')

@section('title')
  About
@stop

@section('body')
  <h1>This is the about page</h1>

  <p>{{$companyName}}</p>  <!-- Use curly brackets to access variables defined in controller. this variable is defined in Pages Controller in getAbout function -->

  @for ($i = 0; $i < 10; $i++)
    <p>The current value is {{ $i }}</p>
  @endfor

  @foreach ($users as $friends)
    <p>Your name is {{$friends}}</p>
  @endforeach

@stop
