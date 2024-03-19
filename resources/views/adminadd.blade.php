@extends('leyout')
@section('naslov')
    Admin Add Products
@endsection
@section('Desc')
<form method="POST" action="/admin/add-all">
    {{ csrf_field() }}

    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="email">Email:</label>
      <input name="email" type="email" id="email" placeholder="Enter email..." class="form-control" />
      
    </div>
    
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="description">Description:</label>
      <input name="description" type="text" id="description" placeholder="Enter description..." class="form-control" />
     
    </div>
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="amount">Amount:</label>
      <input name="amount" type="number" id="amount" placeholder="Enter amount..." class="form-control" />
      
    </div>
    
    <div data-mdb-input-init class="form-outline mb-4">
        <label class="form-label" for="price">Price:</label>
      <input name="price" type="number" id="price" placeholder="Enter price..." class="form-control" />
     
    </div>
    @if ($errors->any())
      <p>Error: {{$errors->first()}}</p>  
    @endif
    <input type="submit" value="Add Product">
</form>

@endsection