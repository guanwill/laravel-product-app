@extends('layouts.layout')

@section('title')
  Edit {{$product->name}}
@stop

@section('body')
  <h1>Edit {{$product->name}}</h1>

  {!!Form::model($product,[
    'method' => 'patch',
    'route' => ['product.update', $product->id]
  ])!!}

    {!!Form::label('name', 'Name')!!}
    {!!Form::text('name', $product->name, ['placeholder' => "give a name"])!!}
    {{-- syntax as follows: name, value, options (including placeholder, class name, id name, etc) --}}

    <br/><br/>

    {!!Form::label('price', 'Price')!!}
    {!!Form::text('price', $product->price, ['placeholder' => "give a price"])!!}

    <br/><br/>

    {!!Form::submit('Edit')!!}
    {!!Form::close()!!}


@stop
