@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Edit Team Member</h2>
            <form action="{{ route('admin.team.update', $teamMember->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $teamMember->name }}" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" name="position" value="{{ $teamMember->position }}" class="form-control" placeholder="Position">
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" name="image" class="form-control" placeholder="Image">
                    <img src="/images/{{ $teamMember->image }}" width="100px">
                </div>
                <div class="form-group">
                    <label for="instagram">Instagram:</label>
                    <input type="url" name="instagram" value="{{ $teamMember->instagram }}" class="form-control" placeholder="Instagram">
                </div>
                <div class="form-group">
                    <label for="whatsapp">WhatsApp:</label>
                    <input type="url" name="whatsapp" value="{{ $teamMember->whatsapp }}" class="form-control" placeholder="WhatsApp">
                </div>
                <div class="form-group">
                    <label for="linkedin">LinkedIn:</label>
                    <input type="url" name="linkedin" value="{{ $teamMember->linkedin }}" class="form-control" placeholder="LinkedIn">
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </form>
        </div>
    </div>
</div>
@endsection
