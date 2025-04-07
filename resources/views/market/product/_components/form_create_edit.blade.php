<form method="POST" action="{{ isset($product) ? route('product.update', $product->id) : route('product.store') }}">
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

    <input type="text" name="weight" value="{{ $product->weight ?? old('weight') }}" placeholder="Weight">
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
