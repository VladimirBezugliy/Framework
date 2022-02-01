@extends('base')

@section('main')
<div class="main-container">
    <div>
        <h1 class="main-title">Products</h1>
        <div>
            <a style="margin: 20px;" href="{{ route('products.create')}}" class="new_product">New product</a>
        </div>
        <table>
            <thead>
                <tr>
                  <td>Id</td>
                  <td>Name</td>
                  <td>Category id</td>
                  <td>Price</td>
                  <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id)}}" class="edit-item">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="delete-item" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        @if(session()->get('success'))
        <div class="success">
            {{ session()->get('success') }}
        </div>
        @endif
    </div>
</div>
@endsection

