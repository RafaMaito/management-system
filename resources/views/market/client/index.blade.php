@extends('market.layouts.base')

@section('title', $title)


@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Clients</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('client.create') }}">New</a></li>
                <li><a href="{{ route('client.index') }}">Consult</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            <div class="table-container" style="width: 80%; margin: 0 auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clients as $client)
                            <tr>
                                <td>{{ $client->name }}</td>
                                <td>{{ $client->email }}</td>
                                <td><a href="{{ route('client.show', $client->id) }}">View</a></td>
                                <td><a href="{{ route('client.edit', $client->id) }}">Edit</a></td>
                                <td>
                                    <form id="form_{{ $client->id }}" method="POST"
                                        action="{{ route('client.destroy', ['client' => $client->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $client->id }}').submit()">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $products->appends($request)->links() }} --}}
            </div>
        </div>
    </div>
@endsection
