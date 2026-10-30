@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<div class="page-header">
    <h1>User Accounts</h1>
    <p>Manage all system users and their assigned roles.</p>
</div>

<div class="card">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1.25rem;">
        <strong style="font-size:.9rem; color:#555;">
            Showing {{ $users->count() }} user(s)
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
                    <th>Username</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td><strong>{{ $user->full_name }}</strong></td>
                    <td><code style="background:#f0f2f5; padding:.1rem .45rem; border-radius:4px; font-size:.85em;">{{ $user->username }}</code></td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
