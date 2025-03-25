<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        echo "About Page";
    }
    public function contact()
    {
        echo "Contact Page";
    }
    public function faqs()
    {
        echo "Faqs Page";
    }
    public function tos()
    {
        echo "Halaman Term of Service";
    }
    public function biodata()
    {
        echo "<h2>Biodata               : </h2> \n";
        echo "<p> Nama                  : Muhammad Genio Brillian </p> \n";
        echo "<p>Alamat                 : Sumbermulyo, Jombang </p> \n";
        echo "<p>Tempat, Tanggal Lahir  : Jombang, 26 Desember 2004 </p> \n";
        echo "<p> Status                : Mahasiswa aktif </p>";
    }

}
