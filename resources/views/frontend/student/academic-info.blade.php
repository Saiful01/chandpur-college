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
                                    <div class="number active">
                                        <h4>২</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="reg-p-active">একাডেমিক তথ্যাবলী</p>
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
                            <form class="" method="post" action="/student/academic-info" enctype="multipart/form-data">

                                @csrf
                                <input name="student_id" , value="{{$student_id}}" type="hidden"/>
                                <div class="input-group row pt-2">

                                    <div class="col-md-12 checkbox-form">
                                        <label>কোর্সের নাম</label>
                                        <label class="checkbox-inline">
                                            <input type="radio" required name="program_name" value="এইচএসসি">এইচএসসি
                                            <input type="radio" required name="program_name" value="অনার্স">অনার্স
                                            <input type="radio" required name="program_name" value="ডিগ্রি পাস">ডিগ্রি
                                            পাস
                                            <input type="radio" required name="program_name" value="মাস্টার্স">মাস্টার্স
                                        </label>
                                    </div>
                                </div>


                                <!-- <div class="input-group row pt-2">

                                    <div class="col-sm-12">
                                        <select class="form-select" name="department">
                                        <option value="Group">বিভাগ: </option>
                                            <option value="Science">বিজ্ঞান </option>
                                            <option value="Commerce">ব্যাবসা </option>
                                            <option value="Arts">মানবিক </option>
                                        </select>

                                    </div>
                                </div> -->


                                <div class="input-group row pt-2">
                                    <div class="col-sm-1-12">
                                        <input type="text" required class="form-control" name="department"
                                               placeholder=" বিভাগ / বিষয়:">
                                    </div>
                                </div>

                                <div class="input-group row pt-2">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="session" id="session"
                                               placeholder="সেশন: ">
                                    </div>
                                </div>


                                <div class="input-group row pt-2">

                                    <div class="col-sm-12">
                                        <p style="color:red;">শুধুমাত্র ২০১৫ সাল পর্যন্ত এইচএসসি, ২০২০ সাল পর্যন্ত
                                            ডিগ্রি/অনার্স এবং ২০২২ সাল পর্যন্ত মাস্টার্স পরীক্ষায় কৃতকার্য প্রাক্তন
                                            শিক্ষার্থীরা রেজিস্ট্রেশন করতে পারবেন।* </p>
                                        <select required class="form-select" name="passing_year">
                                            <option value="">পাশের সাল:</option>
                                            <option value="২০২২">২০২২</option>
                                            <option value="২০২১">২০২১</option>
                                            <option value="২০২০">২০২০</option>
                                            <option value="২০১৯">২০১৯</option>
                                            <option value="২০১৮">২০১৮</option>
                                            <option value="২০১৭">২০১৭</option>
                                            <option value="২০১৬">২০১৬</option>
                                            <option value="২০১৫">২০১৫</option>
                                            <option value="২০১৪">২০১৪</option>
                                            <option value="২০১৩">২০১৩</option>
                                            <option value="২০১২">২০১২</option>
                                            <option value="২০১১">২০১১</option>
                                            <option value="২০১০">২০১০</option>
                                            <option value="২০০৯">২০০৯</option>
                                            <option value="২০০৮">২০০৮</option>
                                            <option value="২০০৭">২০০৭</option>
                                            <option value="২০০৬">২০০৬</option>
                                            <option value="২০০৫">২০০৫</option>
                                            <option value="২০০৪">২০০৪</option>
                                            <option value="২০০৩">২০০৩</option>
                                            <option value="২০০২">২০০২</option>
                                            <option value="২০০১">২০০১</option>
                                            <option value="২০০০">২০০০</option>
                                            <option value="১৯৯৯">১৯৯৯</option>
                                            <option value="১৯৯৮">১৯৯৮</option>
                                            <option value="১৯৯৭">১৯৯৭</option>
                                            <option value="১৯৯৬">১৯৯৬</option>
                                            <option value="১৯৯৫">১৯৯৫</option>
                                            <option value="১৯৯৪">১৯৯৪</option>
                                            <option value="১৯৯৩">১৯৯৩</option>
                                            <option value="১৯৯২">১৯৯২</option>
                                            <option value="১৯৯১">১৯৯১</option>
                                            <option value="১৯৯০">১৯৯০</option>
                                            <option value="১৯৮৯">১৯৮৯</option>
                                            <option value="১৯৮৮">১৯৮৮</option>
                                            <option value="১৯৮৭">১৯৮৭</option>
                                            <option value="১৯৮৬">১৯৮</option>
                                            <option value="১৯৮৫">১৯৮৫</option>
                                            <option value="১৯৮৪">১৯৮৪</option>
                                            <option value="১৯৮৩">১৯৮৩</option>
                                            <option value="১৯৮২">১৯৮২</option>
                                            <option value="১৯৮১">১৯৮১</option>
                                            <option value="১৯৮০">১৯৮০</option>
                                            <option value="১৯৭৯">১৯৭৯</option>
                                            <option value="১৯৭৮">১৯৭৮</option>
                                            <option value="১৯৭৭">১৯৭৭</option>
                                            <option value="১৯৭৬">১৯৭৬</option>
                                            <option value="১৯৭৫">১৯৭৫</option>
                                            <option value="১৯৭৪">১৯৭৪</option>
                                            <option value="১৯৭৩">১৯৭৩</option>
                                            <option value="১৯৭২">১৯৭২</option>
                                            <option value="১৯৭১">১৯৭১</option>
                                            <option value="১৯৭০">১৯৭০</option>
                                            <option value="১৯৬৯">১৯৬৯</option>
                                            <option value="১৯৬৮">১৯৬৮</option>
                                            <option value="১৯৬৭">১৯৬৭</option>
                                            <option value="১৯৬৬">১৯৬৬</option>
                                            <option value="১৯৬৫">১৯৬৫</option>
                                            <option value="১৯৬৪">১৯৬৪</option>
                                        </select>

                                    </div>
                                </div>

                                <div class="input-group row pt-2">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="roll_no"
                                               placeholder="রোল নং: ">
                                    </div>
                                </div>


                                <div class="input-group row pt-2">
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="reg_no"
                                               placeholder=" রেজিস্ট্রেশন নং:">
                                    </div>
                                </div>
                                <div class="input-group row pt-2">
                                    <div class="col-sm-1-12">
                                        <label>আপনার মার্ক শিট/সার্টিফিকেটের কপি (ইমেজ, পিডিএফ) আপলোড করুন</label>
                                        <input type="file" class="form-control" name="image" id="image" required>
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
