<!DOCTYPE html>
<html lang="en">
<head>
    <title>ঐতিহ্য ও সাফল্যের ৭৫ বছর</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="/frontend/img/header-logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="/frontend/css/custom.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css"/>
    <script src="/frontend/js/swiper-bundle.min.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

    <script>
        var app = angular.module('myApp', []);
        console.log("app created")
    </script>

    <style>
        .hero-swipe {
            width: 100%;
            height: 100vh;
        }

        .sustainability-row {
            background: linear-gradient(0deg, rgba(0, 100, 167, 0.4), rgba(0, 100, 167, 0.4)), url(frontend/img/blog/life1.jpg), #FFFFFF;
            background-position: center;
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }

        .world {
            height: 62px;
            margin-bottom: 9px;
        }
        .student-btn {
            width: 150;
            height: 30;
            background-color: #F5952E;
        }
    </style>
</head>
<body ng-app="myApp" ng-controller="myController">
<!-- @include('sweetalert::alert') -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/frontend/img/header-logo.png" height="120" alt="Logo"/>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="#">উৎসব</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">ইভেন্ট</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">কমিটি</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">প্রকাশনা </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">যোগাযোগ </a>
                </li>


            </ul>
            <form class="d-flex">
                <a href="/student/personal-info" class="btn btn-success btn-register" type="submit">রেজিস্টার</a>
            </form>
        </div>
    </div>
</nav>


@yield("content")

<section class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/frontend/img/footer-logo.png" alt="Logo" class=""/>
            </div>
            <div class="col-md-5">
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">উৎসব</a></li>
                        <li><a href="#">ইভেন্ট</a></li>
                        <li><a href="#">কমিটি</a></li>
                        <li><a href="#">প্রকাশনা</a></li>
                        <li><a href="#">যোগাযোগ</a></li>
                    </ul>


                </div>
            </div>
			 <div class="col-md-4">
                <div class="footer-menu">
                    <ul>
                        <li><a href="/privacy-policy">Privacy Policy</a></li>
                        <li><a href="/terms-condition">Terms and Condition</a></li>
                        <li><a href="/refund-policy">Refund Policy</a></li>

                    </ul>


                </div>
            </div>
        </div>
        <div class="row footer-line">
        </div>
        <div class="row footer-bottom">
            <div class="col-md-6">
                <p>আমাদের লিখতে পারেন </p>
                <p class="en-font">www.cgc@gmail.com</p>
            </div>
            <div class="col-md-6">

                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#"><i class="uil uil-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="uil uil-instagram-alt"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="uil uil-youtube"></i></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="/frontend/js/jquery-3.6.0.min.js"></script>
<script src="/frontend/js/bootstrap.min.js"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->

{{--<script src="frontend/js/aos.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script>

    AOS.init({
        duration: 1200,
    })

</script> -->

<!-- <script src="frontend/js/main.js"></script> -->

<script>

    const swiper = new Swiper('.hero-swipe', {

        loop: true,
        autoplay: {
            delay: 5000,
        },
        fadeEffect: {
            crossFade: true
        },
        on: {
            // slideChangeTransitionStart: function () {
            //     //data-aos="fade-up" data-aos-delay="50"
            //     // add attribute to this carousel-caption
            //     // active slide
            //     var activeSlide = this.activeIndex;

            //     console.log(activeSlide);

            //     $('.carousel-caption').attr('data-aos', 'fade-up');
            //     $('.carousel-caption').attr('data-aos-delay', '50');
            // }
            slideChangeTransitionStart: function () {
                $('.carousel-caption').hide(0);
                $('.carousel-caption').removeClass('aos-init').removeClass('aos-animate');
            },
            slideChangeTransitionEnd: function () {
                $('.carousel-caption').show(0);
                AOS.init();
            },
        },

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },

    });


    var swiper2 = new Swiper(".multiItemSwipe", {
        slidesPerView: 7,
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    /*    let image = document.getElementsByClassName('product-next-btn ')[0];

        document.getElementsByClassName('view-product')[0].onmouseover = function() {
            image.src = '..frontend/img/icon/white-next.svg';

            console.log("hello");
        };*/
</script>

<script>
    $(function () {
        $('.popup-youtube, .popup-vimeo').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    });
</script>


<!-- countdown -->


<script>

        (function () {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            //I'm adding this section so I don't have to keep updating this pen every year :-)
            //remove this if you don't need it
            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "1/1/",
                birthday = dayMonth + yyyy;

            today = mm + "/" + dd + "/" + yyyy;
            if (today > birthday) {
                birthday = dayMonth + nextYear;
            }
            //end

            const countDown = new Date(birthday).getTime(),
                x = setInterval(function () {

                    const now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);


                    //seconds
                }, 0)
        }());

</script>


<script>


    app.controller('myController', function ($scope, $http) {
        console.log("guest ok")


        $scope.guest_items = [{}];
        $scope.addNewGuest = function () {
            var guestItem = $scope.guest_items.length + 1;
            $scope.guest_items.push({'colId': 'col' + guestItem});

            console.log(guestItem);
            console.log($scope.guest_items);


            console.log(results);


        };
        $scope.removeGuestItem = function (index) {
            // remove the row specified in index
            $scope.guest_items.splice(index, 1);
        };


    });


</script>


</body>
</html>
