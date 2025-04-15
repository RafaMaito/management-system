<form method="POST" action="{{ isset($order) ? route('order.update', $order->id) : route('order.store') }}">
    <input type="hidden" name="id" value="{{ $order->id ?? '' }}">
    @csrf
    @if (isset($order))
        @method('PUT')
    @endif

    <select name="client_id">
        <option>Select the client</option>
        @foreach ($clients as $client)
            <option value="{{ $client->id }}"
                {{ ($order->client_id ?? old('client_id')) == $client->id ? 'selected' : '' }}>
                {{ $client->name }}</option>
        @endforeach
    </select>
    {{ $errors->has('client_id') ? $errors->first('client_id') : '' }}
    <button type="submit"> {{ isset($order) ? 'Update' : 'Create' }}</button>
</form>
