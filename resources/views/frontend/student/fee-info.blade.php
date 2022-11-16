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
                                    <div class="number active">
                                        <h4> ৬</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="reg-p-active">রেজিস্ট্রেশন ফি</p>
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
                                    <div class="number ">
                                        <h4>৫</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;">উপহার সংক্রান্ত তথ্য</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/fee-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number active">
                                        <h4> ৬</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;" class="reg-p-active">রেজিস্ট্রেশন ফি</p>
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

                        <div class="card-body">

                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>রেজিস্ট্রেশন ফি</td>
                                    <td>{{getOldStudentFee()}} টাকা</td>
                                </tr>
                                <tr>
                                    <td>পারিবারিক সদস্য ফি</td>
                                    <td>{{$sub_total}} টাকা</td>
                                </tr>

                                <tr>
                                    <td>ডেলিভারি ফি</td>
                                    <td>{{$delivery_fee}} টাকা</td>
                                </tr>


                                <tr>
                                    <td>সর্বমোট</td>
                                    <td>{{$total}} টাকা</td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="guest-number">
                                <p>পারিবারিক সদস্য সংখ্যা: {{$guest}}</p>
                            </div>


                            <form action="/student/payment/{{$total}}" method="get">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id=""
                                               value="checkedValue" required>
                                        আপনার উল্লেখিত তথ্যগুলো ভেরিফিকেশন করা হবে, তথ্যগত ভুল থেকে থাকলে আপনার
                                        রেজিস্ট্রেশনটি বাতিল করা হবে এবং আইনানুগ ব্যবস্থা নেওয়া হবে।

                                    </label>
                                </div>
                                <ul class="">
                                    <li class="">আমি এই মর্মে প্রত্যয়ন করছি যে, উপরে প্রদত্ত আমার সকল তথ্য সঠিক এবং
                                        নির্ভুল
                                    </li>
                                    <li class="">রেজিস্ট্রেশন ফি কোনোভাবেই ফেরতযোগ্য নয়</li>
                                    <li class="">রেজিস্ট্রেশন কনফার্ম হওয়ার মোবাইল ও ই-মেইলে কনফার্মেশন মেসেজ চলে যাবে
                                    </li>
                                    <li class="">একজন শিক্ষার্থী (বর্তমান /প্রাক্তন ) শুধু একবারই রেজিস্ট্রেশন করতে
                                        পারবেন
                                    </li>
                                </ul>

                                <button type="submit" class="btn btn-warning">পেমেন্ট করুন</button>
                            </form>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
