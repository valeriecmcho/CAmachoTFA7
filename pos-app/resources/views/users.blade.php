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
        <div style="display:flex; gap:.5rem;">
            <a href="{{ route('users.create') }}" class="btn btn-primary" style="font-size:.82rem; padding:.4rem 1rem;">
                + Add User
            </a>
            <a href="{{ route('home') }}" class="btn btn-outline" style="font-size:.82rem; padding:.4rem 1rem;">
                ← Back to Home
            </a>
        </div>
    </div>

    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Avatar</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>
                        @if ($user->avatar)
                            <img
                                src="{{ Storage::disk('public')->url($user->avatar) }}"
                                alt="{{ $user->full_name }}"
                                class="avatar-thumb"
                            >
                        @else
                            <img
                                src="https://ui-avatars.com/api/?name={{ urlencode($user->full_name) }}&size=38&background=e94560&color=fff&rounded=true"
                                alt="{{ $user->full_name }}"
                                class="avatar-thumb"
                            >
                        @endif
                    </td>
                    <td><strong>{{ $user->full_name }}</strong></td>
                    <td><code style="background:#f0f2f5; padding:.1rem .45rem; border-radius:4px; font-size:.85em;">{{ $user->username }}</code></td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}"
                           style="color:#e94560; font-size:.85rem; font-weight:600; text-decoration:none;">
                            ✏ Edit
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align:center; color:#999; padding:1.5rem;">
                        No users found.
                        <a href="{{ route('users.create') }}" style="color:#e94560;">Add one now.</a>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
