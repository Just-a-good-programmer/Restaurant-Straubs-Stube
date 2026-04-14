<?php
include 'functies/read.php';
include 'functies/create.php';
include 'functies/update.php';
include 'functies/delete.php';
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title>Straubs Stube - Admin Panel</title>
<link rel="stylesheet" href="css/style.css">
</head>
<!-- De html en css is met ai gegenereerd, en door mij aangepast waar nodig. -->
<body>

<header>
    <div class="logo">Straubs <span>Stube</span> Admin</div>
    <nav>
            <a href="index.php">Home</a>
            <a href="#">Menukaart</a>
            <a href="#">Reserveren</a>
            <a href="uitloggen.php">Uitloggen</a>
    </nav>
</header>


<div class="admin-container">

<!-- Sidebar -->

<aside class="sidebar">

<h3>Dashboard</h3>

<nav>
<a href="#">Overzicht</a>
<a href="#">Producten</a>
<a href="#">Bestellingen</a>
<a href="#">Categorieën</a>
<a href="#">Gebruikers</a>
<a href="#">Instellingen</a>
</nav>

</aside>


<!-- Main content -->

<main class="admin-main">

<h1>Admin Dashboard</h1>




<!-- Product lijst -->

<section class="product-list">

<h2>Producten</h2>

<table>
    <thead>
        <tr>
            <th>Naam</th>
            <th>Ingediënten</th>
            <th>Prijs</th>
            <th>Acties</th>
        </tr>
    </thead>
<tbody>

<?php foreach ($result as $row): ?>

<tr>
<td><?= htmlspecialchars($row['naam']) ?></td>
<td><?= htmlspecialchars($row['ingredienten']) ?></td>
<td>€<?= number_format($row['prijs'], 2, ',', '.') ?></td>
<td>
    <button class="edit">Bewerk</button>
    <button class="delete">Verwijder</button>
</td>
</tr>

<?php endforeach; ?>

</tbody>

</table>
</section>



<!-- Product toevoegen -->

<section class="add-product">

<h2>Nieuw product toevoegen</h2>

<form>

<label>Naam</label>
<input type="text" name="naam" placeholder="Product naam">

<label>Ingediënten</label>
<textarea name="ingredienten" placeholder="Ingrediënten"></textarea>

<label>Prijs</label>
<input type="text" name="prijs" placeholder="€0.00">


<button type="submit">Product toevoegen</button>

</form>

</section>

</main>

</div>


<footer>
<p>&copy; 2026 Straubs Stube Admin</p>
</footer>

</body>
</html>