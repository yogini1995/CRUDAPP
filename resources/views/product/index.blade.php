@extends('product.layout')

@section('content')

<br><br>
    <div class="row">
    
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Laravel Prodcut List</h2>
            </div>
            
            <div class="pull-right">
                <a class= "btn btn-success" href="{{ route('create.product') }}">Create New Product</a>
            </div>
        </div>
    </div>


        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p> {{ $message }} </p>
        </div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th width="150px"> Product Name </th>
                <th width="150px"> Product Code </th>
                <th width="200px"> Details </th>
                <th width="100px"> Product Logo </th>
                <th width="280px"> Action </th>
            </tr>

            @foreach($product as $pro)
            <tr>
                
                <td> {{ $pro->product_name }} </td>  
                <td> {{ $pro->product_code }} </td>
                <td> {{ $pro->details }} </td>
                <td> <img src="{{ URL::to($pro->logo) }}" height="70px;" width="80px;"> </td>
                <td> 
                    <a href="{{ URL::to('show/product/'.$pro->id) }}" class="btn btn-info">Show</a>   
                    <a href="{{ URL::to('edit/product/'.$pro->id) }}" class="btn btn-primary">Edit</a>
                    <a href="{{ URL::to('delete/product/'.$pro->id) }}" class="btn btn-danger"
                    onclick="return confirm('Are you sure?')" >Delete</a>        
                 </td>   
                 
                 
            </tr>
            @endforeach 

        
        </table>

        {{!! $product->links() !!}}

   

@endsection