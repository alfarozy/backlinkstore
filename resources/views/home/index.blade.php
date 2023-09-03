@extends('layouts.app')
@section('title', 'Beranda')
@section('content')
    <!-- Start Hero -->
    <section class="bg-half-170 pb-0 bg-light d-table w-100 overflow-hidden"
        style="background: url('/backlinkstore/assets/images/shapes/shape2.png') top; z-index: 0;">
        <div class="container">
            <div class="row align-items-center mt-5 mt-sm-0">
                <div class="col-md-6">
                    <div class="title-heading text-center text-md-start">
                        <span class="badge rounded-pill bg-soft-primary">#1 backlink gratisan</span>
                        <h4 class="heading mb-3 mt-2"> Backlink gratisan pertama di indonesia </h4>
                        <p class="text-muted mb-0 para-dark para-desc mx-auto ms-md-auto">
                            Kami menyediakan backlink berkualitas premium, dijamin website anda bisa page 1 google
                        </p>

                        <div class="mt-4">
                            <a href="https://dashboard.backlinkgratisan.com/register" class="btn btn-primary">Daftar
                                sekarang</a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="freelance-hero position-relative">
                        <div class="bg-shape position-relative">
                            <img src="/backlinkstore/assets/images/freelancer/freelancer.png"
                                class="mx-auto d-block img-fluid" alt="">
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="section">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-md-4 col-6 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <img src="/backlinkstore/assets/images/illustrator/Asset190.svg" class="avatar avatar-small"
                            alt="">
                        <h2 class="mb-0 mt-4"><span class="counter-value"
                                data-target="{{ $backlink }}">{{ $backlink }} </span></h2>
                        <h6 class="counter-head text-muted">Backlink</h6>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-4 col-6 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <img src="/backlinkstore/assets/images/illustrator/Asset189.svg" class="avatar avatar-small"
                            alt="">
                        <h2 class="mb-0 mt-4"><span class="counter-value" data-target="9">{{ $member }}</span></h2>
                        <h6 class="counter-head text-muted">Pengguna</h6>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-4 col-6 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <img src="/backlinkstore/assets/images/illustrator/Asset186.svg" class="avatar avatar-small"
                            alt="">
                        <h2 class="mb-0 mt-4"><span class="counter-value" data-target="1536">1536</span>$</h2>
                        <h6 class="counter-head text-muted">Submit backlink</h6>
                    </div><!--end counter box-->
                </div>

            </div><!--end row-->
        </div><!--end container-->
        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <img src="/backlinkstore/assets/images/illustrator/Startup_SVG.svg" class="img-fluid" alt="">
                </div><!--end col-->

                <div class="col-lg-7 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="section-title ms-lg-5">
                        <h4 class="title mb-4">A better compose with landrick marketing</h4>
                        <p class="text-muted">You can combine all the Landrick templates into a single one, you can
                            take
                            a component from the Application theme and use it in the Website.</p>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Digital Marketing
                                Solutions
                                for Tomorrow</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Our Talented & Experienced
                                Marketing Agency</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Create your own skin to
                                match your brand</li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->


        <!-- End -->
    </section>
    <!-- Price Start -->

    <section class="section" id="price">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Paket harga</h4>
                        <p class="text-muted para-desc mb-0 mx-auto">Berikut detail paket harga untuk <span
                                class="text-primary fw-bold">backlink premium</span></p>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
            <div class="row">
                @foreach ($packages as $item)
                    <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                        <div class="card pricing pricing-primary business-rate shadow bg-light border-0 rounded">
                            <div class="card-body">
                                <h6 class="title name fw-bold text-uppercase mb-4">{{ $item->title }}</h6>
                                <div class="d-flex mb-4">
                                    <span class="price h1 mb-0">{{ currencyIDR($item->price) }}</span>
                                </div>

                                <div class="text-muted mb-0 ps-0">
                                    {{ $item->description }}
                                </div>
                                <a href="#" class="btn btn-primary mt-4"> Pesan sekarang</a>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach

            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!--end Price-->

@endsection
