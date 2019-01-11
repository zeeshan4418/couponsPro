@extends('layout.backend-app')
@section('content-heading')
    <h1 class="page-header">Stores</h1>
@endsection
@section('content-body')
    <div class="row">
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <td>ID</td>
                <td>Store Image</td>
                <td>Store Name</td>
                <td>Store Status</td>
                <td>Actions</td>
            </tr>
            </thead>
            <tbody>
            @foreach($store as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td><img src="{{ asset('').$s->store_image }}" class="img-responsive" width="50" /></td>
                    <td>{{ $s->store_name }}</td>
                    <td>{{ $s->store_status }}</td>
                    <td>
                        <div class="pull-left" style="padding-right: 5px;">
                            <a class="btn btn-small btn-info" href="{{ URL::to('admin/store/' . $s->id . '/edit') }}">
                                <span class="fa fa-edit"></span>
                            </a>
                        </div>
                        <div class="pull-left">
                            <form action="{{ route('store.destroy', $s->id)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger" type="submit"><span class="fa fa-trash"></span> </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
