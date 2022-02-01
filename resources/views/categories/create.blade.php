@extends('base')

@section('main')
<div class="categories">
    <div class="main-container">
        <h1 class="main-title">Add a category</h1>
        <div>
            @if ($errors->any())
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('categories.store') }}">
                @csrf
                <div class="control-group">
                    <label for="name">Category:</label>
                    <input type="text" class="form-control" name="name"/>
                </div>

                <button type="submit" class="add-item">Add category</button>
            </form>
        </div>
    </div>
</div>
@endsection