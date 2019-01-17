@extends('layout.backend-app')
@section('content-heading')
    <h1 class="page-header">Categories</h1>
@endsection
@section('content-body')
    @if(Session::has('success'))
        <div class="row" style="padding-top:10px;">
            <div class="col-md-offset-1 col-md-6">
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
    @endif
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
                        <div class="pull-left" style="padding-right:5px; ">
                            <form action="{{ route('category.destroy', $cat->id)}}" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit"><span class="fa fa-trash"></span> </button>
                            </form>
                        </div>
                        <div class="pull-left">
                            <a class="btn btn-small btn-info" href="{{ URL::to('admin/category/' . $cat->id . '/edit') }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
