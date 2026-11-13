<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CamachoTFA7 – @yield('title', 'Home')</title>
    <style>
        /* ── Reset & Base ── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f0f2f5;
            color: #333;
            min-height: 100vh;
        }

        /* ── Navbar ── */
        nav {
            background: #1a1a2e;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60px;
            box-shadow: 0 2px 8px rgba(0,0,0,.4);
        }
        .nav-brand {
            font-size: 1.3rem;
            font-weight: 700;
            color: #e94560;
            text-decoration: none;
            letter-spacing: 1px;
        }
        .nav-links { display: flex; gap: 0.25rem; }
        .nav-links a {
            color: #ccc;
            text-decoration: none;
            padding: 0.45rem 1rem;
            border-radius: 6px;
            font-size: 0.9rem;
            transition: background .2s, color .2s;
        }
        .nav-links a:hover,
        .nav-links a.active {
            background: #e94560;
            color: #fff;
        }

        /* ── Page container ── */
        .container {
            max-width: 1100px;
            margin: 2.5rem auto;
            padding: 0 1.5rem;
        }

        /* ── Page header ── */
        .page-header {
            margin-bottom: 1.75rem;
        }
        .page-header h1 {
            font-size: 1.9rem;
            color: #1a1a2e;
        }
        .page-header p {
            color: #666;
            margin-top: .35rem;
        }

        /* ── Card ── */
        .card {
            background: #fff;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,.08);
        }

        /* ── Hero (home) ── */
        .hero {
            text-align: center;
            padding: 3.5rem 2rem;
        }
        .hero h2 {
            font-size: 2.5rem;
            color: #1a1a2e;
            margin-bottom: .75rem;
        }
        .hero p {
            font-size: 1.1rem;
            color: #555;
            max-width: 600px;
            margin: 0 auto 2rem;
            line-height: 1.6;
        }
        .hero-buttons { display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; }
        .btn {
            display: inline-block;
            padding: .7rem 1.6rem;
            border-radius: 7px;
            font-size: .95rem;
            font-weight: 600;
            text-decoration: none;
            transition: opacity .2s;
        }
        .btn:hover { opacity: .85; }
        .btn-primary { background: #e94560; color: #fff; }
        .btn-outline { background: transparent; border: 2px solid #1a1a2e; color: #1a1a2e; }

        /* ── Feature cards ── */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.25rem;
            margin-top: 2rem;
        }
        .feature-card {
            background: #f8f9fb;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            border: 1px solid #e0e3ea;
        }
        .feature-card .icon { font-size: 2rem; margin-bottom: .6rem; }
        .feature-card h3 { font-size: 1rem; color: #1a1a2e; }
        .feature-card p { font-size: .85rem; color: #777; margin-top: .35rem; }

        /* ── About page ── */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        @media (max-width: 640px) { .about-grid { grid-template-columns: 1fr; } }
        .about-section h3 { color: #e94560; margin-bottom: .6rem; }
        .about-section ul { padding-left: 1.25rem; }
        .about-section ul li { margin-bottom: .4rem; color: #555; font-size: .95rem; }

        /* ── Table ── */
        .table-wrapper { overflow-x: auto; }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: .9rem;
        }
        thead tr { background: #1a1a2e; color: #fff; }
        thead th { padding: .8rem 1rem; text-align: left; font-weight: 600; }
        tbody tr { border-bottom: 1px solid #eee; transition: background .15s; }
        tbody tr:hover { background: #f5f7ff; }
        tbody td { padding: .75rem 1rem; color: #444; }
        .badge {
            display: inline-block;
            padding: .25rem .7rem;
            border-radius: 99px;
            font-size: .78rem;
            font-weight: 600;
        }
        .badge-active   { background: #d4edda; color: #155724; }
        .badge-inactive { background: #f8d7da; color: #721c24; }

        /* ── Footer ── */
        footer {
            text-align: center;
            padding: 1.5rem;
            font-size: .82rem;
            color: #999;
            margin-top: 3rem;
            border-top: 1px solid #ddd;
        }

        /* ── Flash / Alert ── */
        .alert {
            padding: .85rem 1.1rem;
            border-radius: 8px;
            margin-bottom: 1.25rem;
            font-size: .9rem;
        }
        .alert-success { background: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .alert-error   { background: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }

        /* ── Form styles ── */
        .form-group { margin-bottom: 1.25rem; }
        .form-label {
            display: block;
            font-size: .875rem;
            font-weight: 600;
            color: #333;
            margin-bottom: .4rem;
        }
        .form-label .required { color: #e94560; }
        .form-label .optional { color: #999; font-weight: 400; font-size: .8rem; }
        .form-control {
            width: 100%;
            padding: .55rem .85rem;
            border: 1.5px solid #d0d3da;
            border-radius: 7px;
            font-size: .9rem;
            color: #333;
            transition: border-color .2s, box-shadow .2s;
            background: #fff;
        }
        .form-control:focus {
            outline: none;
            border-color: #e94560;
            box-shadow: 0 0 0 3px rgba(233,69,96,.12);
        }
        .form-control.is-invalid { border-color: #e94560; }
        .invalid-feedback {
            display: block;
            margin-top: .3rem;
            font-size: .82rem;
            color: #e94560;
        }
        .form-hint {
            display: block;
            margin-top: .3rem;
            font-size: .8rem;
            color: #888;
        }
        .form-actions {
            display: flex;
            gap: .75rem;
            margin-top: 1.75rem;
        }

        /* ── Avatar thumbnail in table ── */
        .avatar-thumb {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #e0e3ea;
            vertical-align: middle;
        }
    </style>
</head>
<body>

<nav>
    <a class="nav-brand" href="{{ route('home') }}">🛒 CamachoTFA7</a>
    <div class="nav-links">
        <a href="{{ route('home') }}"      class="{{ request()->routeIs('home')      ? 'active' : '' }}">Home</a>
        <a href="{{ route('about') }}"     class="{{ request()->routeIs('about')     ? 'active' : '' }}">About</a>
        <a href="{{ route('customers') }}" class="{{ request()->routeIs('customers') ? 'active' : '' }}">Customers</a>
        <a href="{{ route('users') }}"     class="{{ request()->routeIs('users')     ? 'active' : '' }}">Users</a>
    </div>
</nav>

<div class="container">
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif
    @yield('content')
</div>

<footer>
    &copy; {{ date('Y') }} CamachoTFA7 &mdash; All rights reserved.
</footer>

</body>
</html>

