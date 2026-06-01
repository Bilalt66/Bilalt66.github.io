<!DOCTYPE html>
<html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
      name="description"
      content="Portfolio van Bilal met projecten en contactinformatie."
   >
    <title>Bilal | Portfolio Periode 4</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
   >
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg fixed-top" aria-label="Hoofdnavigatie">
      <div class="container">
        <a class="navbar-brand" href="#home">Bilal Portfolio</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNavigation"
          aria-controls="mainNavigation"
          aria-expanded="false"
          aria-label="Navigatie openen"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavigation">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#over-mij">Over mij</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#projecten">Projecten</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="hero d-flex align-items-center" id="home">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-9 col-xl-8">
            <p class="eyebrow mb-3">Portfolio eindbeoordeling periode 4</p>
            <h1>Bilal - Webdevelopment portfolio</h1>
            <p class="lead mt-4">
              Welkom op mijn portfolio. Hier laat ik mijn belangrijkste
              projecten zien, vertel ik welke technieken ik heb gebruikt.
            </p>
            <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
              <a class="btn btn-primary btn-lg" href="#projecten"
                >Bekijk projecten</a
              >
              <a class="btn btn-outline-primary btn-lg" href="#contact"
                >Neem contact op</a
              >
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section id="over-mij">
        <div class="container">
          <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-5">
              <p class="eyebrow">Home / Over mij</p>
              <h2>Ik bouw duidelijke websites met nette code.</h2>
            </div>
            <div class="col-12 col-lg-7">
              <div class="panel p-4 p-lg-5">
                <p>
                  Mijn naam is Bilal. Ik leer webdevelopment en werk aan
                  projecten waarin HTML, CSS, JavaScript en Bootstrap
                  samenkomen. Ik vind het belangrijk dat een website
                  overzichtelijk is, goed werkt op mobiel en desktop en prettig
                  te gebruiken is.
                </p>
                <p class="mb-0">
                  In dit portfolio verzamel ik mijn werk uit periode 4. Per
                  project beschrijf ik het doel, de gebruikte talen en de link
                  naar de online versie. Zo is meteen zichtbaar wat ik heb
                  gemaakt en hoe mijn ontwikkeling als student eruitziet.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="projecten" class="bg-white">
        <div class="container">
          <p class="eyebrow">Portfolio / Projecten</p>
          <h2>Projecten</h2>
          <p class="section-intro mb-5">
            Hieronder staan alle vereiste projecten voor de eindbeoordeling:
            Quiz, Build your game, Mon-in, Collectables en Keuzedeel. De links
            verwijzen naar GitHub Pages-pagina's en kunnen worden aangepast
            wanneer een projectmap een andere naam heeft.
          </p>

          <div class="row g-4">
            <div class="col-12 col-md-6 col-xl-4">
              <article class="project-card">
                <div class="project-image">Quiz</div>
                <div class="project-body">
                  <h3>Quiz</h3>
                  <p>
                    Een interactieve quiz waarin gebruikers vragen beantwoorden
                    en direct feedback krijgen. Het project laat zien hoe ik met
                    JavaScript gebruikersinteractie, scoreberekening en
                    eenvoudige logica toepas.
                  </p>
                  <ul class="tag-list">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript ES6</li>
                  </ul>
                  <a
                    class="project-link"
                    href="quiz/"
                    target="_blank"
                    rel="noopener"
                    >Open project</a
                  >
                </div>
              </article>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
              <article class="project-card">
                <div class="project-image">Build your game</div>
                <div class="project-body">
                  <h3>Build your game</h3>
                  <p>
                    Een gameproject waarin spelregels, acties en visuele
                    feedback samenkomen. Ik heb gewerkt aan structuur, functies,
                    events en het verbeteren van de speelervaring.
                  </p>
                  <ul class="tag-list">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript ES6</li>
                  </ul>
                  <a
                    class="project-link"
                    href="build-your-game/"
                    target="_blank"
                    rel="noopener"
                    >Open project</a
                  >
                </div>
              </article>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
              <article class="project-card">
                <div class="project-image">Mon-in</div>
                <div class="project-body">
                  <h3>Mon-in</h3>
                  <p>
                    Een website of applicatieconcept waarin informatie duidelijk
                    wordt gepresenteerd. De focus lag op vormgeving, consistente
                    layout en het netjes verwerken van content.
                  </p>
                  <ul class="tag-list">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Bootstrap</li>
                  </ul>
                  <a
                    class="project-link"
                    href="mon-in/"
                    target="_blank"
                    rel="noopener"
                    >Open project</a
                  >
                </div>
              </article>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
              <article class="project-card">
                <div class="project-image">Collectables</div>
                <div class="project-body">
                  <h3>Collectables</h3>
                  <p>
                    Een collectiepagina waarin items overzichtelijk worden
                    getoond. Het project oefent met kaarten, grid-layouts,
                    visuele hiërarchie en het organiseren van meerdere
                    onderdelen.
                  </p>
                  <ul class="tag-list">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>JavaScript ES6</li>
                  </ul>
                  <a
                    class="project-link"
                    href="collectables/"
                    target="_blank"
                    rel="noopener"
                    >Open project</a
                  >
                </div>
              </article>
            </div>

            <div class="col-12 col-md-6 col-xl-4">
              <article class="project-card">
                <div class="project-image">Keuzedeel</div>
                <div class="project-body">
                  <h3>Keuzedeel</h3>
                  <p>
                    Een aanvullend project voor het keuzedeel waarin ik laat
                    zien dat ik zelfstandig keuzes kan maken in techniek,
                    ontwerp en uitwerking. De nadruk ligt op professioneel
                    presenteren.
                  </p>
                  <ul class="tag-list">
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Bootstrap</li>
                  </ul>
                  <a
                    class="project-link"
                    href="keuzedeel/"
                    target="_blank"
                    rel="noopener"
                    >Open project</a
                  >
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>

      <section id="contact" class="bg-white">
        <div class="container">
          <div class="row g-4 align-items-center">
            <div class="col-12 col-lg-5">
              <p class="eyebrow">Contactinformatie</p>
              <h2>Contact</h2>
            </div>
            <div class="col-12 col-lg-7">
              <div class="panel p-4 p-lg-5">
                <p>
                  Wil je mijn werk bekijken of contact opnemen? Gebruik dan
                  onderstaande gegevens.
                </p>
                <ul class="info-list">
                  <li>
                    E-mail:
                    <a class="contact-link" href="mailto:bilal@example.com"
                      >bilal@example.com</a
                    >
                  </li>
                  <li>
                    GitHub:
                    <a
                      class="contact-link"
                      href="https://github.com/Bilalt66"
                      target="_blank"
                      rel="noopener"
                      >github.com/Bilalt66</a
                    >
                  </li>
                  <li>
                    Website:
                    <a
                      class="contact-link"
                      href="https://bilalt66.github.io"
                      target="_blank"
                      rel="noopener"
                      >bilalt66.github.io</a
                    >
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div
        class="container d-flex flex-column flex-md-row justify-content-between gap-2"
      >
        <p class="mb-0">&copy; 2026 Bilal. Portfolio periode 4.</p>
        <p class="mb-0">
          Gemaakt met HTML5, CSS3, JavaScript ES6 en Bootstrap 5.
        </p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
