@extends('layout.backend-app')
@section('content-heading')
    <h1 class="page-header">Categories</h1>
@endsection
@section('content-body')
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $cat)
                <tr>
                    <td>{{ $cat->id }}</td>
                    <td><img src="{{ asset('').$cat->category_image }}" class="img-responsive" width="50" /></td>
                    <td>{{ $cat->category_name }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="{{ URL::to('admin/category/' . $cat->id . '/edit') }}">
                            <span class="fa fa-edit"></span>
                        </a>
                        <form action="{{ route('category.destroy', $cat->id)}}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button class="btn btn-danger" type="submit"><span class="fa fa-trash"></span> </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
