<?php

namespace App\Models;

use CodeIgniter\Model;

class MataKuliahModel extends Model
{
    public function getMataKuliah()
    {
        $data = [];

        $mk1 = [];
        $mk1['dosen'] = 'Pak Candra';
        $mk1['nama'] = 'Basis Data';

        $mk2 = [];
        $mk2['dosen'] = 'Pak Yosi';
        $mk2['nama'] = 'Metodologi Penelitian';

        $mk3 = [];
        $mk3['dosen'] = 'Pak Miftah';
        $mk3['nama'] = 'Pemrograman Web 2';

        $mk4 = [];
        $mk4['dosen'] = 'Pak Teguh';
        $mk4['nama'] = 'Visualisasi Data';

        $data[] = $mk1;
        $data[] = $mk2;
        $data[] = $mk3;
        $data[] = $mk4;

        return $data;
    }
}
