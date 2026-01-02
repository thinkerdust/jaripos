@extends('layouts.vertical', ['title' => 'Edit Menu'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Menu Item</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user-management.menus.update', $menu->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $menu->title) }}" required>
                             @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="url" class="form-label">URL / Route</label>
                            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{ old('url', $menu->url) }}">
                             <small class="text-muted">Use route/url relative path</small>
                             @error('url')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="icon" class="form-label">Icon Class</label>
                            <input type="text" class="form-control @error('icon') is-invalid @enderror" id="icon" name="icon" value="{{ old('icon', $menu->icon) }}">
                             <small class="text-muted">e.g., ri-home-line</small>
                             @error('icon')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                         <div class="col-md-6 mb-3">
                            <label for="parent_id" class="form-label">Parent Menu</label>
                            <select class="form-select @error('parent_id') is-invalid @enderror" id="parent_id" name="parent_id">
                                <option value="">None (Top Level)</option>
                                @foreach($parents as $parent)
                                    <option value="{{ $parent->id }}" {{ old('parent_id', $menu->parent_id) == $parent->id ? 'selected' : '' }}>{{ $parent->title }}</option>
                                @endforeach
                            </select>
                            @error('parent_id')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="permission" class="form-label">Required Permission</label>
                            <input type="text" class="form-control @error('permission') is-invalid @enderror" id="permission" name="permission" value="{{ old('permission', $menu->permission) }}">
                             @error('permission')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                         <div class="col-md-6 mb-3">
                            <label for="order" class="form-label">Order</label>
                            <input type="number" class="form-control @error('order') is-invalid @enderror" id="order" name="order" value="{{ old('order', $menu->order) }}">
                             @error('order')<div class="invalid-feedback">{{ $message }}</div>@enderror
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Menu</button>
                    <a href="{{ route('user-management.menus.index') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
