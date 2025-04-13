@extends('market.layouts.base')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Supplier</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('supplier.create') }}">Register</a></li>
                <li><a href="{{ route('supplier.index') }}">Search</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            <div class="table-container" style="width: 80%; margin: 0 auto;">
                <table border="1" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Site</th>
                            <th>UF</th>
                            <th>Email</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suppliers as $supplier)
                            <tr>
                                <td>{{ $supplier->name }}</td>
                                <td>{{ $supplier->site }}</td>
                                <td>{{ $supplier->uf }}</td>
                                <td>{{ $supplier->email }}</td>
                                <td><a href="{{ route('supplier.show', $supplier->id) }}">View</a></td>
                                <td><a href="{{ route('supplier.edit', $supplier->id) }}">Edit</a></td>
                                <td>
                                    <form id="form_{{ $supplier->id }}" method="POST"
                                        action="{{ route('supplier.destroy', ['supplier' => $supplier->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <a href="#"
                                            onclick="document.getElementById('form_{{ $supplier->id }}').submit()">Delete</a>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $suppliers->appends($request)->links() }} --}}
            </div>
        </div>
    </div>
@endsection
