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
                            <p class="reg-p-active">একাডেমিক ত্যাবলী</p>
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
                            <p>উপহার সংক্রান্ত তথ্যালী</p>
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
                            <p>আমন্ত্রণপত্র</p>
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
                        @if($academic == null)

                            <div class="card-body">
                                <form class="" method="post" action="/student/academic-info"
                                      enctype="multipart/form-data">

                                    @csrf
                                    <input name="student_id" value="{{$student_id}}" type="hidden"/>
                                    <div class="input-group row pt-2">

                                        <div class="col-md-12 checkbox-form">
                                            <label>কোর্সের নাম</label>
                                            <label class="checkbox-inline">
                                                <input type="radio" required name="program_name" value="এইচএসসি"
                                                       onclick="myFunction(1)">এইচএসসি
                                                <input type="radio" required name="program_name" onclick="myFunction(2)"
                                                       value="অনার্স"
                                                >অনার্স
                                                <input type="radio" required name="program_name" onclick="myFunction(3)"
                                                       value="ডিগ্রি পাস"
                                                >ডিগ্রি
                                                পাস
                                                <input type="radio" required name="program_name" onclick="myFunction(4)"
                                                       value="মাস্টর্স"
                                                >মাস্টার্স
                                            </label>
                                        </div>
                                    </div>


                                    <!-- <div class="input-group row pt-2">

                                        <div class="col-sm-12">
                                            <select class="form-select" name="department">
                                            <option value="Group">বিভাগ: </option>
                                                <option value="Science">বিজ্ঞান </option>
                                                <option value="Commerce">ব্যাবস </option>
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
                                                শিক্ষার্থীরা রেজিস্ট্রেশন করতে পারবেন।
                                                * </p>
                                            <select required class="form-select" name="passing_year">
                                                <div>

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
                                                    <option value="৯৯৪">১৯৯৪</option>
                                                    <option value="১৯৯৪">১৯৯৩</option>
                                                    <option value="১৯৯২">১৯৯২</option>
                                                    <option value="১৯৯১">১৯৯১</option>
                                                    <option value="১৯৯০">১৯৯০</option>
                                                    <option value="১৯৮৯">১৯৮৯</option>
                                                    <option value="১৯৮৮">১৯৮৮</option>
                                                    <option value="১৯৮৭">১৯৮৭</option>
                                                    <option value="১৯৮৬">১৯৮৬</option>
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

                                                </div>

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
                                            <label>আপনার মার্কশিট/সার্টিফিকেট এর কপি (ইমেজ, পিডিএফ) আপলোড করুন</label>
                                            <input type="file" class="form-control" name="image" id="image">
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
                                <form class="" method="post" action="/student/academic-info-update"
                                      enctype="multipart/form-data">

                                    @csrf
                                    <input name="student_id" value="{{$student_id}}" type="hidden"/>
                                    <input name="id" value="{{$academic->id}}" type="hidden"/>
                                    <div class="input-group row pt-2">

                                        <div class="col-md-12 checkbox-form">
                                            <label>কোর্সের নাম</label>
                                            <label class="checkbox-inline">
                                                <input type="radio" @if($academic->program_name == "এইচএসসি") checked
                                                       @endif required name="program_name" value="এইচএসসি"
                                                       id="hsc-button">এইচএসসি
                                                <input type="radio" @if($academic->program_name == "অনার্স") checked
                                                       @endif required name="program_name" value="অনার্স"
                                                       id="honurs-button">অনার্স
                                                <input type="radio" @if($academic->program_name == "ডিগ্রি পাস") checked
                                                       @endif required name="program_name" value="ডিগ্রি পাস"
                                                       id="honurs-button">ডিগ্রি
                                                পাস
                                                <input type="radio" @if($academic->program_name == "মাস্টার্স") checked
                                                       @endif required name="program_name" value="মাস্টার্স"
                                                       id="masters-button">মাস্টার্স
                                            </label>
                                        </div>
                                    </div>


                                    <!-- <div class="input-group row pt-2">

                                        <div class="col-sm-12">
                                            <select class="form-select" name="department">
                                            <option value="Group">বিভাগ: </option>
                                                <option value="Science">বিজ্ঞান </option>
                                                <option value="Commerce">ব্যাবস </option>
                                                <option value="Arts">মানবিক </option>
                                            </select>

                                        </div>
                                    </div> -->


                                    <div class="input-group row pt-2">
                                        <div class="col-sm-1-12">
                                            <input type="text" required class="form-control" name="department"
                                                   placeholder=" বিভাগ / বিষয়:" value="{{$academic->department}}">
                                        </div>
                                    </div>

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="session" id="session"
                                                   placeholder="সেশন: " value="{{$academic->session}}">
                                        </div>
                                    </div>


                                    <div class="input-group row pt-2">

                                        <div class="col-sm-12">
                                            <p style="color:red;">শুধুমাত্র ২০১৫ সাল পর্যন্ত এইচএসসি, ২০২০ সাল পর্যন্ত
                                                ডিগ্রি/অনার্স এবং ২০২২ সাল পর্যন্ত মাস্টার্স পরীক্ষায় কৃতকার্য প্রাক্তন
                                                শিক্ষার্থীরা রেজিস্ট্রেশন করতে পারবেন।
                                                * </p>
                                            <select required class="form-select" name="passing_year">
                                                <div>
                                                    <option @if($academic->passing_year == "২০২২") selected
                                                            @endif value="২০২২">২০২২
                                                    </option>
                                                    <option @if($academic->passing_year == "২০২১") selected
                                                            @endif value="২০২১">২০২১
                                                    </option>
                                                    <option @if($academic->passing_year == "২০২০") selected
                                                            @endif value="২০২০">২০২০
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১৯") selected
                                                            @endif value="২০১৯">২০১৯
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১৮") selected
                                                            @endif value="২০১৮">২০১৮
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১৭") selected
                                                            @endif value="২০১৭">২০১৭
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১৬") selected
                                                            @endif value="২০১৬">২০১৬
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১৫") selected
                                                            @endif value="২০১৫">২০১৫
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১৪") selected
                                                            @endif value="২০১৪">২০১৪
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১৩") selected
                                                            @endif value="২০১৩">২০১৩
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১২") selected
                                                            @endif value="২০১২">২০১২
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১১") selected
                                                            @endif value="২০১১">২০১১
                                                    </option>
                                                    <option @if($academic->passing_year == "২০১০") selected
                                                            @endif value="২০১০">২০১০
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০৯") selected
                                                            @endif value="২০০৯">২০০৯
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০৮") selected
                                                            @endif value="২০০৮">২০০৮
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০৭") selected
                                                            @endif value="২০০৭">২০০৭
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০৬") selected
                                                            @endif value="২০০৬">২০০৬
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০৫") selected
                                                            @endif value="২০০৫">২০০৫
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০৪") selected
                                                            @endif value="২০০৪">২০০৪
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০৩") selected
                                                            @endif value="২০০৩">২০০৩
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০২") selected
                                                            @endif value="২০০২">২০০২
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০১") selected
                                                            @endif value="২০০১">২০০১
                                                    </option>
                                                    <option @if($academic->passing_year == "২০০০") selected
                                                            @endif value="২০০০">২০০০
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯৯") selected
                                                            @endif value="১৯৯৯">১৯৯৯
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯৮") selected
                                                            @endif value="১৯৯৮">১৯৯৮
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯৭") selected
                                                            @endif value="১৯৯৭">১৯৯৭
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯৬") selected
                                                            @endif value="১৯৯৬">১৯৯৬
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯৫") selected
                                                            @endif value="১৯৯৫">১৯৯৫
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯৪") selected
                                                            @endif value="১৯৯৪">১৯৯৪
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯৩") selected
                                                            @endif value="১৯৯৩">১৯৯৩
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯২") selected
                                                            @endif value="১৯৯২">১৯৯২
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯১") selected
                                                            @endif value="১৯৯১">১৯৯১
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৯০") selected
                                                            @endif value="১৯৯০">১৯৯০
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮৯") selected
                                                            @endif value="১৯৮৯">১৯৮৯
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮৮") selected
                                                            @endif value="১৯৮৮">১৯৮৮
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮৭") selected
                                                            @endif value="১৯৮৭">১৯৮৭
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮৬") selected
                                                            @endif value="১৯৮৬">১৯৮৬
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮৫") selected
                                                            @endif value="১৯৮৫">১৯৮৫
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮৪") selected
                                                            @endif value="১৯৮৪">১৯৮৪
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮৩") selected
                                                            @endif value="১৯৮৩">১৯৮৩
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮২") selected
                                                            @endif value="১৯৮২">১৯৮২
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮১") selected
                                                            @endif value="১৯৮১">১৯৮১
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৮০") selected
                                                            @endif value="১৯৮০">১৯৮০
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭৯") selected
                                                            @endif value="১৯৭৯">১৯৭৯
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭৮") selected
                                                            @endif value="১৯৭৮">১৯৭৮
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭৭") selected
                                                            @endif value="১৯৭৭">১৯৭৭
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭৬") selected
                                                            @endif value="১৯৭৬">১৯৭৬
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭৫") selected
                                                            @endif value="১৯৭৫">১৯৭৫
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭৪") selected
                                                            @endif value="১৯৭৪">১৯৭৪
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭৩") selected
                                                            @endif value="১৯৭৩">১৯৭৩
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭২") selected
                                                            @endif value="১৯৭২">১৯৭২
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭১") selected
                                                            @endif value="১৯৭১">১৯৭১
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৭০") selected
                                                            @endif value="১৯৭০">১৯৭০
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৬৯") selected
                                                            @endif value="১৯৬৯">১৯৬৯
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৬৮") selected
                                                            @endif value="১৯৬৮">১৯৬৮
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৬৭") selected
                                                            @endif value="১৯৬৭">১৯৬৭
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৬৬") selected
                                                            @endif value="১৯৬৬">১৯৬৬
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৬৫") selected
                                                            @endif value="১৯৬৫">১৯৬৫
                                                    </option>
                                                    <option @if($academic->passing_year == "১৯৬৪") selected
                                                            @endif value="১৯৬৪">১৯৬৪
                                                    </option>

                                                </div>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <input type="text" class="form-control" name="roll_no"
                                                   placeholder="রোল নং: " value="{{$academic->roll_no}}">
                                        </div>
                                    </div>


                                    <div class="input-group row pt-2">
                                        <div class="col-sm-1-12">
                                            <input type="text" class="form-control" name="reg_no"
                                                   placeholder=" রেজিস্ট্রেশন নং:" value="{{$academic->reg_no}}">
                                        </div>
                                    </div>
                                    <div class="input-group row">
                                        <label for="image" class="col-sm-1-12 col-form-label"></label>
                                        <div class="row">
                                            <div class="col-md-8 col-6">
                                                <div class="col-sm-1-12">
                                                    <label>আপনার মার্কশিট/সার্টিফিকেট এর কপি (ইমেজ, পিডিএফ) আপলোড
                                                        করুন</label>
                                                    <input type="file" class="form-control" name="image" id="image">
                                                    <input type="hidden" name="mark_sheet"
                                                           value="{{$academic->mark_sheet}}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-6">
                                                <div class="col-sm-1-12">
                                                    @if($academic->mark_sheet != null)
                                                        <a href="{{$academic->mark_sheet}}" download="">Download Mark
                                                            Sheet </a>
                                                    @else
                                                        <span> No Mark Sheet Available</span>
                                                    @endif
                                                </div>
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
    <script type="text/javascript">


        document.getElementById('all-data').style.display = 'block';
        document.getElementById('hsc').style.display = 'none';
        document.getElementById('honurs').style.display = 'none';
        document.getElementById('hsc-button').addEventListener('click', function () {
            document.getElementById('all-data').style.display = 'none';
            document.getElementById('hsc').style.display = 'block';
            document.getElementById('honurs').style.display = 'none';

        });
        document.getElementById('honurs-button').addEventListener('click', function () {
            document.getElementById('all-data').style.display = 'none';
            document.getElementById('hsc').style.display = 'none';
            document.getElementById('honurs').style.display = 'block';

        });
        document.getElementById('masters-button').addEventListener('click', function () {
            document.getElementById('all-data').style.display = 'block';
            document.getElementById('hsc').style.display = 'none';
            document.getElementById('honurs').style.display = 'none';

        });

    </script>

@endsection
