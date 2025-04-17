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
                    <div class="col-sm-6"><h3 class="mb-0">Mekanik</h3></div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mekanik</li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                <div class="card-title">Edit Data Mekanik</div>
                            </div>
                            <!--end::Header-->
                            <!--begin::Form-->
                            @foreach($data as $row)
                                <form class="needs-validation" action="{{ route('mekanik-.update', $id) }}" method="post" novalidate>
                                    <!--begin::Body-->
                                    @csrf
                                    <div class="card-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Nama Mekanik</label>
                                                <input type="text" class="form-control" name="nama_mekanik"
                                                    value="{{ $row->nama_mekanik }}" required
                                                />
                                                <div class="invalid-feedback">Masukkan Nama Mekanik!!!</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tanggal lahir</label>
                                                <input type="text" class="form-control" name="tgl_lahir"
                                                    value="{{ $row->tgl_lahir }}" required
                                                />
                                                <div class="invalid-feedback">Masukkan Tanggal lahir!!!</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat"
                                                    value="{{ $row->alamat }}" required
                                                />
                                                <div class="invalid-feedback">Masukkan Alamat!!! ><</div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">NIk</label>
                                                <input type="text" class="form-control" name="nik"
                                                    value="{{ $row->nik }}" required
                                                />
                                                <div class="invalid-feedback">Masukkan NIK yang sesuai!!!</div>
                                            </div>
                                            <div class="col-md-6">
                                            <label class="form-label">No Handphone</label>
                                            <input type="text" class="form-control" name="no_hp"
                                            value="{{ $row->no_hp }}" required

                                            />
                                            <div class="invalid-feedback">Masukkan No Handphone yang sesuai!!!</div>
                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                    <!--end::Footer-->
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
                                </form>
                                <!--end::Form-->
                            @endforeach
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