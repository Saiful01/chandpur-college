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
                                    <div class="number">
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
                            <p> নিজ অতিথিদের তথ্যাবলী</p>
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
                                    <div class="number active">
                                        <h4>৭</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="reg-p-active">আমন্ত্রণপত্র </p>
                        </a>
                    </li>

                </ul>


            </div>

        </div>

    </div>


    <section class="invitation">
        <div class="container">


            <div class="row" id="download">

                <div class="col-md-8 mx-auto">

                    <center>
                        <div style="padding-top:50px;"><h4 class="bordered-text text-center text-white">আমন্ত্রণ
                                পত্র</h4></div>
                    </center>

                    <div style="padding-top:50px;">
                        <table class="table">
                            <tr style="">
                                <td style="color:#FFF; width:30%">নাম</td>
                                <td style=" background: #FFF;color:#000;width:70%"
                                    class="en-font">{{$student->name}}</td>
                            </tr>
                            <tr style="position:relative;top:30px;">
                                <td style="color:#FFF;width:30%">রেজিস্ট্রেশন আইডি:</td>
                                <td style="background: #FFF;color:#000;width:70%"
                                    class="en-font">{{$student->registration_id}}</td>
                            </tr>
                            <tr style="position:relative;top:50px;">
                                <td style="color:#FFF;width:30%">যোগাযোগের নাম্বার:</td>
                                <td style="background: #FFF;color:#000;width:70%"
                                    class="en-font">{{$student->phone}}</td>
                            </tr>
                        </table>
                    </div>

                    <div style="padding-top:70px;"><p class="text-white">
                            ভেন্যু - চাঁদপুর সরকারি কলেজ, চাঁদপুর।
                        </p></div>

                    <div style="padding-top:50px;"><h4 class="bordered-text-rul text-white"> বিস্তারিত নিয়মাবলী</h4>
                    </div>

                    <div style="padding-top:50px;">

                        <ul class="rule">
                            <li><p class="text-white">
                                    ১.কলেজ শিক্ষার্থী বা তাদের সাথে আগত অতিথিদের অনুষ্ঠানের তিনদিন রেজিস্ট্রেশন কার্ড
                                    সাথে রাখা বাধ্যতামূলক।
                                    রেজিস্ট্রেশন কার্ড ব্যাতিত কোনোভাবেই ভেন্যুতে প্রবেশ করা যাবেনা এবং খাবার সংগ্রহ করা
                                    যাবেনা।
                                </p></li>
                            <li><p class="text-white">২.নিরাপত্তা নিশ্চিত করার সুবিধার্থে আমন্ত্রিত সকল শিক্ষার্থী এবং
                                    অতিথিদের রেজিস্ট্রেশন কার্ড সর্বদা দৃশ্যমান রাখতে অনুরোধ করা যাচ্ছে।
                                    ভলান্টিয়ারগণ যে কোনো মুহূর্তে রেজিস্ট্রেশন কার্ড চেক করতে পারেন।</p></li>
                            <li><p class="text-white">৩. রেজিস্ট্রেশনই অনুষ্ঠানের ফুড কুপন হিসেবে বিবেচিত হবে।
                                    প্রতিবার খাবার সংগ্রহের সময় রেজিস্ট্রেশন কার্ড প্রদর্শন করতে হবে। </p></li>
                            <li><p class="text-white">৪.কার্ডে উল্লেখিত বুথ থেকে উপহার সামগ্রী সংগ্রহের ক্ষেত্রেও
                                    রেজিস্ট্রেশন কার্ড প্রদর্শন করতে হবে। </p></li>

                        </ul>
                    </div>


                    <div style="padding-top:50px;" class="management-sign">
                        <div class="col-md-4 signature"><img src="/frontend/img/asit-signature.png"
                                                             alt="asit-signature"/></div>
                        <div class="col-md-4 signature"><img src="/frontend/img/jillur-rahman.png" alt="jillur-rahman"/>
                        </div>
                        <div class="col-md-4 signature"><img src="/frontend/img/ratan-signature.png"
                                                             alt="ratan-signature"/></div>
                    </div>

                    <div class=""><p>
                            <img style="margin-top:50px;" src="/frontend/img/qr.png" alt="qr"/>
                        </p>
                    </div>
                </div>

            </div>

            <div class="row" id="bnt">

                <div style="text-align: right;
    padding: 0 0 15px 0px;" class="col-md-8 mx-auto">
                    <a href="/download" class="btn btn-warning">ডাউনলোড করুন <i
                            class="fa-regular fa-arrow-down-to-bracket"></i></a>
                </div>
            </div>

        </div>


    </section>

@endsection
