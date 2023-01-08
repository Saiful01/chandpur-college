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
                            <button type="submit" class="form-control btn btn-primary" id="image" name="image">Publish
                            </button>
                        </div>

                    </div>





                </form>

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
