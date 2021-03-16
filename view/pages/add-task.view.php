<!doctype html>
<html>
<?php require "view/_partials/head.view.php"; ?>
<body>
<?php require "view/_partials/header.view.php"; ?>
<section>
    <h2>ADD TASK</h2>
    <form method="post">
        <input type="text" name="subject" placeholder="Iveskite uzduoties pavadinima">
        <select name="priority">
            <option value="svarbu">Svarbu</option>
            <option value="nesvarbu">Nesvarbu</option>
            <option value="skubu">Skubu</option>
            <option value="neskubu">Neskubu</option>
        </select>
        <label>Atlikimo data</label>
        <input type="date" name="duedate">
        <button type="submit" name="send">PRIDETI</button>
    </form>
</section>
<?php require "view/_partials/footer.view.php"; ?>
</body>
</html>