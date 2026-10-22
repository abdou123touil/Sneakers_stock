<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f5f0">
    <meta name="description" content="Sneakstock, une sélection de sneakers iconiques et de nouveautés à porter tous les jours.">
    <title>SNEAKSTOCK — Des paires qui ont du caractère</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            color-scheme: light;
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
        body {
            margin: 0;
            color: var(--ink);
            background: var(--paper);
            font-family: var(--body);
            -webkit-font-smoothing: antialiased;
        }

        a { color: inherit; text-decoration: none; }
        button { color: inherit; font: inherit; }
        .announcement {
            padding: 10px 20px;
            color: var(--white);
            background: var(--ink);
            text-align: center;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
        }
        .announcement span { color: var(--lime); }
        .site-header {
            position: relative;
            z-index: 2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: min(1320px, calc(100% - 64px));
            height: 82px;
            margin: 0 auto;
            border-bottom: 1px solid var(--line);
        }
        .brand {
            font-family: var(--display);
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -.09em;
        }
        .brand-mark { color: #929d43; }
        .main-nav { display: flex; gap: 36px; }
        .main-nav a, .header-actions a {
            font-size: 13px;
            font-weight: 600;
        }
        .main-nav a { transition: opacity .2s; }
        .main-nav a:hover { opacity: .55; }
        .header-actions { display: flex; align-items: center; gap: 22px; }
        .bag-link { display: inline-flex; align-items: center; gap: 8px; }
        .bag-count {
            display: grid;
            width: 22px;
            height: 22px;
            place-items: center;
            border-radius: 50%;
            background: var(--lime);
            font-size: 11px;
        }
        .menu-toggle {
            display: none;
            padding: 8px;
            border: 0;
            background: transparent;
            cursor: pointer;
        }

        .hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 590px;
            max-width: 1440px;
            margin: 0 auto;
            padding: 34px 32px 52px;
        }
        .hero-copy {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 50px clamp(12px, 5vw, 76px) 50px 3.5vw;
        }
        .eyebrow {
            display: flex;
            align-items: center;
            gap: 10px;
            margin: 0 0 24px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }
        .eyebrow::before {
            width: 22px;
            height: 2px;
            background: #a5b546;
            content: "";
        }
        h1, h2, h3, p { margin-top: 0; }
        h1 {
            max-width: 590px;
            margin-bottom: 22px;
            font-family: var(--display);
            font-size: clamp(48px, 6.3vw, 88px);
            font-weight: 600;
            letter-spacing: -.085em;
            line-height: .98;
        }
        h1 em { color: #929d43; font-style: normal; }
        .hero-copy > p:not(.eyebrow) {
            max-width: 390px;
            margin-bottom: 32px;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.8;
        }
        .button {
            display: inline-flex;
            min-height: 52px;
            align-items: center;
            justify-content: center;
            gap: 24px;
            padding: 0 22px;
            border: 1px solid var(--ink);
            border-radius: 2px;
            background: var(--ink);
            color: var(--white);
            font-size: 12px;
            font-weight: 700;
            transition: background .2s, color .2s, transform .2s;
        }
        .button:hover { transform: translateY(-2px); background: transparent; color: var(--ink); }
        .button .arrow { font-size: 18px; line-height: 1; }
        .hero-note {
            display: flex;
            align-items: center;
            gap: 11px;
            margin-top: 45px;
            color: var(--muted);
            font-size: 11px;
        }
        .avatar-stack { display: flex; padding-left: 5px; }
        .avatar-stack span {
            display: grid;
            width: 27px;
            height: 27px;
            margin-left: -5px;
            place-items: center;
            border: 2px solid var(--paper);
            border-radius: 50%;
            background: #d6c2a9;
            color: var(--ink);
            font-size: 8px;
            font-weight: 700;
        }
        .avatar-stack span:nth-child(2) { background: #aab29c; }
        .avatar-stack span:nth-child(3) { background: #d9aaa0; }
        .hero-photo {
            position: relative;
            min-height: 500px;
            overflow: hidden;
            background: #d9d5ca;
        }
        .hero-photo img {
            width: 100%;
            height: 100%;
            position: absolute;
            inset: 0;
            object-fit: cover;
            object-position: center;
        }
        .photo-tag {
            position: absolute;
            right: 20px;
            bottom: 20px;
            padding: 11px 14px;
            background: var(--paper);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }
        .photo-tag span { color: #929d43; }

        .ticker {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: clamp(20px, 4vw, 56px);
            min-height: 62px;
            padding: 12px 24px;
            background: var(--lime);
            font-family: var(--display);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .06em;
            text-transform: uppercase;
        }
        .ticker span { white-space: nowrap; }
        .ticker .star { font-size: 17px; }

        .section {
            width: min(1320px, calc(100% - 64px));
            margin: 0 auto;
            padding: 98px 0;
        }
        .section-heading {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 34px;
        }
        .section-heading .eyebrow { margin-bottom: 13px; }
        .section-heading h2, .story-copy h2 {
            margin-bottom: 0;
            font-family: var(--display);
            font-size: clamp(34px, 4vw, 52px);
            font-weight: 600;
            letter-spacing: -.07em;
            line-height: 1.05;
        }
        .text-link {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 7px;
            border-bottom: 1px solid var(--ink);
            font-size: 12px;
            font-weight: 700;
        }
        .product-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 18px; }
        .product-card { min-width: 0; }
        .product-image {
            position: relative;
            aspect-ratio: 4 / 4.5;
            overflow: hidden;
            background: #eceae3;
        }
        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .45s;
        }
        .product-card:hover .product-image img { transform: scale(1.05); }
        .product-label {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 7px 9px;
            background: var(--white);
            font-size: 9px;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }
        .add-button {
            position: absolute;
            right: 12px;
            bottom: 12px;
            display: grid;
            width: 38px;
            height: 38px;
            place-items: center;
            border: 0;
            border-radius: 50%;
            background: var(--white);
            font-size: 21px;
            cursor: pointer;
            transition: background .2s, transform .2s;
        }
        .add-button:hover { transform: rotate(90deg); background: var(--lime); }
        .product-info { display: flex; justify-content: space-between; gap: 12px; padding-top: 14px; }
        .product-info h3 { margin-bottom: 5px; font-size: 13px; font-weight: 700; }
        .product-info p { margin-bottom: 0; color: var(--muted); font-size: 11px; }
        .product-price { padding-top: 1px; font-size: 12px; font-weight: 700; white-space: nowrap; }

        .story {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 420px;
            background: #e8e7df;
        }
        .story-photo { min-height: 360px; overflow: hidden; }
        .story-photo img { width: 100%; height: 100%; object-fit: cover; }
        .story-copy {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: clamp(36px, 7vw, 90px);
        }
        .story-copy .eyebrow { margin-bottom: 18px; }
        .story-copy h2 { max-width: 460px; margin-bottom: 18px; }
        .story-copy > p:not(.eyebrow) {
            max-width: 390px;
            margin-bottom: 26px;
            color: var(--muted);
            font-size: 14px;
            line-height: 1.8;
        }
        .story .button:hover { color: var(--ink); }

        .benefits {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            border-bottom: 1px solid var(--line);
        }
        .benefit { padding: 24px; text-align: center; }
        .benefit + .benefit { border-left: 1px solid var(--line); }
        .benefit strong { display: block; margin-bottom: 7px; font-size: 12px; }
        .benefit p { margin: 0; color: var(--muted); font-size: 11px; }
        footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            width: min(1320px, calc(100% - 64px));
            min-height: 105px;
            margin: 0 auto;
            color: var(--muted);
            font-size: 11px;
        }
        footer .brand { color: var(--ink); }
        .footer-links { display: flex; gap: 22px; }
        .footer-links a:hover { color: var(--ink); }

        @media (max-width: 760px) {
            .announcement { font-size: 9px; }
            .site-header { width: calc(100% - 36px); height: 68px; }
            .menu-toggle { display: block; order: -1; }
            .main-nav {
                position: absolute;
                top: 67px;
                right: -18px;
                left: -18px;
                display: none;
                flex-direction: column;
                gap: 0;
                padding: 10px 18px 18px;
                border-bottom: 1px solid var(--line);
                background: var(--paper);
            }
            .main-nav.is-open { display: flex; }
            .main-nav a { padding: 12px 0; }
            .header-actions { gap: 10px; }
            .header-actions > a:first-child { display: none; }
            .hero {
                grid-template-columns: 1fr;
                min-height: 0;
                padding: 24px 18px 30px;
            }
            .hero-copy { padding: 35px 8px 34px; }
            h1 { max-width: 500px; font-size: clamp(52px, 13vw, 78px); }
            .hero-copy > p:not(.eyebrow) { font-size: 14px; }
            .hero-note { margin-top: 28px; }
            .hero-photo { min-height: 390px; }
            .ticker { justify-content: flex-start; overflow: hidden; gap: 24px; font-size: 10px; }
            .ticker span:nth-of-type(n+5) { display: none; }
            .section { width: calc(100% - 36px); padding: 68px 0; }
            .section-heading { align-items: flex-start; }
            .section-heading h2 { font-size: 38px; }
            .text-link { margin-top: 28px; font-size: 10px; }
            .product-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 27px 12px; }
            .product-label { top: 8px; left: 8px; padding: 6px; font-size: 8px; }
            .add-button { right: 8px; bottom: 8px; width: 34px; height: 34px; }
            .product-info { gap: 6px; }
            .product-info h3 { font-size: 11px; }
            .product-info p { font-size: 10px; }
            .product-price { font-size: 11px; }
            .story { grid-template-columns: 1fr; }
            .story-photo { min-height: 280px; }
            .story-copy { padding: 42px 24px 48px; }
            .benefits { grid-template-columns: 1fr; padding: 12px 0; }
            .benefit { padding: 17px 10px; }
            .benefit + .benefit { border-top: 1px solid var(--line); border-left: 0; }
            footer { width: calc(100% - 36px); flex-wrap: wrap; padding: 24px 0; }
            .footer-links { width: 100%; gap: 17px; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; }
        }
    </style>
</head>
<body>
    <?php require __DIR__ . '/navbar.php'; ?>

    <main>
        <section class="hero" id="collection">
            <div class="hero-copy">
                <p class="eyebrow">La paire du moment</p>
                <h1>Prends de la <em>hauteur.</em></h1>
                <p>Des sneakers choisies avec soin, pensées pour t'accompagner partout. Les classiques d'hier, les coups de cœur de demain.</p>
                <a class="button" href="#selection">Découvrir la collection <span class="arrow" aria-hidden="true">↗</span></a>
                <div class="hero-note">
                    <div class="avatar-stack" aria-hidden="true"><span>ML</span><span>AK</span><span>JD</span></div>
                    <span>Rejoins les 2 400 passionnés de sneakers</span>
                </div>
            </div>
            <div class="hero-photo">
                <img src="https://images.unsplash.com/photo-1552346154-21d32810aba3?auto=format&amp;fit=crop&amp;w=1200&amp;q=85" alt="Sneaker rouge et blanche photographiée en gros plan">
                <div class="photo-tag">Sélection <span>01 / 24</span></div>
            </div>
        </section>

        <div class="ticker" aria-label="Nos engagements">
            <span>Du style, sans compromis</span><span class="star" aria-hidden="true">✳</span>
            <span>Des paires authentiques</span><span class="star" aria-hidden="true">✳</span>
            <span>Livraison offerte dès 120 €</span><span class="star" aria-hidden="true">✳</span>
            <span>Du style, sans compromis</span>
        </div>

        <section class="section" id="selection">
            <div class="section-heading">
                <div>
                    <p class="eyebrow">À ne pas manquer</p>
                    <h2>La sélection du moment</h2>
                </div>
                <a class="text-link" href="#histoire">Tout voir <span aria-hidden="true">↗</span></a>
            </div>
            <div class="product-grid">
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Sneaker rouge et blanche" loading="lazy">
                        <span class="product-label">Best-seller</span>
                        <button class="add-button" type="button" aria-label="Ajouter la Air Max 90 à la sélection">+</button>
                    </div>
                    <div class="product-info"><div><h3>Air Max 90</h3><p>Red / White</p></div><span class="product-price">149 €</span></div>
                </article>
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Sneaker blanche à semelle épaisse" loading="lazy">
                        <span class="product-label">Nouveau</span>
                        <button class="add-button" type="button" aria-label="Ajouter la Court Vision à la sélection">+</button>
                    </div>
                    <div class="product-info"><div><h3>Court Vision</h3><p>White / Sail</p></div><span class="product-price">119 €</span></div>
                </article>
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1608231387042-66d1773070a5?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Sneaker lifestyle au design rétro" loading="lazy">
                        <span class="product-label">Édition limitée</span>
                        <button class="add-button" type="button" aria-label="Ajouter la Retro Runner à la sélection">+</button>
                    </div>
                    <div class="product-info"><div><h3>Retro Runner</h3><p>Vintage / Cream</p></div><span class="product-price">135 €</span></div>
                </article>
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1495555961986-6d4c1ecb7be3?auto=format&amp;fit=crop&amp;w=700&amp;q=80" alt="Sneaker urbaine noire et blanche" loading="lazy">
                        <span class="product-label">Coup de cœur</span>
                        <button class="add-button" type="button" aria-label="Ajouter la Street Low à la sélection">+</button>
                    </div>
                    <div class="product-info"><div><h3>Street Low</h3><p>Black / Off-white</p></div><span class="product-price">110 €</span></div>
                </article>
            </div>
        </section>

        <section class="story" id="histoire">
            <div class="story-photo">
                <img src="https://images.unsplash.com/photo-1523398002811-999ca8dec234?auto=format&amp;fit=crop&amp;w=1100&amp;q=80" alt="Style streetwear décontracté" loading="lazy">
            </div>
            <div class="story-copy">
                <p class="eyebrow">Bien dans tes baskets</p>
                <h2>La rue est ton terrain de jeu.</h2>
                <p>On croit aux belles paires, aux looks qui te ressemblent et aux petits détails qui changent tout. Notre sélection évolue, ton style aussi.</p>
                <a class="button" href="#selection">Trouver ma prochaine paire <span class="arrow" aria-hidden="true">↗</span></a>
            </div>
        </section>

        <section class="section" aria-label="Nos services">
            <div class="benefits">
                <div class="benefit"><strong>Livraison offerte</strong><p>Dès 120 € d'achat, partout en France</p></div>
                <div class="benefit"><strong>Retours faciles</strong><p>Tu as 30 jours pour changer d'avis</p></div>
                <div class="benefit"><strong>100 % authentique</strong><p>Chaque paire est vérifiée avec soin</p></div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/footer.php'; ?>

    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const mainNav = document.querySelector('.main-nav');
        const bagCount = document.querySelector('.bag-count');
        let selectedPairs = 0;

        menuToggle.addEventListener('click', () => {
            const isOpen = mainNav.classList.toggle('is-open');
            menuToggle.setAttribute('aria-expanded', String(isOpen));
        });

        mainNav.querySelectorAll('a').forEach((link) => {
            link.addEventListener('click', () => {
                mainNav.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
            });
        });

        document.querySelectorAll('.add-button').forEach((button) => {
            button.addEventListener('click', () => {
                selectedPairs += 1;
                bagCount.textContent = String(selectedPairs);
                document.querySelector('.bag-link').setAttribute('aria-label', `Panier, ${selectedPairs} article${selectedPairs > 1 ? 's' : ''}`);
                button.textContent = '✓';
                button.setAttribute('aria-label', 'Ajouté à la sélection');
            });
        });
    </script>
</body>
</html>