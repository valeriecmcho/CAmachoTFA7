@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="card hero">
    <h2>Welcome to CamachoTFA56</h2>
    <p>
        A simple, fast, and reliable Point-of-Sale system for managing your business —
        track customers, manage user accounts, and process transactions with ease.
    </p>
    <div class="hero-buttons">
        <a href="{{ route('customers') }}" class="btn btn-primary">View Customers</a>
        <a href="{{ route('about') }}"     class="btn btn-outline">Learn More</a>
    </div>

    <div class="features">
        <div class="feature-card">
            <div class="icon">👥</div>
            <h3>Customer Management</h3>
            <p>Store and manage all your customer records in one place.</p>
        </div>
        <div class="feature-card">
            <div class="icon">🔐</div>
            <h3>User Accounts</h3>
            <p>Role-based access for admins, managers, and cashiers.</p>
        </div>
        <div class="feature-card">
            <div class="icon">🧾</div>
            <h3>Transactions</h3>
            <p>Record and track every sale transaction in real time.</p>
        </div>
        <div class="feature-card">
            <div class="icon">📊</div>
            <h3>Reports</h3>
            <p>Generate daily, weekly, and monthly sales reports.</p>
        </div>
    </div>
</div>
@endsection

