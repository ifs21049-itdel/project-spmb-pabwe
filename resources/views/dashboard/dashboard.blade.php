@extends('template.app')

@section('isi-halaman')
<main class="mx-auto">
    <section id="hero" class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset("/assets/img/hero-compressed.jpeg") }}" class="d-block w-100"
                         alt="beasiswa-tolikara">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="ukuran-div-beasiswa p-5">
                            <div class="text-start">
                                <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                <br>
                                <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 1</strong></span>
                            </div>

                            <div class="text-start align-self-end mt-5">
                                <span>Pendaftaran : </span>
                                <br>
                                <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                            </div>
                        </div>

                        <div class="mb-4 mt-5 text-end">
                            <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                         alt="beasiswa-tolikara">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="ukuran-div-beasiswa p-5">
                            <div class="text-start">
                                <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                <br>
                                <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 2</strong></span>
                            </div>

                            <div class="text-start align-self-end mt-5">
                                <span>Pendaftaran : </span>
                                <br>
                                <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                            </div>
                        </div>

                        <div class="mb-4 mt-5 text-end">
                            <button class="btn bg-white text-oyen"><strong>Daftar Sekarang</strong></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                         alt="beasiswa-tolikara">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="ukuran-div-beasiswa p-5">
                            <div class="text-start">
                                <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                <br>
                                <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 3</strong></span>
                            </div>

                            <div class="text-start align-self-end mt-5">
                                <span>Pendaftaran : </span>
                                <br>
                                <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                            </div>
                        </div>

                        <div class="mb-4 mt-5 text-end">
                            <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="px-4 py-5 my-5">
            <h1 class="display-5 fw-bold">Institut Teknologi Del</h1>
            <div class="mt-4">
                <p class="lead mb-4">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam beatae
                    deserunt dicta distinctio est eveniet id impedit inventore iure maxime necessitatibus obcaecati odit
                    perferendis quaerat, totam vero voluptates? Amet, animi aut autem delectus dolores eos est expedita,
                    incidunt libero minus nulla obcaecati pariatur possimus quia reprehenderit repudiandae ut
                    voluptates?"</p>
                <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                    <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                         alt="beasiswa-tolikara">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="ukuran-div-beasiswa p-5">
                            <div class="text-start">
                                <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                <br>
                                <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 1</strong></span>
                            </div>

                            <div class="text-start align-self-end mt-5">
                                <span>Pendaftaran : </span>
                                <br>
                                <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                            </div>
                        </div>

                        <div class="mb-4 mt-5 text-end">
                            <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                         alt="beasiswa-tolikara">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="ukuran-div-beasiswa p-5">
                            <div class="text-start">
                                <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                <br>
                                <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 2</strong></span>
                            </div>

                            <div class="text-start align-self-end mt-5">
                                <span>Pendaftaran : </span>
                                <br>
                                <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                            </div>
                        </div>

                        <div class="mb-4 mt-5 text-end">
                            <button class="btn bg-white text-oyen"><strong>Daftar Sekarang</strong></button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset("/assets/img/beasiswa-tolikara.jpeg") }}" class="d-block w-100"
                         alt="beasiswa-tolikara">
                    <div class="carousel-caption d-none d-md-block">
                        <div class="ukuran-div-beasiswa p-5">
                            <div class="text-start">
                                <span class="text-white fs-4"><i>Telah Dibuka</i></span>
                                <br>
                                <span class="text-white mt-5 fs-3 ms-4"><strong>Beasiswa Tolikara 3</strong></span>
                            </div>

                            <div class="text-start align-self-end mt-5">
                                <span>Pendaftaran : </span>
                                <br>
                                <span>dd/mm/yyyy s/d dd/yy/mmmm</span>
                            </div>
                        </div>

                        <div class="mb-4 mt-5 text-end">
                            <button class="tombol-kita text-oyen"><strong>Daftar Sekarang</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="informasi-umum" class="bg-informasi-umum container text-center">
        <div class="p-5">
            <h2><strong>Informasi Umum</strong></h2>

            <div class="d-flex justify-content-center mt-5 flex-wrap gap-5" id="tampilan-data-informasi-umum">
                <div class="card" style="width: 18rem;">
                    <div class="mt-4">
                        <i class="fa-solid fa-chalkboard-user card-img-top" style="font-size: 50px"></i>
                    </div>
                    <div class="card-body">
                        <span id="jumlah-dosen" class="fs-2 text-primary">9999+</span>
                        <br>
                        <span class="fs-5"><strong>Dosen</strong></span>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="mt-4">
                        <i class="fa-solid fa-child-reaching card-img-top" style="font-size: 50px"></i>
                    </div>
                    <div class="card-body">
                        <span id="jumlah-mahasiswa" class="fs-2 text-primary">9999+</span>
                        <br>
                        <span class="fs-5"><strong>Mahasiswa</strong></span>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <div class="mt-4">
                        <i class="fa-solid fa-user-graduate" style="font-size: 50px"></i>
                    </div>
                    <div class="card-body">
                        <span id="jumlah-dosen" class="fs-2 text-primary">9999+</span>
                        <br>
                        <span class="fs-5"><strong>Alumni</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="mitra-kampus">

    </section>
</main>

@endsection
