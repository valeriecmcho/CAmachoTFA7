@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<div class="page-header">
    <h1>Customer Accounts</h1>
    <p>Browse and manage all registered customers in the POS system.</p>
</div>

<div class="card">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.25rem;">
        <strong style="font-size:.9rem; color:#555;">
            Showing {{ $customers->count() }} customer(s)
        </strong>
        <a href="{{ route('home') }}" class="btn btn-outline" style="font-size:.82rem; padding:.4rem 1rem;">
            ← Back to Home
        </a>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td><strong>{{ $customer->full_name }}</strong></td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone ?? '—' }}</td>
                    <td>{{ $customer->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
