@extends('layouts.vertical', ['title' => 'Menus'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="card-title">Menus</h4>
                    <a href="{{ route('user-management.menus.create') }}" class="btn btn-primary btn-sm">Add Menu</a>
                </div>
            </div>
            <div class="card-body">
                 @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Order</th>
                                <th>Title</th>
                                <th>URL</th>
                                <th>Icon</th>
                                <th>Permission</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($menus as $menu)
                                <tr>
                                    <td>{{ $menu->order }}</td>
                                    <td class="fw-bold">{{ $menu->title }}</td>
                                    <td>{{ $menu->url }}</td>
                                    <td><i class="{{ $menu->icon }}"></i> {{ $menu->icon }}</td>
                                    <td>{{ $menu->permission }}</td>
                                    <td>
                                        <a href="{{ route('user-management.menus.edit', $menu->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('user-management.menus.destroy', $menu->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this menu and all sub-menus?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @if($menu->children)
                                    @foreach($menu->children as $child)
                                    <tr>
                                        <td>{{ $menu->order }}.{{ $child->order }}</td>
                                        <td class="ps-4"> ↳ {{ $child->title }}</td>
                                        <td>{{ $child->url }}</td>
                                        <td><i class="{{ $child->icon }}"></i> {{ $child->icon }}</td>
                                        <td>{{ $child->permission }}</td>
                                        <td>
                                            <a href="{{ route('user-management.menus.edit', $child->id) }}" class="btn btn-sm btn-info">Edit</a>
                                            <form action="{{ route('user-management.menus.destroy', $child->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Delete this menu?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
