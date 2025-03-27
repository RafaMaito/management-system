@extends('market.layouts.base')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Supplier</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('market.supplier.register') }}">Register</a></li>
                <li><a href="{{ route('market.supplier') }}">Search</a></li>
            </ul>
        </div>

        <div class="page-info">
            @if (session('msg'))
                <div class="message-successful" id="msgDelete">
                    {{ session('msg') }}
                    <button onclick="document.getElementById('msgDelete').style.display='none'" >Close</button>
                </div>
            @endif
            <h2>Search Suppliers</h2>
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="POST" action="{{ route('market.supplier.list') }}">
                    @csrf
                    <input type="text" name="name" placeholder="Name">
                    <input type="text" name="site" placeholder="Site">
                    <input type="text" name="uf" placeholder="UF">
                    <input type="text" name="email" placeholder="Email">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
@endsection
