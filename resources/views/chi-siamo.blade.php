<x-layout>
    <!--Il nostro team-->
    <section class="container py-5 text-center">

        <div class="row text-center g-4">

            <div class="col-12">
                <h2 class="section-title">Chi Siamo</h2>
            </div>

            @foreach ($team as $member)
                <div class="col-6 col-md-3 pt-5">
                    <img src="{{ asset($member['immagine']) }}"
                        class="rounded-circle p-1 bg-white border border-2 shadow-sm mb-3"
                        style="width: 140px; height: 140px; object-fit: cover;" alt="">

                    <h5>{{ $member['nome'] }}</h5>
                    <p>{{ $member['ruolo'] }}</p>
                    <a href="{{route('chi-siamo-show', ['id' => $member['id']])}}" class="btn-primario">Visualizza dettagli</a>
                </div>
            @endforeach

        </div>

    </section>

</x-layout>
