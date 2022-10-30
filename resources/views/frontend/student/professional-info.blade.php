@extends("layouts.common")
@section("content")

    <div class="registration-step">
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


    <section class="form-area">
        <div class="container">

            <div class="row">

                <div class="col-md-8 mx-auto">
                    <div class="card">

                        <div class="card-body">
                            <form class="" method="post" action="/student/professional-info">

                                @csrf
                                <input name="student_id" value="{{$student_id}}" type="hidden"/>
                                <div class="input-group row pt-2">

                                    <div class="col-sm-12">
                                        <select required class="form-select" name="profession">
                                            <option value="">পেশা</option>
                                            <option value="ব্যবসায়ী">ব্যবসায়ী</option>
                                            <option value="চাকুরীজীবি">চাকুরীজীবি</option>
											<option value="চিকিৎসক">চিকিৎসক</option>
                                            <option value="প্রকৌশলী">প্রকৌশলী</option>
											<option value="আইনজীবি ">আইনজীবি </option>
                                            <option value="শিক্ষকতা">শিক্ষকতা</option>
											<option value="উদ্যোক্তা">উদ্যোক্তা</option>
                                            <option value="গবেষক">গবেষক</option>
											<option value="সাংবাদিক">সাংবাদিক</option>
                                            <option value="রন্ধনশিল্পী">রন্ধনশিল্পী</option>
											<option value="চিত্র গ্রাহক">চিত্র গ্রাহক</option>
                                            <option value="অভিনেতা ">অভিনেতা </option>
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

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
