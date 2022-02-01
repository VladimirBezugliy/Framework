@extends('base')

@section('main')
<div class="main-container">
<div class="categories">
    <h1>Categories</h1>
    <div>
        <a style="margin: 20px;" href="{{ route('categories.create')}}" class="new-category">New category</a>
    </div>
    <table>
        <thead>
            <tr>
              <td>Id</td>
              <td>Name</td>
              <td colspan = 2>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{ route('categories.edit',$category->id)}}" class="edit-item">Edit</a>
                </td>
                <td>
                    <form action="{{ route('categories.destroy', $category->id)}}" method="post">
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
<div class="success-message">

  @if(session()->get('success'))
    <div class="success">
      {{ session()->get('success') }}
    </div>
  @endif
</div>

</div>
@endsection

