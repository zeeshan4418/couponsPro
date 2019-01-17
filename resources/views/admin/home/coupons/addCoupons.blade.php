@extends('layout.backend-app')
@section('content-heading')
    <h1 class="page-header">Add Store</h1>
@endsection
@section('content-body')
    <div class="row" style="box-shadow: 0px 0px 5px orangered">
        @if(Session::has('success'))
        <div class="row" style="padding-top:10px;">
            <div class="col-md-offset-1 col-md-11">
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

            <form action="{{ isset($coupon) ? url('admin/coupon',$coupon->id) : route('coupon.store') }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" value="{{ csrf_token() }}" name="_token">
            {{--{{ method_field('PATCH') }}--}}
            {{ isset($coupon) ? '<input type="hidden" name="_method" value="PUT">':'' }}

            <div class="col-md-6">
                <div class="row" style="padding: 50px 0px 10px 0px">
                    <div class="col-md-offset-1 col-md-11">
                        <div class="form-group">
                            <label>Select Forum Category</label>
                            <select name="coupon_forum_category" class="form-control selectpicker" data-live-search="true">
                                <option value="">Select Forum Category</option>
                                @foreach($data['ForumCategory'] as $forum)
                                    <option value="{{$forum->id}}">{{ $forum->forum_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 50px 0px 10px 0px">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Select Store</label>
                            <select name="coupon_store" class="form-control selectpicker" data-live-search="true">
                                <option value="">Select Forum Category</option>
                                @foreach($data['Stores'] as $store)
                                    <option value="{{$store->id}}">{{ $store->store_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-offset-1 col-md-11">
                        <div class="form-group">
                            <label>Select Category</label>
                            <select name="coupon_category" class="form-control selectpicker" data-live-search="true">
                                <option value="">Select Category</option>
                                @foreach($data['category'] as $category)
                                    <option value="{{$category->id}}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Coupon Name / Title </label>
                            <div class="form-group">
                                <input type="text" name="coupon_name" value="{{ isset($coupon->coupon_name) ? $coupon->coupon_name : '' }}" class="form-control" placeholder="Enter Coupon Title">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-offset-1 col-md-11">
                        <div class="form-group">
                            <label>Coupon Price </label>
                            <div class="form-group">
                                <input type="text" name="coupon_price" value="{{ isset($coupon->coupon_price) ? $coupon->coupon_price : '' }}" class="form-control" placeholder="Enter Coupon Price">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Coupon Discount </label>
                            <div class="form-group">
                                <input type="text" name="coupon_discount" value="{{ isset($coupon->coupon_discount) ? $coupon->coupon_discount : '' }}" class="form-control" placeholder="Enter Coupon Discount">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-offset-1 col-md-11">
                        <div class="form-group">
                            <label>Coupon Code </label>
                            <div class="form-group">
                                <input type="text" name="coupon_code" value="{{ isset($coupon->coupon_code) ? $coupon->coupon_code : '' }}" class="form-control" placeholder="Enter Coupon Code">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Coupon URL/Link  </label>
                            <div class="form-group">
                                <input type="text" name="coupon_url" value="{{ isset($coupon->coupon_url) ? $coupon->coupon_url : '' }}" class="form-control" placeholder="Enter Coupon URL">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-offset-1 col-md-11">
                        <div class="form-group">
                            <label>Coupon Expiry Date </label>
                            <div class="form-group">
                                <input type="date" name="coupon_expiry_date" value="{{ isset($coupon->coupon_expiry_date) ? $coupon->coupon_expiry_date : '' }}" class="form-control" placeholder="Enter Coupon Expiry Date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label> Coupon Description </label>
                            <textarea name="coupon_description" placeholder="Enter Coupon Description" class="form-control" rows="2">{{ isset($coupon->coupon_description) ? $coupon->coupon_description:"" }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-offset-1 col-md-11">
                        <div class="thumbnail img-upload" style="display:{{ isset($coupon->coupon_image) ? 'block' : 'none' }}">
                            <img class="img-responsive" width="100" src="{{ isset($coupon->coupon_image) ? asset('').$coupon->coupon_image : '' }}" id="store-img" />
                        </div>
                        <label>Category Image </label>
                        <div class="form-group">
                            <input type="file" value="{{ isset($coupon->coupon_image) ? $coupon->coupon_image : '' }}" name="coupon_image" style="display: none" />
                            <input type="button" id="store-img-btn" value="Choose Image" class="btn btn-danger file-btn">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row" style="padding: 10px 0px 10px 0px">
                    <div class="col-md-11">
                        <div class="form-group">
                            <label>Store Featured</label>
                            <div class="material-switch pull-right">
                                <input id="couponFeatured" name="coupon_featured" type="checkbox" {{ isset($coupon->coupon_featured) ? 'checked' : '' }} />
                                <label for="couponFeatured" class="label-primary"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Coupon Exclusive</label>
                            <div class="material-switch pull-right">
                                <input id="couponExclusive" name="coupon_exclusive" type="checkbox" {{ isset($coupon->coupon_exclusive) ? 'checked' : '' }} />
                                <label for="couponExclusive" class="label-primary"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Store Verify</label>
                            <div class="material-switch pull-right">
                                <input id="couponVerify" name="coupon_verify" type="checkbox" {{ isset($coupon->coupon_verify) ? 'checked' : '' }} />
                                <label for="couponVerify" class="label-primary"></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Store Status</label>
                            <div class="material-switch pull-right">
                                <input id="couponStatus" name="coupon_status" type="checkbox" {{ isset($coupon->coupon_status) ? 'checked' : '' }} />
                                <label for="couponStatus" class="label-primary"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 text-center" style="padding: 20px 0px 50px 0px;">
                <input type="button" value="Reset" class="btn btn-warning">
                <input type="submit" value="Save" class="btn btn-info">
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
