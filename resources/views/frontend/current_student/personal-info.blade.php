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
                            <form class="" method="post" action="/current-student/personal-info">
                                @csrf
                                <div class="input-group row">
                                    <label for="name" class="col-sm-12 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="নাম:">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    </div>
                                </div>
                                <div class="input-group row">
                                    <label for="name" class="col-sm-12 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="nationality" id="nationality"
                                               placeholder="জাতীয়তা:">

                                    </div>
                                </div>

                                <div class="input-group pt-2 row">

                                    <div class="col-md-12 checkbox-form">
                                        <label>লিঙ্গ </label>
                                        <label class="checkbox-inline">
                                            <input type="radio" name="gender" value="পুরুষ">পুরুষ
                                            <input type="radio" name="gender" value="মহিলা"> মহিলা
                                            <input type="radio" name="gender" value="অন্যান্য"> তৃতীয় লিঙ্গ
                                        </label>
                                    </div>
                                </div>
                                <div class="input-group row">
                                    <label for="name" class="col-sm-12 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="father_name" id="father_name"
                                               placeholder="পিতার নাম:">

                                    </div>
                                </div>
                                <div class="input-group row">
                                    <label for="name" class="col-sm-12 col-form-label"></label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" name="mother_name" id="mother_name"
                                               placeholder="মাতার নাম:">

                                    </div>
                                </div>


                                <div class="input-group row">
                                    <label for="semail" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="email" id="semail"
                                               placeholder=" ইমেইল:">
                                    </div>
                                </div>

                                <div class="input-group row">
                                    <label for="phone" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                               placeholder=" ফোন নং: ">
                                    </div>
                                </div>

                                <div class="input-group row">
                                    <label for="address" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="nid_no" id="nid_no"
                                               placeholder="এন. আই. ডি. নং:">
                                    </div>
                                </div>
                                <div class="input-group row">
                                    <label for="address" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="zila"
                                               id="zila"
                                               placeholder="জেলা:">
                                    </div>
                                </div>
                                <div class="input-group row">
                                    <label for="address" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="address"
                                               id="address"
                                               placeholder="জেলা:">
                                    </div>
                                </div>
                                <div class="input-group row">
                                    <label for="address" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
                                        <input type="text" class="form-control" name="education_year"
                                               id="education_year"
                                               placeholder=" শিক্ষাবর্ষ:">
                                    </div>
                                </div>
                                <div class="input-group pt-2 row">

                                    <div class="col-md-12 checkbox-form">
                                        <label>T-shirt </label>
                                        <label class="checkbox-inline">

                                            <input type="radio" name="t_shirt_size" value="Xs">Xs
                                            <input type="radio" name="t_shirt_size" value="S"> S
                                            <input type="radio" name="t_shirt_size" value="M"> M
                                            <input type="radio" name="t_shirt_size" value="L"> L
                                            <input type="radio" name="t_shirt_size" value="XL"> XL
                                            <input type="radio" name="t_shirt_size" value="XXL"> XXL
                                            <input type="radio" name="t_shirt_size" value="3XL"> 3XL
                                            <input type="radio" name="t_shirt_size" value="4XL"> 4XL
                                        </label>
                                    </div>
                                </div>

                                <div class="input-group row">
                                    <label for="image" class="col-sm-1-12 col-form-label"></label>
                                    <div class="col-sm-1-12">
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

                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
