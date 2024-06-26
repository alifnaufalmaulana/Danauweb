@extends('admin.master')
@section('admin')
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tabel Struktur Organisasi</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                <li class="breadcrumb-item">Informasi</li>
                <li class="breadcrumb-item"><a href="{{ route('team.view') }}">Team</a></li>
        </nav>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="co">
                    <a href="{{route('team.add')}}" class="btn btn-warning btn-icon-split"><span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Tambah Data</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                        <tr class="text-center">
                            <td>{{$item->nama}}</td>
                            <td>{{$item->posisi}}</td>
                            <td>
                                {{-- <img src="{{asset('storage/'.$item->poto)}}" width="100px" alt="photo"> --}}
                                @if ($item->poto)
                                    <img src="{{ asset('storage/'.$item->poto) }}" width="100px" alt="photo">
                                @else
                                    <img src="{{ asset('path/to/default/photo.jpg') }}" width="100px" alt="default photo">
                                @endif
                            </td>
                            <td>
                                <div class="row">
                                    <a href="{{route('team.edit', $item->id)}}" class="col btn btn-success" style="margin:10px">Edit</a>
                                    <a href="{{route('team.delete', $item->id)}}" class="col btn btn-danger" style="margin:10px" data-confirm-delete="true">Hapus</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection