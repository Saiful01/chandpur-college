@extends("layouts.admin")
@section('title', 'Admin Panel')
@section("content")

    <div class="row">
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-start"
               href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-semibold">34</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Sales</div>
                    </div>
                    <div>
                        <i class="si si-bag fa-2x opacity-25"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-start"
               href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-semibold">$780</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Earnings</div>
                    </div>
                    <div>
                        <i class="si si-wallet fa-2x opacity-25"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-start"
               href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-semibold">65</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Online</div>
                    </div>
                    <div>
                        <i class="si si-globe fa-2x opacity-25"></i>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 col-xl-3">
            <a class="block block-bordered block-rounded block-link-shadow text-start"
               href="javascript:void(0)">
                <div class="block-content block-content-full d-flex justify-content-between align-items-center">
                    <div>
                        <div class="fs-3 fw-semibold">7</div>
                        <div class="fs-sm fw-semibold text-uppercase text-muted">Projects</div>
                    </div>
                    <div>
                        <i class="si si-briefcase fa-2x opacity-25"></i>
                    </div>
                </div>
            </a>
        </div>
    </div>

@endsection
