<form method="POST"
    action="{{ isset($product_detail) ? route('product-detail.update', $product_detail->id) : route('product-detail.store') }}">
    <input type="hidden" name="id" value="{{ $product_detail->id ?? '' }}">
    @csrf
    @if (isset($product_detail))
        @method('PUT')
    @endif
    <input type="text" name="product_id" value="{{ $product_detail->product_id ?? old('product_id') }}"
        placeholder="Product ID">
    {{ $errors->has('product_id') ? $errors->first('product_id') : '' }}

    <input type="text" name="length" value="{{ $product_detail->length ?? old('length') }}" placeholder="Length">
    {{ $errors->has('length') ? $errors->first('length') : '' }}

    <input type="text" name="height" value="{{ $product_detail->height ?? old('height') }}" placeholder="Height">
    {{ $errors->has('height') ? $errors->first('height') : '' }}

    <input type="text" name="width" value="{{ $product_detail->width ?? old('width') }}" placeholder="Width">
    {{ $errors->has('width') ? $errors->first('width') : '' }}

    <select name="unit_id">
        <option>Select the unit</option>
        @foreach ($units as $unit)
            <option value="{{ $unit->id }}"
                {{ ($product_detail->unit_id ?? old('unit_id')) == $unit->id ? 'selected' : '' }}>
                {{ $unit->description }}</option>
        @endforeach
    </select>
    {{ $errors->has('unit_id') ? $errors->first('unit_id') : '' }}
    <button type="submit"> {{ isset($product_detail) ? 'Update' : 'Create' }}</button>
</form>
