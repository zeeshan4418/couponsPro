@extends('layout.backend-app')
@section('content-heading')
    <h1 class="page-header">Add Forum Category </h1>
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
        <form action="{{ isset($forum) ? url('admin/forum',$forum->id):@route('forum.store') }}" method="{{ isset($forum) ? 'PUT':'POST' }}" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
            <div class="row" style="padding: 50px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-5">
                    <label>Forum Type </label>
                    <div class="form-group">
                        <select name="forum_type" class="form-control selectpicker" data-live-search="true">
                            <option data-tokens="coupon">Coupon</option>
                            <option data-tokens="deal">Deal</option>
                            <option data-tokens="discussion">Discussion</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 20px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-5">
                    <label>Forum Name / Title </label>
                    <div class="form-group">
                        <input type="text" name="forum_name" value="{{ isset($forum->forum_name) ? $forum->forum_name : '' }}" class="form-control" placeholder="Enter Forum Name">
                    </div>
                </div>
            </div>
            <div class="row" style="padding: 10px 0px 10px 0px">
                <div class="col-md-offset-1 col-md-5">
                    <label>Forum Discruption </label>
                    <div class="form-group">
                        <textarea name="forum_description" class="form-control" placeholder="Enter Forum Discussion">{{ isset($forum->forum_discussion) ? $forum->forum_discussion : '' }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-offset-1 col-md-5">
                    <div class="form-group">
                        <label>Status</label>
                        <div class="material-switch pull-right">
                            <input id="storeFeatured" name="forum_status" type="checkbox" {{ isset($forum->forum_status) ? 'checked' : '' }} />
                            <label for="storeFeatured" class="label-primary"></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" style="padding: 20px 0px 80px 0px">
                <div class="col-md-offset-1 col-md-6">
                    <div class="form-group">
                        <input type="button" id="reset" value="Reset" class="btn btn-warning">
                        <input type="submit" value="{{ isset($forum) ? 'Update':'Create' }}" class="btn btn-info">
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
