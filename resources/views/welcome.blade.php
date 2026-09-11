
<x-layout>
    {{-- <header class="container-fluid flex-grow-1 d-flex align-items-center justify-content-center py-5">
        <div class="text-center col-11 col-md-9 col-lg-7">
            <h1 class="fs-1 mb-3">Sviluppo web affidabile per il tuo progetto</h1>
            <p class="fs-5 mb-4" style="color: var(--text-muted);"> Realizziamo siti, applicazioni web e soluzioni digitali solide, performanti e facili da mantenere.</p>
            <a href="{{ route('blog') }}" class="btn-primario">Scopri i nostri progetti</a>
        </div>
    </header> --}}

<main class="text-center d-flex align-item-center flex-column" style="background-color: var(--bg-page);">

    <!-- 1. HERO SECTION-->
    <header class="min-vh-100 d-flex align-items-center justify-content-center border-bottom py-5" style="border-color: var(--border-subtle) !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-9 col-lg-8 mx-auto">
                    <span class="blog-eyebrow d-block mb-2">// WEB ENGINEERING &amp; SOFTWARE</span>
                    
                    <h1 class="display-4 fw-bold mb-3" style="color: var(--text-main);">
                        Sviluppo web affidabile per il tuo progetto
                    </h1>
                    
                    <p class="blog-excerpt fs-5 mb-4 mx-auto" style="max-width: 650px;">
                        Realizziamo siti, applicazioni web e soluzioni digitali solide, performanti e facili da mantenere.
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 align-items-center">
                        <a href="{{ route('contact') }}" class="btn-primario">Proponi il tuo progetto</a>
                        <a href="{{ route('blog') }}" class="blog-read-more pt-0">Scopri i nostri progetti &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. SERVIZI-->
    <section class="py-5">
        <div class="container py-4">
            <div class="mb-5">
                <span class="blog-eyebrow d-block mb-1">// COSA FACCIAMO</span>
                <h2 class="fs-2 mb-0" style="color: var(--text-main);">Servizi di Sviluppo e Ingegneria</h2>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-12 col-md-4">
                    <div class="p-4 rounded-3 h-100 text-center" style="background-color: var(--bg-surface); border: 1px solid var(--border-subtle);">
                        <h3 class="fs-5 mb-2" style="color: var(--text-main);">Web App &amp; SaaS</h3>
                        <p class="blog-excerpt small mb-0">
                            Applicazioni web complesse progettate per gestire moli elevate di dati con tempi di risposta minimi.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="p-4 rounded-3 h-100 text-center" style="background-color: var(--bg-surface); border: 1px solid var(--border-subtle);">
                        <h3 class="fs-5 mb-2" style="color: var(--text-main);">Software su Misura</h3>
                        <p class="blog-excerpt small mb-0">
                            Sviluppo di piattaforme proprietarie e gestionali custom cuciti sulle metriche del tuo business.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="p-4 rounded-3 h-100 text-center" style="background-color: var(--bg-surface); border: 1px solid var(--border-subtle);">
                        <h3 class="fs-5 mb-2" style="color: var(--text-main);">Cloud &amp; Security</h3>
                        <p class="blog-excerpt small mb-0">
                            Infrastrutture resilienti, audit di sicurezza e refactoring per eliminare il debito tecnico.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. BANNER -->
    <section class="py-3">
        <div class="container">
            <div class="p-4 rounded-3" style="background-color: var(--bg-surface); border: 1px solid var(--border-subtle);">
                <div class="row align-items-center justify-content-center text-center g-3">
                    <div class="col-12 col-lg-8 mx-auto">
                        <span class="blog-eyebrow mb-1 d-block">// SOLUZIONI SU MISURA</span>
                        <h2 class="fs-4 mb-2" style="color: var(--text-main);">Hai un'architettura software da aggiornare?</h2>
                        <p class="blog-excerpt small mb-3">
                            Progettiamo e ottimizziamo web app, e-commerce ad alte prestazioni e infrastrutture cloud scalabili.
                        </p>
                        <a href="{{ route('contact') }}" class="btn-primario py-2 px-3 fs-6">
                            Richiedi Consulenza
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. BANNER FINALE -->
    <section class="py-5 my-4" style="background-color: var(--bg-surface); border-top: 1px solid var(--border-subtle); border-bottom: 1px solid var(--border-subtle);">
        <div class="container py-4">
            <span class="blog-eyebrow d-block mb-2">// AVVIA IL TUO PROGETTO</span>
            <h2 class="display-6 fw-bold mb-3" style="color: var(--text-main);">Hai un'idea o un'infrastruttura da scalare?</h2>
            <p class="blog-excerpt mx-auto mb-4" style="max-width: 600px;">
                Analizziamo il tuo stack attuale e proponiamo una roadmap di sviluppo concreta senza impegno.
            </p>
            <a href="{{ route('contact') }}" class="btn-primario fs-6 px-4 py-3">Richiedi una Consulenza Tecnica</a>
        </div>
    </section>

</main>



       
</x-layout>