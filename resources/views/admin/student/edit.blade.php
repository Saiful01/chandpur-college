@extends("layouts.admin")
@section('title', 'Admin Panel')
@section("content")
    @push('header-scripts')
        @once
            <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        @endonce
    @endpush


    <h2 class="content-heading">Student profile edit</h2>


    <div class="block block-rounded">


        <div class="block-content block-content-full">

            <div class="row">

                <form class="row"
                      action="/admin-student-update" method="POST" enctype="multipart/form-data">

                    @csrf
                    <input type="hidden" name="id" value="{{$result->id}}">

                    <div class="col-md-8">
                        <div class="input-group row">
                            <label for="name" class="col-sm-12 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="text" required class="form-control" name="name" id="name"
                                       placeholder="বাংলা নাম:*" value="{{$result->name}}">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="id" value="{{$result->id}}">
                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="name" class="col-sm-12 col-form-label"></label>
                            <div class="col-sm-12">
                                <p style="color:red;">আপনার নাম ইংরেজিতে লিখুন</p>
                                <input type="text" required class="form-control" name="eng_name"
                                       id="eng_name"
                                       placeholder="ইংরেজি নাম:" value="{{$result->eng_name}}">

                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="name" class="col-sm-12 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nationality" id="nationality"
                                       placeholder="জাতীয়তা:" value="{{$result->nationality}}">

                            </div>
                        </div>

                        <div class="input-group pt-2 row">

                            <div class="col-md-12 checkbox-form">
                                <label>লিঙ্গ </label>
                                <label class="checkbox-inline">
                                    <input type="radio" @if($result->gender == "পুরুষ") checked @endif
                                    name="gender" value="পুরুষ">পুরুষ
                                    <input type="radio" @if($result->gender == "মহিলা") checked @endif name="gender"
                                           value="মহিলা"> মহিলা
                                    <input type="radio"
                                           @if($result->gender == "তৃতীয় লিঙ্গ") checked @endif name="gender"
                                           value="তৃতীয় লিঙ্গ"> তৃতীয় লিঙ্গ
                                </label>
                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="name" class="col-sm-12 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="father_name" id="father_name"
                                       placeholder="পিতা নাম:" value="{{$result->father_name}}">

                            </div>
                        </div>
                        <div class="input-group row">
                            <label for="name" class="col-sm-12 col-form-label"></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="mother_name" id="mother_name"
                                       placeholder="মাতার নাম:" value="{{$result->mother_name}}">

                            </div>
                        </div>


                        <div class="input-group row">
                            <label for="semail" class="col-sm-1-12 col-form-label"></label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="email" id="semail"
                                       placeholder=" ইমেইল " value="{{$result->email}}">
                            </div>
                        </div>

                        <div class="input-group row">
                            <label for="phone" class="col-sm-1-12 col-form-label"></label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="phone" id="phone" required
                                       placeholder=" মোবাইল নাম্বার:" value="{{$result->phone}}">
                            </div>
                        </div>

                        <div class="input-group row">
                            <label for="address" class="col-sm-1-12 col-form-label"></label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="nid_no" id="nid_no"
                                       placeholder="এনআইডি নং:" value="{{$result->nid_no}}">
                            </div>
                        </div>

                        <div class="input-group row">
                            <label for="address" class="col-sm-1-12 col-form-label"></label>
                            <div class="col-sm-1-12">
                                <input required type="text" class="form-control" name="address"
                                       id="address"
                                       placeholder="বর্তমান ঠিকানা:" value="{{$result->address}}">
                            </div>
                        </div>

                        <div class="input-group row">
                            <label for="address" class="col-sm-1-12 col-form-label"></label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="zila"
                                       id="zila"
                                       placeholder="জেলা:" value="{{$result->zila}}">
                            </div>
                        </div>

                        <!-- <div class="input-group row">
                            <label for="address" class="col-sm-1-12 col-form-label"></label>
                            <div class="col-sm-1-12">
                                <input type="text" class="form-control" name="education_year"
                                       id="education_year"
                                       placeholder=" শিক্ষাবর্ষ:">
                            </div>
                        </div> -->
                        <div class="input-group pt-2 row">

                            <div class="col-md-12 checkbox-form">
                                <label>T-shirt </label>
                                <label class="checkbox-inline">

                                    <input type="radio" @if($result->t_shirt_size == "Xs") checked @endif required
                                           name="t_shirt_size" value="Xs">Xs
                                    <input type="radio" @if($result->t_shirt_size == "S") checked @endif required
                                           name="t_shirt_size" value="S"> S
                                    <input type="radio" @if($result->t_shirt_size == "M") checked @endif required
                                           name="t_shirt_size" value="M"> M
                                    <input type="radio" @if($result->t_shirt_size == "L") checked @endif required
                                           name="t_shirt_size" value="L"> L
                                    <input type="radio" @if($result->t_shirt_size == "XL") checked @endif required
                                           name="t_shirt_size" value="XL"> XL
                                    <input type="radio" @if($result->t_shirt_size == "XXL") checked @endif required
                                           name="t_shirt_size" value="XXL"> XXL
                                    <input type="radio" @if($result->t_shirt_size == "3XL") checked @endif required
                                           name="t_shirt_size" value="3XL"> 3XL
                                    <input type="radio" @if($result->t_shirt_size == "4XL") checked @endif required
                                           name="t_shirt_size" value="4XL"> 4XL
                                </label>
                            </div>
                        </div>

                        <div class="input-group row mt-2">
                            <label class="" for="image">আপনার পাসপোর্ট সাইজের ছবি প্রদান করুন </label>
                            <input type="file" class="form-control" id="uploadedImage" name="image">
                        </div>
                        <div class="mb-2">
                            <img src="{{$result->profile_pic}}" id="imagePreview" class="w-100 img-thumbnail" style="max-height: 275px;"/>
                            <input type="hidden" name="profile_pic" value="{{$result->profile_pic}}" >
                        </div>

                        <div class="mb-2">
                            <button type="submit" class="form-control btn btn-primary" id="image" name="image">Update
                            </button>
                        </div>

                    </div>





                </form>

            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <h5> Academic Qualification</h5>
                    <div class="card-body">
                        <form class="" method="post" action="/admin-student-academic-info-update"
                              enctype="multipart/form-data">

                            @csrf

                            <input name="id" value="{{$result->academicQualification->id}}" type="hidden"/>
                            <div class="input-group row pt-2">

                                <div class="col-md-12 checkbox-form">
                                    <label>কোর্সের নাম</label>
                                    <label class="checkbox-inline">
                                        <input type="radio" @if($result->academicQualification->program_name == "এইচএসসি") checked
                                               @endif required name="program_name" value="এইচএসসি"
                                               id="hsc-button">এইচএসসি
                                        <input type="radio" @if($result->academicQualification->program_name == "অনার্স") checked
                                               @endif required name="program_name" value="অনার্স"
                                               id="honurs-button">অনার্স
                                        <input type="radio" @if($result->academicQualification->program_name == "ডিগ্রি পাস") checked
                                               @endif required name="program_name" value="ডিগ্রি পাস"
                                               id="honurs-button">ডিগ্রি
                                        পাস
                                        <input type="radio" @if($result->academicQualification->program_name == "মাস্টার্স") checked
                                               @endif required name="program_name" value="মাস্টার্স"
                                               id="masters-button">মাস্টার্স
                                    </label>
                                </div>
                            </div>



                            <div class="input-group row pt-2">
                                <div class="col-sm-1-12">
                                    <input type="text" required class="form-control" name="department"
                                           placeholder=" বিভাগ / বিষয়:" value="{{$result->academicQualification->department}}">
                                </div>
                            </div>

                            <div class="input-group row pt-2">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="session" id="session"
                                           placeholder="সেশন: " value="{{$result->academicQualification->session}}">
                                </div>
                            </div>


                            <div class="input-group row pt-2">

                                <div class="col-sm-12">
                                    <!-- <p style="color:red;">শুধুমাত্র ২০১৫ সাল পর্যন্ত এইচএসসি, ২০২০ সাল পর্যন্ত
                                        ডিগ্রি/অনার্স এবং ২০২২ সাল পর্যন্ত মাস্টার্স পরীক্ষায় কৃতকার্য প্রাক্তন
                                        শিক্ষার্থীরা রেজিস্ট্রেশন করতে পারবেন।
                                        * </p> -->
                                    <select required class="form-select" name="passing_year">
                                        <div>
                                            <option @if($result->academicQualification->passing_year == "২০২২") selected
                                                    @endif value="২০২২">২০২২
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০২১") selected
                                                    @endif value="২০২১">২০২১
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০২০") selected
                                                    @endif value="২০২০">২০২০
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১৯") selected
                                                    @endif value="২০১৯">২০১৯
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১৮") selected
                                                    @endif value="২০১৮">২০১৮
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১৭") selected
                                                    @endif value="২০১৭">২০১৭
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১৬") selected
                                                    @endif value="২০১৬">২০১৬
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১৫") selected
                                                    @endif value="২০১৫">২০১৫
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১৪") selected
                                                    @endif value="২০১৪">২০১৪
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১৩") selected
                                                    @endif value="২০১৩">২০১৩
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১২") selected
                                                    @endif value="২০১২">২০১২
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১১") selected
                                                    @endif value="২০১১">২০১১
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০১০") selected
                                                    @endif value="২০১০">২০১০
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০৯") selected
                                                    @endif value="২০০৯">২০০৯
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০৮") selected
                                                    @endif value="২০০৮">২০০৮
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০৭") selected
                                                    @endif value="২০০৭">২০০৭
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০৬") selected
                                                    @endif value="২০০৬">২০০৬
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০৫") selected
                                                    @endif value="২০০৫">২০০৫
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০৪") selected
                                                    @endif value="২০০৪">২০০৪
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০৩") selected
                                                    @endif value="২০০৩">২০০৩
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০২") selected
                                                    @endif value="২০০২">২০০২
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০১") selected
                                                    @endif value="২০০১">২০০১
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "২০০০") selected
                                                    @endif value="২০০০">২০০০
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯৯") selected
                                                    @endif value="১৯৯৯">১৯৯৯
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯৮") selected
                                                    @endif value="১৯৯৮">১৯৯৮
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯৭") selected
                                                    @endif value="১৯৯৭">১৯৯৭
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯৬") selected
                                                    @endif value="১৯৯৬">১৯৯৬
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯৫") selected
                                                    @endif value="১৯৯৫">১৯৯৫
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯৪") selected
                                                    @endif value="১৯৯৪">১৯৯৪
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯৩") selected
                                                    @endif value="১৯৯৩">১৯৯৩
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯২") selected
                                                    @endif value="১৯৯২">১৯৯২
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯১") selected
                                                    @endif value="১৯৯১">১৯৯১
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৯০") selected
                                                    @endif value="১৯৯০">১৯৯০
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮৯") selected
                                                    @endif value="১৯৮৯">১৯৮৯
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮৮") selected
                                                    @endif value="১৯৮৮">১৯৮৮
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮৭") selected
                                                    @endif value="১৯৮৭">১৯৮৭
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮৬") selected
                                                    @endif value="১৯৮৬">১৯৮৬
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮৫") selected
                                                    @endif value="১৯৮৫">১৯৮৫
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮৪") selected
                                                    @endif value="১৯৮৪">১৯৮৪
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮৩") selected
                                                    @endif value="১৯৮৩">১৯৮৩
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮২") selected
                                                    @endif value="১৯৮২">১৯৮২
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮১") selected
                                                    @endif value="১৯৮১">১৯৮১
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৮০") selected
                                                    @endif value="১৯৮০">১৯৮০
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭৯") selected
                                                    @endif value="১৯৭৯">১৯৭৯
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭৮") selected
                                                    @endif value="১৯৭৮">১৯৭৮
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭৭") selected
                                                    @endif value="১৯৭৭">১৯৭৭
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭৬") selected
                                                    @endif value="১৯৭৬">১৯৭৬
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭৫") selected
                                                    @endif value="১৯৭৫">১৯৭৫
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭৪") selected
                                                    @endif value="১৯৭৪">১৯৭৪
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭৩") selected
                                                    @endif value="১৯৭৩">১৯৭৩
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭২") selected
                                                    @endif value="১৯৭২">১৯৭২
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭১") selected
                                                    @endif value="১৯৭১">১৯৭১
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৭০") selected
                                                    @endif value="১৯৭০">১৯৭০
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৬৯") selected
                                                    @endif value="১৯৬৯">১৯৬৯
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৬৮") selected
                                                    @endif value="১৯৬৮">১৯৬৮
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৬৭") selected
                                                    @endif value="১৯৬৭">১৯৬৭
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৬৬") selected
                                                    @endif value="১৯৬৬">১৯৬৬
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৬৫") selected
                                                    @endif value="১৯৬৫">১৯৬৫
                                            </option>
                                            <option @if($result->academicQualification->passing_year == "১৯৬৪") selected
                                                    @endif value="১৯৬৪">১৯৬৪
                                            </option>

                                        </div>

                                    </select>

                                </div>
                            </div>

                            <div class="input-group row pt-2">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="roll_no"
                                           placeholder="রোল নং: " value="{{$result->academicQualification->roll_no}}">
                                </div>
                            </div>


                            <div class="input-group row pt-2">
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="reg_no"
                                           placeholder=" রেজিস্ট্রেশন নং:" value="{{$result->academicQualification->reg_no}}">
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
                                                   value="{{$result->academicQualification->mark_sheet}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <div class="col-sm-1-12">
                                            @if($result->academicQualification->mark_sheet != null)
                                                <a href="{{$result->academicQualification->mark_sheet}}" download="">Download Mark
                                                    Sheet </a>
                                            @else
                                                <span> No Mark Sheet Available</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>


                            </div>


                            <div class="mb-2 mt-5">
                                <button type="submit" class="form-control btn btn-primary" id="image" name="image">Update
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <h5> Professional Information</h5>
                    <div class="card-body">
                        <form class="" method="post" action="/admin-student-professional-info-update">

                            @csrf

                            <input name="id" value="{{$result->profession->id}}" type="hidden"/>
                            <div class="input-group row pt-2">

                                <div class="col-sm-12">
                                    <select required class="form-select" name="profession">
                                        <option value="">পেশা</option>
                                        <option @if($result->profession->profession == "ব্যবসায়ী") selected @endif value="ব্যবসায়ী">ব্যবসায়ী</option>
                                        <option @if($result->profession->profession == "চাকুরীজীবি") selected @endif value="চাকুরীজীবি">চাকুরীজীবি</option>
                                        <option @if($result->profession->profession == "চিকিৎসক") selected @endif value="চিকিৎসক">চিকিৎসক</option>
                                        <option @if($result->profession->profession == "প্রকৌশলী") selected @endif value="প্রকৌশলী">প্রকৌশলী</option>
                                        <option @if($result->profession->profession == "আইনজীবি") selected @endif value="আইনজীবি ">আইনজীবি</option>
                                        <option @if($result->profession->profession == "শিক্ষকতা") selected @endif value="শিক্ষকতা">শিক্ষকতা</option>
                                        <option @if($result->profession->profession == "উদ্যোক্তা") selected @endif value="উদ্যোক্তা">উদ্যোক্তা</option>
                                        <option @if($result->profession->profession == "গবেষক") selected @endif value="গবেষক">গবেষক</option>
                                        <option @if($result->profession->profession == "সাংবাদিক") selected @endif value="সাংবাদিক">সাংবাদিক</option>
                                        <option @if($result->profession->profession == "রন্ধনশিল্পী") selected @endif value="রন্ধনশিল্পী">রন্ধনশিল্পী</option>
                                        <option @if($result->profession->profession == "চিত্র গ্রাহক") selected @endif value="চিত্র গ্রাহক">চিত্র গ্রাহক</option>
                                        <option @if($result->profession->profession == "অভিনেতা") selected @endif value="অভিনেতা ">অভিনেতা</option>
                                        <option @if($result->profession->profession == "মিডিয়া পরিচলক") selected @endif value="মিডিয়া পরিচলক">মিডিয়া পরিচলক</option>
                                        <option @if($result->profession->profession == "চিত্রশিল্পী") selected @endif value="চিত্রশিল্পী">চিত্রশিল্পী</option>
                                        <option @if($result->profession->profession == "স্বনির্ভর") selected @endif value="স্বনির্ভর">স্বনির্ভর</option>
                                        <option @if($result->profession->profession == "অন্যান্য") selected @endif value="অন্যান্য">অন্যান্য</option>
                                    </select>

                                </div>
                            </div>

                            <div class="input-group row pt-2">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="designation" id="designation"
                                           placeholder="পদবি  " value="{{$result->profession->designation}}">
                                </div>
                            </div>

                            <div class="input-group row pt-2">
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="institute_name"
                                           placeholder=" প্রতিষ্ঠানের নাম   "value="{{$result->profession->institute_name}}">
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
                                           placeholder=" অন্যান্য ক্ষেত্রে ইন্ডাস্ট্রি লিখুন :   " value="{{$result->profession->industry}}">

                                </div>
                            </div>
                            <div class="input-group row pt-2">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="office_phone"
                                           placeholder=" কর্মক্ষেত্রের ফোন:   " value="{{$result->profession->office_phone}}">

                                </div>
                            </div>
                            <div class="input-group row pt-2">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="office_address"
                                           placeholder=" কর্মক্ষেত্রের ঠিকানা (অপশনাল):   " value="{{$result->profession->office_address}}">

                                </div>
                            </div>
                            <div class="input-group row pt-2">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="office_email"
                                           placeholder=" কর্মক্ষেত্রের ইমেইল:   " value="{{$result->profession->office_email}}">

                                </div>
                            </div>

                            <div class="mb-2">
                                <button type="submit" class="form-control btn btn-primary" id="image" name="image">Update
                                </button>
                            </div>
                        </form>


                    </div>
                </div>

            </div>
        </div>


    </div>





    @push('footer-scripts')
        @once
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
                    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
                    crossorigin="anonymous"></script>

            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

            <script>
                $('#summernote').summernote({
                    placeholder: 'Hello stand alone ui',
                    height: 200,
                    /*tabsize: 2,
                    height: 120,
                    toolbar: [
                        ['style', ['style']],
                        ['font', ['bold', 'underline', 'clear']],
                        ['color', ['color']],
                        ['para', ['ul', 'ol', 'paragraph']],
                        ['table', ['table']],
                        ['insert', ['link', 'picture', 'video']],
                        ['view', ['fullscreen', 'codeview', 'help']]
                    ]*/
                });

                uploadedImage.onchange = evt => {
                    const [file] = uploadedImage.files
                    if (file) {
                        imagePreview.src = URL.createObjectURL(file)
                    }
                }
            </script>
        @endonce
    @endpush

@endsection
