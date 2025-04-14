<form method="POST" action="{{ route('product-order.store', ['order' => $order->id]) }}">
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

    <input type="number" name="quantity" value="{{ $order->quantity ?? old('quantity') }}" placeholder="Quantity">
    {{ $errors->has('quantity') ? $errors->first('quantity') : '' }}
    <button type="submit"> {{ isset($order) ? 'Update' : 'Create' }}</button>
</form>
