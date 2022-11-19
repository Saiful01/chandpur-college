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
                                    <div class="number active">
                                        <h4>৪</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p class="reg-p-active"> পারিবারিক সদস্যের তথ্যাবলী</p>
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
                    </li> -->
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
                            <p style="font-size:12px;">পেশাগত তথ্য</p>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="/student/guest-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number active">
                                        <h4>৪</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;" class="reg-p-active"> পারিবারিক সদস্যের তথ্য</p>
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
                            <p style="font-size:12px;">উপহার সংক্রান্ত তথ্য</p>
                        </a>
                    </li>
                    <!-- <li class="list-inline-item">
                        <a href="/student/fee-info">
                            <div class="d-flex">
                                <div class="p-t2">
                                    <div class="number ">
                                        <h4> ৬</h4>
                                    </div>
                                </div>
                                <div class="pf-2 next-icon"> >></div>
                            </div>
                            <p style="font-size:12px;">রেজিস্ট্রেশন ফি</p>
                        </a>
                    </li> -->
                    <!-- <li class="list-inline-item">
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
                    </li> -->

                </ul>


            </div>

        </div>

    </div>


    <section class="form-area">
        <div class="container">

            <div class="row">

                <div class="col-md-8 mx-auto">
                    <div class="card">

                        <div  class="card-body">
                            <form class="" method="post" action="/student/guest-info">

                                @csrf
                                <input  name="student_id" value="{{$student_id}}" type="hidden"/>
                                <label  class="checkbox-inline">
                                    <label>কোন পারিবারিক সদস্য </label>
                                    <input type="radio" @if($student->is_guest == false) checked @endif required  name="family_member" value="নাই">নাই
                                    <input type="radio" @if($student->is_guest == true) checked @endif required   name="family_member" value="আছে">আছে


                                </label>
                                <div ng-repeat="item in guest_items">
                                    <div class="input-group row">
                                        <label for="guest_name" class="col-sm-1-12 col-form-label"></label>
                                        <div class="col-sm-1-12">
                                            <input type="text" class="form-control" name="guest_name[]" id="guest_name"
                                                   placeholder="পারিবারিক সদস্যের নাম" ng-model="guest_name" ng-value="'@{{ item['guest_name'] }}'">




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
                                        <button type="button" class="btn btn-default btn-more" ng-click="addNewGuest()">
                                            আরও অতিথি +
                                        </button>
                                    </div>
                                </div>


                                <p class="bordered-text mt-3 info-text">অতিথি হিসেবে শুধুমাত্র স্বামী স্ত্রী ও সন্তান
                                    বিবেচিত হবে </p>


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


    <script>

        app.controller('myController', function ($scope, $http) {
            console.log("guest ok")





            $scope.guest_items =  <?php echo $guest_items ?>;
            if ($scope.guest_items.length <= 0) {
                $scope.guest_items = [{}];
            } else {
                $scope.guest_items =  <?php echo $guest_items ?>;
            }

            console.log($scope.guest_items)


            $scope.addNewGuest = function () {
                var guestItem = $scope.guest_items.length + 1;
                $scope.guest_items.push({'colId': 'col' + guestItem});

                console.log(results);

            };
            $scope.removeGuestItem = function (index) {
                // remove the row specified in index
                $scope.guest_items.splice(index, 1);
            };
        });

    </script>


@endsection
