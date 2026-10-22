<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f5f0">
    <title>Page introuvable — SNEAKSTOCK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --ink: #171914; --muted: #77796f; --paper: #f6f5f0; --white: #fff; --lime: #d5f15e; --display: "Space Grotesk", sans-serif; --body: "DM Sans", sans-serif; }
        * { box-sizing: border-box; }
        body { display: flex; min-height: 100vh; flex-direction: column; margin: 0; color: var(--ink); background: var(--paper); font-family: var(--body); -webkit-font-smoothing: antialiased; }
        a { color: inherit; text-decoration: none; }
        .announcement { padding: 10px 20px; color: var(--white); background: var(--ink); text-align: center; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; }
        .announcement span, .brand-mark { color: #aebf4c; }
        header { display: flex; align-items: center; justify-content: space-between; width: min(1320px, calc(100% - 64px)); height: 82px; margin: 0 auto; border-bottom: 1px solid #e7e6df; }
        .brand { font-family: var(--display); font-size: 22px; font-weight: 700; letter-spacing: -.09em; }
        .main-nav { display: flex; align-items: center; gap: 18px; }
        .main-nav a { font-size: 12px; font-weight: 600; white-space: nowrap; }
        .header-link { font-size: 13px; font-weight: 600; }
        main { display: grid; flex: 1; place-items: center; padding: 60px 20px; text-align: center; }
        .error-content { max-width: 590px; }
        .error-code { margin: 0 0 12px; color: #929d43; font-family: var(--display); font-size: clamp(110px, 23vw, 210px); font-weight: 700; letter-spacing: -.11em; line-height: .9; }
        .eyebrow { margin: 25px 0 12px; color: var(--muted); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        h1 { margin: 0 0 14px; font-family: var(--display); font-size: clamp(32px, 5vw, 48px); font-weight: 600; letter-spacing: -.07em; }
        .message { max-width: 390px; margin: 0 auto 28px; color: var(--muted); font-size: 14px; line-height: 1.8; }
        .button { display: inline-flex; min-height: 52px; align-items: center; justify-content: center; gap: 24px; padding: 0 22px; border: 1px solid var(--ink); border-radius: 2px; background: var(--ink); color: var(--white); font-size: 12px; font-weight: 700; transition: background .2s, color .2s, transform .2s; }
        .button:hover { transform: translateY(-2px); background: transparent; color: var(--ink); }
        .button span { font-size: 18px; }
        footer { display: flex; align-items: center; justify-content: space-between; gap: 20px; width: min(1320px, calc(100% - 64px)); min-height: 95px; margin: 0 auto; color: var(--muted); font-size: 11px; }
        @media (max-width: 600px) { .announcement { font-size: 9px; } header, footer { width: calc(100% - 36px); } header { height: auto; min-height: 68px; flex-wrap: wrap; gap: 12px; padding: 10px 0; } .main-nav { order: 3; flex: 0 0 100%; gap: 18px; overflow-x: auto; padding-bottom: 4px; } footer { align-items: flex-start; flex-direction: column; justify-content: center; padding: 18px 0; } }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { transition-duration: .01ms !important; } }
    </style>
</head>
<body>
    <?php require __DIR__ . '/navbar.php'; ?>
    <main>
        <div class="error-content">
            <p class="error-code" aria-label="Erreur 404">404</p>
            <p class="eyebrow">Oups, mauvaise direction</p>
            <h1>Cette page a pris la tangente.</h1>
            <p class="message">Le lien est peut-être cassé, ou cette page n'existe plus. Pas de panique, on retrouve vite le bon chemin.</p>
            <a class="button" href="/">Retour à l'accueil <span aria-hidden="true">↗</span></a>
        </div>
    </main>
    <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
