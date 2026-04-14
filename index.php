<?php
session_start();
if (isset($_SESSION['username'])) {
}
include 'connecties database/conn.php';
include 'functies/read.php';
?>
<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Straubs Stube - Bestellen</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<!-- De html en css is met ai gegenereerd, en door mij aangepast waar nodig. -->
<body>

    <header>
        <div class="logo">Straubs <span>Stube</span></div>
        <nav>
            <a href="index.php">Home</a>
            <a href="#">Menukaart</a>
            <a href="#">Reserveren</a>
            <a href="inloggen.php">Aanmelden</a>
        </nav>
    </header>

    <section class="hallo">
        <h1>Hartelijk welkom</h1>
        <p>Geniet van onze specialiteiten in authentieke sfeer</p>
    </section>

    <main>
        <section class="menu">
            <h2>Populaire Gerechten</h2>
            <div class="menu-grid">
                <?php foreach ($result as $row) { ?>
                    <div class="card">
                        <img src="<?= $row['foto'] ?>" alt="<?= $row['naam'] ?>">
                        <h3><?= $row['naam'] ?></h3>
                        <p><?= $row['ingredienten'] ?></p>
                        <div class="price-row">
                            <span>€<?= number_format($row['prijs'], 2, ',', '.') ?></span>
                            <label class="order-btn"
                                data-naam="<?= htmlspecialchars($row['naam']) ?>"
                                data-prijs="<?= $row['prijs'] ?>">+</label>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Winkelwagen -->
        <aside class="cart">
            <h2>Winkelwagen</h2>

            <div class="cart-items">
                <p class="empty">Uw winkelwagen is leeg</p>
            </div>
            <div class="totaal"></div>
            <div class="cart-footer">
                <button class="checkout">Bestellen</button>
            </div>
        </aside>

    </main>

    <footer>
        <p>&copy; 2026 Straubs Stube. Alle rechten voorbehouden.</p>
    </footer>
    <script src="js/script.js" defer></script>
</body>

</html>