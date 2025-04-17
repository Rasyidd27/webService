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
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Mekanik</li>
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
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-11">
                                        <h3 class="card-title">Data Mekanik</h3>
                                    </div>
                                    <div class="col-1 d-flex justify-content-end">
                                        <a href="{{ route('mekanik.create') }}" class="btn btn-success btn-sm">Tambah</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Mekanik</th>
                                            <th>Tanggal lahir</th>
                                            <th>Alamat</th>
                                            <th>NIK</th>
                                            <th>No Handphone</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->nama_mekanik }}</td>
                                                <td>{{ $row->tgl_lahir }}</td>
                                                <td>{{ $row->alamat }}</td>
                                                <td>{{ $row->nik }}</td>
                                                <td>{{ $row->no_hp }}</td>
                                                <td>
                                                    <a href="{{ route('mekanik-.edit', $row->id_mekanik) }}" class="btn btn-warning">Edit</a>  
                                                    <span class="separator"></span>
                                                    <a href="{{ route('mekanik-.delete', $row->id_mekanik) }}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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