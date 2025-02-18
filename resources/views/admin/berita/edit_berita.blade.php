@extends('admin.master')
@section('admin')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Data Article</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="">Berita</a></li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Berita</h6>
        </div>
        <div class="card-body">
            <form id="validate" method="POST" action="{{route('berita.update',$editData->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="judulBerita">Judul Berita</label>
                    <input type="text" name="judulberita" class="form-control" id="judulberita" value="{{$editData->judulberita}}" required>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{$editData->tanggal}}" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" value="{{$editData->deskripsi}}" required></textarea>
                </div>
                <div class="form-group">
                    <label for="fotoBerita">Foto Berita</label>
                    <input type="file" name="fotoberita" class="form-control-file" id="fotoberita" value="{{$editData->fotoberita}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
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
                    judulberita: {
                        required: true,
                    },
                    tanggal: {
                        required: true,
                    },
                    deskripsi: {
                        required: true,
                    },
                    fotoberita: {
                        required: true,
                    },
                },
                messages: {
                    judulberita: {
                        required: "Judul berita harus diisi.",
                    },
                    tanggal: {
                        required: "Tanggal harus diisi.",
                    },
                    deskripsi: {
                        required: "Deskripsi berita harus diisi.",
                    },
                    fotoberita: {
                        required: "Foto berita harus diunggah.",
                    },
                },
            });
        });
    </script>
@endpush
