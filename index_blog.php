<?php
$servername = "localhost";
$username = "root";
$password = ""; // Sesuaikan dengan password MySQL Anda jika ada
$dbname = "blog_db";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data blog
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>

    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <header>
        <h1>Blog</h1>
    </header>
    <nav>
        <a href="home.html">Home</a>
        <a href="add_blog.php">Tambah Blog</a>
</nav>
       
    <main>
        <hr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='blog-post'>";
                echo "<h2>" . $row["Judul"] . "</h2>";
                if ($row["Foto"]) {
                    echo "<img src='" . $row["Foto"] . "' alt='" . $row["Judul"] . "'>";
                }
                echo "<p><a href='" . $row["Link"] . "' target='_blank'>Read more</a></p>";
                echo "</div>";
            }
        } else {
            echo "<p>No blog posts found.</p>";
        }
        $conn->close();
        ?>
    </main>
    <footer>
 
    <p>&copy; 2024 Blog</p>
    </footer>
</body>
</html>
