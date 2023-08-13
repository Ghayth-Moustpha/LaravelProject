@extends('layouts.control')

@section('content')
<div class="container">
    <h1>Users</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Edit Role</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->type }}</td>
                <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editRoleModal-{{ $user->id }}">
                        Edit Role
                    </button>
                    <div class="modal fade" id="editRoleModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editRoleModalLabel-{{ $user->id }}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editRoleModalLabel-{{ $user->id }}">Edit Role</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="role">Select Role:</label>
                                            <select name="role" id="role" class="form-control m-2">
                                                <option value="admin">Admin</option>
                                                <option value="user">User</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection