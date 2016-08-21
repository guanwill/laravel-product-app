@extends('layouts.layout')

@section('title')
  Product
@stop

@section('body')
  <h1>PRODUCTS</h1>

  @foreach($products as $product)
    <h2> {{$product->name}} </h2>
    <h3> {{$product->price}} </h3>
    <br/>
  @endforeach
@stop
