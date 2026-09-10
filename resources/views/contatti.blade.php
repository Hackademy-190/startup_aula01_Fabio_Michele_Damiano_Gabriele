<x-layout>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Contattaci</h1>
        
        <!-- Creiamo una riga flessibile che centra il contenuto in orizzontale -->
        <div class="row justify-content-center">
            <!-- Definiamo la larghezza del form (es. col-md-6 o col-lg-4) -->
            <div class="col-12 col-md-6 col-lg-4">
                
                <form action="{{ route('contact.submit') }}" method="POST" style="font-family: sans-serif;">
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

                    <!-- Centriamo anche il pulsante di invio se preferisci, oppure lascialo così -->
                    <button type="submit" style="padding: 10px 20px; background: blue; color: white; border: none; cursor: pointer; width: 100%;">
                        Invia
                    </button>
                </form>

            </div>
        </div>
    </div>
</x-layout>
