@extends("layouts.admin")
@section('title', 'Admin Panel')
@section("content")

    <div class="row">
        <!-- <div class="col-md-6 col-xl-4">
            <a class="block block-bordered block-rounded block-link-shadow text-start"
               href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-semibold">{{\App\Models\Student::count()}}</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Total Registration</div>
                    </div>
                    <div>
                        <i class="si si-bag fa-2x opacity-25"></i>
                    </div>
                </div>
            </a>
        </div> -->
        <div class="col-md-6 col-xl-6">
            <a class="block block-bordered block-rounded block-link-shadow text-start"
               href="/payment-students">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-semibold">{{\App\Models\Student::where('is_payment', true)->count()}}</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Registration Payment </div>
                    </div>
                    <div>
                        <i class="si si-wallet fa-2x opacity-25"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-6">
            <a class="block block-bordered block-rounded block-link-shadow text-start"
               href="/non-payment-students">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-semibold">{{\App\Models\Student::where('is_payment', false)->count()}}</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Registration UnPayment</div>
                    </div>
                    <div>
                        <i class="si si-globe fa-2x opacity-25"></i>
                    </div>
                </div>
            </a>
        </div>

    </div>

<!-- @endsection -->
