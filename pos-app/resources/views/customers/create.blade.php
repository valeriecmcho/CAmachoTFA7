@extends('layouts.app')

@section('title', 'Create Customer')

@section('content')
<div class="page-header">
    <h1>Add New Customer</h1>
    <p>Fill in the details below to register a new customer.</p>
</div>

<div class="card">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.5rem;">
        <strong style="font-size:.9rem; color:#555;">New Customer Form</strong>
        <a href="{{ route('customers') }}" class="btn btn-outline" style="font-size:.82rem; padding:.4rem 1rem;">
            ← Back to Customers
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

    <form action="{{ route('customers.store') }}" method="POST" novalidate>
        @csrf

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

        <div class="form-group">
            <label for="email" class="form-label">Email Address <span class="required">*</span></label>
            <input
                type="email"
                id="email"
                name="email"
                class="form-control @error('email') is-invalid @enderror"
                value="{{ old('email') }}"
                placeholder="e.g. juan@example.com"
                maxlength="100"
                required
            >
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone" class="form-label">Phone <span class="optional">(optional)</span></label>
            <input
                type="text"
                id="phone"
                name="phone"
                class="form-control @error('phone') is-invalid @enderror"
                value="{{ old('phone') }}"
                placeholder="e.g. +63 912 345 6789"
                maxlength="20"
            >
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Create Customer</button>
            <a href="{{ route('customers') }}" class="btn btn-outline">Cancel</a>
        </div>
    </form>
</div>
@endsection

