@extends('layouts.master')

@section('style')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
@endsection
@section('content')
    <div class="container mt-5 mb-md-4 py-5">
        <!-- Title + Breadcrumb-->
        <h1 class="h4 mb-3">نهایی کردن آگهی</h1>
        <p class="pb-2 mb-4 fs-lg">در صورت تمایل ویژگی های بیشتری را به آگهی خود اضافه کنید.</p>
        <h2 class="h4 pt-4 pt-md-5 mb-4">ویژگی های بیشتر</h2>
        <form action="{{route('agency.pay_estate.update' , $estate->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="card card-hover card-body px-4 mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="ladder" value="1" name="ladder">
                    <label class="form-check-label d-sm-flex align-items-center justify-content-between" for="ladder"><span class="d-block px-1"><span class="d-block h6 mb-2">انتقال آگهی به لیست اول (7 روز)</span><span class="d-block mb-2 mb-sm-0">آگهی شما به مدت 7 روز جزو 5 آگهی اول لیست خواهد بود.</span></span><span class="d-block h5 mb-0">20.000 تومان</span></label>
                </div>
            </div>
            <div class="card card-hover card-body px-4 mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="special" value="1" name="special">
                    <label class="form-check-label d-sm-flex align-items-center justify-content-between" for="special"><span class="d-block px-1"><span class="d-block h6 mb-2">ویژه کردن آگهی برای </span><span class="d-block mb-2 mb-sm-0">آگهی شما یه نشان با عنوان < ویژه > دریافت خواهد کرد.</span></span><span class="d-block h5 mb-0">50.000 تومان</span></label>
                </div>
            </div>

                <div class="text-end pt-4">
                    <div class="h5 mb-4">جمع کل: <span id="total_price">20.000</span> تومان</div>
                    <button class="btn btn-primary btn-lg" type="submit">پرداخت و ثبت آگهی</button>
                </div>
        </form>

    </div>
@endsection

@section('script')
    <script>

        $(document).change(function(){

            if($('#ladder').is(':checked') && !$('#special').is(':checked')) {
                document.getElementById("total_price").innerHTML = '40.000';
            }
            else if (!$('#ladder').is(':checked') && $('#special').is(':checked')){
                document.getElementById("total_price").innerHTML = '70.000';
            }
            else if ($('#ladder').is(':checked') && $('#special').is(':checked')){
                document.getElementById("total_price").innerHTML = '90.000';
            }
            else {
                document.getElementById("total_price").innerHTML = '20.000';
            }


        });


    </script>
@endsection
