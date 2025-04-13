<form method="POST" action="{{ isset($client) ? route('client.update', $client->id) : route('client.store') }}">
    <input type="hidden" name="id" value="{{ $client->id ?? '' }}">
    @csrf
    @if (isset($client))
        @method('PUT')
    @endif

    <input type="text" name="name" value="{{ $client->name ?? old('name') }}" placeholder="Name">
    {{ $errors->has('name') ? $errors->first('name') : '' }}

    <input type="text" name="email" value="{{ $client->email ?? old('email') }}" placeholder="email">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <button type="submit"> {{ isset($client) ? 'Update' : 'Create' }}</button>
</form>
