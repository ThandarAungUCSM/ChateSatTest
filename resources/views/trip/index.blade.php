@extends("layouts.trip-master")
@section('style')
  <style type="text/css">
      .div4Border {
        padding-right: 0px;
        border: 1px solid gray;
      }
      .div4Inner {
        -webkit-box-flex: 1;
        flex: 1 1 auto;
        min-height: 1px;
        padding-left: 1.25rem;
        padding-right: 1.25rem;
      }
      .div4NestedInner {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
      }
      .tripName {
        background-color: #000; 
        color: #FFF;
      }
      .triangleCss {
        width: 0;
        height: 0; 
        border-top: 100px solid red; 
        border-left: 100px solid transparent;
      }
  </style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        @foreach($trips as $trip)
        <div class="col-md-4 div4Border" style="padding-right: 0px;
        border: 1px solid gray;" >
            <div class="">
                <div class="div4Inner" style="-webkit-box-flex: 1;
                    flex: 1 1 auto;
                    min-height: 1px;
                    padding-left: 1.25rem;
                    padding-right: 1.25rem; 
                    position: relative;
                ">
                    <div class="row div4NestedInner" style="display: flex;
                            flex-wrap: wrap;
                            justify-content: space-between;">
                        <div style=" padding-top: 1.25rem; width: 10rem; text-align: center;">
                            <p class="tripName" style="background-color: #000; 
                                color: #FFF;">{{$trip->tag_name}}</p>
                        </div>
                        <div style="padding-top: 0.5rem;">
                            <div class="" style="width: 0;
                                height: 0; 
                                border-top: 70px solid red; 
                                border-left: 70px solid transparent;"></div>
                        </div>
                    </div>

                    <div class="" style="text-align: center; padding-bottom: 15px;">
                        <div style="width: 100%">{{$trip->pack_name }}</div>
                        <div style="width: 100%; display: flex; flex-wrap: wrap;justify-content: center;">
                            <div style="width: 30px; height: 30px; border: 1px solid green; border-radius: 15px;">
                            </div>
                        </div>
                        <div style="width: 100%">{{$trip->pack_description }}</div>
                    </div>

                    <div class="" style="text-align: center; bottom: 0;">
                        <div style="width: 100%">{{$trip->pack_price }}</div>
                        <div style="width: 100%">price divided by count</div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection



