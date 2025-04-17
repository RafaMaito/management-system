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
            <div style="width: 20%; margin-left: auto; margin-right: auto;">
                <table border="1">
                    <tr>
                        <td>Name:</td>
                        <td>{{ $client->name }}</td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td>{{ $client->email }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
