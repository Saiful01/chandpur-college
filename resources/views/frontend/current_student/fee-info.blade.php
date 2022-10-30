@extends("layouts.common")
@section("content")

    <div class="registration-step">
        <div class="container">
            <div class="row">


                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="/current-student/personal-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number active">
                                        <h4>১</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="reg-p-active">ব্যক্তিগত তথ্যাবলী</p>
                        </a>
                    </li>


                    <li class="list-inline-item">
                        <a href="/current-student/fee-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4> ২</h4>
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
                                        <h4>৩</h4>
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

                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>রেজিস্ট্রেশন ফি</td>
                                    <td>{{getCurrentStudentFee()}} টাকা </td>
                                </tr>
                                <tr>
                                    <td>অতিথি ফি</td>
                                    <td>{{getCurrentStudentFee()}} টাকা </td>
                                </tr>
                                <tr>
                                    <td>সর্বমোট </td>
                                    <td>{{getCurrentStudentFee()}} টাকা </td>
                                </tr>
                                </tbody>
                            </table>

                            <div class="guest-number">
                                <p>অতিথির সংখ্যা: </p>
                            </div>



                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="" id="" value="checkedValue">
                                    আমি এই মর্মে প্রত্যয়ন করছি যে, উপরে প্রদত্ত আমার সকল তথ্য সঠিক এবং নির্ভুল
                                </label>
                            </div>
                            <ul class="">
                            <li class="">রেজিস্ট্রেশন ফি কোনোভাবেই ফেরতযোগ্য নয় </li>
                                <li class="">রেজিস্ট্রেশন কনফার্ম হওয়ার মোবাইল ও ই-মেইলে কনফার্মেশন মেসেজ চলে  যাবে </li>
                                <li class="">একজন শিক্ষার্থী (বর্তমান /প্রাক্তন ) শুধু একবারই রেজিস্ট্রেশন করতে পারবেন </li>
                            </ul>

                            <a href="/current-student/payment/{{getCurrentStudentFee()}}" class="btn btn-warning">পেমেন্ট করুন</a>


                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
