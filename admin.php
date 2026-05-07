<?php
include 'functies/read.php';

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

<!-- Main content -->

<main id="admin-main">

<h1>Admin Dashboard</h1>




<!-- Product lijst -->

<section class="product-list">

<h2>Producten</h2>

<table>
    <thead>
        <tr>
            <th>itemnr</th>
            <th>Naam</th>
            <th>Ingediënten</th>
            <th>Prijs</th>
            <th>Acties</th>
        </tr>
    </thead>
<tbody>

<?php foreach ($result as $row): ?>

<tr>
<td><? $row['itemnr'] ?></td>
<td><? $row['naam'] ?></td>
<td><? $row['ingredienten'] ?></td>
<td>€<? number_format($row['prijs'], 2, ',', '.') ?></td>
 <td>
    <form action="functies/delete.php" method="POST">
    <input type="hidden" name="itemnr" value="<? $row['itemnr'] ?>">
    <button type="submit" class="delete">Verwijder</button>
</form>
</td> 
</tr>

<?php endforeach; ?>

</tbody>

</table>
</section>



<!-- Product toevoegen -->

<section class="add-product">

<h2>Nieuw product toevoegen</h2>

<form action="functies/create.php" method="POST">

<label>Naam</label>
<input type="text" name="naam" placeholder="Product naam">

<label>Ingediënten</label>
<textarea name="ingredienten" placeholder="Ingrediënten"></textarea>

<label>Prijs</label>
<input type="text" name="prijs" placeholder="0.00">


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