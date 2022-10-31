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
            padding: 30px;
        }
        ul{
            list-style: none;
            padding-left: 15px;
        }
        li{
            padding-bottom: 15px;
        }
        .text-center{
            text-align: center;
        }
    </style>


</head>
<body>


<div class="ticket-area">
    <div class="ticket-content">

        @if($profile_pic != null)
            <img src="{{ public_path( $profile_pic) }}" height="200px" width="100%"/>
        @endif

        <h4 class="text-center" style="font-size: 30px">Invitation Letter</h4>

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
        </table>

        <h4><strong>Venue: </strong> Chandpur Stadium, Stadium Road, Chandpur.</h4>
        {{--<h4><strong>Date: </strong> </h4>--}}

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

        <img src="data:image/png;base64, {!! base64_encode(QrCode::size(140)->generate($invoice)) !!} " style="float: right">


    </div>
</div>
</body>



