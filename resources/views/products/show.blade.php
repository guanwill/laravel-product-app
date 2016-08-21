@extends('layouts.layout')

@section('title')
  {{$product->name}}
@stop

@section('body')
  {!!Form::open([
    'method' => 'delete',
    'route' => ['product.destroy', $product->id]
  ])!!}

  <H1>{{$product->name}}</h1>
  <p>Price: ${{$product->price}}</p>

  <a href="{{route('product.edit', $product->id)}}">Edit</a>

  {!!Form::submit('delete')!!}
  {!!Form::close()!!}

@stop
