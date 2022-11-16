@extends("layouts.common")
@section("content")

    <div class="registration-step desktop-screen">
        <div class="container">
            <div class="row">


                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="/student/personal-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number">
                                        <h4>১</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="">ব্যক্তিগত তথ্যাবলী</p>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="/student/academic-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>২</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="">একাডেমিক তথ্যাবলী</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/professional-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>৩</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p>পেশাগত তথ্যাবলী</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/guest-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>৪</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p> পারিবারিক সদস্যের তথ্যাবলী

                            </p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/gift-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number active">
                                        <h4>৫</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="reg-p-active">উপহার সংক্রান্ত তথ্যাবলী</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/fee-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4> ৬</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p>রেজিস্ট্রেশন ফি</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>৭</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p>আমন্ত্রণপত্র </p>
                        </a>
                    </li>

                </ul>


            </div>

        </div>

    </div>


    <div class="registration-step mobile-screen">
        <div class="container">
            <div class="row">


                <ul class="mobile-list-inline">
                    <!-- <li class="list-inline-item">
                        <a href="/student/personal-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number">
                                        <h4>১</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="">ব্যক্তিগত তথ্যাবলী</p>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a href="/student/academic-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>২</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="">একাডেমিক তথ্যাবলী</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/professional-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>৩</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p>পেশাগত তথ্যাবলী</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/guest-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>৪</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p> পারিবারিক সদস্যের তথ্যাবলী

                            </p>
                        </a>
                    </li> -->
                    <li class="list-inline-item">
                        <a href="/student/gift-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number active">
                                        <h4>৫</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;" class="reg-p-active">উপহার সংক্রান্ত তথ্যাবলী</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/fee-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4> ৬</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;">রেজিস্ট্রেশন ফি</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>৭</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;">আমন্ত্রণপত্র </p>
                        </a>
                    </li>

                </ul>


            </div>

        </div>

    </div>

    <section class="form-area">
        <div class="container">

            <div class="row">

                <div class="col-md-8 mx-auto">
                    <div class="card">
                        @if($gift == null)

                            <div class="card-body">

                                <form class="" method="post" action="/student/gift-info">

                                    @csrf
                                    <input name="student_id" value="{{$student_id}}" type="hidden"/>
                                    {{-- <div class="input-group  pt-2">
                                         <label>গিফট আইটেম </label>
                                         <div class="col-md-12 checkbox-form">

                                             <label class="checkbox-inline">
                                                 <label>টি শার্ট সাইজ </label>
                                                 <input type="radio" name="tshirt_size[]" value="S">S
                                                 <input type="radio" name="tshirt_size[]" value="M">M
                                                 <input type="radio" name="tshirt_size[]" value="L">L
                                                 <input type="radio" name="tshirt_size[]" value="XL">XL

                                             </label>
                                         </div>
                                     </div>--}}

                                    <div class="input-group  pt-2">
                                        <label></label>
                                        <div class="col-md-12 checkbox-form">

                                            <label class="checkbox-inline">
                                                <label>ডেলিভারির মাধ্যম </label>
                                                <input type="radio" name="delivery_type" value="ভেন্যু">ভেন্যু
                                                <input type="radio" name="delivery_type" value="বর্তমান ঠিকানা">বর্তমান
                                                ঠিকানা

                                            </label>
                                        </div>
                                        <div class="input-group row">
                                            <label for="address" class="col-sm-1-12 col-form-label"></label>
                                            <div class="col-sm-1-12">
                                                <input type="text" class="form-control" name="address" id="address"
                                                       placeholder="5/8 House, Mirpur-1 Dhaka-1216"
                                                       value="{{getPresentAddress()}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-warning">পরবর্তী >></button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        @else
                            <div class="card-body">

                                <form class="" method="post" action="/student/gift-info-update">

                                    @csrf
                                    <input name="student_id" value="{{$student_id}}" type="hidden"/>
                                    <input name="id" value="{{$gift->id}}" type="hidden"/>
                                    {{-- <div class="input-group  pt-2">
                                         <label>গিফট আইটেম </label>
                                         <div class="col-md-12 checkbox-form">

                                             <label class="checkbox-inline">
                                                 <label>টি শার্ট সাইজ </label>
                                                 <input type="radio" name="tshirt_size[]" value="S">S
                                                 <input type="radio" name="tshirt_size[]" value="M">M
                                                 <input type="radio" name="tshirt_size[]" value="L">L
                                                 <input type="radio" name="tshirt_size[]" value="XL">XL

                                             </label>
                                         </div>
                                     </div>--}}

                                    <div class="input-group  pt-2">
                                        <label></label>
                                        <div class="col-md-12 checkbox-form">

                                            <label class="checkbox-inline">
                                                <label>ডেলিভারির মাধ্যম </label>
                                                <input type="radio" @if($gift->delivery_type == "ভেন্যু") checked @endif name="delivery_type" value="ভেন্যু">ভেন্যু
                                                <input type="radio" @if($gift->delivery_type == "বর্তমান ঠিকানা") checked @endif name="delivery_type" value="বর্তমান ঠিকানা">বর্তমান
                                                ঠিকানা

                                            </label>
                                        </div>
                                        <div class="input-group row">
                                            <label for="address" class="col-sm-1-12 col-form-label"></label>
                                            <div class="col-sm-1-12">
                                                <input type="text" class="form-control" name="address" id="address"
                                                       placeholder="5/8 House, Mirpur-1 Dhaka-1216"
                                                       value="{{getPresentAddress()}}">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-warning">পরবর্তী >></button>
                                        </div>
                                    </div>
                                </form>


                            </div>
                        @endif

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
