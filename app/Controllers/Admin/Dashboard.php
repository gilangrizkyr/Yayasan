<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data['admissions_count'] = $this->db->table('admissions')->countAllResults();
        $data['messages_count']   = $this->db->table('contacts')->countAllResults();
        $data['blogs_count']      = $this->db->table('blogs')->countAllResults();
        $data['teachers_count']   = $this->db->table('teachers')->countAllResults();
        
        $data['recent_admissions'] = $this->db->table('admissions')->orderBy('created_at', 'DESC')->limit(5)->get()->getResult();
        $data['recent_messages']   = $this->db->table('contacts')->orderBy('created_at', 'DESC')->limit(5)->get()->getResult();

        return view('admin/dashboard', $data);
    }

    // ==========================================
    // SETTINGS MANAGEMENT
    // ==========================================
    public function settings()
    {
        $settings = $this->db->table('settings')->get()->getResult();
        $data['settings'] = [];
        foreach ($settings as $s) {
            $data['settings'][$s->key_name] = $s;
        }
        return view('admin/settings', $data);
    }

    public function saveSettings()
    {
        $posts = $this->request->getPost();
        foreach ($posts as $key => $val) {
            // Check if key is a translation field like site_name_id, site_name_en
            if (str_ends_with($key, '_id')) {
                $baseKey = substr($key, 0, -3);
                $this->db->table('settings')->where('key_name', $baseKey)->update([
                    'key_value_id' => $val,
                    'key_value_en' => $posts[$baseKey . '_en'] ?? $val
                ]);
            } elseif (!str_ends_with($key, '_en') && $this->db->table('settings')->where('key_name', $key)->countAllResults() > 0) {
                // If it is a non-translated setting field
                $this->db->table('settings')->where('key_name', $key)->update([
                    'key_value_id' => $val,
                    'key_value_en' => $val
                ]);
            }
        }
        return redirect()->to(base_url('admin/settings'))->with('success', 'Pengaturan berhasil diperbarui.');
    }

    // ==========================================
    // BANNERS (HERO SLIDER)
    // ==========================================
    public function banners()
    {
        $data['banners'] = $this->db->table('banners')->orderBy('list_order', 'ASC')->get()->getResult();
        return view('admin/banners', $data);
    }

    public function saveBanner()
    {
        $id = $this->request->getPost('id');
        $img = $this->request->getFile('image');
        $imgPath = $this->request->getPost('old_image');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $newName);
            $imgPath = 'uploads/' . $newName;
        }

        $saveData = [
            'title_id'    => $this->request->getPost('title_id'),
            'title_en'    => $this->request->getPost('title_en'),
            'subtitle_id' => $this->request->getPost('subtitle_id'),
            'subtitle_en' => $this->request->getPost('subtitle_en'),
            'image'       => $imgPath,
            'link'        => $this->request->getPost('link'),
            'list_order'  => (int)$this->request->getPost('list_order'),
            'status'      => (int)$this->request->getPost('status'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('banners')->where('id', $id)->update($saveData);
            $msg = 'Slide banner berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('banners')->insert($saveData);
            $msg = 'Slide banner baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/banners'))->with('success', $msg);
    }

    public function deleteBanner($id)
    {
        $this->db->table('banners')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/banners'))->with('success', 'Slide banner berhasil dihapus.');
    }

    // ==========================================
    // ANNOUNCEMENTS
    // ==========================================
    public function announcements()
    {
        $data['announcements'] = $this->db->table('announcements')->orderBy('date', 'DESC')->get()->getResult();
        return view('admin/announcements', $data);
    }

    public function saveAnnouncement()
    {
        $id = $this->request->getPost('id');
        $saveData = [
            'title_id'   => $this->request->getPost('title_id'),
            'title_en'   => $this->request->getPost('title_en'),
            'content_id' => $this->request->getPost('content_id'),
            'content_en' => $this->request->getPost('content_en'),
            'date'       => $this->request->getPost('date'),
            'status'     => (int)$this->request->getPost('status'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('announcements')->where('id', $id)->update($saveData);
            $msg = 'Pengumuman berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('announcements')->insert($saveData);
            $msg = 'Pengumuman baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/announcements'))->with('success', $msg);
    }

    public function deleteAnnouncement($id)
    {
        $this->db->table('announcements')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/announcements'))->with('success', 'Pengumuman berhasil dihapus.');
    }

    // ==========================================
    // EVENTS
    // ==========================================
    public function events()
    {
        $data['events'] = $this->db->table('events')->orderBy('date', 'DESC')->get()->getResult();
        return view('admin/events', $data);
    }

    public function saveEvent()
    {
        $id = $this->request->getPost('id');
        $img = $this->request->getFile('image');
        $imgPath = $this->request->getPost('old_image');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $newName);
            $imgPath = 'uploads/' . $newName;
        }

        $saveData = [
            'title_id'   => $this->request->getPost('title_id'),
            'title_en'   => $this->request->getPost('title_en'),
            'venue_id'   => $this->request->getPost('venue_id'),
            'venue_en'   => $this->request->getPost('venue_en'),
            'content_id' => $this->request->getPost('content_id'),
            'content_en' => $this->request->getPost('content_en'),
            'date'       => $this->request->getPost('date'),
            'time'       => $this->request->getPost('time'),
            'image'      => $imgPath,
            'status'     => (int)$this->request->getPost('status'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('events')->where('id', $id)->update($saveData);
            $msg = 'Kegiatan/Event berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('events')->insert($saveData);
            $msg = 'Kegiatan/Event baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/events'))->with('success', $msg);
    }

    public function deleteEvent($id)
    {
        $this->db->table('events')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/events'))->with('success', 'Kegiatan/Event berhasil dihapus.');
    }

    // ==========================================
    // TEACHERS
    // ==========================================
    public function teachers()
    {
        $data['teachers'] = $this->db->table('teachers')->orderBy('list_order', 'ASC')->get()->getResult();
        return view('admin/teachers', $data);
    }

    public function saveTeacher()
    {
        $id = $this->request->getPost('id');
        $img = $this->request->getFile('photo');
        $imgPath = $this->request->getPost('old_photo');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $newName);
            $imgPath = 'uploads/' . $newName;
        }

        $saveData = [
            'name'           => $this->request->getPost('name'),
            'designation_id' => $this->request->getPost('designation_id'),
            'designation_en' => $this->request->getPost('designation_en'),
            'description_id' => $this->request->getPost('description_id'),
            'description_en' => $this->request->getPost('description_en'),
            'photo'          => $imgPath,
            'facebook'       => $this->request->getPost('facebook'),
            'instagram'      => $this->request->getPost('instagram'),
            'linkedin'       => $this->request->getPost('linkedin'),
            'list_order'     => (int)$this->request->getPost('list_order'),
            'status'         => (int)$this->request->getPost('status'),
            'updated_at'     => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('teachers')->where('id', $id)->update($saveData);
            $msg = 'Data Guru/Pendidik berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('teachers')->insert($saveData);
            $msg = 'Data Guru/Pendidik baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/teachers'))->with('success', $msg);
    }

    public function deleteTeacher($id)
    {
        $this->db->table('teachers')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/teachers'))->with('success', 'Data Guru/Pendidik berhasil dihapus.');
    }

    // ==========================================
    // TUITION FEES
    // ==========================================
    public function tuitionFees()
    {
        $data['fees'] = $this->db->table('tuition_fees')->orderBy('list_order', 'ASC')->get()->getResult();
        return view('admin/tuition_fees', $data);
    }

    public function saveTuitionFee()
    {
        $id = $this->request->getPost('id');
        $saveData = [
            'level_id'           => $this->request->getPost('level_id'),
            'level_en'           => $this->request->getPost('level_en'),
            'registration_fee'   => (int)$this->request->getPost('registration_fee'),
            'base_fee'           => (int)$this->request->getPost('base_fee'),
            'monthly_spp'        => (int)$this->request->getPost('monthly_spp'),
            'books_uniforms_fee' => (int)$this->request->getPost('books_uniforms_fee'),
            'list_order'         => (int)$this->request->getPost('list_order'),
            'updated_at'         => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('tuition_fees')->where('id', $id)->update($saveData);
            $msg = 'Rincian biaya berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('tuition_fees')->insert($saveData);
            $msg = 'Rincian biaya baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/tuition_fees'))->with('success', $msg);
    }

    public function deleteTuitionFee($id)
    {
        $this->db->table('tuition_fees')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/tuition_fees'))->with('success', 'Rincian biaya berhasil dihapus.');
    }

    // ==========================================
    // GALLERY
    // ==========================================
    public function gallery()
    {
        $data['gallery'] = $this->db->table('gallery')->orderBy('created_at', 'DESC')->get()->getResult();
        return view('admin/gallery', $data);
    }

    public function saveGallery()
    {
        $id = $this->request->getPost('id');
        $img = $this->request->getFile('image');
        $imgPath = $this->request->getPost('old_image');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $newName);
            $imgPath = 'uploads/' . $newName;
        }

        $saveData = [
            'title_id'   => $this->request->getPost('title_id'),
            'title_en'   => $this->request->getPost('title_en'),
            'category'   => $this->request->getPost('category'),
            'image'      => $imgPath,
            'status'     => (int)$this->request->getPost('status'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('gallery')->where('id', $id)->update($saveData);
            $msg = 'Foto galeri berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('gallery')->insert($saveData);
            $msg = 'Foto galeri baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/gallery'))->with('success', $msg);
    }

    public function deleteGallery($id)
    {
        $this->db->table('gallery')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/gallery'))->with('success', 'Foto galeri berhasil dihapus.');
    }

    // ==========================================
    // BLOG / BERITA
    // ==========================================
    public function blogs()
    {
        $data['blogs'] = $this->db->table('blogs')
            ->select('blogs.*, blog_categories.name_id as category_name_id, blog_categories.name_en as category_name_en')
            ->join('blog_categories', 'blog_categories.id = blogs.category_id', 'left')
            ->orderBy('blogs.created_at', 'DESC')
            ->get()->getResult();

        $data['categories'] = $this->db->table('blog_categories')->get()->getResult();
        return view('admin/blogs', $data);
    }

    public function saveBlog()
    {
        $id = $this->request->getPost('id');
        $img = $this->request->getFile('image');
        $imgPath = $this->request->getPost('old_image');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $newName);
            $imgPath = 'uploads/' . $newName;
        }

        // Generate slug from English title, or ID title as fallback
        $slugSource = $this->request->getPost('title_id');
        $slug = url_title($slugSource, '-', true);

        $saveData = [
            'title_id'    => $this->request->getPost('title_id'),
            'title_en'    => $this->request->getPost('title_en'),
            'slug'        => $slug,
            'content_id'  => $this->request->getPost('content_id'),
            'content_en'  => $this->request->getPost('content_en'),
            'image'       => $imgPath,
            'category_id' => (int)$this->request->getPost('category_id'),
            'author_id'   => session()->get('userId') ?? 1,
            'status'      => (int)$this->request->getPost('status'),
            'updated_at'  => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('blogs')->where('id', $id)->update($saveData);
            $msg = 'Artikel blog berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('blogs')->insert($saveData);
            $msg = 'Artikel blog baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/blogs'))->with('success', $msg);
    }

    public function deleteBlog($id)
    {
        $this->db->table('blogs')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/blogs'))->with('success', 'Artikel blog berhasil dihapus.');
    }

    // ==========================================
    // ADMISSIONS (PENDAFTARAN)
    // ==========================================
    public function admissions()
    {
        $data['admissions'] = $this->db->table('admissions')->orderBy('created_at', 'DESC')->get()->getResult();
        return view('admin/admissions', $data);
    }

    public function updateAdmissionStatus()
    {
        $id = $this->request->getPost('id');
        $status = $this->request->getPost('status');
        
        $this->db->table('admissions')->where('id', $id)->update(['status' => $status]);
        return redirect()->to(base_url('admin/admissions'))->with('success', 'Status pendaftaran berhasil diubah.');
    }

    public function deleteAdmission($id)
    {
        $this->db->table('admissions')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/admissions'))->with('success', 'Data pendaftaran berhasil dihapus.');
    }

    // ==========================================
    // CONTACT MESSAGES (PESAN MASUK)
    // ==========================================
    public function contacts()
    {
        $data['messages'] = $this->db->table('contacts')->orderBy('created_at', 'DESC')->get()->getResult();
        return view('admin/contacts', $data);
    }

    public function deleteContact($id)
    {
        $this->db->table('contacts')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/contacts'))->with('success', 'Pesan masuk berhasil dihapus.');
    }

    // ==========================================
    // TESTIMONIALS
    // ==========================================
    public function testimonials()
    {
        $data['testimonials'] = $this->db->table('testimonials')->orderBy('created_at', 'DESC')->get()->getResult();
        return view('admin/testimonials', $data);
    }

    public function saveTestimonial()
    {
        $id = $this->request->getPost('id');
        $img = $this->request->getFile('image');
        $imgPath = $this->request->getPost('old_image');

        if ($img && $img->isValid() && !$img->hasMoved()) {
            $newName = $img->getRandomName();
            $img->move(ROOTPATH . 'public/uploads', $newName);
            $imgPath = 'uploads/' . $newName;
        }

        $saveData = [
            'name'           => $this->request->getPost('name'),
            'designation_id' => $this->request->getPost('designation_id'),
            'designation_en' => $this->request->getPost('designation_en'),
            'quote_id'       => $this->request->getPost('quote_id'),
            'quote_en'       => $this->request->getPost('quote_en'),
            'image'          => $imgPath,
            'type'           => $this->request->getPost('type') ?: 'general',
            'status'         => (int)$this->request->getPost('status'),
            'updated_at'     => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('testimonials')->where('id', $id)->update($saveData);
            $msg = 'Testimoni berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('testimonials')->insert($saveData);
            $msg = 'Testimoni baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/testimonials'))->with('success', $msg);
    }

    public function deleteTestimonial($id)
    {
        $this->db->table('testimonials')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/testimonials'))->with('success', 'Testimoni berhasil dihapus.');
    }

    // ==========================================
    // EXTRACURRICULARS / PROGRAMS
    // ==========================================
    public function extracurriculars()
    {
        $data['extracurriculars'] = $this->db->table('extracurriculars')->orderBy('created_at', 'DESC')->get()->getResult();
        return view('admin/extracurriculars', $data);
    }

    public function saveExtracurricular()
    {
        $id = $this->request->getPost('id');
        $saveData = [
            'title_id'       => $this->request->getPost('title_id'),
            'title_en'       => $this->request->getPost('title_en'),
            'description_id' => $this->request->getPost('description_id'),
            'description_en' => $this->request->getPost('description_en'),
            'icon'           => $this->request->getPost('icon') ?: 'ri-star-line',
            'status'         => (int)$this->request->getPost('status'),
            'updated_at'     => date('Y-m-d H:i:s'),
        ];

        if ($id) {
            $this->db->table('extracurriculars')->where('id', $id)->update($saveData);
            $msg = 'Kegiatan ekstrakurikuler berhasil diupdate.';
        } else {
            $saveData['created_at'] = date('Y-m-d H:i:s');
            $this->db->table('extracurriculars')->insert($saveData);
            $msg = 'Kegiatan ekstrakurikuler baru berhasil ditambahkan.';
        }

        return redirect()->to(base_url('admin/extracurriculars'))->with('success', $msg);
    }

    public function deleteExtracurricular($id)
    {
        $this->db->table('extracurriculars')->delete(['id' => $id]);
        return redirect()->to(base_url('admin/extracurriculars'))->with('success', 'Kegiatan ekstrakurikuler berhasil dihapus.');
    }
}
