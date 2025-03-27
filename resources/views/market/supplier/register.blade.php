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
        <h2>{{ $title }}</h2>
        {{ $msg_supplier ?? '' }}
        <div style="width: 30%; margin-left: auto; margin-right: auto;">
            <form method="POST" action="{{ route('market.supplier.register') }}">
                <input type="hidden" name="id" value="{{ $supplier->id ?? '' }}">
                @csrf
                <input type="text" name="name" value="{{ $supplier->name ?? old('name')}}" placeholder="Name">
                {{ $errors->has('name') ? $errors->first('name') : '' }}

                <input type="text" name="site" value="{{ $supplier->site ?? old('site')}}"  placeholder="Site">
                {{ $errors->has('site') ? $errors->first('site') : '' }}

                <input type="text" name="uf" value="{{ $supplier->uf ?? old('uf')}}" placeholder="UF">
                {{ $errors->has('uf') ? $errors->first('uf') : '' }}

                <input type="text" name="email" value="{{ $supplier->email ?? old('email')}}" placeholder="Email">
                {{ $errors->has('email') ? $errors->first('email') : '' }}
                <button type="submit">{{ $button_func }}</button>
            </form>
        </div>
    </div>
</div>
@endsection
