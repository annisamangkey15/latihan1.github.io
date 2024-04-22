// Tangkap tombol "Mulai"
const startButton = document.getElementById('startButton');

// Tambahkan event listener untuk menanggapi klik tombol "Mulai"
startButton.addEventListener('click', function() {
    // Arahkan pengguna ke halaman index
    window.location.href = 'home.html'; // Sesuaikan dengan nama file halaman index Anda

    // Tambahkan kelas untuk animasi slide ke kiri
    document.body.classList.add('slide-left');
});

// Tangkap elemen <body>
const body = document.querySelector('body');

// Tambahkan kelas CSS untuk transisi slide ke kiri
body.classList.add('zoom-in');
