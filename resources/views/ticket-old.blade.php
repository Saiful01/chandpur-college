<!doctype html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta charset="utf-8">


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>

    <style>
        div.page {
            page-break-after: always;
            page-break-inside: avoid;
        }

        @page {
            margin: 0px;
        }

        h1, h2, h3, h4, h5, h6, p {
            margin: 0px;
            padding: 0;
        }

        body {
            margin: 0px;


        }

        .ticket-area {
            background: #f1ede8;
            border: 1px solid #f1eeee;
            width: 795px;
            height: 1122px;
            background: url("{{ public_path( '/images/ticket_form.png') }}");
            width: 100%;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: center center;
            -webkit-background-size: cover;
            background-size: cover;

        }

        .ticket-content {
            padding: 50px;
        }

        .full {
            width: 100%;
            height: 120px;
            text-align: center;
        }

        .first-half {
            width: 48%;
            float: left;
        }

        .last-half {
            width: 48%;
            float: right;
        }

        .event-time {
            border: 1px solid #d9d2ca;
            min-width: 215px;
            padding: 20px;
        }

        .event-title {
            text-align: center;

            font-size: 22px;
            font-weight: bold;
            text-transform: uppercase;
            color: #3e3d3d;
            padding-bottom: 25px;
        }

        .event-time h5 {
            font-size: 22px;
            margin-bottom: 7px;
        }


        .td-title {
            font-size: 16px;
            font-weight: bold;
            margin-right: 31px;
            padding-right: 28px;
        }


        .footer {
            text-align: center;
            position: fixed;
            bottom: 25px;
            width: 795px;
            margin-left: -50px;
            margin-top: 25px;
        }

        .event-time .location {
            font-size: 22px;
            margin-top: 13px;
        }


        .full-width {
            width: 100%;
        }

        .left-half-70 {
            width: 70%;
            float: left;
        }

        .right-half-30 {
            width: 29%;
            float: right;

        }


        .title {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 20px;
        }


    </style>

</head>
<body>


<div class="ticket-area">

    <div class="ticket-content">

        <div class="full-width" style="margin-top: 0px">


            <div class="first-image">
                @if($profile_pic != null)
                    <img src="{{ public_path( $profile_pic) }}" height="200px" width="100%"/>
                @endif
            </div>

            <!-- <div class="title">

                <h1 style="margin-bottom: 20px">{{$name}}</h1>

            </div> -->


            <!-- <div class="left-half-70">
                <table>
                    <tr>
                        <td class="td-title">Registration No</td>
                        <td>: {{$registration_id}}</td>
                    </tr>
                    <tr>
                        <td class="td-title">Name</td>
                        <td>: {{$name}}</td>
                    </tr>
                    <tr>
                        <td class="td-title">Department</td>
                        <td>: {{$email}}</td>
                    </tr>

                    <tr>
                        <td class="td-title">Mobile</td>
                        <td>: {{$phone}}</td>
                    </tr>




                </table>
            </div> -->

            <div class="col-md-8 mx-auto">

                <center>
                    <div style="padding-top:0px;"><h4 class="bordered-text text-center text-white">Invitation
                            Letter</h4></div>
                </center>

                <div style="padding-top:50px;">
                    <table class="table">
                        <tr style="">
                            <td class="text-white" style="color:; width:30%">Name</td>
                            <td style=" background: #FFF;color:#000;width:70%" class="en-font">{{$name}}</td>
                        </tr>
                        <tr style="position:relative;top:30px;">
                            <td class="text-white" style="color:;width:30%">Registration Id:</td>
                            <td style="background: #FFF;color:#000;width:70%" class="en-font">{{$registration_id}}</td>
                        </tr>
                        <tr style="position:relative;top:50px;">
                            <td class="text-white" style="color:;width:30%">Contact Number:</td>
                            <td style="background: #FFF;color:#000;width:70%" class="en-font">{{$phone}}</td>
                        </tr>
                    </table>
                </div>

                <div style="padding-top:0px;"><p class="text-white">
                        Venue - Chandpur Government College, Chandpur.
                    </p></div>

                <div style="padding-top:20px;"><h4 class="bordered-text-rul text-white"> Detailed rules</h4></div>

                <div style="padding-top:10px;">

                    <ul class="rule">
                        <li><p class="text-white">
                                1. It is mandatory for the college students or their accompanying guests to carry the
                                registration card for three days of the event.
                                No entry to the venue or collection of food is permitted without registration card.
                            </p></li>
                        <li><p class="text-white">2. All invited students and guests are requested to keep their
                                registration card visible at all times to ensure security.
                                Volunteers can check the registration card at any time.</p></li>
                        <li><p class="text-white">3. Registration will be considered as food coupon for the event.
                                The registration card must be presented every time the food is collected. </p></li>
                        <li><p class="text-white">4. The registration card must also be presented in case of collection
                                of gift items from the booth mentioned in the card. </p></li>

                    </ul>
                </div>


                <div style="padding-top:50px;"><p>


                    <p class="" style="text-align: right">
                        <img src="data:image/png;base64, {!! base64_encode(QrCode::size(140)->generate($invoice)) !!} ">


                    </p>

                    </p>
                </div>


            </div>

            <!-- <div style="margin-top: 30px; border: 2px solid black">
                <p style="font-weight: bold; padding: 10px">N.B: Any Note</p>
            </div> -->


        </div>

    </div>
</div>


</body>
</html>


