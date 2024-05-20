<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Blog</title>
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <h1>Tambah Blog</h1>
    </header>
    <main>
        <form action="insert_blog.php" method="post" enctype="multipart/form-data">
            <label for="foto">Foto:</label><br>
            <input type="file" id="foto" name="foto" required><br><br>
            <label for="judul">Judul:</label><br>
            <input type="text" id="judul" name="judul" required><br><br>
            <label for="link">Link:</label><br>
            <input type="text" id="link" name="link" required><br><br>
            <input type="submit" value="Submit">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 Blog</p>
    </footer>
</body>
</html>
