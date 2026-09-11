
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
    <header class="min-vh-100 d-flex align-items-center justify-content-center border-bottom py-5" style="border-color: var(--border-subtle);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-11 col-md-9 col-lg-8 mx-auto">
                    
                    <h1 class="display-4 fw-bold mb-3" style="color: var(--text-main);">
                        Sviluppo web affidabile per il tuo progetto
                    </h1>
                    
                    <p class="blog-excerpt fs-5 mb-4 mx-auto" style="max-width: 650px;">
                        Realizziamo siti, applicazioni web e soluzioni digitali solide, performanti e facili da mantenere.
                    </p>
                    
                    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 align-items-center">
                        <a href="{{ route('blog') }}" class="btn-primario">Scopri i nostri progetti &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

<!-- 2. SERVIZI -->
<section class="py-5">
    <div class="container py-4">
        <!-- Header Sezione -->
        <div class="mb-5 text-center text-md-start">
            <span class="blog-eyebrow d-block mb-2">// COSA FACCIAMO</span>
            <h2 class="fs-2 mb-0 fw-bold">Servizi di Sviluppo e Ingegneria</h2>
        </div>

        <!-- Grid Servizi -->
        <div class="row g-4 justify-content-center">
            
            <!-- Card 1 -->
            <div class="col-12 col-md-4">
                <div class="service-card p-4 rounded-3 h-100 d-flex flex-column justify-content-between position-relative">
                    <div>
                        <div class="icon-wrapper mb-3 d-inline-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-window-stack fs-4"></i>
                        </div>
                        
                        <h3 class="fs-5 mb-2 fw-semibold">Web App &amp; SaaS</h3>
                        <p class="blog-excerpt small mb-3">
                            Applicazioni web complesse progettate per gestire moli elevate di dati con tempi di risposta minimi.
                        </p>
                    </div>

                    <div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="tech-badge">React</span>
                            <span class="tech-badge">Node.js</span>
                            <span class="tech-badge">API REST</span>
                        </div>
                        
                        <a href="#contact" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
                            Scopri la soluzione <i class="bi bi-arrow-right transition-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-4">
                <div class="service-card p-4 rounded-3 h-100 d-flex flex-column justify-content-between position-relative">
                    <div>
                        <div class="icon-wrapper mb-3 d-inline-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-code-slash fs-4"></i>
                        </div>

                        <h3 class="fs-5 mb-2 fw-semibold">Software su Misura</h3>
                        <p class="blog-excerpt small mb-3">
                            Sviluppo di piattaforme proprietarie e gestionali custom cuciti sulle metriche del tuo business.
                        </p>
                    </div>

                    <div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="tech-badge">Custom ERP</span>
                            <span class="tech-badge">CRM</span>
                            <span class="tech-badge">Workflow</span>
                        </div>

                        <a href="#contact" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
                            Scopri la soluzione <i class="bi bi-arrow-right transition-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-4">
                <div class="service-card p-4 rounded-3 h-100 d-flex flex-column justify-content-between position-relative">
                    <div>
                        <div class="icon-wrapper mb-3 d-inline-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-shield-check fs-4"></i>
                        </div>

                        <h3 class="fs-5 mb-2 fw-semibold">Cloud &amp; Security</h3>
                        <p class="blog-excerpt small mb-3">
                            Infrastrutture resilienti, audit di sicurezza e refactoring per eliminare il debito tecnico.
                        </p>
                    </div>

                    <div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="tech-badge">AWS / Azure</span>
                            <span class="tech-badge">DevOps</span>
                            <span class="tech-badge">Audit</span>
                        </div>

                        <a href="#contact" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
                            Scopri la soluzione <i class="bi bi-arrow-right transition-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- 3. BANNER FINALE -->
    <section class="py-5 my-4" style="background-color: var(--bg-surface); border-top: 3px solid var(--clr-deep-teal); border-bottom: 3px solid var(--clr-deep-teal);">
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