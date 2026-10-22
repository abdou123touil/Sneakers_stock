<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
$isHomePage = $currentPath === '/';
?>
<div class="announcement">Livraison offerte dès 120 € <span>—</span> retours gratuits sous 30 jours</div>
<header class="site-header">
    <?php if ($isHomePage) : ?>
        <button class="menu-toggle" type="button" aria-label="Ouvrir le menu" aria-expanded="false">
            <svg width="21" height="17" viewBox="0 0 21 17" fill="none" aria-hidden="true">
                <path d="M1 1.5h19M1 8.5h19M1 15.5h19" stroke="currentColor" stroke-width="1.5"/>
            </svg>
        </button>
    <?php endif; ?>
    <a class="brand" href="/" aria-label="Sneakstock, accueil">SNEAK<span class="brand-mark">STOCK</span></a>
    <nav class="main-nav" aria-label="Navigation principale">
        <a href="/catalogue" <?= $currentPath === '/catalogue' ? 'aria-current="page"' : '' ?>>La collection</a>
        <a href="/produit/0" <?= str_starts_with($currentPath, '/produit/') ? 'aria-current="page"' : '' ?>>Un produit</a>
        <a href="/about" <?= $currentPath === '/about' ? 'aria-current="page"' : '' ?>>Notre histoire</a>
        <a href="/connexion" <?= $currentPath === '/connexion' ? 'aria-current="page"' : '' ?>>Connexion</a>
        <a href="/inscription" <?= $currentPath === '/inscription' ? 'aria-current="page"' : '' ?>>Créer un compte</a>
    </nav>
    <?php if ($isHomePage) : ?>
        <div class="header-actions">
            <a href="#selection">Rechercher</a>
            <a class="bag-link" href="#selection" aria-label="Panier, 0 article">
                Panier <span class="bag-count" aria-live="polite">0</span>
            </a>
        </div>
    <?php endif; ?>
</header>
