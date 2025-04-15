<div class="header">
    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Logo">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('client.index') }}">Clients</a></li>
            <li><a href="{{ route('order.index') }}">Orders</a></li>
            <li><a href="{{ route('product.index') }}">Products</a></li>
            <li><a href="{{ route('supplier.index') }}">Suppliers</a></li>
            <li><a href="{{ route('market.logout') }}">Logout</a></li>
        </ul>
    </div>
</div>
