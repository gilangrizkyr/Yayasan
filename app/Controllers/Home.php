<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function academics(): string
    {
        return view('academics');
    }

    public function about(): string
    {
        return view('about');
    }

    public function admission(): string
    {
        return view('admission');
    }

    public function gallery(): string
    {
        return view('gallery');
    }

    public function blog(): string
    {
        return view('blog');
    }

    public function contact(): string
    {
        return view('contact');
    }

    public function program(): string
    {
        return view('program');
    }

    public function teachers(): string
    {
        return view('teachers');
    }

    public function howToApply(): string
    {
        return view('how-to-apply');
    }

    public function tuitionFee(): string
    {
        return view('tuition-fee');
    }

    public function blogDetail($id = 1): string
    {
        $posts = [
            1 => [
                'id' => 1,
                'title' => 'Kegiatan Bakti Sosial & Penyaluran Paket Sembako 2026',
                'category' => 'Kegiatan Sosial',
                'category_color' => '#0d6efd',
                'date' => '15 Juni 2026',
                'author' => 'Ustadz Ahmad',
                'image' => 'images/gallery/gallery-thumb-01.webp',
                'content' => '<p>Yayasan Khalifah Latif Cendaka kembali menyelenggarakan kegiatan sosial tahunan berupa bakti sosial dan penyaluran paket sembako untuk warga prasejahtera di sekitar lingkungan sekolah. Kegiatan ini bertujuan untuk meringankan beban masyarakat serta mempererat tali silaturahmi antar warga dan keluarga besar yayasan.</p><p>Sebanyak 500 paket sembako yang berisi beras, minyak goreng, gula, dan bahan pokok lainnya berhasil disalurkan secara tertib. Pembina Yayasan menyampaikan rasa syukur dan terima kasih kepada para donatur yang telah berpartisipasi dalam program kebaikan ini. Diharapkan kegiatan ini dapat terus berjalan secara berkesinambungan.</p>'
            ],
            2 => [
                'id' => 2,
                'title' => 'Penerapan Sistem Pembelajaran E-Learning Baru Terpadu',
                'category' => 'Akademik',
                'category_color' => '#198754',
                'date' => '10 Juni 2026',
                'author' => 'Dr. H. Ahmad Dahlan',
                'image' => 'images/gallery/gallery-thumb-02.webp',
                'content' => '<p>Sekolah resmi mengimplementasikan platform Learning Management System (LMS) baru guna memfasilitasi interaksi akademis antara guru, siswa, dan orang tua secara daring. Platform ini dirancang untuk memudahkan akses materi, pengerjaan tugas, dan pemantauan perkembangan hafalan Al-Qur\'an secara real-time.</p><p>Dengan sistem baru ini, orang tua siswa dapat memantau secara langsung pencapaian belajar harian anak, nilai ujian, serta kehadiran kelas secara transparan. Pelatihan intensif juga telah diberikan kepada seluruh guru agar adaptasi teknologi berjalan dengan lancar.</p>'
            ],
            3 => [
                'id' => 3,
                'title' => 'Siswa SDIT Meraih Juara 1 Olimpiade Matematika Kota',
                'category' => 'Prestasi',
                'category_color' => '#fd7e14',
                'date' => '05 Juni 2026',
                'author' => 'Ustadzah Fatimah',
                'image' => 'images/gallery/gallery-thumb-03.webp',
                'content' => '<p>Selamat kepada Ananda Ahmad yang telah berhasil membawa pulang medali emas tingkat kota dalam kompetisi olimpiade matematika sekolah dasar. Prestasi luar biasa ini merupakan buah dari ketekunan latihan dan bimbingan intensif dari tim guru matematika SDIT.</p><p>Kepala sekolah menyatakan apresiasi setinggi-tingginya dan berharap kemenangan ini memotivasi siswa-siswi lain untuk terus berprestasi, baik di bidang akademis maupun keagamaan. Yayasan berkomitmen untuk selalu mendukung pengembangan potensi minat dan bakat setiap peserta didik.</p>'
            ],
            4 => [
                'id' => 4,
                'title' => 'Kisah Sukses Alumni dari Sekolah untuk Dunia',
                'category' => 'Alumni',
                'category_color' => '#6f42c1',
                'date' => '01 Juni 2026',
                'author' => 'Albert',
                'image' => 'images/gallery/gallery-thumb-04.webp',
                'content' => '<p>Kisah inspiratif datang dari salah satu alumni terbaik yayasan kami yang kini menempuh pendidikan tinggi di luar negeri dengan beasiswa penuh. Keberhasilan ini membuktikan bahwa pembiasaan karakter unggul dan kurikulum berstandar internasional yang diterapkan di sekolah mampu membekali alumni bersaing secara global.</p><p>Dalam sesi wawancara online, alumni menyampaikan rasa terima kasih yang mendalam kepada asatidzah dan jajaran yayasan atas bekal adab dan ilmu dasar riset yang diberikan sejak dini. Semoga prestasi ini menjadi motivasi besar bagi seluruh adik kelas.</p>'
            ]
        ];

        $post = $posts[$id] ?? $posts[1];

        $related = array_filter($posts, function($item) use ($id) {
            return $item['id'] != $id;
        });

        return view('blog_detail', [
            'post' => $post,
            'related' => $related,
            'popular' => $posts
        ]);
    }

    public function alumni(): string
    {
        return view('alumni');
    }

    public function libraries(): string
    {
        return view('libraries');
    }

    public function campusLife(): string
    {
        return view('campus-life');
    }

    public function events(): string
    {
        return view('events');
    }
}
