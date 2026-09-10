<form action="{{ route('contact') }}" method="POST" style="max-width: 400px; margin: 20px auto; font-family: sans-serif;">
    @csrf

    @if(session('success'))
        <div style="color: green; padding: 10px; background: #e6f4ea; margin-bottom: 15px;">
            {{ session('success') }}
        </div>
    @endif

    <div style="margin-bottom: 15px;">
        <label for="name" style="display: block; margin-bottom: 5px;">Nome</label>
        <input type="text" id="name" name="name" required style="width: 100%; padding: 8px;">
        @error('name') <span style="color: red; font-size: 12px;">{{ $message }}</span> @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="email" style="display: block; margin-bottom: 5px;">Email</label>
        <input type="email" id="email" name="email" required style="width: 100%; padding: 8px;">
        @error('email') <span style="color: red; font-size: 12px;">{{ $message }}</span> @enderror
    </div>

    <div style="margin-bottom: 15px;">
        <label for="message" style="display: block; margin-bottom: 5px;">Messaggio</label>
        <textarea id="message" name="message" rows="4" required style="width: 100%; padding: 8px;"></textarea>
        @error('message') <span style="color: red; font-size: 12px;">{{ $message }}</span> @enderror
    </div>

    <button type="submit" style="padding: 10px 20px; background: blue; color: white; border: none; cursor: pointer;">
        Invia
    </button>
</form>
