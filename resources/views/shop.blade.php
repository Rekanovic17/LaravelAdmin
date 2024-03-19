@extends("leyout")
@section('naslov')
    Shop
@endsection
@section('Desc')
@foreach ($arrayshop as $item)
    @if ($item=="Apple")
    <h1 class="text-danger">{{$item}} -50% ACTION </div>        
    @else
        <h3>{{$item}}</h3>
    @endif
    
@endforeach
@endsection