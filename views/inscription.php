<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f5f0">
    <meta name="description" content="Crée ton compte Sneakstock et retrouve tes sneakers préférées.">
    <title>Créer un compte — SNEAKSTOCK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --ink: #171914; --muted: #77796f; --paper: #f6f5f0; --white: #fff; --lime: #d5f15e; --line: #e7e6df; --display: "Space Grotesk", sans-serif; --body: "DM Sans", sans-serif; }
        * { box-sizing: border-box; }
        body { min-height: 100vh; margin: 0; color: var(--ink); background: var(--paper); font-family: var(--body); -webkit-font-smoothing: antialiased; }
        a { color: inherit; text-decoration: none; }
        .announcement { padding: 10px 20px; color: var(--white); background: var(--ink); text-align: center; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; }
        .announcement span, .brand-mark { color: #aebf4c; }
        header { display: flex; align-items: center; justify-content: space-between; width: min(1320px, calc(100% - 64px)); height: 82px; margin: 0 auto; border-bottom: 1px solid var(--line); }
        .brand { font-family: var(--display); font-size: 22px; font-weight: 700; letter-spacing: -.09em; }
        .main-nav { display: flex; align-items: center; gap: 18px; }
        .main-nav a { font-size: 12px; font-weight: 600; white-space: nowrap; }
        .header-link { font-size: 13px; font-weight: 600; }
        main { display: grid; grid-template-columns: 1fr 1fr; width: min(1100px, calc(100% - 64px)); min-height: 650px; margin: 0 auto; padding: 56px 0; }
        .form-side { display: flex; align-items: center; justify-content: center; padding: 32px clamp(20px, 5vw, 70px); }
        .form-content { width: min(100%, 420px); }
        .eyebrow { display: flex; align-items: center; gap: 10px; margin: 0 0 18px; color: var(--muted); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        .eyebrow::before { width: 22px; height: 2px; background: #a5b546; content: ""; }
        h1 { margin: 0 0 12px; font-family: var(--display); font-size: clamp(38px, 5vw, 54px); font-weight: 600; letter-spacing: -.075em; line-height: 1.02; }
        .intro { margin: 0 0 28px; color: var(--muted); font-size: 14px; line-height: 1.7; }
        .field { margin-bottom: 17px; }
        label { display: block; margin-bottom: 8px; font-size: 12px; font-weight: 700; }
        input { width: 100%; height: 49px; padding: 0 14px; border: 1px solid #dcdcd3; border-radius: 2px; outline: none; background: var(--white); color: var(--ink); font: inherit; font-size: 13px; }
        input:focus { border-color: #929d43; box-shadow: 0 0 0 3px rgb(213 241 94 / 30%); }
        .password-wrap { position: relative; }
        .password-wrap input { padding-right: 75px; }
        .password-toggle { position: absolute; top: 50%; right: 12px; padding: 5px; transform: translateY(-50%); border: 0; background: transparent; color: var(--muted); font-size: 11px; font-weight: 700; cursor: pointer; }
        .terms { display: flex; align-items: flex-start; gap: 9px; margin: 20px 0; color: var(--muted); font-size: 11px; line-height: 1.6; }
        .terms input { width: 15px; height: 15px; flex: 0 0 15px; margin: 1px 0 0; accent-color: #929d43; }
        .terms label { margin: 0; font-weight: 400; }
        .terms a, .switch a { font-weight: 700; text-decoration: underline; text-underline-offset: 3px; }
        .submit { display: flex; width: 100%; min-height: 52px; align-items: center; justify-content: space-between; padding: 0 18px; border: 1px solid var(--ink); border-radius: 2px; background: var(--ink); color: var(--white); font: inherit; font-size: 12px; font-weight: 700; cursor: pointer; transition: background .2s, color .2s; }
        .submit:hover { background: transparent; color: var(--ink); }
        .submit span { font-size: 18px; }
        .switch { margin: 20px 0 0; color: var(--muted); text-align: center; font-size: 12px; }
        .visual { position: relative; min-height: 530px; overflow: hidden; background: #c7c5b8; }
        .visual img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
        .visual-caption { position: absolute; right: 18px; bottom: 18px; left: 18px; padding: 18px; background: var(--paper); }
        .visual-caption strong { display: block; margin-bottom: 5px; font-family: var(--display); font-size: 18px; }
        .visual-caption span { color: var(--muted); font-size: 11px; }
        footer { display: flex; align-items: center; justify-content: space-between; gap: 20px; width: min(1320px, calc(100% - 64px)); min-height: 75px; margin: 0 auto; border-top: 1px solid var(--line); color: var(--muted); font-size: 11px; }
        @media (max-width: 760px) { header, footer { width: calc(100% - 36px); } header { height: auto; min-height: 68px; flex-wrap: wrap; gap: 12px; padding: 10px 0; } .main-nav { order: 3; flex: 0 0 100%; gap: 18px; overflow-x: auto; padding-bottom: 4px; } main { grid-template-columns: 1fr; width: calc(100% - 36px); padding: 32px 0; } .form-side { padding: 26px 8px 40px; } .visual { min-height: 300px; } }
        @media (max-width: 460px) { .announcement { font-size: 9px; } footer { align-items: flex-start; flex-direction: column; justify-content: center; padding: 15px 0; } }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { transition-duration: .01ms !important; } }
    </style>
</head>
<body>
    <div class="announcement">Livraison offerte dès 120 € <span>—</span> retours gratuits sous 30 jours</div>
    <header>
        <a class="brand" href="/" aria-label="Sneakstock, accueil">SNEAK<span class="brand-mark">STOCK</span></a>
        <nav class="main-nav" aria-label="Navigation principale">
            <a href="/catalogue">La collection</a>
            <a href="/produit">Un produit</a>
            <a href="/about">Notre histoire</a>
            <a href="/connexion">Connexion</a>
        </nav>
    </header>
    <main>
        <section class="form-side">
            <div class="form-content">
                <p class="eyebrow">Bienvenue dans le club</p>
                <h1>Crée ton compte.</h1>
                <p class="intro">Inscris-toi pour retrouver tes coups de cœur et ne rien manquer des nouvelles sorties.</p>
                <form action="/register" method="post">
                    <div class="field">
                        <label for="name">Nom complet</label>
                        <input id="name" name="name" type="text" autocomplete="name" placeholder="Alex Martin" required>
                    </div>
                    <div class="field">
                        <label for="email">Adresse e-mail</label>
                        <input id="email" name="email" type="email" autocomplete="email" placeholder="alex@exemple.fr" required>
                    </div>
                    <div class="field">
                        <label for="password">Mot de passe</label>
                        <div class="password-wrap">
                            <input id="password" name="password" type="password" autocomplete="new-password" minlength="8" placeholder="8 caractères minimum" required>
                            <button class="password-toggle" type="button" aria-label="Afficher le mot de passe" aria-pressed="false">Afficher</button>
                        </div>
                    </div>
                    <div class="terms">
                        <input id="terms" name="terms" type="checkbox" required>
                        <label for="terms">J'accepte les <a href="#">conditions d'utilisation</a> et la <a href="#">politique de confidentialité</a>.</label>
                    </div>
                    <button class="submit" type="submit">Créer mon compte <span aria-hidden="true">↗</span></button>
                </form>
                <p class="switch">Déjà un compte ? <a href="/connexion">Connecte-toi</a></p>
            </div>
        </section>
        <aside class="visual" aria-label="Sneaker mise en avant">
            <img src="https://images.unsplash.com/photo-1552346154-21d32810aba3?auto=format&amp;fit=crop&amp;w=1000&amp;q=85" alt="Sneaker rouge et blanche en gros plan">
            <div class="visual-caption"><strong>Ton prochain coup de cœur t'attend.</strong><span>Des paires choisies avec soin, pour tous les jours.</span></div>
        </aside>
    </main>
    <footer><a class="brand" href="/" aria-label="Sneakstock, accueil">SNEAK<span class="brand-mark">STOCK</span></a><span>© 2026 Sneakstock. Fait pour les passionnés.</span></footer>
    <script>
        const passwordInput = document.querySelector('#password');
        const passwordToggle = document.querySelector('.password-toggle');
        passwordToggle.addEventListener('click', () => {
            const isVisible = passwordInput.type === 'text';
            passwordInput.type = isVisible ? 'password' : 'text';
            passwordToggle.textContent = isVisible ? 'Afficher' : 'Masquer';
            passwordToggle.setAttribute('aria-label', isVisible ? 'Afficher le mot de passe' : 'Masquer le mot de passe');
            passwordToggle.setAttribute('aria-pressed', String(!isVisible));
        });
    </script>
</body>
</html>
