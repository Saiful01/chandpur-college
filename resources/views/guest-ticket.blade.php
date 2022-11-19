@extends("layouts.common")
@section("content")

    <section class="form-area">
        <div class="container">

            <div class="row pt-4 pb-4" id="verification">

                <div class="col-md-4 mx-auto">
                    <form class="#" method="post" action="#">

                        @csrf
                        <div class="input-group row pt-2" id="phone-verify">
                            <div class="col-sm-12">
                                <label>যার রেফারেন্সে গেস্ট রেজিস্ট্রেশন করতে চান তার রেজিস্ট্রিত  মোবাইল  নাম্বার দিয়ে ভেরিফিকেশন সম্পন্ন করুন।</label>
                                <input type="text" class="form-control" name="phone" id="phone"
                                       placeholder=" মোবাইল নাম্বার  " required>
                            </div>
                        </div>

                        <div class="input-group row pt-2" id="otp">
                            <div class="col-sm-12">
                                <label>ওটিপি প্রদান করুন</label>
                                <input type="text" class="form-control" name="otp" id="otp-code" placeholder="ওটিপি"
                                       required>
                            </div>
                        </div>

                        <div class="input-group row pt-2" id="get-otp">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-warning" onclick="getOtp()">সেন্ড ওটিপি</button>
                            </div>
                        </div>

                        <div class="input-group row pt-2" id="verify">
                            <div class="col-sm-12">
                                <button type="button" class="btn btn-warning" onclick="getVerify()">ভেরিফাই করুন
                                </button>
                            </div>
                        </div>

                        <div class="input-group row pt-2 download" id="download">
                            <div class="col-sm-12">
                                <a href="#" id="tdownload" class="btn btn-warning" target="_blank">ডাউনলোড করুন</a>
                            </div>
                        </div>

                    </form>

                </div>

            </div>


            <div id="guest-info">
                <div class="row">

                    <div class="col-md-7">
                        <div class="card">

                            <div class="card-body">
                                <p>***আপনি  ৭ জন পারিবারিক সদস্য রেজিস্ট্রেশন করতে পারবেন। প্রথম বার মূল রেজিস্ট্রেশনের সময় যদি ২ জন গেস্ট রেজিস্ট্রেশন থেকে থাকে তবে অতিরিক্ত আর ৫ জন গেস্ট যুক্ত করতে পারবেন। </p>
                                <form class="" method="post" action="/guest/payment">

                                    @csrf

                                    <div ng-repeat="item in guest_items">
                                        <div class="input-group row">
                                            <label for="guest_name" class="col-sm-1-12 col-form-label"></label>
                                            <div class="col-sm-1-12">
                                                <input type="text" class="form-control" name="guest_name[]"
                                                       id="guest_name"
                                                       placeholder="পারিবারিক সদস্যের নাম" ng-model="guest_name"
                                                       ng-value="'@{{ item['guest_name'] }}'">

                                            </div>
                                        </div>

                                        <div class="input-group row pt-2">

                                            <div class="col-md-12 checkbox-form">
                                                <label>সম্পর্ক</label>

                                                <select name="relation[]" class="form-control">
                                                    <option value="স্বামী">স্বামী</option>
                                                    <option value="স্ত্রী">স্ত্রী</option>
                                                    <option value="সন্তান">সন্তান</option>

                                                </select>


                                                {{--<label class="checkbox-inline">
                                                    <input type="radio" name="relation@{{ guest_item.colId }}" value="স্বামী">স্বামী
                                                    <input type="radio" name="relation@{{ guest_item.colId }}" value="স্ত্রী"> স্ত্রী
                                                    <input type="radio" name="relation@{{ guest_item.colId }}" value="সন্তান">সন্তান

                                                </label>--}}
                                            </div>
                                        </div>

                                        <div class="input-group row">
                                            <label for="age" class="col-sm-1-12 col-form-label"></label>
                                            <div class="col-sm-1-12">
                                                <input type="text" class="form-control" name="age[]" id="age"
                                                       placeholder="বয়স" ng-model="age" ng-value="'@{{ item['age'] }}'">
                                            </div>
                                        </div>
                                        <div class="input-group row pt-2">

                                            <div class="col-md-12 checkbox-form">
                                                <label>লিঙ্গ </label>
                                                <select name="gender[]" class="form-control">
                                                    <option value="পুরুষ">পুরুষ</option>
                                                    <option value="মহিলা">মহিলা</option>
                                                    <option value="অন্যান্য">তৃতীয় লিঙ্গ</option>

                                                </select>
                                                {{--     <label class="checkbox-inline">
                                                         <input type="radio" name="gender@{{ guest_item.colId }}"  value="পুরুষ">পুরুষ
                                                         <input type="radio" name="gender@{{ guest_item.colId }}"  value="মহিলা"> মহিলা
                                                         <input type="radio" name="gender@{{ guest_item.colId }}"  value="অন্যান্য"> অন্যান্য
                                                     </label>--}}
                                            </div>
                                        </div>
                                    </div>


                                    <div class="input-group row">
                                        <div class="col-md-12">

                                            <button type="button" class="btn btn-default btn-more"
                                                    ng-click="removeGuestItem()">
                                                -
                                            </button>
                                            <button type="button" class="btn btn-default btn-more"
                                                    ng-click="addNewGuest()">
                                                আরও অতিথি +
                                            </button>
                                        </div>
                                    </div>


                                    <p class="bordered-text mt-3 info-text">অতিথি হিসেবে শুধুমাত্র স্বামী স্ত্রী ও
                                        সন্তান
                                        বিবেচিত হবে </p>

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

                                    <div class="input-group row pt-2">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-warning">পেমেন্ট করুন</button>
                                        </div>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>


                    <div class="col-md-5 ">
                        <div class="card">

                            <div class="card-body">

                               <p ng-bind="total"> </p>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>

        app.controller('myController', function ($scope, $http) {
            console.log("guest ok")


            $scope.guest_items = [{}];
            $scope.total=1000;

            console.log($scope.guest_items)


            $scope.addNewGuest = function () {
                var guestItem = $scope.guest_items.length + 1;
                $scope.guest_items.push({'colId': 'col' + guestItem});


                $scope.total+=1000;

            };
            $scope.removeGuestItem = function (index) {
                // remove the row specified in index
                $scope.guest_items.splice(index, 1);
            };
        });

    </script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>


        document.getElementById("verification").style.display = "block";
        document.getElementById("guest-info").style.display = "none";


        document.getElementById("phone-verify").style.display = "block";
        document.getElementById("get-otp").style.display = "block";

        document.getElementById("verify").style.display = "none";
        document.getElementById("download").style.display = "none";
        document.getElementById("otp").style.display = "none";

        function getOtp() {

            console.log(document.getElementById("phone").value);
            let response = httpGet("/otp-verify/" + document.getElementById("phone").value);
            if (response != 200) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Ticket Not Found',
                    icon: 'error',
                    confirmButtonText: 'Close'
                })
                return;
            }

            document.getElementById("phone-verify").style.display = "block";
            document.getElementById("get-otp").style.display = "none";
            document.getElementById("otp").style.display = "block";
            document.getElementById("verify").style.display = "block";
            document.getElementById("download").style.display = "none";


        }

        function getVerify() {

            console.log(document.getElementById("otp-code").value);
            if (document.getElementById("otp-code").value === "") {

                Swal.fire({
                    title: 'Error!',
                    text: 'Otp Required',
                    icon: 'error',
                    confirmButtonText: 'Close'
                })
                return;
            }

            console.log("/otp-check/" + document.getElementById("phone").value + "/" + document.getElementById("otp-code").value);
            let value = httpGet("/otp-check/" + document.getElementById("phone").value + "/" + document.getElementById("otp-code").value);


            if (value == 0) {
                Swal.fire({
                    title: 'Error!',
                    text: 'OTP is wrong',
                    icon: 'error',
                    confirmButtonText: 'Close'
                })

                return;
            } else {
                document.getElementById("phone-verify").style.display = "none";
                document.getElementById("get-otp").style.display = "none";
                document.getElementById("otp").style.display = "none";
                document.getElementById("verify").style.display = "none";
                document.getElementById("download").style.display = "none";
                document.getElementById("guest-info").style.display = "block";
            }

        }

        function httpGet(theUrl) {
            var xmlHttp = new XMLHttpRequest();
            xmlHttp.open("GET", theUrl, false); // false for synchronous request
            xmlHttp.send(null);
            console.log(xmlHttp.responseText);
            return xmlHttp.responseText;
        }

    </script>

@endsection
