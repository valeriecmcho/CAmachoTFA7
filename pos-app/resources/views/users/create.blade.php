@extends('layouts.app')

@section('title', 'Create User')

@section('content')
<div class="page-header">
    <h1>Add New User</h1>
    <p>Fill in the details below to register a new system user.</p>
</div>

<div class="card">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
        <strong style="font-size:.9rem; color:#555;">New User Form</strong>
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

    <form action="{{ route('users.store') }}" method="POST" novalidate>
        @csrf

        <div class="form-group">
            <label for="username" class="form-label">Username <span class="required">*</span></label>
            <input
                type="text"
                id="username"
                name="username"
                class="form-control @error('username') is-invalid @enderror"
                value="{{ old('username') }}"
                placeholder="e.g. jdelacruz"
                maxlength="50"
                required
            >
            @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <small class="form-hint">Must be unique across all users.</small>
        </div>

        <div class="form-group">
            <label for="full_name" class="form-label">Full Name <span class="required">*</span></label>
            <input
                type="text"
                id="full_name"
                name="full_name"
                class="form-control @error('full_name') is-invalid @enderror"
                value="{{ old('full_name') }}"
                placeholder="e.g. Juan dela Cruz"
                maxlength="100"
                required
            >
            @error('full_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Create User</button>
            <a href="{{ route('users') }}" class="btn btn-outline">Cancel</a>
        </div>
    </form>
</div>
@endsection

