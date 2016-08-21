@extends('layouts.layout')

@section('title')
  Product
@stop

@section('body')
  <h1>PRODUCTS</h1>

  @foreach($products as $product)
    <p> {{$product->id}}. {{$product->name}}:  ${{$product->price}} </p>
    <a href="{{route('product.show', $product->id)}}">Show</a>
    <a href="{{route('product.edit', $product->id)}}">Edit</a>
    
    {!!Form::open([
      'method' => 'delete',
      'route' => ['product.destroy', $product->id]
    ])!!}
    {!!Form::submit('delete')!!}
    {!!Form::close()!!}

  @endforeach

  <a href="{{route('product.create')}}">Create</a>

@stop
