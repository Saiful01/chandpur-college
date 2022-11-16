@extends("layouts.common")
@section("content")

    <section>
        <div class="registration-home"></div>
    </section>

    <section class="form-area">

        <div class="container">

            <div class="row">
                <div class="reg-main-page">

                    <div class="col-md-5 mx-auto">
                        <form class="#" method="post" action="#">

                            @csrf
                            <div class="input-group row pt-2" id="phone-verify">
                                <div class="col-sm-12">
                                    <label>টিকেট ডাউনলোড করতে আপনার ফোন নাম্বার দিন </label>
                                    <input type="text" class="form-control" name="phone" id="phone"
                                           placeholder="টিকেট ডাউনলোড করতে আপনার ফোন নাম্বার দিন " required>
                                </div>
                            </div>

                            <div class="input-group row pt-2" id="otp">
                                <div class="col-sm-12">
                                    <label>ওটিপি</label>
                                    <input type="text" class="form-control" name="otp" id="otp-code" placeholder="ওটিপি"
                                           required>
                                </div>
                            </div>

                            <div class="input-group row pt-2" id="get-otp">
                                <div class="col-sm-12">
                                    <button type="button" class="btn btn-warning" onclick="getOtp()">ওটিপি পান</button>
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
                                    <a href="#" id="tdownload" class="btn btn-warning" target="_blank">রেজিস্ট্রেশন  আমন্ত্রণ পত্র ডাউনলোড করুন </a>
                                    <a href="#" id="t2download" class="btn btn-warning" target="_blank">গেস্ট আমন্ত্রণ পত্র  ডাউনলোড করুন</a>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>


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

            document.getElementById("phone-verify").style.display = "none";
            document.getElementById("get-otp").style.display = "none";
            document.getElementById("otp").style.display = "none";
            document.getElementById("verify").style.display = "none";
            document.getElementById("download").style.display = "block";


            console.log("/otp-check/" + document.getElementById("phone").value + "/" + document.getElementById("otp-code").value);
            let value = httpGet("/otp-check/" + document.getElementById("phone").value + "/" + document.getElementById("otp-code").value);

            console.log()
            if (value == 0) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Phone number not Found',
                    icon: 'error',
                    confirmButtonText: 'Close'
                })
            } else {
                var yourElement = document.getElementById('tdownload');
                var yourElement2 = document.getElementById('t2download');
                yourElement.setAttribute('href', '/pdf/' + value + '.pdf');
                yourElement2.setAttribute('href', '/pdf/guest_' + value + '.pdf');
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
