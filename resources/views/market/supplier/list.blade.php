@extends('market.layouts.base')

@section('title', $title)

@section('content')

<div class="page-content">
    <div class="page-title-market">
        <h1>Suppliers</h1>
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('market.supplier.register') }}">Add Supplier</a></li>
            <li><a href="{{ route('market.supplier.list') }}">List</a></li>
        </ul>
    </div>

    <div class="page-info">
        <div style="width: 30%; margin-left: auto; margin-right: auto;">

        </div>
    </div>
</div>
@endsection
