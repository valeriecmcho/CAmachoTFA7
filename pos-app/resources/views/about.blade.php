@extends('layouts.app')

@section('title', 'About')

@section('content')
<div class="page-header">
    <h1>About CamachoTFA56</h1>
    <p>Learn more about our Point-of-Sale system and what makes it great.</p>
</div>

<div class="card">
    <p style="font-size:1rem; color:#555; line-height:1.7; margin-bottom:1.75rem;">
        <strong>CamachoTFA56</strong> is a lightweight Point-of-Sale system built with
        <strong>Laravel</strong>. It is designed to help small and medium businesses
        streamline their sales operations, manage customers, and control user access —
        all from a clean, intuitive interface.
    </p>

    <div class="about-grid">
        <div class="about-section">
            <h3>✨ Key Features</h3>
            <ul>
                <li>Customer account management</li>
                <li>Role-based user access control</li>
                <li>Real-time transaction recording</li>
                <li>Daily and monthly sales reports</li>
                <li>Inventory tracking integration</li>
                <li>Clean, responsive UI</li>
            </ul>
        </div>

        <div class="about-section">
            <h3>🛠 Tech Stack</h3>
            <ul>
                <li>Laravel 12 (PHP 8.2)</li>
                <li>Blade Templating Engine</li>
                <li>SQLite (development) / MySQL (production)</li>
                <li>Vanilla CSS (custom design system)</li>
                <li>Artisan CLI for scaffolding</li>
            </ul>
        </div>

        <div class="about-section">
            <h3>👤 User Roles</h3>
            <ul>
                <li>Super Admin – full system access</li>
                <li>Manager – reports and staff control</li>
                <li>Cashier – sales and transactions</li>
                <li>Inventory Staff – stock management</li>
                <li>Reports Viewer – read-only reports</li>
            </ul>
        </div>

        <div class="about-section">
            <h3>📋 Roadmap</h3>
            <ul>
                <li>Database-backed customer & user CRUD</li>
                <li>Authentication & session management</li>
                <li>Barcode / QR code scanning support</li>
                <li>PDF receipt generation</li>
                <li>Dashboard analytics charts</li>
            </ul>
        </div>
    </div>

    <div style="margin-top:2rem; text-align:center;">
        <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
        <a href="{{ route('customers') }}" class="btn btn-outline" style="margin-left:.75rem;">View Customers</a>
    </div>
</div>
@endsection

