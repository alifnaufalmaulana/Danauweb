@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Manage Team Members</h1>
    <a href="{{ route('admin.team.create') }}" class="btn btn-success">Add New Member</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Position</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teamMembers as $teamMember)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $teamMember->name }}</td>
            <td>{{ $teamMember->position }}</td>
            <td><img src="/images/{{ $teamMember->image }}" width="100px"></td>
            <td>
                <form action="{{ route('admin.team.destroy',$teamMember->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('admin.team.show',$teamMember->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('admin.team.edit',$teamMember->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
