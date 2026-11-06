<?php
// Langkah 4 — jalankan dari root proyek: php tests/langkah/test_connection.php
// Sesuai checklist LKS, hapus file ini setelah verifikasi.
require __DIR__ . '/../../vendor/autoload.php';

use App\Config\Env;
use App\Database\Connection;

Env::load(__DIR__ . '/../../.env');
$pdo = Connection::get();
echo "✅ Koneksi database berhasil!" . PHP_EOL;
echo "Versi MySQL: " . $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);
