@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
<div class="page-header">
    <h1>Edit User</h1>
    <p>Update the details for <strong>{{ $user->full_name }}</strong>.</p>
</div>

<div class="card">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
        <strong style="font-size:.9rem; color:#555;">User #{{ $user->id }}</strong>
        <a href="{{ route('users') }}" class="btn btn-outline" style="font-size:.82rem; padding:.4rem 1rem;">
            ← Back to Users
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-error">
            <ul style="margin:0; padding-left:1.25rem;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="username" class="form-label">Username <span class="required">*</span></label>
            <input
                type="text"
                id="username"
                name="username"
                class="form-control @error('username') is-invalid @enderror"
                value="{{ old('username', $user->username) }}"
                placeholder="e.g. jdelacruz"
                maxlength="50"
                required
            >
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="full_name" class="form-label">Full Name <span class="required">*</span></label>
            <input
                type="text"
                id="full_name"
                name="full_name"
                class="form-control @error('full_name') is-invalid @enderror"
                value="{{ old('full_name', $user->full_name) }}"
                placeholder="e.g. Juan dela Cruz"
                maxlength="100"
                required
            >
            @error('full_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="avatar" class="form-label">Profile Picture <span class="optional">(optional)</span></label>

            @if ($user->avatar)
                <div style="margin-bottom:.75rem;">
                    <img
                        src="{{ Storage::disk('public')->url($user->avatar) }}"
                        alt="Current avatar"
                        style="width:80px; height:80px; object-fit:cover; border-radius:50%; border:2px solid #e0e3ea;"
                    >
                    <p style="font-size:.8rem; color:#777; margin-top:.3rem;">Current profile picture</p>
                </div>
            @endif

            <input
                type="file"
                id="avatar"
                name="avatar"
                class="form-control @error('avatar') is-invalid @enderror"
                accept="image/*"
            >
            @error('avatar')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <small class="form-hint">Accepted: JPG, PNG, GIF, WEBP. Max size: 2 MB. Will be saved as a 150×150 thumbnail.</small>
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="{{ route('users') }}" class="btn btn-outline">Cancel</a>
        </div>
    </form>
</div>
@endsection

