@extends('products.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> 電子商務網站</h2>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        @foreach ($products as $product)
        <tr>
            <td><img src='upload/{{ $product->imgLink}}'></td>
            <td>
                產品名稱 : {{ $product->name }}
                <hr>
                產品售價 : {{ $product->price }}
            </td>
            <td>{{ $product->summary }}</td>
            <td>
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">加入購物車</a>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $products->links() !!}
      
@endsection