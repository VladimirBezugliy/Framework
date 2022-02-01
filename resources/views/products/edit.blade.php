@extends('base')
@section('main')
<div class="main-container">
    <div>
        <h1 class="main-title">Update a contact</h1>

        @if ($errors->any())
        <div class="error">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('products.update', $product->id) }}">
            @method('PATCH')
            @csrf
            <div class="control-group">
                <label for="name">Product name:</label>
                <input type="text" class="form-control" name="name" value={{ $product->name }} />
            </div>

            <div class="control-group">
                <label for="category_id">Category id:</label>
                <input type="text" class="form-control" name="category_id" value={{ $product->category_id }} />
            </div>

            <div class="control-group">
                <label for="price">Price:</label>
                <input type="text" class="form-control" name="price" value={{ $product->price }} />
            </div>

            <button type="submit" class="update-item">Update</button>
        </form>
    </div>
</div>
@endsection

