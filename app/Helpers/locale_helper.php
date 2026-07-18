<?php

if (!function_exists('lang_field')) {
    function lang_field($item, $field) {
        $locale = service('request')->getLocale();
        $localizedField = $field . '_' . $locale;
        
        // Fallback for settings or other custom keys
        if ($field === 'key_value') {
            $localizedField = 'key_value_' . $locale;
        }

        // If it's an object
        if (is_object($item)) {
            if (property_exists($item, $localizedField)) {
                return $item->{$localizedField};
            }
            // Fallbacks
            if ($locale === 'en' && property_exists($item, $field . '_id')) {
                return $item->{$field . '_id'}; // Fallback to ID
            }
            if ($locale === 'id' && property_exists($item, $field . '_en')) {
                return $item->{$field . '_en'}; // Fallback to EN
            }
            return $item->{$field} ?? '';
        }
        
        // If it's an array
        if (is_array($item)) {
            if (isset($item[$localizedField])) {
                return $item[$localizedField];
            }
            // Fallbacks
            if ($locale === 'en' && isset($item[$field . '_id'])) {
                return $item[$field . '_id'];
            }
            if ($locale === 'id' && isset($item[$field . '_en'])) {
                return $item[$field . '_en'];
            }
            return $item[$field] ?? '';
        }
        
        return '';
    }
}

if (!function_exists('site_setting')) {
    function site_setting($key, $default = '') {
        $db = \Config\Database::connect();
        $setting = $db->table('settings')->where('key_name', $key)->get()->getRow();
        if ($setting) {
            return lang_field($setting, 'key_value');
        }
        return $default;
    }
}

if (!function_exists('lang_trans')) {
    function lang_trans($key) {
        $locale = service('request')->getLocale();
        $translations = [
            'home' => ['id' => 'Beranda', 'en' => 'Home'],
            'about_us' => ['id' => 'Tentang Yayasan', 'en' => 'About Us'],
            'alumni' => ['id' => 'Jaringan Alumni', 'en' => 'Alumni Network'],
            'library' => ['id' => 'Perpustakaan', 'en' => 'Library'],
            'campus_life' => ['id' => 'Kehidupan Sekolah', 'en' => 'Campus Life'],
            'academics' => ['id' => 'Akademik', 'en' => 'Academics'],
            'programs' => ['id' => 'Program Pendidikan', 'en' => 'Educational Programs'],
            'teachers' => ['id' => 'Tenaga Pengajar', 'en' => 'Our Teachers'],
            'events' => ['id' => 'Agenda Kegiatan', 'en' => 'Events Calendar'],
            'admissions' => ['id' => 'Pendaftaran', 'en' => 'Admissions'],
            'process_docs' => ['id' => 'Alur & Dokumen', 'en' => 'Process & Documents'],
            'how_to_apply' => ['id' => 'Cara Mendaftar', 'en' => 'How to Apply'],
            'tuition_fees' => ['id' => 'Biaya Pendidikan', 'en' => 'Tuition Fees'],
            'gallery' => ['id' => 'Galeri', 'en' => 'Gallery'],
            'blog' => ['id' => 'Blog & Berita', 'en' => 'Blog & News'],
            'contact' => ['id' => 'Kontak', 'en' => 'Contact Us'],
            'apply_now' => ['id' => 'Daftar Sekarang', 'en' => 'Apply Now'],
            'our_foundation' => ['id' => 'Yayasan Kami', 'en' => 'Our Foundation'],
            'latest_news' => ['id' => 'Berita Terbaru', 'en' => 'Latest News'],
            'read_more' => ['id' => 'Baca Selengkapnya', 'en' => 'Read More'],
            'announcements' => ['id' => 'Pengumuman Harian', 'en' => 'Daily Announcements'],
            'register_title' => ['id' => 'Formulir Pendaftaran', 'en' => 'Registration Form'],
            'submit' => ['id' => 'Kirim', 'en' => 'Submit'],
            'first_name' => ['id' => 'Nama Depan', 'en' => 'First Name'],
            'last_name' => ['id' => 'Nama Belakang', 'en' => 'Last Name'],
            'email' => ['id' => 'Alamat Email', 'en' => 'Email Address'],
            'phone' => ['id' => 'Nomor Telepon/WA', 'en' => 'Phone/WhatsApp Number'],
            'address' => ['id' => 'Alamat Lengkap', 'en' => 'Full Address'],
            'country' => ['id' => 'Negara', 'en' => 'Country'],
            'city' => ['id' => 'Kota', 'en' => 'City'],
            'postal_code' => ['id' => 'Kode Pos', 'en' => 'Postal Code'],
            'birth_date' => ['id' => 'Tanggal Lahir', 'en' => 'Date of Birth'],
            'message' => ['id' => 'Pesan Tambahan (Catatan)*', 'en' => 'Additional Message (Notes)*'],
            'send_admission' => ['id' => 'Kirim Pendaftaran', 'en' => 'Submit Registration'],
            'back_to_home' => ['id' => 'Kembali ke Beranda', 'en' => 'Back to Home'],
            'contact_us' => ['id' => 'Hubungi Kami', 'en' => 'Contact Us'],
            'send_message' => ['id' => 'Kirim Pesan', 'en' => 'Send Message'],
            'subject' => ['id' => 'Subjek Pesan', 'en' => 'Message Subject'],
            'your_message' => ['id' => 'Pesan Anda', 'en' => 'Your Message'],
            'send_now' => ['id' => 'Kirim Sekarang', 'en' => 'Send Now'],
            'view_all_teachers' => ['id' => 'Lihat Semua Pengajar', 'en' => 'View All Teachers'],
            'view_all_events' => ['id' => 'Lihat Semua Kegiatan', 'en' => 'View All Events'],
        ];

        return $translations[$key][$locale] ?? $translations[$key]['id'] ?? $key;
    }
}

