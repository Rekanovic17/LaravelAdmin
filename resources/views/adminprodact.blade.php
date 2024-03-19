@extends('leyout')
@section('naslov')
    All Admin Products¸¸
@endsection
@section('Desc')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Email</th>
        <th scope="col">Description</th>
        <th scope="col">Amount</th>
        <th scope="col">Price</th>
      </tr>
    </thead>


    @foreach ($allProducts as $product)
    <tbody>
        <tr>
          <th> {{$product->name}} </th>
          <td> {{$product->description}} </td>
          <td> {{$product->amount}} </td>
          <td> {{$product->price}} </td>
        </tr>
    @endforeach
@endsection