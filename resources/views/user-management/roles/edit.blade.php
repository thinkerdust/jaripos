@extends('layouts.vertical', ['title' => 'Edit Role'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Role</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user-management.roles.update', $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Role Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $role->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                     <div class="mb-3">
                        <label for="permissions" class="form-label">Permissions</label>
                         @php
                            $permissions = is_array($role->permissions) ? implode(', ', $role->permissions) : $role->permissions;
                        @endphp
                        <textarea class="form-control @error('permissions') is-invalid @enderror" id="permissions" name="permissions" rows="3">{{ old('permissions', $permissions) }}</textarea>
                         <small class="text-muted">Example: user.create, user.edit, menu.view</small>
                        @error('permissions')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update Role</button>
                    <a href="{{ route('user-management.roles.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
