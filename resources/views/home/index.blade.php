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
                            Kami menyediakan lisit backlink berkualitan dan premium dijamin website anda bisa page 1 google
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
                        <h2 class="mb-0 mt-4"><span class="counter-value"
                                data-target="{{ $member }}">{{ $member }}</span></h2>
                        <h6 class="counter-head text-muted">Pengguna</h6>
                    </div><!--end counter box-->
                </div>

                <div class="col-md-4 col-6 mt-4 pt-2">
                    <div class="counter-box text-center">
                        <img src="/backlinkstore/assets/images/illustrator/Asset186.svg" class="avatar avatar-small"
                            alt="">
                        <h2 class="mb-0 mt-4"><span class="counter-value"
                                data-target="{{ $submitBacklink }}">{{ $submitBacklink }}</span></h2>
                        <h6 class="counter-head text-muted">Pesanan selesai</h6>
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
                        <h4 class="title mb-4">Apa itu backlink ?</h4>
                        <p class="text-muted">Backlink adalah link yang menghubungkan satu halaman web ke halaman web
                            lainnya. Berfungsi sebagai "vote" atau rekomendasi dari satu situs web ke situs web lainnya.
                            Backlink dapat memengaruhi peringkat situs web dalam hasil pencarian mesin pencari, dengan
                            backlink berkualitas tinggi dari situs otoritatif biasanya memberikan dampak positif pada
                            peringkat. 7 manfaat backlink : </p>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Meningkatkan Peringkat SEO</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Peningkatan Lalu Lintas Organik
                            </li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Meningkatkan Otoritas</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Peningkatan Pengenalan Merek
                            </li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Dukungan untuk Konten
                                Berkualitas</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Peningkatan Indeksasi Mesin
                                Pencari</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Dampak Positif pada Konversi
                            </li>
                        </ul>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

        </div><!--end container-->

        <div class="container mt-100 mt-60">
            <div class="row align-items-center">
                <div class="col-md-6 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="section-title">
                        <h4 class="title mb-4">SEO (Search Engine Optimization)</h4>
                        <p class="text-muted">
                            rangkaian teknik dan strategi yang digunakan untuk meningkatkan peringkat dan visibilitas suatu
                            situs web dalam hasil pencarian mesin pencari seperti Google. Tujuan SEO adalah membuat situs
                            web lebih mudah ditemukan oleh pengguna yang mencari informasi atau produk tertentu, dengan
                            mengoptimalkan konten, struktur situs, kata kunci, dan faktor-faktor lain yang mempengaruhi
                            peringkat di mesin pencari. SEO adalah praktik penting dalam pemasaran online dan membantu
                            meningkatkan lalu lintas organik, pengenalan merek, dan konversi pengunjung menjadi pelanggan
                            atau pembaca.
                        </p>
                        <ul class="list-unstyled text-muted">
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Optimalkan Konten</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Riset Kata Kunci</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Optimalkan On-Page SEO</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Meningkatkan Kecepatan Situs
                            </li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Optimalkan Responsif</li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Bangun Backlink Berkualitas
                            </li>
                            <li class="mb-1"><span class="text-primary h5 me-2"><i
                                        class="uil uil-check-circle align-middle"></i></span>Analisis dan Pemantauan
                                Terus-Menerus</li>
                        </ul>
                    </div>
                </div><!--end col-->
                <div class="col-md-6">
                    <div class="me-lg-5 ml-3">
                        <img src="/backlinkstore/assets/images/illustrator/big-launch.svg" class="img-fluid"
                            alt="">
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
                                <a href="https://api.whatsapp.com/send?phone=6281324568335&text=Halo%20admin%20saya%20mau%20pesan%20paket%20berikut%0A%0A*{{ $item->title }}*%0AHarga%20%20%3A%20{{ currencyIDR($item->price) }}"
                                    class="btn btn-primary mt-4"> Pesan sekarang</a>
                            </div>
                        </div>
                    </div><!--end col-->
                @endforeach

            </div><!--end row-->
        </div><!--end container-->

    </section><!--end section-->
    <!--end Price-->

    <!-- Feature Start -->
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <div class="section-title mb-4 pb-2">
                        <h4 class="title mb-4">Keunggulan Berlanganan Di BacklinkGratisan.com</h4>

                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-edit-alt h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Garansi Pembayaran</h5>
                            <p class="text-muted mb-0">Kami dari Backlinkgratisan.com memberikan pelayanan untuk menjual
                                backlink untuk para bloger di seluruh indonesia, jika backlink tidak di kerjakan dan
                                backlink di hapus tidak melanggar kebijakan dan privasi maka uang akan kami kembalikan utuh
                                100%.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-vector-square h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Promosi Gratis</h5>
                            <p class="text-muted mb-0">BacklinkGratiisan.com adalah platform yang menyediakan backlink
                                gratis berkualitas tinggi. Dengan berlangganan, Anda akan mendapatkan list list backlink
                                terbaik dengan informasi jenis backlink serta domain rating web tersebut.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-file-search-alt h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Tingkatkan Trafik</h5>
                            <p class="text-muted mb-0">Backlink berkualitas tinggi dapat meningkatkan jumlah kunjungan ke
                                situs web Anda. Dengan berlangganan, Anda dapat mengalami lonjakan trafik yang signifikan,
                                yang berpotensi menghasilkan lebih banyak pelanggan atau pembaca.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-airplay h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Jaminan Hasil</h5>
                            <p class="text-muted mb-0">BacklinkGratiisan.com memiliki jaminan hasil, yang berarti mereka
                                berkomitmen untuk membantu Anda mencapai hasil yang Anda inginkan dalam hal SEO dan lalu
                                lintas situs web.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-diamond h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Member Premiun</h5>
                            <p class="text-muted mb-0">Kami akan menyediakan List website di seluruh dunia , yang akan kami
                                update terus setiap hari, dapatkan ribuan jenis banklink sesuai dengan kategori terbaik.</p>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="col-md-4 col-12 mt-5 pt-4">
                    <div class="features feature-primary">
                        <div class="image position-relative d-inline-block">
                            <i class="uil uil-clock h2 text-primary"></i>
                        </div>

                        <div class="content mt-4">
                            <h5>Dukungan Pelanggan 24/7</h5>
                            <p class="text-muted mb-0">Tim BacklinkGratiisan.com selalu siap membantu Anda dengan
                                pertanyaan atau masalah apa pun yang mungkin Anda miliki sepanjang waktu.</p>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End feature -->

@endsection
