@extends('layout.backend-app')
@section('content-heading')
    <h1 class="page-header">Add Store</h1>
@endsection
@section('content-body')
    <div style="box-shadow: 0px 0px 5px orangered">
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
        <form action="{{ isset($store) ? url('admin/store',$store->id):@route('store.store') }}" method="{{ isset($store) ? 'PUT':'POST' }}" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
        <div class="row" style="padding: 50px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-5">
                    <label>Store Name / Title </label>
                    <div class="form-group">
                        <input type="text" name="store_name" value="{{ isset($store->store_name) ? $store->store_name : '' }}" class="form-control" placeholder="Enter Store Name">
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-5">
                    <label>Store Link </label>
                    <div class="form-group">
                        <input type="text" name="store_link" value="{{ isset($store->store_link) ? $store->store_link : '' }}" class="form-control" placeholder="Enter Store Link">
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 0px 0px 20px 0px">
                <div class="col-md-offset-1 col-md-2">
                    <div class="thumbnail img-upload" style="display:{{ isset($store->store_image) ? 'block' : 'none' }}">
                        <img class="img-responsive" width="100" src="{{ isset($store->store_image) ? asset('').$store->store_image : '' }}" id="store-img" />
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 0px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-6">
                    <label>Category Image </label>
                    <div class="form-group">
                        <input type="file" value="{{ isset($store->store_name) ? $store->store_name : '' }}" name="store_image" style="display: none" />
                        <input type="button" id="store-img-btn" value="Choose Image" class="btn btn-danger file-btn">
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-3">
                    <label>Store Featured</label>
                    <div class="material-switch pull-right">
                        <input id="storeFeatured" name="store_featured" type="checkbox" {{ isset($store->store_featured) ? 'checked' : '' }} />
                        <label for="storeFeatured" class="label-primary"></label>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 50px 0px 30px 0px">
                <div class="col-md-offset-1 col-md-3">
                    <label>Store Status</label>
                    <div class="material-switch pull-right">
                        <input id="storeStatus" name="store_status" type="checkbox" {{ isset($store->store_status) ? 'checked' : '' }} />
                        <label for="storeStatus" class="label-primary"></label>
                    </div>
                </div>
            </div>
            <div class="row text-center" style="padding: 20px 0px 80px 0px">
                <div class="col-md-offset-1 col-md-6">
                    <div class="form-group">
                        <input type="button" id="reset" value="Reset" class="btn btn-warning">
                        <input type="submit" value="{{ isset($store) ? 'Update':'Create' }}" class="btn btn-info">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('js')
<script>

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.img-upload').css('display','block');
                $('#store-img').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
        else{
            $('.img-upload').css('display','none');
        }
    }
    $("input[type=file]").change(function(){
        readURL(this);
    });
    $(document).ready(function () {
        $(".file-btn").click(function() {
            $("input[type=file]").trigger("click");
        });

        $('#reset').on('click',function(){
            $('input[type=text]').val('');
            $('input[type=file]').val('');
            $('.img-upload').css('display','none');
        });

    });
</script>
@endsection
