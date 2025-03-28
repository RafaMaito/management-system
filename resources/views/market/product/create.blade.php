@extends('market.layouts.base')

@section('title', $title)

@section('content')

    <div class="page-content">
        <div class="page-title-market">
            <h1>Product</h1>
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('product.index') }}">Back</a></li>
                <li><a href="{{ route('product.index') }}">Consult</a></li>
            </ul>
        </div>

        <div class="page-info">
            <h2>{{ $title }}</h2>
            {{ $msg_product ?? '' }}
            <div style="width: 30%; margin-left: auto; margin-right: auto;">
                <form method="POST"
                    action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}">
                    <input type="hidden" name="id" value="{{ $product->id ?? '' }}">
                    @csrf
                    @if (isset($product))
                        @method('PUT')
                    @endif
                    <input type="text" name="name" value="{{ $product->name ?? old('name') }}" placeholder="Name">
                    {{ $errors->has('name') ? $errors->first('name') : '' }}

                    <input type="text" name="description" value="{{ $product->description ?? old('description') }}"
                        placeholder="description">
                    {{ $errors->has('description') ? $errors->first('description') : '' }}

                    <input type="text" name="weight" value="{{ $product->weight ?? old('weight') }}"
                        placeholder="Weight">
                    {{ $errors->has('weight') ? $errors->first('weight') : '' }}

                    <select name="unit_id">
                        <option>Select the unit</option>
                        @foreach ($units as $unit)
                            <option value="{{ $unit->id }}"
                                {{ ($product->unit_id ?? old('unit_id')) == $unit->id ? 'selected' : '' }}>
                                {{ $unit->description }}</option>
                        @endforeach
                    </select>
                    {{ $errors->has('unit_id') ? $errors->first('unit_id') : '' }}
                    <button type="submit"> {{ isset($product) ? 'Update' : 'Create' }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
