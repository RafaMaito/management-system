{{ $slot }}
<form action={{ route('site.contact') }} method="post">
    @csrf
    <input name="name" type="text" placeholder="Name" class="{{ $border }}">
    <br>
    <input name="phone" type="text" placeholder="Phone" class="{{ $border }}">
    <br>
    <input name="email" type="text" placeholder="Email" class="{{ $border }}">
    <br>
    <select name="contact_reason" class="{{ $border }}">
        <option value="">What is the reason for your contact?</option>
        <option value="1">Question</option>
        <option value="2">Compliment</option>
        <option value="3">Complaint</option>
    </select>
    <br>
    <textarea name="message" class="{{ $border }}">Enter your message here</textarea>
    <br>
    <button type="submit" class="{{ $border }}">SEND</button>
</form>
