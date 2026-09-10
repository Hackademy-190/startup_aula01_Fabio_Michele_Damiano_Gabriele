<x-layout>
        <!--Il nostro team-->
        <section class="container py-5 justify-content-center text-center">
            <h2 class="section-title">Chi Siamo</h2>
            
            <div class="row team-grid justify-content-center text-center g-4">
                {{-- @foreach ($team as $member) --}}
                <div class="col-6 col-md-3">
                    <img src="https://picsum.photos/200" 
                    class="rounded-circle p-1 bg-white border border-2 border-warning shadow-sm mb-3" 
                    style="width: 140px; height: 140px; object-fit: cover;" 
                    alt="">
                    
                    <h5>Nome e Cognome</h5>
                    <p>Membro del team</p>
                    <a href="" class="btn btn-accent btn-lg font-title">Visualizza dettagli</a>
                </div>
                
                {{-- @endforeach --}}
            </div>
        </section>

</x-layout>