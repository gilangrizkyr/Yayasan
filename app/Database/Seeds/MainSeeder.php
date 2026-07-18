<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MainSeeder extends Seeder
{
    public function run()
    {
        // 1. Seed: users
        $userData = [
            'username'   => 'admin',
            'email'      => 'admin@khalifahlatif.or.id',
            'password'   => password_hash('GilangRizky', PASSWORD_DEFAULT),
            'role'       => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->table('users')->insert($userData);

        // 2. Seed: settings
        $settingsData = [
            [
                'key_name'     => 'site_name',
                'key_value_id' => 'Yayasan Khalifah Latif Cendaka',
                'key_value_en' => 'Khalifah Latif Cendaka Foundation',
                'group_name'   => 'general',
            ],
            [
                'key_name'     => 'phone',
                'key_value_id' => '+62-711-000-0000',
                'key_value_en' => '+62-711-000-0000',
                'group_name'   => 'contact',
            ],
            [
                'key_name'     => 'email',
                'key_value_id' => 'info@khalifah-latif.sch.id',
                'key_value_en' => 'info@khalifah-latif.sch.id',
                'group_name'   => 'contact',
            ],
            [
                'key_name'     => 'address',
                'key_value_id' => 'Jl. Khalifah Latif No. 1, Kota Palembang, Sumatera Selatan',
                'key_value_en' => 'Jl. Khalifah Latif No. 1, Palembang City, South Sumatra',
                'group_name'   => 'contact',
            ],
            [
                'key_name'     => 'maps_iframe',
                'key_value_id' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3888361099684!2d104.72445831526425!3d-2.9888299411226463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75f1aa93574b%3A0xe21262d1e2170!2sPalembang!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid',
                'key_value_en' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.3888361099684!2d104.72445831526425!3d-2.9888299411226463!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75f1aa93574b%3A0xe21262d1e2170!2sPalembang!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid',
                'group_name'   => 'contact',
            ],
            [
                'key_name'     => 'facebook',
                'key_value_id' => 'https://facebook.com/khalifahlatif',
                'key_value_en' => 'https://facebook.com/khalifahlatif',
                'group_name'   => 'social',
            ],
            [
                'key_name'     => 'instagram',
                'key_value_id' => 'https://instagram.com/khalifahlatif',
                'key_value_en' => 'https://instagram.com/khalifahlatif',
                'group_name'   => 'social',
            ],
            [
                'key_name'     => 'youtube',
                'key_value_id' => 'https://youtube.com/khalifahlatif',
                'key_value_en' => 'https://youtube.com/khalifahlatif',
                'group_name'   => 'social',
            ],
            [
                'key_name'     => 'linkedin',
                'key_value_id' => 'https://linkedin.com/company/khalifahlatif',
                'key_value_en' => 'https://linkedin.com/company/khalifahlatif',
                'group_name'   => 'social',
            ],
            [
                'key_name'     => 'about_intro',
                'key_value_id' => 'Selamat datang di Yayasan Khalifah Latif Cendaka, lembaga pendidikan terpadu yang berkomitmen mencetak generasi unggul, berakhlak mulia, dan berdaya saing global.',
                'key_value_en' => 'Welcome to the Khalifah Latif Cendaka Foundation, an integrated educational institution committed to producing superior generations with noble character and global competitiveness.',
                'group_name'   => 'about',
            ],
            [
                'key_name'     => 'about_history',
                'key_value_id' => 'Yayasan Khalifah Latif Cendaka didirikan dengan visi besar untuk menyelenggarakan pendidikan berkualitas tinggi yang mengintegrasikan nilai-nilai Islam, ilmu pengetahuan modern, dan karakter unggul. Perjalanan kami dimulai dari tekad memberikan kontribusi nyata bagi masa depan umat dan bangsa.',
                'key_value_en' => 'The Khalifah Latif Cendaka Foundation was established with a grand vision to provide high-quality education integrating Islamic values, modern science, and outstanding character. Our journey began with a determination to make a tangible contribution to the future of the nation and the Ummah.',
                'group_name'   => 'about',
            ],
            [
                'key_name'     => 'about_vision',
                'key_value_id' => 'Menjadi lembaga pendidikan Islam terpadu yang terdepan dalam mencetak generasi unggul yang berakhlak mulia, cerdas, kreatif, dan berdaya saing global.',
                'key_value_en' => 'To be the leading integrated Islamic educational institution in producing superior generations of noble character, intelligent, creative, and globally competitive.',
                'group_name'   => 'about',
            ],
            [
                'key_name'     => 'about_mission_1',
                'key_value_id' => 'Menyelenggarakan pendidikan berkualitas berbasis nilai-nilai keislaman dan Al-Qur\'an.',
                'key_value_en' => 'Organizing high-quality education based on Islamic values and the Quran.',
                'group_name'   => 'about',
            ],
            [
                'key_name'     => 'about_mission_2',
                'key_value_id' => 'Mengembangkan bakat akademis dan non-akademis siswa secara optimal.',
                'key_value_en' => 'Optimally developing students\' academic and non-academic talents.',
                'group_name'   => 'about',
            ],
            [
                'key_name'     => 'about_mission_3',
                'key_value_id' => 'Membentuk karakter kepemimpinan yang berakhlak mulia dan berwawasan global.',
                'key_value_en' => 'Building leadership character with noble morals and a global mindset.',
                'group_name'   => 'about',
            ],
            [
                'key_name'     => 'operating_hours',
                'key_value_id' => 'Senin - Sabtu: 07.30 - 15.30 WIB',
                'key_value_en' => 'Monday - Saturday: 07:30 AM - 03:30 PM',
                'group_name'   => 'general',
            ],
        ];
        $this->db->table('settings')->insertBatch($settingsData);

        // 3. Seed: banners
        $bannersData = [
            [
                'title_id'    => 'Mencetak Generasi Qur\'ani & Unggul',
                'title_en'    => 'Nurturing Quranic & Excellent Generations',
                'subtitle_id' => 'Selamat Datang di Yayasan Khalifah Latif Cendaka',
                'subtitle_en' => 'Welcome to Khalifah Latif Cendaka Foundation',
                'image'       => 'images/bangunan/gedung.webp',
                'link'        => 'admission',
                'list_order'  => 1,
                'status'      => 1,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('banners')->insertBatch($bannersData);

        // 4. Seed: announcements
        $announcementsData = [
            [
                'title_id'   => 'Penerimaan Peserta Didik Baru (PPDB) T.A. 2026/2027 Resmi Dibuka',
                'title_en'   => 'New Student Admission (PPDB) A.Y. 2026/2027 is Officially Open',
                'content_id' => 'Informasi pendaftaran siswa baru untuk jenjang TK, SD, SMP, dan SMA terpadu dapat diakses melalui menu Pendaftaran.',
                'content_en' => 'Registration information for new students of TK, SD, SMP, and SMA levels can be accessed via the Admissions menu.',
                'date'       => '2026-07-01',
                'status'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title_id'   => 'Jadwal Libur Semester Ganjil',
                'title_en'   => 'Odd Semester Holiday Schedule',
                'content_id' => 'Libur semester ganjil dimulai dari tanggal 20 Desember hingga 3 Januari. Kegiatan belajar mengajar aktif kembali 4 Januari.',
                'content_en' => 'The odd semester holiday starts from December 20th to January 3rd. Active teaching and learning activities resume on January 4th.',
                'date'       => '2026-12-10',
                'status'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('announcements')->insertBatch($announcementsData);

        // 5. Seed: events
        $eventsData = [
            [
                'title_id'   => 'Penerimaan & Orientasi Santri Baru (PPDB) T.A. 2026/2027',
                'title_en'   => 'Admission & Orientation of New Students (PPDB) A.Y. 2026/2027',
                'venue_id'   => 'Aula Utama Kampus Yayasan Khalifah Latif Cendaka',
                'venue_en'   => 'Main Hall of Khalifah Latif Cendaka Foundation Campus',
                'content_id' => 'Penerimaan resmi dan masa pengenalan lingkungan sekolah (MPLS) bagi seluruh santri dan siswa baru tingkat TKIT, SDIT, SMPIT, dan SMAIT.',
                'content_en' => 'Official acceptance and school environment introduction period (MPLS) for all new students at TKIT, SDIT, SMPIT, and SMAIT levels.',
                'date'       => '2026-07-20',
                'time'       => '08.00 - 12.00 WIB',
                'image'      => 'images/bangunan/gedung.webp',
                'status'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title_id'   => 'Tabligh Akbar & Doa Bersama Menyambut Hari Kemerdekaan RI',
                'title_en'   => 'Grand Islamic Lecture & Joint Prayer for Independence Day',
                'venue_id'   => 'Masjid Jamie Khalifah Latif Cendaka',
                'venue_en'   => 'Jamie Mosque of Khalifah Latif Cendaka',
                'content_id' => 'Kajian umum kebangsaan bersama asatidzah dan tokoh masyarakat, dilanjutkan dengan doa bersama demi keselamatan bangsa.',
                'content_en' => 'National public study with Islamic scholars and community figures, followed by a joint prayer for the nation\'s safety.',
                'date'       => '2026-08-15',
                'time'       => '19.30 WIB - Selesai',
                'image'      => 'images/bangunan/gedung.webp',
                'status'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('events')->insertBatch($eventsData);

        // 6. Seed: testimonials
        $testimonialsData = [
            [
                'name'           => 'Dr. H. Khalifah Latif, M.Pd.',
                'designation_id' => 'Ketua Yayasan',
                'designation_en' => 'Chairman of the Foundation',
                'quote_id'       => 'Pendidikan di Yayasan kami didedikasikan untuk membentuk pemimpin masa depan yang kokoh secara keislaman, cemerlang dalam keilmuan sains modern, serta memiliki kepedulian sosial tinggi.',
                'quote_en'       => 'Education at our Foundation is dedicated to shaping future leaders who are strong in their Islamic faith, brilliant in modern science, and possess a high social awareness.',
                'image'          => 'images/testimonial/ketua.png',
                'type'           => 'foundation',
                'status'         => 1,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Sarah Humaira',
                'designation_id' => 'Alumni SMAIT 2022 - Mahasiswi ITB',
                'designation_en' => 'Alumni of SMAIT 2022 - ITB Student',
                'quote_id'       => 'Belajar di SMAIT Khalifah Latif memberikan bekal akademis yang luar biasa sekaligus kematangan karakter Islam yang menjaga saya di dunia perkuliahan.',
                'quote_en'       => 'Studying at SMAIT Khalifah Latif provided an extraordinary academic background as well as a mature Islamic character that guides me through college life.',
                'image'          => null,
                'type'           => 'alumni',
                'status'         => 1,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('testimonials')->insertBatch($testimonialsData);

        // 7. Seed: teachers
        $teachersData = [
            [
                'name'           => 'KH. Abdul Latif, Lc.',
                'designation_id' => 'Ketua Dewan Pembina',
                'designation_en' => 'Chairman of Advisory Board',
                'description_id' => 'Lulusan Universitas Islam Madinah, membina keislaman dan arah kebijakan kurikulum pesantren.',
                'description_en' => 'Graduate of Islamic University of Madinah, guiding Islamic values and pesantren curriculum policy.',
                'photo'          => null,
                'facebook'       => '#',
                'instagram'      => '#',
                'linkedin'       => '#',
                'list_order'     => 1,
                'status'         => 1,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'name'           => 'Dr. H. Ahmad Dahlan, M.Pd.',
                'designation_id' => 'Kepala Sekolah / Direktur Pendidikan',
                'designation_en' => 'Principal / Director of Education',
                'description_id' => 'Doktor Manajemen Pendidikan, memimpin operasional akademis dan standarisasi mutu guru.',
                'description_en' => 'Doctor of Education Management, leading academic operations and teacher quality standardization.',
                'photo'          => null,
                'facebook'       => '#',
                'instagram'      => '#',
                'linkedin'       => '#',
                'list_order'     => 2,
                'status'         => 1,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('teachers')->insertBatch($teachersData);

        // 8. Seed: gallery
        $galleryData = [
            [
                'title_id'   => 'Kegiatan Belajar Mengajar',
                'title_en'   => 'Teaching & Learning Activities',
                'image'      => 'images/gallery/gallery-thumb-01.webp',
                'category'   => 'akademik',
                'status'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'title_id'   => 'Praktek Laboratorium Sains',
                'title_en'   => 'Science Lab Practice',
                'image'      => 'images/gallery/gallery-thumb-02.webp',
                'category'   => 'fasilitas',
                'status'     => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('gallery')->insertBatch($galleryData);

        // 9. Seed: blog_categories
        $catData = [
            [
                'name_id'    => 'Pendidikan',
                'name_en'    => 'Education',
                'color'      => '#0d6efd',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name_id'    => 'Kegiatan',
                'name_en'    => 'Activity',
                'color'      => '#ffc107',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('blog_categories')->insertBatch($catData);

        // 10. Seed: blogs
        $blogsData = [
            [
                'title_id'    => 'Pendidikan Karakter Berbasis Karakter Islami di Sekolah',
                'title_en'    => 'Character Education Based on Islamic Character in Schools',
                'slug'        => 'pendidikan-karakter-berbasis-karakter-islami',
                'content_id'  => '<p>Pendidikan karakter di sekolah sangat penting untuk membekali generasi masa depan dengan moralitas yang kokoh.</p>',
                'content_en'  => '<p>Character education in schools is crucial to equip future generations with robust morality.</p>',
                'image'       => 'images/blog/blog-01.webp',
                'category_id' => 1,
                'author_id'   => 1,
                'status'      => 1,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('blogs')->insertBatch($blogsData);

        // 11. Seed: tuition_fees
        $feesData = [
            [
                'level_id'           => 'PAUD / TK Islam Terpadu',
                'level_en'           => 'Integrated Islamic Pre-school / Kindergarten',
                'registration_fee'   => 150000,
                'base_fee'           => 1500000,
                'monthly_spp'        => 150000,
                'books_uniforms_fee' => 750000,
                'list_order'         => 1,
                'created_at'         => date('Y-m-d H:i:s'),
                'updated_at'         => date('Y-m-d H:i:s'),
            ],
            [
                'level_id'           => 'SD Islam Terpadu',
                'level_en'           => 'Integrated Islamic Elementary School',
                'registration_fee'   => 200000,
                'base_fee'           => 3000000,
                'monthly_spp'        => 250000,
                'books_uniforms_fee' => 1200000,
                'list_order'         => 2,
                'created_at'         => date('Y-m-d H:i:s'),
                'updated_at'         => date('Y-m-d H:i:s'),
            ],
            [
                'level_id'           => 'SMP Islam Terpadu',
                'level_en'           => 'Integrated Islamic Junior High School',
                'registration_fee'   => 250000,
                'base_fee'           => 4500000,
                'monthly_spp'        => 350000,
                'books_uniforms_fee' => 1500000,
                'list_order'         => 3,
                'created_at'         => date('Y-m-d H:i:s'),
                'updated_at'         => date('Y-m-d H:i:s'),
            ],
            [
                'level_id'           => 'SMA Islam Terpadu',
                'level_en'           => 'Integrated Islamic Senior High School',
                'registration_fee'   => 300000,
                'base_fee'           => 5500000,
                'monthly_spp'        => 450000,
                'books_uniforms_fee' => 1800000,
                'list_order'         => 4,
                'created_at'         => date('Y-m-d H:i:s'),
                'updated_at'         => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('tuition_fees')->insertBatch($feesData);

        // 12. Seed: extracurriculars
        $extrasData = [
            [
                'title_id'       => 'Pramuka Terpadu',
                'title_en'       => 'Integrated Scouting',
                'description_id' => 'Melatih kedisiplinan, kemandirian, kepemimpinan, dan kerja sama tim.',
                'description_en' => 'Training discipline, independence, leadership, and teamwork.',
                'icon'           => 'ri-compass-3-line',
                'status'         => 1,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
            [
                'title_id'       => 'Seni Bela Diri',
                'title_en'       => 'Martial Arts',
                'description_id' => 'Melatih fisik, ketangkasan diri, dan pertahanan diri Islami.',
                'description_en' => 'Training physical strength, agility, and Islamic self-defense.',
                'icon'           => 'ri-shield-user-line',
                'status'         => 1,
                'created_at'     => date('Y-m-d H:i:s'),
                'updated_at'     => date('Y-m-d H:i:s'),
            ],
        ];
        $this->db->table('extracurriculars')->insertBatch($extrasData);
    }
}
