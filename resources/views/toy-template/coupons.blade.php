@extends('layout.front-app')
@include('include.header')
@section('content')
   @if(Request::is('/'))
    @include('toy-template.home-banner')
   @endif
   @if('/coupons')
      @include('toy-template.home-banner-coupon')
   @endif
      <!--show Now-->
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Toys Shop</h3>
            <div class="row">
               <div class="side-bar col-lg-3">
                  <div class="search-hotel">
                     <h3 class="agileits-sear-head">Search Here..</h3>
                     <form action="#" method="post">
                        <div class="row">
                           <div class="col-md-9">
                              <input type="search" placeholder="Product name..." name="search" required="" style="width:100%">
                           </div>
                           <div class="col-md-3">
                              <input type="submit" value=" ">
                           </div>
                        </div>
                     </form>
                  </div>
                  <!--preference -->
                  <div class="left-side">
                     <h3 class="agileits-sear-head">Occasion</h3>
                     <ul>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Gift</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Kid Play</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Dolls</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">Remot</span>
                        </li>
                     </ul>
                  </div>
                  <!-- // preference -->
                  <!-- discounts -->
                  <div class="left-side">
                     <h3 class="agileits-sear-head">Discount</h3>
                     <ul>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">5% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">10% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">20% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">30% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">50% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">60% or More</span>
                        </li>
                     </ul>
                  </div>
                  <!-- //discounts -->
                  <!-- deals -->
               </div>
               <div class="left-ads-display col-lg-9">
                  <div class="row">
                     <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0px 20px 10px 20px;">
                        <div class="row" style="border: 5px double #d4d5d8; padding: 10px;">
                           <div class="col-md-4">
                              <img src="images/a1.jpg" class="img-thumbnail img-fluid" alt="">
                           </div>
                           <div class="col-md-8">
                              <h3>Title</h3>
                              <p>Coupons Discription</p>
                              <hr>
                              <div class="text-lg-right text-md-right">
                                 <button class="btn btn-warning">Coupon</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0px 20px 10px 20px;">
                        <div class="row" style="border: 5px double #d4d5d8; padding: 10px;">
                           <div class="col-md-4">
                              <img src="images/a1.jpg" class="img-thumbnail img-fluid" alt="">
                           </div>
                           <div class="col-md-8">
                              <h3>Title</h3>
                              <p>Coupons Discription</p>
                              <hr>
                              <div class="text-lg-right text-md-right">
                                 <button class="btn btn-warning">Coupon</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0px 20px 10px 20px;">
                        <div class="row" style="border: 5px double #d4d5d8; padding: 10px;">
                           <div class="col-md-4">
                              <img src="images/a1.jpg" class="img-thumbnail img-fluid" alt="">
                           </div>
                           <div class="col-md-8">
                              <h3>Title</h3>
                              <p>Coupons Discription</p>
                              <hr>
                              <div class="text-lg-right text-md-right">
                                 <button class="btn btn-warning">Coupon</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0px 20px 10px 20px;">
                        <div class="row" style="border: 5px double #d4d5d8; padding: 10px;">
                           <div class="col-md-4">
                              <img src="images/a1.jpg" class="img-thumbnail img-fluid" alt="">
                           </div>
                           <div class="col-md-8">
                              <h3>Title</h3>
                              <p>Coupons Discription</p>
                              <hr>
                              <div class="text-lg-right text-md-right">
                                 <button class="btn btn-warning">Coupon</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0px 20px 10px 20px;">
                        <div class="row" style="border: 5px double #d4d5d8; padding: 10px;">
                           <div class="col-md-4">
                              <img src="images/a1.jpg" class="img-thumbnail img-fluid" alt="">
                           </div>
                           <div class="col-md-8">
                              <h3>Title</h3>
                              <p>Coupons Discription</p>
                              <hr>
                              <div class="text-lg-right text-md-right">
                                 <button class="btn btn-warning">Coupon</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-6" style="padding: 0px 20px 10px 20px;">
                        <div class="row" style="border: 5px double #d4d5d8; padding: 10px;">
                           <div class="col-md-4">
                              <img src="images/a1.jpg" class="img-thumbnail img-fluid" alt="">
                           </div>
                           <div class="col-md-8">
                              <h3>Title</h3>
                              <p>Coupons Discription</p>
                              <hr>
                              <div class="text-lg-right text-md-right">
                                 <button class="btn btn-warning">Coupon</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- //show Now-->

   <div class="container">
      <table class="table table-striped">
         <thead>
         <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
         </tr>
         </thead>
         <tbody>
         @foreach($coupons as $coupon)
            <tr>
               <td>{{ $coupon->id }}</td>
               <td>{{ $coupon->coupon_name }}</td>
               <td>{{ $coupon->coupon_description }}</td>
            </tr>
         @endforeach
         </tbody>
      </table>
   </div>
    {{--@include('toy-template.about-us')
    @include('toy-template.new-arrival')
    @include('toy-template.customer-review')
    @include('toy-template.product-view')
    @include('toy-template.subscribe')
    @include('include.footer')--}}
@endsection