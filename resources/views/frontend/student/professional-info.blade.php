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
                                    <div class="number active ">
                                        <h4>৩</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="reg-p-active">পেশাগত তথ্যাবলী</p>
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
                                    <div class="number ">
                                        <h4>৫</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p>উপহার সংক্রান্ত তথ্যাবলী</p>
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
                    </li> -->

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
                            <p style="font-size:12px;" class="">একাডেমিক তথ্য</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/professional-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number active ">
                                        <h4>৩</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;" class="reg-p-active">পেশাগত তথ্য</p>
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
                            <p style="font-size:12px;"> পারিবারিক সদস্যের তথ্য

                            </p>
                        </a>
                    </li>
                    <!-- <li class="list-inline-item">
                        <a href="/student/gift-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4>৫</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;">উপহার সংক্রান্ত তথ্য</p>
                        </a>
                    </li> -->
                    <!-- <li class="list-inline-item">
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
                    </li> -->

                </ul>


            </div>

        </div>

    </div>


    <section class="form-area">
        <div class="container">

            <div class="row">

                <div class="col-md-8 mx-auto">
                    <div class="card">
                        @if($professional == null)

                            <div class="card-body">
                                <form class="" method="post" action="/student/professional-info">

                                    @csrf
                                    <input name="student_id" value="{{$student_id}}" type="hidden"/>
                                    <div class="input-group row pt-2">

                                        <div class="col-sm-12">
                                            <select style="border: 1px solid red;" required class="form-select" name="profession">
                                                <option value="">পেশা: *</option>
                                                <option value="ব্যবসায়ী">ব্যবসায়ী</option>
                                                <option value="চাকুরীজীবি">চাকুরীজীবি</option>
                                                <option value="চিকিৎসক">চিকিৎসক</option>
                                                <option value="প্রকৌশলী">প্রকৌশলী</option>
                                                <option value="আইনজীবি ">আইনজীবি</option>
                                                <option value="শিক্ষকতা">শিক্ষকতা</option>
                                                <option value="উদ্যোক্তা">উদ্যোক্তা</option>
                                                <option value="গবেষক">গবেষক</option>
                                                <option value="সাংবাদিক">সাংবাদিক</option>
                                                <option value="রন্ধনশিল্পী">রন্ধনশিল্পী</option>
                                                <option value="চিত্র গ্রাহক">চিত্র গ্রাহক</option>
                                                <option value="অভিনেতা ">অভিনেতা</option>
                                                <option value="মিডিয়া পরিচলক">মিডিয়া পরিচলক</option>
                                                <option value="চিত্রশিল্পী">চিত্রশিল্পী</option>
                                                <option value="স্বনির্ভর">স্বনির্ভর</option>
                                                <option value="অন্যান্য">অন্যান্য</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="designation" id="designation"
                                                   placeholder="পদবি  ">
                                        </div>
                                    </div>

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-1-12">
                                            <input type="text" class="form-control" name="institute_name"
                                                   placeholder=" প্রতিষ্ঠানের নাম   ">
                                        </div>
                                    </div>

                                    <!-- <div class="input-group row pt-2">
                                        <div class="col-sm-1-12">
                                            <select class="form-select" name="onnanno">
                                                <option>Onnano</option>
                                                <option value="Worker">Worker</option>
                                                <option value="Engineer">Engineer</option>
                                            </select>
                                        </div>
                                    </div> -->

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="industry"
                                                   placeholder=" অন্যান্য ক্ষেত্রে ইন্ডাস্ট্রি লিখুন :   ">

                                        </div>
                                    </div>
                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="office_phone"
                                                   placeholder=" কর্মক্ষেত্রের ফোন:   ">

                                        </div>
                                    </div>
                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="office_address"
                                                   placeholder=" কর্মক্ষেত্রের ঠিকানা (অপশনাল):   ">

                                        </div>
                                    </div>
                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="office_email"
                                                   placeholder=" কর্মক্ষেত্রের ইমেইল:   ">

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
                                <form class="" method="post" action="/student/professional-info-update">

                                    @csrf
                                    <input name="student_id" value="{{$student_id}}" type="hidden"/>
                                    <input name="id" value="{{$professional->id}}" type="hidden"/>
                                    <div class="input-group row pt-2">

                                        <div class="col-sm-12">
                                            <select required class="form-select" name="profession">
                                                <option value="">পেশা</option>
                                                <option @if($professional->profession == "ব্যবসায়ী") selected @endif value="ব্যবসায়ী">ব্যবসায়ী</option>
                                                <option @if($professional->profession == "চাকুরীজীবি") selected @endif value="চাকুরীজীবি">চাকুরীজীবি</option>
                                                <option @if($professional->profession == "চিকিৎসক") selected @endif value="চিকিৎসক">চিকিৎসক</option>
                                                <option @if($professional->profession == "প্রকৌশলী") selected @endif value="প্রকৌশলী">প্রকৌশলী</option>
                                                <option @if($professional->profession == "আইনজীবি") selected @endif value="আইনজীবি ">আইনজীবি</option>
                                                <option @if($professional->profession == "শিক্ষকতা") selected @endif value="শিক্ষকতা">শিক্ষকতা</option>
                                                <option @if($professional->profession == "উদ্যোক্তা") selected @endif value="উদ্যোক্তা">উদ্যোক্তা</option>
                                                <option @if($professional->profession == "গবেষক") selected @endif value="গবেষক">গবেষক</option>
                                                <option @if($professional->profession == "সাংবাদিক") selected @endif value="সাংবাদিক">সাংবাদিক</option>
                                                <option @if($professional->profession == "রন্ধনশিল্পী") selected @endif value="রন্ধনশিল্পী">রন্ধনশিল্পী</option>
                                                <option @if($professional->profession == "চিত্র গ্রাহক") selected @endif value="চিত্র গ্রাহক">চিত্র গ্রাহক</option>
                                                <option @if($professional->profession == "অভিনেতা") selected @endif value="অভিনেতা ">অভিনেতা</option>
                                                <option @if($professional->profession == "মিডিয়া পরিচলক") selected @endif value="মিডিয়া পরিচলক">মিডিয়া পরিচলক</option>
                                                <option @if($professional->profession == "চিত্রশিল্পী") selected @endif value="চিত্রশিল্পী">চিত্রশিল্পী</option>
                                                <option @if($professional->profession == "স্বনির্ভর") selected @endif value="স্বনির্ভর">স্বনির্ভর</option>
                                                <option @if($professional->profession == "অন্যান্য") selected @endif value="অন্যান্য">অন্যান্য</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="designation" id="designation"
                                                   placeholder="পদবি  " value="{{$professional->designation}}">
                                        </div>
                                    </div>

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-1-12">
                                            <input type="text" class="form-control" name="institute_name"
                                                   placeholder=" প্রতিষ্ঠানের নাম   "value="{{$professional->institute_name}}">
                                        </div>
                                    </div>

                                    <!-- <div class="input-group row pt-2">
                                        <div class="col-sm-1-12">
                                            <select class="form-select" name="onnanno">
                                                <option>Onnano</option>
                                                <option value="Worker">Worker</option>
                                                <option value="Engineer">Engineer</option>
                                            </select>
                                        </div>
                                    </div> -->

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="industry"
                                                   placeholder=" অন্যান্য ক্ষেত্রে ইন্ডাস্ট্রি লিখুন :   " value="{{$professional->industry}}">

                                        </div>
                                    </div>
                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="office_phone"
                                                   placeholder=" কর্মক্ষেত্রের ফোন:   " value="{{$professional->office_phone}}">

                                        </div>
                                    </div>
                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="office_address"
                                                   placeholder=" কর্মক্ষেত্রের ঠিকানা (অপশনাল):   " value="{{$professional->office_address}}">

                                        </div>
                                    </div>
                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="office_email"
                                                   placeholder=" কর্মক্ষেত্রের ইমেইল:   " value="{{$professional->office_email}}">

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
