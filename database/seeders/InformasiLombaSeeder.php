<?php

namespace Database\Seeders;

use App\Models\InformasiLomba;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiLombaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = [
        //     [
        //         'title' => '4C National Competition',
        //         'description' => '4C National Competition adalah kompetisi tingkat nasional yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Brawijaya (FILKOM UB) dalam rangkaian kegiatan Dies Natalis.
        //         Kompetisi diperuntukkan bagi para mahasiswa diseluruh Indonesia untuk mampu menunjukkan karya terbaiknya serta dapat mengasah kemampuan berpikir kritis, kolaborasi, kreatifitas dan komunikasi didalam tim.',
        //         'organizer_name' => 'FILKOM UB',
        //         'reward' => 'Total Hadiah 75 Juta Rupiah',
        //         'open_reg' => '25 September 2023',
        //         'close_reg' => '25 Oktober 2023',
        //         'term_and_condition' => '1. Peserta adalah mahasiswa/mahasiswi aktif di Perguruan Tinggi (PTN/PTS) Indonesia
        //         2. Memiliki Kartu Tanda Mahasiswa (KTM)
        //         3. 1 Tim/ Kelompok terdiri dari 2-4 orang (berasal dari kampus yang sama)
        //         4. Peserta diharuskan memiliki 1 dosen pembimbing dari asal Perguruan Tinggi peserta
        //         5. Peserta diharuskan mendaftar terlebih dahulu sebelum mengirim karyanya
        //         6. Peserta diharuskan melampirkan Surat Keterangan Aktif Kuliah pada saat melakukan pendaftaran',
        //         'poster' => '',
        //         'contact' => '081259861603 (FILKOM WA Center)'
        //     ],
        //     [
        //         'title' => 'Hology 6.0',
        //         'description' => '4C National Competition adalah kompetisi tingkat nasional yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Brawijaya (FILKOM UB) dalam rangkaian kegiatan Dies Natalis.
        //         Kompetisi diperuntukkan bagi para mahasiswa diseluruh Indonesia untuk mampu menunjukkan karya terbaiknya serta dapat mengasah kemampuan berpikir kritis, kolaborasi, kreatifitas dan komunikasi didalam tim.',
        //         'organizer_name' => 'FILKOM UB',
        //         'reward' => 'Total Hadiah 75 Juta Rupiah',
        //         'open_reg' => '25 September 2023',
        //         'close_reg' => '25 Oktober 2023',
        //         'term_and_condition' => '1. Peserta adalah mahasiswa/mahasiswi aktif di Perguruan Tinggi (PTN/PTS) Indonesia
        //         2. Memiliki Kartu Tanda Mahasiswa (KTM)
        //         3. 1 Tim/ Kelompok terdiri dari 2-4 orang (berasal dari kampus yang sama)
        //         4. Peserta diharuskan memiliki 1 dosen pembimbing dari asal Perguruan Tinggi peserta
        //         5. Peserta diharuskan mendaftar terlebih dahulu sebelum mengirim karyanya
        //         6. Peserta diharuskan melampirkan Surat Keterangan Aktif Kuliah pada saat melakukan pendaftaran',
        //         'poster' => '',
        //         'contact' => '081259861603 (FILKOM WA Center)'
        //     ],
        //     [
        //         'title' => 'Technology Euphoria',
        //         'description' => '4C National Competition adalah kompetisi tingkat nasional yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Brawijaya (FILKOM UB) dalam rangkaian kegiatan Dies Natalis.
        //         Kompetisi diperuntukkan bagi para mahasiswa diseluruh Indonesia untuk mampu menunjukkan karya terbaiknya serta dapat mengasah kemampuan berpikir kritis, kolaborasi, kreatifitas dan komunikasi didalam tim.',
        //         'organizer_name' => 'FILKOM UB',
        //         'reward' => 'Total Hadiah 75 Juta Rupiah',
        //         'open_reg' => '25 September 2023',
        //         'close_reg' => '25 Oktober 2023',
        //         'term_and_condition' => '1. Peserta adalah mahasiswa/mahasiswi aktif di Perguruan Tinggi (PTN/PTS) Indonesia
        //         2. Memiliki Kartu Tanda Mahasiswa (KTM)
        //         3. 1 Tim/ Kelompok terdiri dari 2-4 orang (berasal dari kampus yang sama)
        //         4. Peserta diharuskan memiliki 1 dosen pembimbing dari asal Perguruan Tinggi peserta
        //         5. Peserta diharuskan mendaftar terlebih dahulu sebelum mengirim karyanya
        //         6. Peserta diharuskan melampirkan Surat Keterangan Aktif Kuliah pada saat melakukan pendaftaran',
        //         'poster' => '',
        //         'contact' => '081259861603 (FILKOM WA Center)'
        //     ],
        //     [
        //         'title' => 'Schematics',
        //         'description' => '4C National Competition adalah kompetisi tingkat nasional yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Brawijaya (FILKOM UB) dalam rangkaian kegiatan Dies Natalis.
        //         Kompetisi diperuntukkan bagi para mahasiswa diseluruh Indonesia untuk mampu menunjukkan karya terbaiknya serta dapat mengasah kemampuan berpikir kritis, kolaborasi, kreatifitas dan komunikasi didalam tim.',
        //         'organizer_name' => 'FILKOM UB',
        //         'reward' => 'Total Hadiah 75 Juta Rupiah',
        //         'open_reg' => '25 September 2023',
        //         'close_reg' => '25 Oktober 2023',
        //         'term_and_condition' => '1. Peserta adalah mahasiswa/mahasiswi aktif di Perguruan Tinggi (PTN/PTS) Indonesia
        //         2. Memiliki Kartu Tanda Mahasiswa (KTM)
        //         3. 1 Tim/ Kelompok terdiri dari 2-4 orang (berasal dari kampus yang sama)
        //         4. Peserta diharuskan memiliki 1 dosen pembimbing dari asal Perguruan Tinggi peserta
        //         5. Peserta diharuskan mendaftar terlebih dahulu sebelum mengirim karyanya
        //         6. Peserta diharuskan melampirkan Surat Keterangan Aktif Kuliah pada saat melakukan pendaftaran',
        //         'poster' => '',
        //         'contact' => '081259861603 (FILKOM WA Center)'
        //     ],
        //     [
        //         'title' => 'Codex',
        //         'description' => '4C National Competition adalah kompetisi tingkat nasional yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Brawijaya (FILKOM UB) dalam rangkaian kegiatan Dies Natalis.
        //         Kompetisi diperuntukkan bagi para mahasiswa diseluruh Indonesia untuk mampu menunjukkan karya terbaiknya serta dapat mengasah kemampuan berpikir kritis, kolaborasi, kreatifitas dan komunikasi didalam tim.',
        //         'organizer_name' => 'FILKOM UB',
        //         'reward' => 'Total Hadiah 75 Juta Rupiah',
        //         'open_reg' => '25 September 2023',
        //         'close_reg' => '25 Oktober 2023',
        //         'term_and_condition' => '1. Peserta adalah mahasiswa/mahasiswi aktif di Perguruan Tinggi (PTN/PTS) Indonesia
        //         2. Memiliki Kartu Tanda Mahasiswa (KTM)
        //         3. 1 Tim/ Kelompok terdiri dari 2-4 orang (berasal dari kampus yang sama)
        //         4. Peserta diharuskan memiliki 1 dosen pembimbing dari asal Perguruan Tinggi peserta
        //         5. Peserta diharuskan mendaftar terlebih dahulu sebelum mengirim karyanya
        //         6. Peserta diharuskan melampirkan Surat Keterangan Aktif Kuliah pada saat melakukan pendaftaran',
        //         'poster' => '',
        //         'contact' => '081259861603 (FILKOM WA Center)'
        //     ],
        //     [
        //         'title' => 'Compfest',
        //         'description' => '4C National Competition adalah kompetisi tingkat nasional yang diselenggarakan oleh Fakultas Ilmu Komputer, Universitas Brawijaya (FILKOM UB) dalam rangkaian kegiatan Dies Natalis.
        //         Kompetisi diperuntukkan bagi para mahasiswa diseluruh Indonesia untuk mampu menunjukkan karya terbaiknya serta dapat mengasah kemampuan berpikir kritis, kolaborasi, kreatifitas dan komunikasi didalam tim.',
        //         'organizer_name' => 'FILKOM UB',
        //         'reward' => 'Total Hadiah 75 Juta Rupiah',
        //         'open_reg' => '25 September 2023',
        //         'close_reg' => '25 Oktober 2023',
        //         'term_and_condition' => '1. Peserta adalah mahasiswa/mahasiswi aktif di Perguruan Tinggi (PTN/PTS) Indonesia
        //         2. Memiliki Kartu Tanda Mahasiswa (KTM)
        //         3. 1 Tim/ Kelompok terdiri dari 2-4 orang (berasal dari kampus yang sama)
        //         4. Peserta diharuskan memiliki 1 dosen pembimbing dari asal Perguruan Tinggi peserta
        //         5. Peserta diharuskan mendaftar terlebih dahulu sebelum mengirim karyanya
        //         6. Peserta diharuskan melampirkan Surat Keterangan Aktif Kuliah pada saat melakukan pendaftaran',
        //         'poster' => '',
        //         'contact' => '081259861603 (FILKOM WA Center)'
        //     ]
        // ];

        // foreach ($data as $lomba) {
        //     InformasiLomba::create($lomba);
        // }
    }
}
