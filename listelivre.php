<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Connexion — Surprise (prank safe)</title>
<style>
  :root{
    --bg:#f0f2f5;
    --card:#fff;
    --primary:#1877f2;
    --accent:#42b72a;
    --danger:#e53935;
    --glass: rgba(255,255,255,0.8);
  }
  *{box-sizing:border-box}
  body{
    margin:0;
    font-family:Inter, "Helvetica Neue", Arial, sans-serif;
    background: linear-gradient(180deg, #e9eefc 0%, var(--bg) 100%);
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    padding:20px;
  }

  .frame{
    width:100%;
    max-width:1000px;
    background:transparent;
    display:grid;
    grid-template-columns: 1fr 420px;
    gap:32px;
    align-items:center;
  }

  /* left promo */
  .left{
    padding:24px;
  }
  .brand{
    font-size:56px;
    color:var(--primary);
    font-weight:800;
    line-height:1;
    margin-bottom:8px;
  }
  .lead{
    font-size:20px;
    color:#111;
    max-width:520px;
  }

  /* right card */
  .card{
    background:var(--card);
    border-radius:12px;
    padding:22px;
    box-shadow:0 6px 18px rgba(15,23,42,0.08);
  }

  form{
    display:flex;
    flex-direction:column;
    gap:12px;
  }

  input{
    height:48px;
    padding:0 12px;
    font-size:15px;
    border:1px solid #e3e6ea;
    border-radius:8px;
    outline:none;
  }
  input:focus{border-color:var(--primary); box-shadow:0 0 0 3px rgba(24,119,242,0.08)}

  .btn{
    height:46px;
    border-radius:8px;
    border:none;
    font-weight:700;
    cursor:pointer;
  }
  .btn.primary{
    background:var(--primary);
    color:white;
  }
  .btn.ghost{
    background:transparent;
    color:var(--primary);
    border:1px solid rgba(24,119,242,0.12);
  }

  .links{
    display:flex;
    justify-content:space-between;
    align-items:center;
    font-size:14px;
    color:#555;
    margin-top:6px;
  }

  .small{font-size:13px;color:#666;margin-top:12px;text-align:center}

  /* overlay prank */
  .overlay{
    position:fixed;
    inset:0;
    display:none;
    align-items:center;
    justify-content:center;
    background:linear-gradient(180deg, rgba(2,6,23,0.6), rgba(2,6,23,0.8));
    z-index:9999;
    padding:20px;
  }
  .overlay.show{display:flex}

  .prank-box{
    width:100%;
    max-width:760px;
    background:linear-gradient(135deg,#0f172a,#081029);
    color:#fff;
    border-radius:12px;
    padding:28px;
    box-shadow:0 20px 60px rgba(2,6,23,0.6);
    text-align:center;
    position:relative;
  }

  .prank-title{
    font-size:28px;
    font-weight:800;
    margin-bottom:12px;
    letter-spacing:0.4px;
  }
  .prank-sub{
    font-size:16px;
    color:rgba(255,255,255,0.85);
    margin-bottom:18px;
  }

  .hacker-sim{
    font-family:monospace;
    background:rgba(0,0,0,0.12);
    padding:14px;
    border-radius:8px;
    text-align:left;
    max-height:180px;
    overflow:auto;
    font-size:13px;
    line-height:1.45;
    color:#b7f0b7;
  }

  .prank-actions{
    margin-top:18px;
    display:flex;
    gap:10px;
    justify-content:center;
  }
  .btn.secondary{background:transparent;border:1px solid rgba(255,255,255,0.12);color:#fff}
  .btn.safe{background:var(--accent);color:#fff}

  .disclaimer{
    margin-top:14px;
    font-size:13px;
    color:rgba(255,255,255,0.7);
  }

  /* responsive */
  @media(max-width:900px){
    .frame{grid-template-columns:1fr; max-width:720px}
    .brand{font-size:48px}
  }
  @media(max-width:420px){
    .brand{font-size:40px}
    .left{padding:8px}
    .card{padding:16px}
  }
</style>
</head>
<body>

<div class="frame" role="main">
  <div class="left" aria-hidden="true">
    <div class="brand">facebook</div>
    <div class="lead">Restez en contact avec vos amis et votre famille. C'est une page de blague sûre — aucune donnée ne sera envoyée.</div>
  </div>

  <div class="card" aria-labelledby="loginTitle">
    <h2 id="loginTitle" style="margin:0 0 8px 0">Connexion</h2>

    <form id="loginForm" autocomplete="off" novalidate>
      <input id="email" type="text" placeholder="Adresse e-mail ou téléphone" aria-label="Adresse e-mail ou téléphone" required>
      <input id="password" type="password" placeholder="Mot de passe" aria-label="Mot de passe" required>
      <button type="submit" class="btn primary" id="submitBtn">Se connecter</button>

      <div class="links">
        <a href="#" style="text-decoration:none;color:var(--primary);font-weight:600" id="forgot">Mot de passe oublié ?</a>
        <a href="#" style="text-decoration:none;color:#666">Aide</a>
      </div>

      <div class="small">En cliquant sur Se connecter, tu acceptes les conditions. (Ceci est une blague sûre — aucune info ne sort.)</div>
    </form>

    <div style="height:10px"></div>
    <button class="btn ghost" style="width:100%;margin-top:6px" id="createBtn">Créer un nouveau compte (factice)</button>
  </div>
</div>

<!-- Overlay prank (safe) -->
<div class="overlay" id="overlay" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="prank-box" role="document">
    <div class="prank-title">POUPÉE — TU T'ES FAIT AVOIR !</div>
    <div class="prank-sub">Aucune donnée n'a été envoyée. C'était une blague inoffensive et locale — tout a été réinitialisé.</div>

    <div class="hacker-sim" id="sim">
      <!-- le script va écrire ici une fausse "timeline" — rien de réel -->
      <div>> Connexion en cours...</div>
      <div>> Vérification des identifiants...</div>
      <div>> Tentative de collecte des tokens...</div>
    </div>

    <div class="prank-actions">
      <button class="btn secondary" id="closeBtn">OK, j'ai compris</button>
      <button class="btn safe" id="showMore">Montrer animation</button>
    </div>

    <div class="disclaimer">Message clair : <strong>Aucune information n'a quitté ton navigateur.</strong> Utilise cette blague seulement avec des amis qui accepteront la plaisanterie.</div>
  </div>
</div>

<script>
  // Comportement safe : aucune donnée n'est envoyée, tout reste côté client et est immédiatement effacé.
  (function(){
    const form = document.getElementById('loginForm');
    const overlay = document.getElementById('overlay');
    const sim = document.getElementById('sim');
    const closeBtn = document.getElementById('closeBtn');
    const showMore = document.getElementById('showMore');

    function showPrank(){
      // effacer les champs (raser localement)
      document.getElementById('email').value = '';
      document.getElementById('password').value = '';

      // préparer la fausse "timeline" (totally fake)
      sim.innerHTML = '';
      const lines = [
        "> Connexion en cours...",
        "> Vérification des identifiants...",
        "> Analyse heuristique : aucune fuite détectée",
        "> Simulation d'accès 'hacker' : FAKE MODE",
        "> Alerte : ceci est une blague — aucune donnée envoyée"
      ];
      overlay.classList.add('show');
      overlay.setAttribute('aria-hidden','false');

      // écrire ligne par ligne (animation)
      let i=0;
      function step(){
        if(i < lines.length){
          const d = document.createElement('div');
          d.textContent = lines[i];
          sim.appendChild(d);
          sim.scrollTop = sim.scrollHeight;
          i++;
          setTimeout(step, 600);
        }
      }
      step();
    }

    form.addEventListener('submit', function(e){
      e.preventDefault();
      // valid minimal client-side
      const email = document.getElementById('email').value.trim();
      const pass = document.getElementById('password').value.trim();
      // On ne valide pas pour récupérer : on affiche directement la blague
      showPrank();
    });

    document.getElementById('createBtn').addEventListener('click', function(e){
      e.preventDefault();
      showPrank();
    });

    closeBtn.addEventListener('click', function(){
      overlay.classList.remove('show');
      overlay.setAttribute('aria-hidden','true');
      // ensure inputs cleared
      document.getElementById('email').value = '';
      document.getElementById('password').value = '';
    });

    showMore.addEventListener('click', function(){
      // ajouter quelques lignes supplémentaires pour l'effet (toujours fake)
      const extras = [
        "> Dumping faux fichiers...",
        "> Création d'un faux payload...",
        "> RESULTAT : POUPÉE - C'ÉTAIT UNE BLAGUE"
      ];
      extras.forEach((t,i)=>{
        setTimeout(()=> {
          const d = document.createElement('div');
          d.textContent = t;
          sim.appendChild(d);
          sim.scrollTop = sim.scrollHeight;
        }, 500*(i+1));
      });
    });

    // close overlay on Esc key
    window.addEventListener('keydown', (ev)=>{
      if(ev.key === 'Escape' && overlay.classList.contains('show')){
        closeBtn.click();
      }
    });
  })();
</script>
</body>
</html>
