@extends('base')
@section('main')
<div class="main-container">
    <div class="update-categories">
        <h1 class="main-title">Update a category</h1>

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
        <form method="post" action="{{ route('categories.update', $category->id) }}">
            @method('PATCH')
            @csrf
            <div class="control-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}" />
            </div>

            <button type="submit" class="update-item">Update</button>
        </form>
    </div>
</div>
@endsection

