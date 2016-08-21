@extends('layouts.layout')

@section('title')
  Create a product
@stop

@section('body')
  <h1>Create a Product</h1>

  {!!Form::open(['route' => 'product.store'])!!}

    {!!Form::label('name', 'Name')!!}
    {!!Form::text('name', null, ['placeholder' => "give a name"])!!}
    {{-- syntax as follows: name, value, options (including placeholder, class name, id name, etc) --}}

    <br/><br/>

    {!!Form::label('price', 'Price')!!}
    {!!Form::text('price', "0$", ['placeholder' => "give a price"])!!}

    <br/>

    {!!Form::submit('Create')!!}

  {!!Form::close()!!}



@stop
