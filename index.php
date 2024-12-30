<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjelasan Git Remote</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #007bff;
        }

        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #333;
            color: white;
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        ul {
            margin: 10px 0;
            padding: 0 20px;
        }

        li {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Penjelasan Git Remote</h1>
    </header>

    <div class="container">
        <h2>Apa itu Git Remote?</h2>
        <p>Git Remote adalah referensi ke repositori jarak jauh yang digunakan untuk menyimpan dan berbagi kode dengan tim pengembang. Dengan Git Remote, Anda dapat mengelola kolaborasi secara efektif.</p>

        <h3>Perintah Dasar Git Remote</h3>
        <ul>
            <li><code>git remote add origin [URL]</code>: Menambahkan repositori remote baru.</li>
            <li><code>git remote -v</code>: Melihat daftar remote yang terhubung.</li>
            <li><code>git remote remove [nama]</code>: Menghapus remote yang ada.</li>
        </ul>

        <h2>Manfaat Menggunakan Git Remote</h2>
        <ul>
            <li>Memungkinkan kolaborasi tim secara efisien.</li>
            <li>Menyimpan salinan kode secara online sebagai cadangan.</li>
            <li>Mempermudah sinkronisasi perubahan antar pengembang.</li>
            <li>Dll.</li>
        </ul>

        <h2>Tips Menggunakan Git Remote</h2>
        <ul>
            <li>Selalu pastikan URL remote benar sebelum melakukan push atau pull.</li>
            <li>Gunakan branch untuk menghindari konflik saat bekerja dalam tim.</li>
            <li>Rutin lakukan pull untuk memastikan kode lokal Anda up-to-date.</li>
        </ul>
    </div>

    <footer>
        <p>Website ini dibuat untuk menjelaskan tentang Git Remote.</p>
        <p>Sumber: <a href="https://git-scm.com/" target="_blank">https://git-scm.com/</a></p>
    </footer>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const tips = [
                "Selalu gunakan branch untuk fitur baru.",
                "Periksa status Git sebelum melakukan commit.",
                "Gunakan pull request untuk kolaborasi yang lebih baik.",
                "Lakukan review sebelum merge ke branch utama."
            ];

            const container = document.querySelector(".container");
            const tipsSection = document.createElement("div");
            tipsSection.innerHTML = `
                <h2>Tips Kolaborasi</h2>
                <ul>
                    ${tips.map(tip => `<li>${tip}</li>`).join('')}
                </ul>
            `;
            container.appendChild(tipsSection);

            console.log("Git Remote Tips Loaded");
        });

        window.addEventListener("scroll", function() {
            if (window.scrollY > 100) {
                console.log("Anda sedang menjelajah lebih dalam ke topik Git Remote.");
            }
        });
    </script>
</body>
</html>
