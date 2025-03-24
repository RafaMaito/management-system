{{ $slot }}
<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" value="{{ old('name')}}" type="text" placeholder="Name" class="{{ $border }}">
    <br>
    <input name="phone" value="{{ old('phone')}}" type="text" placeholder="Phone" class="{{ $border }}">
    <br>
    <input name="email" value="{{ old('email')}}" type="text" placeholder="Email" class="{{ $border }}">
    <br>
    <select name="contact_reasons_id" class="{{ $border }}">
        <option value="">What is the reason for your contact?</option>
        @foreach ( $contact_reasons as $contact_reason )
            <option value="{{ $contact_reason->id }}" {{ old('contact_reasons_id') == $contact_reason->id ? 'selected' : ''}} >{{ $contact_reason->contact_reason }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="message" class="{{ $border }}">{{ old('message') ?: 'Enter your message here' }}</textarea>
    <br>
    <button type="submit" class="{{ $border }}">SEND</button>
</form>
