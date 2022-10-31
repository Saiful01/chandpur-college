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
        .ticket-area {
            padding: 10px;
        }

        ul {
            list-style: none;
            padding-left: 15px;
        }

        li {
            padding-bottom: 15px;
        }

        .text-center {
            text-align: center;
        }
        .logo-img {
            width: 120px;
            height: 120px;
            margin: auto;
        }
        .full-row {
            width: 100%;
            height: 200px;
            text-align: center;
            background-color: #16783F;
        }

        .first-img {
            width: 30%;
            margin-top: 70px;

        }
        .second-img {
            width: 30%;
            margin-top: 70px;

        }
        .third-img {
            width: 30%;
            margin-top: 70px;

        }
        .full-width{
            width: 100%;
            height: auto;
            margin-bottom: 120px;
        }
        .left-half-70 {
            width: 70%;
            float: left;
        }

        .right-half-30 {
            width: 29%;
            float: right;

        }


    </style>


</head>
<body>


<div class="ticket-area">
    <div class="ticket-content">
        <div class="logo-img">
            <img src="{{ public_path( $logo) }}" />
        </div>





        <h4 class="text-center" style="font-size: 30px">Invitation Letter</h4>
        <div class="full-width">
            <div class="left-half-70">
                <table>
                    <tr>
                        <td>
                            <strong>Name</strong>
                        </td>
                        <td>
                            : {{$name}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Registration id</strong>
                        </td>
                        <td>
                            : {{$registration_id}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Phone Number</strong>
                        </td>
                        <td>
                            : {{$phone}}
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>Venue:</strong>
                        </td>
                        <td>
                            : Chandpur Government College, Chandpur.
                        </td>
                    </tr>
                </table>
            </div>
            <div class="right-half-30">
                <img src="data:image/png;base64, {!! base64_encode(QrCode::size(140)->generate($registration_id)) !!} "
                     style="float: right">
            </div>
        </div>


        <h4> Detailed Rules</h4>

        <ul class="rule">
            <li>
                1. It is mandatory for the college students or their accompanying guests to carry the
                registration card for three days of the event.
                No entry to the venue or collection of food is permitted without registration card.
            </li>
            <li>2. All invited students and guests are requested to keep their
                registration card visible at all times to ensure security.
                Volunteers can check the registration card at any time.
            </li>
            <li>3. Registration will be considered as food coupon for the event.
                The registration card must be presented every time the food is collected.
            </li>
            <li>4. The registration card must also be presented in case of collection
                of gift items from the booth mentioned in the card.
            </li>

        </ul>
        <div class="full-row">
            <img class="first-img" src="{{ public_path( $sign1) }}" alt="asit-signature"/>
            <img class="second-img" src="{{ public_path( $sign2) }}" alt="jillur-rahman"/>

            <img class="third-img" src="{{ public_path( $sign3) }}" alt="ratan-signature"/>
        </div>




    </div>
</div>
</body>



