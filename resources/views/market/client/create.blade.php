@extends('market.layouts.app')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Client</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('client.index') }}">Back</a></li>
                <li><a href="{{ route('client.index') }}">Consult</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            {{ $msg_client ?? '' }}
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                @component('market.client._components.form_create_edit', [
                    'client' => $client,
                    'units' => $units,
                    'suppliers' => $suppliers,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
