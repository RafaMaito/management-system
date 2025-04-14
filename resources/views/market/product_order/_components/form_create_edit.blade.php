<form method="POST" action="{{ route('product-order.store', ['order' => $order]) }}">
    @csrf
    <select name="product_id">
        <option>Select the products</option>
        @foreach ($products as $product)
            <option value="{{ $product->id }}"
                {{ ($order->product_id ?? old('product_id')) == $product->id ? 'selected' : '' }}>
                {{ $product->name }}</option>
        @endforeach
    </select>
    {{ $errors->has('product_id') ? $errors->first('product_id') : '' }}
    <button type="submit"> {{ isset($order) ? 'Update' : 'Create' }}</button>
</form>
