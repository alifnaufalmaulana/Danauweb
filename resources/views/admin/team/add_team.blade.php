@extends('admin.master')

@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah Data Struktur Organisasi</h1>
        <nav>
            {{-- Kode uji coba --}}
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Team</a></li>
                <li class="breadcrumb-item"><a href="">Tambah</a></li>
            </ol>

            {{-- Kode Asli --}}
            {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Informasi</li>
                <li class="breadcrumb-item"><a href="{{ route('about.view') }}">About</a></li>
            </ol> --}}
        </nav>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Tambah Posisi</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>
                <div class="form-group">
                    <label for="posisi">Jabatan</label>
                    <input type="text" name="posisi" class="form-control" id="posisi" required>
                </div>
                <div class="form-group">
                    <label for="poto">Foto</label>
                    <input type="file" name="poto" class="form-control-file" id="poto">
                </div>
            
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</main>
@endsection

@push('js')
    <script type="text/javascript">
    $(document).ready(function() {
        $("#validate").validate({
            rules: {
                nama: {
                    required: true,
                },
                posisi: {
                    required: true,
                },
                // poto: {
                //     required: true,
                // },
            },
            messages: {
                nama: {
                    required: "Nama harus diisi",
                },
                posisi: {
                    required: "Jabatan harus diisi",
                },
                // poto: {
                //     required: "Foto harus diunggah",
                // },
            },
        });
    });
    </script>
@endpush
