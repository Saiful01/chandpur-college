@extends("layouts.common")
@section("content")

    <section class="form-area">
        <div class="container">

            <div class="row pt-4 pb-4" id="verification">

                <div class="col-md-4 mx-auto">


                    @foreach($guest_data as $item)
                       <p> {{$item->guest_name}}</p>
                       <p> {{$item->relation}}</p>
                       <p> {{$item->age}}</p>
                       <p> {{$item->gender}}</p>
                       <p> {{$item->tshirt_size}}</p>
                    @endforeach

                   <a href="/pdf/{{$fileName}}" download> Download Ticket</a>


                </div>

            </div>


        </div>
    </section>

@endsection
