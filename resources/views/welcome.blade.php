
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
                        
                        <a href="{{ route('contact') }}" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
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

                        <a href="{{ route('contact') }}" class="service-link text-decoration-none fw-semibold small d-inline-flex align-items-center gap-1">
                            Scopri la soluzione <i class="bi bi-arrow-right transition-icon"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    <!-- 4. CAROSELLO FINALE -->
    <section class="home-carousel-section py-5">
        <div class="container">
            <div class="home-carousel-intro text-center">
                <span class="blog-eyebrow d-block mb-2">// IL NOSTRO APPROCCIO</span>
                <h2>Idee che diventano prodotti digitali</h2>
                <p class="blog-excerpt mx-auto mb-0">
                    Un assaggio del modo in cui uniamo design, tecnologia e attenzione ai dettagli per costruire soluzioni efficaci.
                </p>
            </div>

            <div id="homeCarousel" class="carousel slide home-carousel" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/1920/1080" class="d-block w-100" alt="Paesaggio astratto per sviluppo web">
                            <div class="carousel-caption">
                                <span class="blog-eyebrow d-block">// SVILUPPO WEB</span>
                                <h2>Esperienze digitali solide</h2>
                                <p>Progettiamo interfacce veloci, accessibili e pronte a crescere con il tuo business.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1921/1081" class="d-block w-100" alt="Paesaggio astratto per architettura software">
                            <div class="carousel-caption">
                                <span class="blog-eyebrow d-block">// SOFTWARE SU MISURA</span>
                                <h2>Strumenti costruiti intorno a te</h2>
                                <p>Trasformiamo processi complessi in soluzioni semplici da usare e mantenere.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="https://picsum.photos/1922/1082" class="d-block w-100" alt="Paesaggio astratto per cloud e sicurezza">
                            <div class="carousel-caption">
                                <span class="blog-eyebrow d-block">// CLOUD &amp; SECURITY</span>
                                <h2>Infrastrutture pronte per il futuro</h2>
                                <p>Rendiamo il tuo stack più resiliente, sicuro e semplice da evolvere.</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Precedente</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Successiva</span>
                    </button>
            </div>
        </div>
    </section>

    <!-- 5. BANNER FINALE -->
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

    <!-- 6. RECENSIONI -->
    <section class="reviews-section py-5">
        <div class="container py-4">
            <div class="reviews-intro text-center">
                <span class="blog-eyebrow d-block mb-2">// COSA DICONO DI NOI</span>
                <h2>Le recensioni dei nostri clienti</h2>
                <p class="blog-excerpt mx-auto mb-0">
                    Il valore di un progetto si vede anche dal rapporto che costruiamo lungo il percorso.
                </p>
            </div>

            <div class="reviews-grid">
                <article class="review-card">
                    <div class="review-rating" aria-label="5 stelle">★★★★★</div>
                    <blockquote>
                        “Ci hanno aiutato a trasformare un'idea complessa in una piattaforma chiara, veloce e semplice da usare.”
                    </blockquote>
                    <footer>
                        <strong>Laura Bianchi</strong>
                        <span>Product Manager</span>
                    </footer>
                </article>

                <article class="review-card">
                    <div class="review-rating" aria-label="5 stelle">★★★★★</div>
                    <blockquote>
                        “Un team concreto e disponibile, capace di trovare soluzioni efficaci anche nei momenti più delicati.”
                    </blockquote>
                    <footer>
                        <strong>Marco Ferri</strong>
                        <span>Founder, North Studio</span>
                    </footer>
                </article>

                <article class="review-card">
                    <div class="review-rating" aria-label="5 stelle">★★★★★</div>
                    <blockquote>
                        “Finalmente un partner tecnico che parla il linguaggio del business e consegna risultati misurabili.”
                    </blockquote>
                    <footer>
                        <strong>Giulia Romano</strong>
                        <span>Operations Director</span>
                    </footer>
                </article>
            </div>
        </div>
    </section>
</main>



       
</x-layout>