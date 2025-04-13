<form method="POST" action="{{ isset($supplier) ? route('supplier.update', $supplier->id) : route('supplier.store') }}">
    <input type="hidden" name="id" value="{{ $supplier->id ?? '' }}">
    @csrf
    @if (isset($supplier))
        @method('PUT')
    @endif

    <input type="text" name="name" value="{{ $supplier->name ?? old('name') }}" placeholder="Name">
    {{ $errors->has('name') ? $errors->first('name') : '' }}

    <input type="text" name="site" value="{{ $supplier->site ?? old('site') }}" placeholder="Site">
    {{ $errors->has('site') ? $errors->first('site') : '' }}

    <input type="text" name="uf" value="{{ $supplier->uf ?? old('uf') }}" placeholder="UF">
    {{ $errors->has('uf') ? $errors->first('uf') : '' }}

    <input type="text" name="email" value="{{ $supplier->email ?? old('email') }}" placeholder="Email">
    {{ $errors->has('email') ? $errors->first('email') : '' }}
    <button type="submit"> {{ isset($supplier) ? 'Update' : 'Create' }}</button>
</form>
