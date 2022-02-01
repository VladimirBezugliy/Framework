@extends('base')

@section('main')
<div class="products">
    <div class="main-container">
        <h1 class="main-title">Add a product</h1>
        <div>
            @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('products.store') }}">
                @csrf
                <div class="control-group">
                    <label for="name">Product name</label>
                    <input type="text" class="form-control" name="name"/>
                </div>

                <div class="control-group">
                    <label for="category_id">Category id:</label>
                    <input type="text" class="form-control" name="category_id"/>
                </div>

                <div class="control-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" name="price"/>
                </div>

                <button type="submit" class="add-item">Add product</button>
            </form>
        </div>
    </div>
</div>
@endsection

