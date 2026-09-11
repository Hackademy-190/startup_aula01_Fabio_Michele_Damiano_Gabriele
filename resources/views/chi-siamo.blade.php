<x-layout>
    <section class="team-section container text-center">
        <div class="team-intro">
            <h6 class="blog-eyebrow">// PARLIAMO DI NOI</h6>
            <h1 class="section-title">Il nostro team</h1>
            <p class="section-subtitle">
                Siamo un team di professionisti appassionati di tecnologia e sviluppo web. Ogni membro del nostro team porta competenze uniche e una prospettiva diversa, contribuendo a creare soluzioni innovative per i nostri clienti.
            </p>
        </div>

        <div class="team-grid">
            @foreach ($team as $member)
                <article class="team-card">
                    <img src="{{ asset($member['immagine']) }}"
                        class="rounded-circle p-1 bg-white border border-2 shadow-sm mb-3"
                        style="width: 140px; height: 140px; object-fit: cover;" alt="Foto di {{ $member['nome'] }}">

                    <h5>{{ $member['nome'] }}</h5>
                    <p>{{ $member['ruolo'] }}</p>
                    <a href="{{ route('chi-siamo-show', ['id' => $member['id']]) }}" class="btn-primario">Visualizza dettagli</a>
                </article>
            @endforeach
        </div>
    </section>
</x-layout>
