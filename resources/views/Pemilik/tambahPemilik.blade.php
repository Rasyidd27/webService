@include('layout.header')
<!--begin::App Wrapper-->
<div class="app-wrapper">
    <!--begin::Header-->
    @include('layout.navbar')
    <!--end::Header-->
    <!--begin::Sidebar-->
    @include('layout.sidebar')
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6"><h3 class="mb-0">Pemilik</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Pemilik</li>
                            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline mb-4">
                            <!--begin::Header-->
                            <div class="card-header">
                                <div class="card-title">Masukkan Data Pemilik</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            <form class="needs-validation" action="{{ route('pemilik-.store') }}" method="post" novalidate>
                                <!--begin::Body-->
                                @csrf
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Nama Pemilik</label>
                                            <input type="text" class="form-control" name="nama_pemilik"
                                                placeholder="Masukkan Nama Pemilik" required
                                            />
                                            <div class="invalid-feedback">Masukkan Nama Pemilik terlebih dahulu!!!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tanggal lahir</label>
                                            <input type="text" class="form-control" name="tgl_lahir"
                                                placeholder="Masukkan Tanggal lahir" required
                                            />
                                            <div class="invalid-feedback">Masukkan Tanggal lahir!!!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Alamat</label>
                                            <input type="text" class="form-control" name="alamat"
                                                placeholder="Masukkan Alamat" required
                                            />
                                            <div class="invalid-feedback">Masukkan Alamat terlebih dahulu!!!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">NIK</label>
                                            <input type="text" class="form-control" name="nik"
                                                placeholder="Masukkan Nomor Induk Kependudukan" required
                                            />
                                            <div class="invalid-feedback">Masukkan NIK terlebih dahulu!!!</div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">No Handphone</label>
                                            <input type="text" class="form-control" name="no_hp"
                                                placeholder="Masukkan Nomor Handphone" required
                                            />
                                            <div class="invalid-feedback">Masukkan No Handphone terlebih dahulu!!!</div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Body-->
                                <!--begin::Footer-->    
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                                <!--end::Footer-->
                            </form>
                            <!--end::Form-->
                            <!--start::Script Validation-->
                            <script>
                                // Example starter JavaScript for disabling form submissions if there are invalid fields
                                (() => {
                                    'use strict';

                                    // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                    const forms = document.querySelectorAll('.needs-validation');

                                    // Loop over them and prevent submission
                                    Array.from(forms).forEach((form) => {
                                        form.addEventListener(
                                            'submit',
                                            (event) => {
                                                if (!form.checkValidity()) {
                                                    event.preventDefault();
                                                    event.stopPropagation();
                                                }

                                                form.classList.add('was-validated');
                                            },
                                            false,
                                        );
                                    });
                                })();
                            </script>
                            <!--end::Script Validation-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    @include('layout.kaki')
    <!--end::Footer-->
</div>
@include('layout.scripts')