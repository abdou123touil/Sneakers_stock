<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f6f5f0">
    <meta name="description" content="Découvre la Air Max 90 Red / White, sneaker iconique de la sélection Sneakstock.">
    <title>Air Max 90 — SNEAKSTOCK</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root { --ink: #171914; --muted: #77796f; --paper: #f6f5f0; --white: #fff; --lime: #d5f15e; --line: #e7e6df; --display: "Space Grotesk", sans-serif; --body: "DM Sans", sans-serif; }
        * { box-sizing: border-box; }
        body { margin: 0; color: var(--ink); background: var(--paper); font-family: var(--body); -webkit-font-smoothing: antialiased; }
        a { color: inherit; text-decoration: none; }
        button, select { color: inherit; font: inherit; }
        .announcement { padding: 10px 20px; color: var(--white); background: var(--ink); text-align: center; font-size: 11px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; }
        .announcement span, .brand-mark { color: #aebf4c; }
        header { display: flex; align-items: center; justify-content: space-between; width: min(1320px, calc(100% - 64px)); height: 82px; margin: 0 auto; border-bottom: 1px solid var(--line); }
        .brand { font-family: var(--display); font-size: 22px; font-weight: 700; letter-spacing: -.09em; }
        .main-nav { display: flex; align-items: center; gap: 20px; }
        .main-nav a { font-size: 12px; font-weight: 600; white-space: nowrap; }
        .bag-count { display: inline-grid; width: 22px; height: 22px; margin-left: 6px; place-items: center; border-radius: 50%; background: var(--lime); font-size: 11px; }
        main { width: min(1240px, calc(100% - 64px)); margin: 0 auto; padding: 28px 0 84px; }
        .breadcrumbs { display: flex; gap: 9px; margin-bottom: 28px; color: var(--muted); font-size: 11px; }
        .breadcrumbs span { color: #b1b1a8; }
        .product-layout { display: grid; grid-template-columns: 1.1fr .9fr; gap: clamp(35px, 7vw, 90px); align-items: start; }
        .gallery-main { position: relative; aspect-ratio: 1 / 1; overflow: hidden; background: #eceae3; }
        .gallery-main img { width: 100%; height: 100%; object-fit: cover; }
        .product-label { position: absolute; top: 16px; left: 16px; padding: 8px 11px; background: var(--white); font-size: 9px; font-weight: 700; letter-spacing: .08em; text-transform: uppercase; }
        .thumbs { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin-top: 10px; }
        .thumb { aspect-ratio: 1; overflow: hidden; padding: 0; border: 1px solid transparent; background: #eceae3; cursor: pointer; }
        .thumb[aria-pressed="true"] { border-color: var(--ink); }
        .thumb img { width: 100%; height: 100%; object-fit: cover; }
        .product-details { padding-top: 18px; }
        .eyebrow { display: flex; align-items: center; gap: 10px; margin: 0 0 17px; color: var(--muted); font-size: 11px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        .eyebrow::before { width: 22px; height: 2px; background: #a5b546; content: ""; }
        h1 { margin: 0 0 8px; font-family: var(--display); font-size: clamp(38px, 5vw, 58px); font-weight: 600; letter-spacing: -.075em; line-height: 1; }
        .subtitle { margin: 0; color: var(--muted); font-size: 13px; }
        .price-line { display: flex; align-items: center; gap: 12px; margin: 24px 0; }
        .price { font-family: var(--display); font-size: 23px; font-weight: 700; }
        .stock { padding: 7px 9px; background: #e9edda; color: #586328; font-size: 10px; font-weight: 700; }
        .description { margin-bottom: 25px; color: var(--muted); font-size: 13px; line-height: 1.8; }
        .size-heading { display: flex; align-items: center; justify-content: space-between; margin-bottom: 11px; }
        .size-heading label { font-size: 12px; font-weight: 700; }
        .size-heading a { color: var(--muted); font-size: 11px; text-decoration: underline; text-underline-offset: 3px; }
        .size-grid { display: grid; grid-template-columns: repeat(5, 1fr); gap: 8px; }
        .size-option { position: relative; }
        .size-option input { position: absolute; width: 1px; height: 1px; opacity: 0; }
        .size-option span { display: grid; min-height: 43px; place-items: center; border: 1px solid var(--line); background: transparent; font-size: 12px; cursor: pointer; transition: background .2s, color .2s, border-color .2s; }
        .size-option input:checked + span, .size-option input:focus-visible + span { border-color: var(--ink); background: var(--ink); color: var(--white); }
        .size-option input:disabled + span { color: #b9b9b0; text-decoration: line-through; cursor: not-allowed; }
        .buy-row { display: grid; grid-template-columns: 84px 1fr; gap: 10px; margin-top: 22px; }
        .quantity, .add-button { min-height: 52px; border: 1px solid var(--ink); border-radius: 2px; background: transparent; }
        .quantity { padding: 0 10px; font-size: 13px; }
        .add-button { display: flex; align-items: center; justify-content: space-between; padding: 0 17px; background: var(--ink); color: var(--white); font-size: 12px; font-weight: 700; cursor: pointer; transition: background .2s, color .2s; }
        .add-button:hover { background: transparent; color: var(--ink); }
        .add-button span { font-size: 18px; }
        .delivery { display: flex; gap: 11px; margin-top: 22px; padding: 16px 0; border-top: 1px solid var(--line); border-bottom: 1px solid var(--line); }
        .delivery-icon { color: #929d43; font-size: 18px; }
        .delivery strong { display: block; margin-bottom: 4px; font-size: 11px; }
        .delivery p { margin: 0; color: var(--muted); font-size: 10px; }
        .product-notes { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-top: 15px; }
        .product-note { padding: 12px 7px; background: #eeede7; text-align: center; font-size: 10px; font-weight: 600; }
        .related { margin-top: 88px; padding-top: 28px; border-top: 1px solid var(--line); }
        .related h2 { margin: 0 0 20px; font-family: var(--display); font-size: 28px; letter-spacing: -.06em; }
        .related-link { font-size: 12px; font-weight: 700; text-decoration: underline; text-underline-offset: 4px; }
        footer { display: flex; align-items: center; justify-content: space-between; gap: 20px; width: min(1320px, calc(100% - 64px)); min-height: 95px; margin: 0 auto; border-top: 1px solid var(--line); color: var(--muted); font-size: 11px; }
        @media (max-width: 760px) {
            .announcement { font-size: 9px; }
            header, footer { width: calc(100% - 36px); }
            header { height: auto; min-height: 68px; flex-wrap: wrap; gap: 12px; padding: 10px 0; }
            .main-nav { order: 3; flex: 0 0 100%; gap: 18px; overflow-x: auto; padding-bottom: 4px; }
            main { width: calc(100% - 36px); padding: 22px 0 60px; }
            .product-layout { grid-template-columns: 1fr; gap: 24px; }
            .product-details { padding-top: 0; }
            .product-notes { margin-top: 12px; }
            .related { margin-top: 56px; }
            footer { align-items: flex-start; flex-direction: column; justify-content: center; padding: 18px 0; }
        }
        @media (prefers-reduced-motion: reduce) { *, *::before, *::after { transition-duration: .01ms !important; } }
    </style>
</head>
<body>
    <?php require __DIR__ . '/navbar.php'; ?>
    <main>
        <nav class="breadcrumbs" aria-label="Fil d'Ariane"><a href="/">Accueil</a><span>/</span><a href="/catalogue">La collection</a><span>/</span><span aria-current="page"><?= $produit["nom"] ?></span></nav>
        <section class="product-layout">
            <div class="gallery">
                <div class="gallery-main">
                    <img id="main-image" src="<?= $produit["image"] ?>" alt="<?= $produit["nom"] ?>">
                    <span class="product-label">Best-seller</span>
                </div>
                <div class="thumbs" aria-label="Galerie du produit">
                    <button class="thumb" type="button" aria-label="Voir la photo rouge" aria-pressed="true" data-src="<?= $produit["image"] ?>" data-alt="<?= $produit["nom"] ?>"><img src="<?= $produit["image"] ?>" alt=""></button>
                    <button class="thumb" type="button" aria-label="Voir la photo blanche" aria-pressed="false" data-src="<?= $produit["image"] ?>" data-alt="Sneaker blanche vue de près"><img src="<?= $produit["image"] ?>" alt=""></button>
                    <button class="thumb" type="button" aria-label="Voir la photo lifestyle" aria-pressed="false" data-src="<?= $produit["image"] ?>" data-alt="Sneaker lifestyle portée"><img src="<?= $produit["image"] ?>" alt=""></button>
                    <button class="thumb" type="button" aria-label="Voir la photo rétro" aria-pressed="false" data-src="<?= $produit["image"] ?>" data-alt="Sneaker rétro en détail"><img src="<?= $produit["image"] ?>" alt=""></button>
                </div>
            </div>
            <div class="product-details">
                <p class="eyebrow">Le classique revisité</p>
                <h1><?= $produit["nom"] ?></h1>
                <p class="subtitle"><?= $produit["coloris"] ?></p>
                <div class="price-line"><span class="price"><?= $produit["prix"] ?> €</span><span class="stock">En stock</span></div>
                <p class="description"><?= $produit["description"] ?></p>
                <form action="#" method="post">
                    <div class="size-heading"><label>Choisis ta taille</label><a href="#">Guide des tailles</a></div>
                    <div class="size-grid" role="group" aria-label="Taille">
                        <label class="size-option"><input type="radio" name="size" value="39" required><span>39</span></label>
                        <label class="size-option"><input type="radio" name="size" value="40"><span>40</span></label>
                        <label class="size-option"><input type="radio" name="size" value="41"><span>41</span></label>
                        <label class="size-option"><input type="radio" name="size" value="42"><span>42</span></label>
                        <label class="size-option"><input type="radio" name="size" value="43"><span>43</span></label>
                        <label class="size-option"><input type="radio" name="size" value="44"><span>44</span></label>
                        <label class="size-option"><input type="radio" name="size" value="45"><span>45</span></label>
                        <label class="size-option"><input type="radio" name="size" value="46" disabled><span>46</span></label>
                    </div>
                    <div class="buy-row">
                        <label class="visually-hidden" for="quantity">Quantité</label>
                        <select class="quantity" id="quantity" name="quantity" aria-label="Quantité">
                            <option value="1">Qté 1</option><option value="2">Qté 2</option><option value="3">Qté 3</option>
                        </select>
                        <button class="add-button" type="submit">Ajouter au panier <span aria-hidden="true">↗</span></button>
                    </div>
                </form>
                <div class="delivery"><span class="delivery-icon" aria-hidden="true">✳</span><div><strong>Livraison offerte dès 120 €</strong><p>Retours faciles sous 30 jours.</p></div></div>
                <div class="product-notes"><div class="product-note">Authenticité vérifiée</div><div class="product-note">Paiement sécurisé</div><div class="product-note">Retours gratuits</div></div>
            </div>
        </section>
        <section class="related"><h2>Envie d'explorer ?</h2><a class="related-link" href="/catalogue">Retour à la collection <span aria-hidden="true">↗</span></a></section>
    </main>
    <?php require __DIR__ . '/footer.php'; ?>
    <style>.visually-hidden { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; clip-path: inset(50%); }</style>
    <script>
        const mainImage = document.querySelector('#main-image');
        const thumbnails = document.querySelectorAll('.thumb');
        thumbnails.forEach((thumbnail) => {
            thumbnail.addEventListener('click', () => {
                mainImage.src = thumbnail.dataset.src;
                mainImage.alt = thumbnail.dataset.alt;
                thumbnails.forEach((item) => item.setAttribute('aria-pressed', String(item === thumbnail)));
            });
        });
    </script>
</body>
</html>
