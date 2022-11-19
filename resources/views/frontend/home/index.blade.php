@extends("layouts.common")
@section("content")

    <section class="hero-section nopadding">
        <div class="container-fluid">
            <div class="row">
                <div class="swiper hero-swipe">
                    <div class="swiper-wrapper">
                        <!-- Additional required wrapper -->

                        <!-- Slides -->
                        <div class="swiper-slide">
                            <!-- <div class="carousel-caption" data-aos="fade-up" data-aos-delay="50">
                                <div class="container">
                                    <h5>চলো ফিরে যাই প্রাণের টানে</h5>
                                    <h6>ডাকছে  প্রিয় ক্যাম্পাস</h6>
                                    <p>চলো ফিরে স্মৃতির টানে যাই,মিলি একসাথে, প্রাণের মিলনমেলায় </p>
                                </div>
                            </div> -->
                            <img src="frontend/img/slider/home-slider-1.png" class="w-100"/>
                        </div>
                        <div class="swiper-slide">
                            <!-- <div class="carousel-caption" data-aos="fade-up" data-aos-delay="50">
                                <div class="container" data-aos="fade-up" data-aos-delay="50">
                                <h5>চলো ফিরে যাই প্রাণের টানে</h5>
                                    <h6>ডাকছে  প্রিয় ক্যাম্পাস</h6>
                                    <p>চলো ফিরে স্মৃতির টানে যাই,মিলি একসাথে, প্রাণের মিলনমেলায় </p>
                                </div>
                            </div> -->
                            <img src="frontend/img/slider/home-slider-1.png" class="w-100"/>
                        </div>
                        <div class="swiper-slide">
                            <!-- <div class="carousel-caption" data-aos="fade-up" data-aos-delay="50">
                                <div class="container">
                                <h5>চলো ফিরে যাই প্রাণের টানে</h5>
                                    <h6>ডাকছে  প্রিয় ক্যাম্পাস</h6>
                                    <p>চলো ফিরে স্মৃতির টানে যাই,মিলি একসাথে, প্রাণের মিলনমেলায় </p>
                                </div>
                            </div> -->
                            <img src="frontend/img/slider/home-slider-1.png" class="w-100"/>
                        </div>
                        <!-- Slides -->
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
                <!-- <div class="col-md-4 hero-left">

                              <div class="hero-content d-flex align-items-center flex-column h-100 justify-content-center">
                                  <h2 class="text-center text-white w-100">চলো ফিরে যায় প্রাণের টানে।</h2>

                                  <p class="text-center text-white w-100"> ডাকছে প্রিয় ক্যাম্পাস<br>
                                      চলো ফিরে যায় প্রাণের টানে, মিলি একসাথে, প্রাণের মিলনমেলায়</p>
                              </div>

                          </div>
                          <div class="col-md-8">
                              <img class="w-100" src="/frontend/img/sl.png" alt="Slider"/>
                          </div>
                      </div>
                  </div> -->
            </div>
        </div>
    </section>

    <section class="countdown-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <img class="w-100" src="/frontend/img/logo-with-box.png" alt="logo white"/>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-7 left">
                    <div id="countdown" class="timer">
                        <ul>
                            <li><span id="days"></span>দিন</li>
                            <li><span id="hours"></span>ঘন্টা</li>
                            <li><span id="minutes"></span>মিনিট</li>
                            <li><span id="seconds"></span>সেকেন্ড</li>
                        </ul>
                    </div>

                    <!-- <ul class="list-inline">
                        <li class="list-inline-item">
                            <div class="item">
                                <h4>00</h4>
                                <p>দিন </p>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="item">
                                <h4>00</h4>
                                <p> ঘন্টা</p>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="item">
                                <h4>00</h4>
                                <p> মিনিট </p>
                            </div>
                        </li>
                        <li class="list-inline-item">
                            <div class="item">
                                <h4>00</h4>
                                <p> সেকেন্ড</p>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </section>



   <!--<section style="padding:50px 0 0px 0px" class="guest-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-areas">
                        <img style="padding:0px 0 0px 0px" src="frontend/img/special-guest.png"/> -->
                        <!-- <img class="w-100" style="padding: 0px 0 0px 0px; left: -12px;position: relative;"
                             src="frontend/img/3rd-colum.png"/> -->
                        <!-- <div class="spcial-guest">
                               <div class="spcial-guest-caption">
                                  <h4>ডাঃ দীপু মনি, এমপি</h4>
                                   <p>মাননীয় মন্ত্রী, শিক্ষা মন্ত্রণালয় গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</p>
                                   <p>বাংলাদেশের অন্যতম ঐতিহ্যবাহী ও পুরনো শিক্ষাপ্রতিষ্ঠান চাঁদপুর সরকারি কলেজের</br>
                                    ৭৫ বছর পূর্তি উৎসবে আমি কলেজের বর্তমান, প্রাক্তন শিক্ষার্থী এবং শিক্ষকমন্ডলী, </br>
                                    কলেজ কর্তৃপক্ষসহ সংশ্লিষ্ট সকলকে জানাই আন্তরিক শুভেচ্ছা।
                                   </p>
                             </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->




    <!-- <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-areas">
                        <img style="padding:50px 0 50px 0px" src="frontend/img/main-program.png"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 odd">
                        <img src="/frontend/img/blog1.png" class="w-100" alt="blog"/>
                        <h4>DHAKA APPAREL </br>SUMMIT</h4>
                        <p>15th & 16th Nov, 2022| 9.30AM - 5.00PM | Hall-1, ICCB</p>
                    </div>
                    <div class="col-md-3 even">
                        <img src="/frontend/img/blog-2.png" class="w-100" alt="blog"/>
                        <h4>BANGLADESH DENIM</br> EXPO</h4>
                        <p>15th & 16th Nov, 2022| 11.00AM - 8.00PM | Hall-1, ICCB</p>
                    </div>
                    <div class="col-md-3 odd">
                        <img src="/frontend/img/blog-3.png" class="w-100" alt="blog"/>
                        <h4>DHAKA APPAREL </br>SUMMIT</h4>
                        <p>15th & 16th Nov, 2022| 9.30 AM - 5.00PM | Hall-1, ICCB</p>
                    </div>
                    <div class="col-md-3 even">
                        <img src="/frontend/img/blog-4.png" class="w-100" alt="blog"/>
                        <h4>BANGLADESH DENIM </br>EXPO</h4>
                        <p>15th & 16th Nov, 2022| 11.00AM - 8.00PM | Hall-1, ICCB</p>
                    </div>
                </div>
            </div>
        </section> -->

    <!-- <section style="padding:0px 0 0px 0px" class="partner-section">
        <div class="container">
            <div class="row">
                <div class="title-areas">
                 <img style="padding:50px 0 0px 0px" src="frontend/img/sponcer.png"/>
                </div>

                <div class="col odd">
                    <img src="/frontend/img/spon-1.png" class="w-100" alt="blog"/>
                </div>
                <div class="col odd">
                    <img src="/frontend/img/spon-2.png" class="w-100" alt="blog"/>
                </div>
                <div class="col odd">
                    <img src="/frontend/img/spon-3.png" class="w-100" alt="blog"/>
                </div>
                <div class="col odd">
                    <img src="/frontend/img/spon-4.png" class="w-100" alt="blog"/>
                </div>
                <div class="col odd">
                    <img src="/frontend/img/spon-1.png" class="w-100" alt="blog"/>
                </div>
                <div class="col odd">
                    <img src="/frontend/img/spon-2.png" class="w-100" alt="blog"/>
                </div>
                <div class="col odd">
                    <img src="/frontend/img/spon-3.png" class="w-100" alt="blog"/>
                </div>
                <div class="col odd">
                    <img src="/frontend/img/spon-4.png" class="w-100" alt="blog"/>
                </div>
            </div>
        </div>
    </section> -->

    <section style="padding:0px 0 0px 0px" class="photo-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-areas">
                        <img style="padding:50px 0 50px 0px" class="" style="" src="frontend/img/photo-arcaive.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <img style="height:358px;" src="/frontend/img/photo-archive-1.jpg" class="w-100" alt="blog"/>

                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-4">
                            <img style="height:162px;" src="/frontend/img/photo-archive-2.jpg" class="w-100"
                                 alt="blog"/>
                        </div>
                        <div class="col-md-4">
                            <img style="height:218px;" src="/frontend/img/photo-archive-4.jpg" class="w-100"
                                 alt="blog"/>
                        </div>
                        <div class="col-md-4">
                            <img style="height:218px;" src="/frontend/img/photo-archive-6.jpg" class="w-100"
                                 alt="blog"/>
                        </div>
                        <div class="col-md-4">
                            <img style="height:190px; margin-top:-45px" src="/frontend/img/photo-archive-3.jpg"
                                 class="w-100" alt="blog"/>
                        </div>
                        <div class="col-md-4">
                            <img style="height:135px;margin-top: 15px;" src="/frontend/img/photo-archive-5.jpg"
                                 class="w-100" alt="blog"/>
                        </div>
                        <div class="col-md-4">
                            <img style="height:135px;margin-top: 15px;" src="/frontend/img/photo-archive-7.jpg"
                                 class="w-100" alt="blog"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:0px 0 0px 0px" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-areas">
                        <img style="padding:50px 0 50px 0px" class="" style="" src="frontend/img/sharoklipi.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 sharoklipi">
                    <h4>ঐতিহ্যের উৎকর্ষে উল্লাসের ৭৫ বছর</h4>
                    <p>কলেজের প্রাক্তন শিক্ষার্থীদের অভিজ্ঞতা ও স্মরণীয় মুহুর্তগুলোকে</br> একত্রিত করে আমরা তৈরি করছি
                        একটি
                        স্মরণিকা, যা আমাদের
                        </br>মনে করিয়ে দেবে আমাদের একসাথে কাটানো স্মৃতিময় ক্ষণগুলোকে।
                
                        ইতিহাসের অংশ হতে আজই পাঠিয়ে দিন আপনার কলেজ জীবনের স্মরণীয় যে কোনো স্মৃতির কথা।
                    </p>
                </div>
                <div class="col-md-6">
                    <div class="container">
                        <form action="/souvenir" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="input-group row">
                                <div class="col-sm-12">
                                    <input style="border: 1px solid red;" type="text" class="form-control" name="name" placeholder="নাম *" required/>
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-sm-12">
                                    <input style="border: 1px solid red;" type="text" class="form-control" name="course" placeholder="কোর্সের নাম * "required/>
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-sm-12">
                                    <input style="border: 1px solid red;" type="text" class="form-control" name="subject" placeholder="বিভাগ/বিষয় *" required/>
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-sm-12">
                                    <input style="border: 1px solid red;" type="text" class="form-control" name="batch" placeholder="ব্যাচ * " required/>
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="email" placeholder="ইমেইল" required/>
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-sm-12">
                                    <input style="border: 1px solid red;" type="text" class="form-control" name="mobile" placeholder="মোবাইল নং * " required/>
                                </div>
                            </div>
                            
                            <div class="input-group row">
                                <p style="padding-top:15px; color:red;">পাসপোর্ট সাইজ ছবি* </p>
                               
                                <div class="col-sm-12">
                                    <input style="border: 1px solid red;" type="file" class="form-control" name="passport" placeholder="পাসপোর্ট সাইজ ছবি * " required/>
                                </div>
                            </div>
                            <div class="input-group row">
                                <div class="col-sm-12">

                                <p style="padding-top:15px; color:red;">*সর্বোচ্চ ২০০০ শব্দের মধ্যে লেখুন</P>
                                    <textarea style=" border: 1px solid red;" type="text" class="form-control" name="writeup" placeholder="আপনার লেখা প্রদান করুন……" required></textarea>
                                   

                                </div>
                            </div>
                            <div class="input-group row">
                                <p style="padding-top:15px; color:red;">লেখা সম্পর্কিত ছবি(৩)</p>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" name="picture[]" multiple/>
                                </div>
                            </div>

                           {{-- <div class="input-group row">
                                <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="name"
                                          placeholder=" আপনার কথা "></textarea>
                                </div>
                            </div>--}}

                            <div class="input-group row">
                                <button type="submit" class="btn btn-primary send-me">পাঠিয়ে দিন</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:50px 0 0px 0px" class="faq-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-areas">
                        <img style="padding:50px 0 50px 0px;" class="" style="" src="frontend/img/faq.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    আমন্ত্রন পত্র সাথে রাখা কি বাধ্যতামূলক?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>কলেজ শিক্ষার্থী বা তাদের সাথে আগত অতিথিদের অনুষ্ঠানের তিনদিন আমন্ত্রণপত্র সাথে
                                        রাখা বাধ্যতামূলক। আমন্ত্রণপত্র ব্যতীত কোনোভাবেই ভেন্যুতে প্রবেশ এবং খাবার সংগ্রহ
                                        করা যাবে না। তাছাড়া নিরাপত্তা নিশ্চিত করার সুবিধার্থে আমন্ত্রিত সকল শিক্ষার্থী
                                        এবং অতিথিদের আমন্ত্রণপত্র সর্বদা দৃশ্যমান রাখতে অনুরোধ করা যাচ্ছে। ভলান্টিয়ারগণ
                                        যেকোনো মুহূর্তে আমন্ত্রণপত্র চেক করতে পারেন।</P>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <p>রেজিস্ট্রেশনের কি কি প্রয়োজন হবে?</p>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> অনলাইন পোর্টালে রেজিস্ট্রেশনের সময় শিক্ষার্থীদের কলেজ থেকে সর্বশেষ অংশগ্রহণকৃত
                                        পরীক্ষার রেজিস্ট্রেশন নম্বর প্রয়োজন হবে।
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="true"
                                        aria-controls="collapseThree">
                                    শিশুদের জন্য আলাদা করে রেজিস্ট্রেশন করতে হবে?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p> ১২ বছর বা তদূর্ধ্ব বাচ্চাদের জন্য আলাদাভাবে রেজিস্ট্রেশন করতে হবে। ১২ বছরের
                                        কমবয়সী বাচ্চাদের জন্য অর্ধেক ফি দিয়ে রেজিস্ট্রেশন করতে হবে। ০-২ বছর বয়সী বাচ্চার
                                        কোন রেজিস্ট্রেশনের প্রয়োজন নেই।
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="true"
                                        aria-controls="collapseFour">
                                    পুণর্মিলনী অনুষ্ঠানের উপহার কীভাবে সংগ্রহ করতে হবে?

                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>পুনর্মিলনী অনুষ্ঠানের উপহার অনুষ্ঠানের দিন ভেন্যু থেকে সংগ্রহ করতে পারবেন। তাছাড়া
                                        চাইলে অনুষ্ঠানের আগেও কুরিয়ারের মাধ্যমে আপনার ঠিকানা থেকে সংগ্রহ করতে পারবেন।
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTen">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTen" aria-expanded="true"
                                        aria-controls="collapseTen">
                                    আমি কী দেশের বাইরে থেকে রেজিস্ট্রেশন করতে পারবো?

                                </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                                 data-bs-parent="#accordionExamples">
                                <div class="accordion-body">
                                    <p> হ্যাঁ, আপনি চাইলেই আমাদের অনলাইন পোর্টালের মাধ্যমে দেশের বাইরে থেকেও
                                        রেজিস্ট্রেশন করতে পারবেন।

                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">

                    <div class="accordion" id="accordionExamples">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFive" aria-expanded="true"
                                        aria-controls="collapseFive">
                                    কোন আলাদা ফুড কুপন সংগ্রহ করতে হবে কি?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse show"
                                 aria-labelledby="headingFive"
                                 data-bs-parent="#accordionExamples">
                                <div class="accordion-body">
                                    <p>আমন্ত্রণপত্রই অনুষ্ঠানের ফুড কুপন হিসেবে বিবেচিত হবে। প্রতিবার খাবার সংগ্রহের সময়
                                        আমন্ত্রণপত্র প্রদর্শন করতে হবে।
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    পুণর্মিলনী অনুষ্ঠানের পেমেন্ট কীভাবে করবো?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                                 data-bs-parent="#accordionExamples">
                                <div class="accordion-body">
                                    <p> বিকাশ, নগদ, রকেট, ইউক্যাশসহ সরাসরি ব্যাংকের মাধ্যমেও পেমেন্ট সম্পন্ন করতে
                                        পারবেন।
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseSeven" aria-expanded="true"
                                        aria-controls="collapseSeven">
                                    প্রাক্তন শিক্ষার্থীদের সাথে আগত অতিথিদের জন্য কি রেজিস্ট্রেশন করতে হবে?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                                 data-bs-parent="#accordionExamples">
                                <div class="accordion-body">
                                    <p> হ্যাঁ, প্রাক্তন শিক্ষার্থীদের সাথে আগত অতিথিদের জন্যও রেজিস্ট্রেশন করতে হবে।
                                    </P>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseEight" aria-expanded="true"
                                        aria-controls="collapseEight">
                                    পেমেন্ট সম্পন্ন করার পর আমন্ত্রণপত্র কীভাবে সংগ্রহ করবো?

                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                                 data-bs-parent="#accordionExamples">
                                <div class="accordion-body">
                                    <p> পেমেন্ট সম্পন্ন করার পর আমন্ত্রণপত্র আপনার প্রদানকৃত ইমেইল অ্যাড্রেসে পাঠিয়ে
                                        দেওয়া হবে। অনুষ্ঠানের দিন আমন্ত্রণপত্রটি প্রিন্ট করে হার্ডকপি সাথে রাখতে হবে।
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseNine" aria-expanded="true"
                                        aria-controls="collapseNine">
                                    পুনর্মিলনীর জন্য নির্ধারিত টিশার্ট এর মেজারমেন্টগুলো কী কী?
                                </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                                 data-bs-parent="#accordionExamples">
                                <div class="accordion-body">
                                    <p> টি-শার্ট / গেঞ্জির সাইজ মেজারমেন্ট (এশিয়ান)

                                        S - Chest- 36" Length - 26"
                                        M - Chest - 38" Length - 27"
                                        L - Chest - 40" Length - 28"
                                        XL - Chest - 42" Length - 29"
                                        XXL - Chest - 44" Length - 30"
                                        3XL - Chest - 46" Length - 31"
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section style="padding:50px 0 50px 0px" class="venue-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-areas">
                        <img style="padding:50px 0 50px 0px" class="" style="" src="frontend/img/venu.png"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"
                                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=University of Chandpur Government College, Comilla Rd, Chandpur 3600Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">

                            </iframe>
                            <a href="https://mcpenation.com/">MCPE Nation</a>
                        </div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 400px;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 400px;
                            }

                            .gmap_iframe {
                                height: 400px !important;
                            }
                        </style>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- <h4>ঐতিহ্যবাহী চাঁদপুর সরকারি কলেজ </h4>
                    <p>বাংলাদেশের অন্যতম ঐতিহ্যবাহী ও পুরনো শিক্ষাপ্রতিষ্ঠান চাঁদপুর সরকারি কলেজের ৭৫ বছর পূর্তি উৎসবে আমি
						কলেজের বর্তমান, প্রাক্তন শিক্ষার্থী এবং শিক্ষকমন্ডলী, কলেজ কর্তৃপক্ষসহ সংশ্লিষ্ট সকলকে জানাই আন্তরিক  শুভেচ্ছা।
                        </p> -->

                    <img class="w-100" src="frontend/img/maf-right.png" alt=""/>
                </div>
            </div>
        </div>
    </section>

@endsection
