@extends('layouts.layout')

@section('title')
  Product
@stop

@section('body')
  <h1>PRODUCTS</h1>

  @foreach($products as $product)
    <p> {{$product->name}}:  ${{$product->price}} </p>
  @endforeach
@stop
