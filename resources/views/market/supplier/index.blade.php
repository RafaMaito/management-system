<h3> Suppliers </h3>

{{-- @dd($suppliers) --}}
@isset($suppliers)
    
    @foreach($suppliers as $supplier)
        Company: {{ $loop->iteration }}
        <br>
        {{ $supplier}} 
        <br>
    @endforeach
@endisset
