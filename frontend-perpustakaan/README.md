# Frontend Perpustakaan

Frontend terpisah (HTML + Tailwind CSS CDN + Vanilla JavaScript ES Modules) untuk REST API Perpustakaan.

## Menjalankan

Backend harus berjalan lebih dulu di `http://localhost:8000` (lihat `rest-api-perpustakaan/`).

```bash
cd frontend-perpustakaan
php -S localhost:3000
```

Buka http://localhost:3000

> Jangan membuka `index.html` langsung (`file://`) karena ES Module butuh web server.

## Struktur

```
index.html          layout + Tailwind CDN
css/custom.css      styling tambahan
js/config.js        BASE_URL API
js/api.js           ApiClient + booksApi + categoriesApi
js/utils.js         escapeHtml, showToast, confirmAction
js/app.js           router hash + entry point
js/pages/           dashboard.js, books.js, categories.js
```
