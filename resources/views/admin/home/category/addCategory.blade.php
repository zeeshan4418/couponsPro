@extends('layout.backend-app')
@section('content-heading')
    <h1 class="page-header">Add Category</h1>
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
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
            <div class="row" style="padding: 50px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-5">
                    <label>Category Name / Title <span class="small">- Like electronics, clothing</span></label>
                    <div class="form-group">
                        <input type="text" name="category_name" class="form-control" placeholder="Enter Category Name">
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 0px 0px 20px 0px">
                <div class="col-md-offset-1 col-md-4">
                    <div class="thumbnail img-upload" style="display: none">
                        <img class="img-responsive" width="100" src="" id="cat-img" />
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 0px 0px 20px 0px">
                <div class="col-md-offset-1 col-md-6">
                    <label>Category Image </label>
                    <div class="form-group">
                        <input type="file" name="category_image" style="display: none" />
                        <input type="button" id="cat-img-btn" value="Choose Image" class="btn btn-danger file-btn">
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 20px 0px 30px 0px">
                <div class="col-md-offset-1 col-md-3">
                    <label>Category Status</label>
                    <div class="material-switch pull-right">
                        <input id="categoryStatus" name="category_status" type="checkbox"/>
                        <label for="categoryStatus" class="label-primary"></label>
                    </div>
                </div>
            </div>
            <div class="row text-center" style="padding: 50px 0px 80px 0px">
                <div class="col-md-offset-1 col-md-6">
                    <div class="form-group">
                        <input type="button" id="reset" value="Reset" class="btn btn-warning">
                        <input type="submit" value="Create" class="btn btn-info">
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
                $('#cat-img').attr('src', e.target.result);
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
