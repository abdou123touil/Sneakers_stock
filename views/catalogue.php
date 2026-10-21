<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f5f0">
    <meta name="description" content="Explore la sélection de sneakers Sneakstock : modèles iconiques, nouveautés et coups de cœur.">
    <title>La collection — SNEAKSTOCK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --ink: #171914; --muted: #77796f; --paper: #f6f5f0; --white: #fff; --lime: #d5f15e; --line: #e7e6df; --display: "Space Grotesk", sans-serif; --body: "DM Sans", sans-serif; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); background: var(--paper); font-family: var(--body); -webkit-font-smoothing: antialiased; }
        a { color: inherit; text-decoration: none; }
        button, input, select { font: inherit; }
        .announcement { padding: 10px 20px; color: var(--white); background: var(--ink); text-align: center; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; }
        .announcement span, .brand-mark { color: #aebf4c; }
        header { display: flex; align-items: center; justify-content: space-between; width: min(1320px, calc(100% - 64px)); height: 82px; margin: 0 auto; border-bottom: 1px solid var(--line); }
        .brand { font-family: var(--display); font-size: 22px; font-weight: 700; letter-spacing: -.09em; }
        .main-nav { display: flex; align-items: center; gap: 20px; }
        .main-nav a { font-size: 12px; font-weight: 600; white-space: nowrap; }
        .bag-count { display: inline-grid; width: 22px; height: 22px; margin-left: 6px; place-items: center; border-radius: 50%; background: var(--lime); font-size: 11px; }
        main { width: min(1320px, calc(100% - 64px)); margin: 0 auto; padding: 58px 0 90px; }
        .eyebrow { display: flex; align-items: center; gap: 10px; margin: 0 0 15px; color: var(--muted); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        .eyebrow::before { width: 22px; height: 2px; background: #a5b546; content: ""; }
        h1, h2, p { margin-top: 0; }
        h1 { margin-bottom: 12px; font-family: var(--display); font-size: clamp(42px, 6vw, 68px); font-weight: 600; letter-spacing: -.08em; line-height: 1; }
        .intro { margin-bottom: 32px; color: var(--muted); font-size: 14px; }
        .toolbar { display: flex; align-items: center; justify-content: space-between; gap: 18px; margin-bottom: 28px; padding: 17px 0; border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); }
        .filters { display: flex; flex-wrap: wrap; gap: 9px; }
        .filter { min-height: 36px; padding: 0 14px; border: 1px solid var(--line); border-radius: 20px; background: transparent; color: var(--muted); font-size: 11px; font-weight: 600; cursor: pointer; transition: background .2s, color .2s, border-color .2s; }
        .filter:hover, .filter[aria-pressed="true"] { border-color: var(--ink); background: var(--ink); color: var(--white); }
        .sort { min-height: 36px; padding: 0 11px; border: 1px solid var(--line); background: var(--paper); color: var(--ink); font-size: 11px; }
        .result-count { margin: 0 0 14px; color: var(--muted); font-size: 11px; }
        .product-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 32px 18px; }
        .product-card[hidden] { display: none; }
        .product-image { position: relative; aspect-ratio: 4 / 4.5; overflow: hidden; background: #eceae3; }
        .product-image img { width: 100%; height: 100%; object-fit: cover; transition: transform .45s; }
        .product-card:hover .product-image img { transform: scale(1.05); }
        .product-label { position: absolute; top: 12px; left: 12px; padding: 7px 9px; background: var(--white); font-size: 9px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
        .product-info { display: flex; justify-content: space-between; gap: 10px; padding-top: 14px; }
        .product-info h2 { margin: 0 0 5px; font-size: 13px; font-weight: 700; letter-spacing: 0; }
        .product-info p { margin: 0; color: var(--muted); font-size: 11px; }
        .price { font-size: 12px; font-weight: 700; white-space: nowrap; }
        footer { display: flex; align-items: center; justify-content: space-between; gap: 20px; width: min(1320px, calc(100% - 64px)); min-height: 95px; margin: 0 auto; border-top: 1px solid var(--line); color: var(--muted); font-size: 11px; }
        @media (max-width: 900px) { .product-grid { grid-template-columns: repeat(3, minmax(0, 1fr)); } .main-nav { gap: 14px; } }
        @media (max-width: 650px) {
            .announcement { font-size: 9px; }
            header, footer { width: calc(100% - 36px); }
            header { height: auto; min-height: 68px; flex-wrap: wrap; gap: 12px; padding: 10px 0; }
            .main-nav { order: 3; flex: 0 0 100%; gap: 18px; overflow-x: auto; padding-bottom: 4px; }
            main { width: calc(100% - 36px); padding: 42px 0 60px; }
            .toolbar { align-items: flex-start; flex-direction: column; }
            .filters { gap: 7px; }
            .product-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 25px 12px; }
            .product-label { top: 8px; left: 8px; padding: 6px; font-size: 8px; }
            .product-info { gap: 6px; }
            .product-info h2 { font-size: 11px; }
            .product-info p, .price { font-size: 10px; }
            footer { align-items: flex-start; flex-direction: column; justify-content: center; padding: 18px 0; }
        }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { transition-duration: .01ms !important; } }
    </style>
</head>
<body>
    <div class="announcement">Livraison offerte dès 120 € <span>—</span> retours gratuits sous 30 jours</div>
    <header>
        <a class="brand" href="/" aria-label="Sneakstock, accueil">SNEAK<span class="brand-mark">STOCK</span></a>
        <nav class="main-nav" aria-label="Navigation principale">
            <a href="/catalogue" aria-current="page">La collection</a>
            <a href="/about">Notre histoire</a>
            <a href="/produit">Un produit</a>
            <a href="/connexion">Connexion</a>
            <a href="/inscription">Créer un compte</a>
        </nav>
    </header>
    <main>
        <p class="eyebrow">La sélection Sneakstock</p>
        <h1>La collection.</h1>
        <p class="intro">Des classiques aux nouveautés, trouve la paire qui te ressemble.</p>
        <div class="toolbar">
            <div class="filters" aria-label="Filtrer les sneakers">
                <button class="filter" type="button" data-filter="all" aria-pressed="true">Tout voir</button>
                <button class="filter" type="button" data-filter="classic" aria-pressed="false">Classiques</button>
                <button class="filter" type="button" data-filter="new" aria-pressed="false">Nouveautés</button>
                <button class="filter" type="button" data-filter="limited" aria-pressed="false">Éditions limitées</button>
            </div>
            <label>
                <span class="visually-hidden">Trier les produits</span>
                <select class="sort" aria-label="Trier les produits">
                    <option value="featured">Trier : sélection</option>
                    <option value="price-asc">Prix croissant</option>
                    <option value="price-desc">Prix décroissant</option>
                </select>
            </label>
        </div>
        <p class="result-count" aria-live="polite"><span id="result-number">8</span> paires à découvrir</p>
        <section class="product-grid" aria-label="Sneakers disponibles">
            <?php foreach($produits as $produit) :?>
            <a class="product-card" data-category="<?= $produit["categorie"] ?>" data-price="<?= $produit["prix"] ?>" href="/produit">
                <div class="product-image"><img src="<?= $produit["image"] ?>" alt="<?= $produit["nom"] ?>" loading="lazy"><span class="product-label"><?= $produit["label"] ?></span></div>
                <div class="product-info"><div><h2><?= $produit["nom"] ?></h2><p><?= $produit["coloris"] ?></p></div><span class="price"><?= $produit["prix"] ?> €</span></div>
            </a>
            <?php endforeach; ?>
        </section>
    </main>
    <footer><a class="brand" href="/" aria-label="Sneakstock, accueil">SNEAK<span class="brand-mark">STOCK</span></a><span>© 2026 Sneakstock. Fait pour les passionnés.</span><a href="/inscription">Créer un compte</a></footer>
    <style>.visually-hidden { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; clip-path: inset(50%); }</style>
    <script>
        const grid = document.querySelector('.product-grid');
        const cards = Array.from(grid.querySelectorAll('.product-card'));
        const filterButtons = document.querySelectorAll('.filter');
        const resultNumber = document.querySelector('#result-number');
        const sortSelect = document.querySelector('.sort');
        let activeFilter = 'all';

        function updateCatalogue() {
            const visibleCards = cards.filter((card) => activeFilter === 'all' || card.dataset.category === activeFilter);
            visibleCards.sort((first, second) => {
                const priceDifference = Number(first.dataset.price) - Number(second.dataset.price);
                return sortSelect.value === 'price-asc' ? priceDifference : sortSelect.value === 'price-desc' ? -priceDifference : cards.indexOf(first) - cards.indexOf(second);
            });
            cards.forEach((card) => { card.hidden = !visibleCards.includes(card); });
            visibleCards.forEach((card) => grid.append(card));
            resultNumber.textContent = String(visibleCards.length);
        }

        filterButtons.forEach((button) => {
            button.addEventListener('click', () => {
                activeFilter = button.dataset.filter;
                filterButtons.forEach((filterButton) => filterButton.setAttribute('aria-pressed', String(filterButton === button)));
                updateCatalogue();
            });
        });
        sortSelect.addEventListener('change', updateCatalogue);
    </script>
</body>
</html>
