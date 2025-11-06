<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Portfolio — Sami Ben Youssef | Développeur Full-Stack</title>
  
  <!-- SEO -->
  <meta name="description" content="Portfolio de Sami Ben Youssef — développeur web full-stack passionné par la création d'applications web performantes et élégantes. Expert en Laravel, React et UI/UX.">
  <meta name="keywords" content="développeur web, full-stack, Laravel, React, PHP, JavaScript, UI/UX, portfolio">
  <meta name="author" content="Sami Ben Youssef">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://samiby.dev/">
  <meta property="og:title" content="Portfolio — Sami Ben Youssef | Développeur Full-Stack">
  <meta property="og:description" content="Portfolio de Sami Ben Youssef — développeur web full-stack passionné par la création d'applications web performantes et élégantes.">
  <meta property="og:image" content="https://samiby.dev/img/og-image.jpg">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://samiby.dev/">
  <meta property="twitter:title" content="Portfolio — Sami Ben Youssef | Développeur Full-Stack">
  <meta property="twitter:description" content="Portfolio de Sami Ben Youssef — développeur web full-stack passionné par la création d'applications web performantes et élégantes.">
  <meta property="twitter:image" content="https://samiby.dev/img/og-image.jpg">
  
  <!-- Favicon -->
  <link rel="icon" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- Styles -->
  <?php
  $base_url = '/3èmeBI/exo3';
  ?>
  <link rel="stylesheet" href="<?php echo $base_url; ?>/style.css">
</head>
<body>
  <header class="site-header" role="banner">
    <div class="container header-inner">
      <a class="brand" href="#home" aria-label="Retour à l'accueil">
        <img src="alan (1).jpg" alt="Logo Sami BY" width="180" height="180">
        <span>DOKO DJOULDE alan franck</span>
      </a>

      <nav class="nav" aria-label="Navigation principale">
        <ul class="nav-list">
          <li><a href="#about" class="nav-link" aria-current="page">À propos</a></li>
          <li><a href="#projects" class="nav-link">Projets</a></li>
          <li><a href="#skills" class="nav-link">Compétences</a></li>
          <li><a href="#contact" class="nav-link">Contact</a></li>
          <li><a class="btn btn-ghost" href="CV.pdf" download>
            <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
              <path d="M12 16l-4-4h8l-4 4zm0 2l-4-4"></path>
            </svg>
            Télécharger CV
          </a></li>
        </ul>
      </nav>

      <button id="navToggle" 
              class="nav-toggle" 
              aria-expanded="false"
              aria-controls="mobile-menu"
              aria-label="Menu principal">
        <span class="sr-only">Menu</span>
        <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
          <path d="M4 6h16M4 12h16m-16 6h16"></path>
        </svg>
      </button>
    </div>
  </header>  <main>
    <!-- HERO -->
    <section id="home" class="hero" aria-labelledby="hero-title">
      <div class="container hero-grid">
        <div class="hero-text">
          <h1 id="hero-title">
            <span class="greeting">Salut , je suis</span>
            <span class="name">alan franck DOKO DJOULDE</span>
          </h1>
          <p class="lead">
            Etudiand et Développeur web full-stack spécialisé dans la création d'applications web performantes et élégantes. connaissance en <strong>Laravel</strong>, <strong>React</strong>, et <strong>UI/UX</strong>.
            <br>
            Je transforme vos idées en solutions digitales impactantes.
          </p>
          
          <div class="hero-cta">
            <a class="btn btn-primary" href="#projects">
              <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
              </svg>
              Voir mes projets
            </a>
            <a class="btn btn-ghost" href="#contact">
              <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                <path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4.7l-8 5.334L4 8.7V6.297l8 5.333 8-5.333V8.7z"></path>
              </svg>
              Me contacter
            </a>
          </div>

          <ul class="meta">
            <li>
              <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"></path>
              </svg>
              <strong>Localisation:</strong> Nabeul, Tunisie
            </li>
            <li>
              <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
              </svg>
              <strong>Disponibilité:</strong> Freelance 
            </li>
          </ul>
        </div>

        <div class="hero-card" aria-hidden="false">
          <div class="pf-photo" title="Photo de profil">
            <img src="alan (1).jpg" alt="Photo de alan franck doko" style="width:100%;height:100%;object-fit:cover;border-radius:12px;" loading="lazy" />
          </div>
          <div class="pf-info">
            <h3>alan franck DOKO DJOULDE</h3>
            <p>Dév Full-Stack • UI/UX • Créateur de projets</p>
            <div class="socials">
              <a href="https://github.com/shaitr1x" aria-label="Profil GitHub de doko alan" target="_blank" rel="noopener">GitHub</a>
              <a href="https://linkedin.com/in/samiby" aria-label="Profil LinkedIn de doko alan" target="_blank" rel="noopener">LinkedIn</a>
              <a href="https://twitter.com/samiby" aria-label="Profil Twitter de doko alan" target="_blank" rel="noopener">Twitter</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="section">
      <div class="container">
        <h2>À propos</h2>
        <div class="about-grid">
          <div>
            <p>Je suis un développeur passionné par la création d’applications web performantes et simples à utiliser. J’aime transformer des idées en produits concrets, avec une attention particulière pour la maintenabilité et l’expérience utilisateur.</p>
            <ul class="about-list">
              <li><strong>Expérience :</strong> 2+ ans</li>
              <li><strong>Langues :</strong> Français, Anglais</li>
              <li><strong>Outils :</strong> Git, Docker, Figma, Vs studio</li>
            </ul>
          </div>
          <div class="skills-badges">
            <span class="badge">HTML</span>
            <span class="badge">CSS</span>
            <span class="badge">JavaScript</span>
            <span class="badge">PHP</span>
            <span class="badge">Laravel</span>
            <span class="badge">React</span>
            <span class="badge">MySQL</span>
            <span class="badge">java</span>
            <span class="badge">python</span>
          </div>
        </div>
      </div>
    </section>

    <!-- PROJECTS -->
    <section id="projects" class="section">
      <div class="container">
        <h2>Projets</h2>
        <p class="muted">Quelques projets récents — cliquables avec démo / code.</p>

        <div class="projects-grid">
          <!-- Projet 1 -->
          <article class="project-card">
            <div class="thumb" style="background-image:url('https://picsum.photos/seed/p1/800/500')"></div>
            <div class="card-body">
              <h3>Marketplace BissMoi</h3>
              <p>Marketplace multi-vendeurs en PHP MVC & MySQL. Gestion utilisateurs (client, commerçant, admin), panier, dashboard.</p>
              <div class="card-meta">
                <span class="tag">Laravel</span>
                <span class="tag">MySQL</span>
                <a class="link" href="#" target="_blank" rel="noopener">Voir le code</a>
              </div>
            </div>
          </article>

          <!-- Projet 2 -->
          <article class="project-card">
            <div class="thumb" style="background-image:url('https://picsum.photos/seed/p2/800/500')"></div>
            <div class="card-body">
              <h3>App Étudiants JavaFX</h3>
              <p>Application de gestion des étudiants et filières avec interface riche (JavaFX) et export CSV.</p>
              <div class="card-meta">
                <span class="tag">Java</span>
                <span class="tag">JavaFX</span>
                <a class="link" href="#" target="_blank" rel="noopener">Démo</a>
              </div>
            </div>
          </article>

          <!-- Projet 3 -->
          <article class="project-card">
            <div class="thumb" style="background-image:url('https://picsum.photos/seed/p3/800/500')"></div>
            <div class="card-body">
              <h3>Insight - Jeu web</h3>
              <p>Version web d’un jeu social entre amis, gestion parties, upload d'avatars, système de rounds.</p>
              <div class="card-meta">
                <span class="tag">PHP</span>
                <span class="tag">Vanilla JS</span>
                <a class="link" href="#" target="_blank" rel="noopener">En savoir plus</a>
              </div>
            </div>
          </article>

        </div>
      </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="section alt">
      <div class="container">
        <h2>Compétences</h2>
        <div class="skills-grid">
          <div class="skill">
            <h4>Frontend</h4>
            <div class="meter"><span style="width:90%">90%</span></div>
            <p>HTML, CSS, Tailwind, React, animations.</p>
          </div>
          <div class="skill">
            <h4>Backend</h4>
            <div class="meter"><span style="width:85%">85%</span></div>
            <p>PHP, Laravel, API REST, authentification.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="section alt">
      <div class="container">
        <h2>Contact</h2>
        <div class="contact-grid">
          <form id="contactForm" class="contact-form" autocomplete="off" novalidate aria-label="Formulaire de contact">
            <label>
              <span>Nom</span>
              <input type="text" name="name" required placeholder="Ton prénom" aria-required="true">
            </label>
            <label>
              <span>Email</span>
              <input type="email" name="email" required placeholder="exemple@email.com" aria-required="true">
            </label>
            <label>
              <span>Message</span>
              <textarea name="message" rows="6" required placeholder="Dis-moi en quelques lignes..." aria-required="true"></textarea>
            </label>
            <div class="form-actions">
              <button type="submit" class="btn" aria-label="Envoyer le message">Envoyer</button>
              <button type="reset" class="btn btn-ghost" aria-label="Effacer le formulaire">Effacer</button>
            </div>
          </form>

          <aside class="contact-card" aria-hidden="false">
            <h3>Besoin d'un devis ?</h3>
            <p>Envoie-moi un message avec ton projet, le budget estimé et la deadline. Je réponds sous 48h.</p>
            <ul class="contact-list">
              <li><strong>Email :</strong> dokoalanfranck@gmail.com</li>
              <li><strong>Téléphone :</strong> +216 99 185 904</li>
              <li><strong>Disponibilité :</strong> Freelance / CDI</li>
            </ul>
            <div class="socials">
              <a href="https://github.com/shaitr1x" aria-label="GitHub">GitHub</a>
              <a href="#" aria-label="LinkedIn">LinkedIn</a>
            </div>
          </aside>
        </div>
      </div>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container footer-inner">
  <p>© <span id="year"></span> alan franck DOKO DJOULDE — Tous droits réservés.</p>
    </div>
  </footer>

  <script>
    // petites interactions : menu mobile + formulaire demo + année dynamique
    document.getElementById('year').textContent = new Date().getFullYear();

    const navToggle = document.getElementById('navToggle');
    const nav = document.querySelector('.nav');
    navToggle.addEventListener('click', () => {
      const open = nav.classList.toggle('open');
      navToggle.setAttribute('aria-expanded', open);
    });

    // Contact form (demo) : n'envoie rien, affiche une confirmation visuelle
    const contactForm = document.getElementById('contactForm');
    contactForm.addEventListener('submit', function(e){
      e.preventDefault();
      const btn = this.querySelector('button[type="submit"]');
      btn.textContent = 'Envoi...';
      btn.disabled = true;

      // simulation d'envoi
      setTimeout(() => {
        alert('Message prêt — ceci est une démo. Ajoute un backend pour l\'envoyer réellement.');
        btn.textContent = 'Envoyer';
        btn.disabled = false;
        contactForm.reset();
      }, 900);
    });
  </script>
</body>
</html>
