@extends("layouts.admin")
@section('title', 'Admin Panel - Check Payment')
@section("content")

@push('header-scripts')
@endpush
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    Validate Payment
                </h3>

            </div>

            <div class="block-content block-content-full">

                <div class="row">


                    <form action="/validate-sslc" method="post">
                        @csrf

                        <div class="input-group row">
                            <label for="transid" class="col-sm-1-12 col-form-label">Transaction ID <span class="text-danger">*</span> </label>
                            <div class="col-sm-12 mb-2">
                                <input type="text" class="form-control" name="transid" id="transid" placeholder="SSLC trans. ID" required>
                                <input type="hidden" name="id" value="{{ $row->id }}">
                            </div>
                        </div>

                        <div class="input-group row">
                            <label for="name" class="col-sm-1-12 col-form-label">Name</label>
                            <div class="col-sm-12 mb-2">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{ $row->name }}" readonly>
                            </div>
                        </div>

                        <div class="input-group row">
                            <label for="email" class="col-sm-1-12 col-form-label">Email</label>
                            <div class="col-sm-12 mb-2">
                                <input type="email" class="form-control" name="email" id="email" value="{{ $row->email }}" readonly>
                            </div>
                        </div>

                        <div class="input-group row">
                            <label for="phone" class="col-sm-1-12 col-form-label">Phone</label>
                            <div class="col-sm-12 mb-2">
                                <input type="email" class="form-control" name="phone" id="phone" value="{{ $row->phone }}" readonly>
                            </div>
                        </div>


                        <div class="input-group row">
                            <label for="phone" class="col-sm-1-12 col-form-label">Payment Status</label>
                            <div class="col-sm-12 mb-2">
                                @php
                                $status = ($row->is_payment) ? 'Paid' : 'Unpaid';
                                @endphp
                                <input type="email" class="form-control" name="phone" id="phone" value="{{ $status }}" readonly>
                            </div>
                        </div>

                        @if(empty($row->is_payment))
                        <div class="input-group row mt-4">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-info w-100">Check payment information</button>
                            </div>
                        </div>
                        @else
                            <a href="javascript:void(0)" class="btn btn-danger w-100">Payment completed.</a>
                        @endif
                    </form>

                </div>
            </div>


        </div>


    </div>

</div>





@push('footer-scripts')

@endpush

@endsection