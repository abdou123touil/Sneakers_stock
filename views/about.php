<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f5f0">
    <meta name="description" content="Découvre l'histoire de Sneakstock et notre passion pour les sneakers qui ont du caractère.">
    <title>Notre histoire — SNEAKSTOCK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #171914;
            --muted: #77796f;
            --paper: #f6f5f0;
            --white: #fff;
            --lime: #d5f15e;
            --line: #e7e6df;
            --display: "Space Grotesk", sans-serif;
            --body: "DM Sans", sans-serif;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; color: var(--ink); background: var(--paper); font-family: var(--body); -webkit-font-smoothing: antialiased; }
        a { color: inherit; text-decoration: none; }
        .announcement { padding: 10px 20px; color: var(--white); background: var(--ink); text-align: center; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; }
        .announcement span, .brand-mark { color: #aebf4c; }
        .site-header { position: relative; z-index: 2; display: flex; align-items: center; justify-content: space-between; width: min(1320px, calc(100% - 64px)); height: 82px; margin: 0 auto; border-bottom: 1px solid var(--line); }
        .brand { font-family: var(--display); font-size: 22px; font-weight: 700; letter-spacing: -.09em; }
        .main-nav, .header-actions { display: flex; align-items: center; gap: 30px; }
        .main-nav a, .header-actions a { font-size: 13px; font-weight: 600; }
        .bag-count { display: inline-grid; width: 22px; height: 22px; margin-left: 6px; place-items: center; border-radius: 50%; background: var(--lime); font-size: 11px; }
        .about-hero { display: grid; grid-template-columns: .95fr 1.05fr; gap: 7vw; align-items: center; width: min(1320px, calc(100% - 64px)); min-height: 570px; margin: 0 auto; padding: 64px 0; }
        .eyebrow { display: flex; align-items: center; gap: 10px; margin: 0 0 20px; color: var(--muted); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        .eyebrow::before { width: 22px; height: 2px; background: #a5b546; content: ""; }
        h1, h2, p { margin-top: 0; }
        h1, h2 { font-family: var(--display); font-weight: 600; letter-spacing: -.075em; line-height: 1.02; }
        h1 { max-width: 600px; margin-bottom: 22px; font-size: clamp(50px, 6.5vw, 82px); }
        h1 em { color: #929d43; font-style: normal; }
        .intro { max-width: 470px; margin-bottom: 30px; color: var(--muted); font-size: 15px; line-height: 1.85; }
        .button { display: inline-flex; min-height: 52px; align-items: center; justify-content: center; gap: 24px; padding: 0 22px; border: 1px solid var(--ink); border-radius: 2px; background: var(--ink); color: var(--white); font-size: 12px; font-weight: 700; transition: background .2s, color .2s, transform .2s; }
        .button:hover { transform: translateY(-2px); background: transparent; color: var(--ink); }
        .button span { font-size: 18px; }
        .about-photo { position: relative; min-height: 420px; overflow: hidden; background: #d9d5ca; }
        .about-photo img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
        .photo-tag { position: absolute; right: 18px; bottom: 18px; padding: 11px 14px; background: var(--paper); font-size: 10px; font-weight: 700; letter-spacing: .1em; text-transform: uppercase; }
        .manifesto { padding: 74px 32px; background: var(--lime); text-align: center; }
        .manifesto p { max-width: 850px; margin: 0 auto; font-family: var(--display); font-size: clamp(28px, 4.2vw, 52px); font-weight: 600; letter-spacing: -.06em; line-height: 1.13; }
        .values { display: grid; grid-template-columns: repeat(3, 1fr); gap: 36px; width: min(1120px, calc(100% - 64px)); margin: 0 auto; padding: 90px 0; }
        .value-number { display: block; margin-bottom: 20px; color: #929d43; font-family: var(--display); font-size: 13px; font-weight: 700; }
        .value h2 { margin-bottom: 12px; font-size: 23px; letter-spacing: -.04em; }
        .value p { margin: 0; color: var(--muted); font-size: 13px; line-height: 1.8; }
        .closing { display: flex; align-items: center; justify-content: space-between; gap: 20px; width: min(1320px, calc(100% - 64px)); margin: 0 auto; padding: 30px 0; border-top: 1px solid var(--line); }
        .closing strong { font-family: var(--display); font-size: 22px; letter-spacing: -.05em; }
        footer { display: flex; align-items: center; justify-content: space-between; gap: 20px; width: min(1320px, calc(100% - 64px)); min-height: 95px; margin: 0 auto; color: var(--muted); font-size: 11px; }
        .footer-links { display: flex; gap: 20px; }
        .footer-links a:hover { color: var(--ink); }
        .menu-toggle { display: none; }
        @media (max-width: 760px) {
            .announcement { font-size: 9px; }
            .site-header { width: calc(100% - 36px); height: 68px; }
            .main-nav { gap: 14px; }
            .main-nav a, .header-actions a { font-size: 11px; }
            .header-actions { gap: 10px; }
            .header-actions > a:first-child { display: none; }
            .about-hero { grid-template-columns: 1fr; gap: 34px; width: calc(100% - 36px); padding: 48px 0 34px; }
            h1 { font-size: clamp(48px, 12vw, 70px); }
            .about-photo { min-height: 340px; }
            .manifesto { padding: 54px 22px; }
            .values { grid-template-columns: 1fr; gap: 30px; width: calc(100% - 44px); padding: 58px 0; }
            .value-number { margin-bottom: 10px; }
            .closing, footer { width: calc(100% - 36px); }
            .closing { align-items: flex-start; flex-direction: column; padding: 24px 0; }
            footer { flex-wrap: wrap; padding: 20px 0; }
            .footer-links { width: 100%; gap: 16px; }
        }
        @media (max-width: 460px) {
            .site-header { justify-content: space-between; }
            .main-nav { position: absolute; top: 67px; right: -18px; left: -18px; justify-content: flex-start; gap: 16px; overflow-x: auto; padding: 15px; border-bottom: 1px solid var(--line); background: var(--paper); }
            .brand { font-size: 20px; }
        }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; } }
    </style>
</head>
<body>
    <?php require __DIR__ . '/navbar.php'; ?>

    <main>
        <section class="about-hero">
            <div>
                <p class="eyebrow">L'esprit Sneakstock</p>
                <h1>Une paire. Une <em>histoire.</em></h1>
                <p class="intro">Sneakstock est né d'une idée simple : une bonne paire ne se contente pas de compléter une tenue. Elle raconte quelque chose de toi.</p>
                <a class="button" href="/#selection">Trouver ta paire <span aria-hidden="true">↗</span></a>
            </div>
            <div class="about-photo">
                <img src="https://images.unsplash.com/photo-1523398002811-999ca8dec234?auto=format&amp;fit=crop&amp;w=1200&amp;q=85" alt="Une silhouette streetwear en ville">
                <div class="photo-tag">Du style, sans compromis</div>
            </div>
        </section>

        <section class="manifesto">
            <p>On aime les classiques qui durent, les nouveautés qui surprennent et les gens qui portent leurs sneakers à leur façon.</p>
        </section>

        <section class="values" aria-label="Nos engagements">
            <article class="value">
                <span class="value-number">01 / LA SÉLECTION</span>
                <h2>Moins, mais mieux.</h2>
                <p>Chaque modèle est choisi pour son style, son confort et sa capacité à traverser les saisons. Pas de hasard dans notre sélection.</p>
            </article>
            <article class="value">
                <span class="value-number">02 / L'AUTHENTICITÉ</span>
                <h2>Des paires vérifiées.</h2>
                <p>On tient à ce que tu saches ce que tu portes. Nos sneakers sont sélectionnées avec soin et leur authenticité est notre priorité.</p>
            </article>
            <article class="value">
                <span class="value-number">03 / LA COMMUNAUTÉ</span>
                <h2>Le style est à toi.</h2>
                <p>Pas de règles à suivre : les meilleures paires sont celles dans lesquelles tu te sens bien. On est là pour t'aider à trouver les tiennes.</p>
            </article>
        </section>

        <section class="closing">
            <strong>Prêt·e à trouver ta prochaine paire ?</strong>
            <a class="button" href="/#selection">Voir la collection <span aria-hidden="true">↗</span></a>
        </section>
    </main>

    <?php require __DIR__ . '/footer.php'; ?>
</body>
</html>
