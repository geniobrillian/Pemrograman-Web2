<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genio</title>
    <style>
        /* Reset default browser styling */
        body,
        h1,
        h2,
        p,
        ul,
        ol,
        table,
        button {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #2c3e50;
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        h2 {
            color: #2c3e50;
            font-size: 1.8em;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1em;
            margin-bottom: 20px;
            color: #555;
        }

        ul,
        ol {
            margin-bottom: 20px;
        }

        ul li,
        ol li {
            font-size: 1.1em;
            margin-left: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table th,
        table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #2980b9;
            color: #fff;
        }

        table td a {
            color: #2980b9;
            text-decoration: none;
        }

        table td a:hover {
            text-decoration: underline;
        }

        button {
            padding: 10px 20px;
            background-color: #2980b9;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1.1em;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #3498db;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .line {
            border-top: 2px solid #ddd;
            margin: 20px 0;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Muhammad Genio Brillian</h1>
        <p>Haloo, perkenalkan nama lengkap saya Muhammad Genio Brillian, saya biasa dipanggil Genio. <br>
            Alamat saya di Sumbermulyo, Jombang. <br>
            Hobi saya nonton movie dan baca komik. <br>
            Saya bercita-cita menjadi Digital Marketing Specialist. <br>
            Saya memiliki keinginan untuk memberikan pengarahan dalam menerapkan digitalisasi pada para pelaku bisnis.
        </p>

        <ul >
        <h2>Mata Kuliah</h2>  <!--  mengarah ke controllers  -->
            <a href=" <?= base_url('matakuliah/basisdata') ?> "><li>Basis Data</li></a>
            <a href=" <?= base_url('matakuliah/metodologi') ?> "><li>Metodologi Penelitian</li></a>
            <a href=" <?= base_url('matakuliah/pemweb2') ?> "><li>Pemweb 2</li></a>
            <a href=" <?= base_url('matakuliah/visdat') ?> "><li>Visualisasi Data</li></a>
        </ul>

        <ol>
            <h2>Skill</h2>
            <li>Coding</li>
        </ol>

        <div class="line"></div>

        <a target="_blank" href="kontak/kontak_saya.html">
            <button>Hubungi Saya</button>
        </a>

        <h2>Jadwal</h2>
        <table>
            <tr>
                <th>Jam</th>
                <th>Dosen</th>
                <th>Link ke GC</th>
            </tr>
            <tr>
                <td>08.00</td>
                <td>Pak Teguh</td>
                <td><a target="_blank" href="/jadwal/visdat.html">Link GC Visdat</a></td>
            </tr>
        </table>
    </div>

</body>

</html>