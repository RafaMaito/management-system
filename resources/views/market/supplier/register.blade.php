@extends('market.layouts.base')

@section('title', $title)

@section('content')

<div class="page-content">
    <div class="page-title-market">
        <h1>Add Supplier</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('market.supplier.register') }}">Add Supplier</a></li>
            <li><a href="{{ route('market.supplier.list') }}">List</a></li>
        </ul>
    </div>

    <div class="page-info">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="POST" action="{{ route('market.supplier.list') }}">
                @csrf
                <input type="text" name="name" placeholder="Name">
                <input type="text" name="site" placeholder="Site">
                <input type="text" name="uf" placeholder="UF">
                <input type="text" name="email" placeholder="Email">
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</div>
@endsection
