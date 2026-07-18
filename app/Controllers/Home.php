<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $db = \Config\Database::connect();
        
        $data = [
            'banners' => $db->table('banners')->where('status', 1)->orderBy('list_order', 'ASC')->get()->getResult(),
            'announcements' => $db->table('announcements')->where('status', 1)->orderBy('date', 'DESC')->get()->getResult(),
            'events' => $db->table('events')->where('status', 1)->orderBy('date', 'DESC')->limit(3)->get()->getResult(),
            'teachers' => $db->table('teachers')->where('status', 1)->orderBy('list_order', 'ASC')->limit(4)->get()->getResult(),
            'testimonials' => $db->table('testimonials')->where('status', 1)->get()->getResult(),
            'gallery' => $db->table('gallery')->where('status', 1)->orderBy('created_at', 'DESC')->limit(6)->get()->getResult(),
            'blogs' => $db->table('blogs')
                ->select('blogs.*, blog_categories.name_id as category_name_id, blog_categories.name_en as category_name_en, blog_categories.color')
                ->join('blog_categories', 'blog_categories.id = blogs.category_id', 'left')
                ->where('blogs.status', 1)
                ->orderBy('blogs.created_at', 'DESC')
                ->limit(3)
                ->get()->getResult(),
        ];

        return view('index', $data);
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
        $db = \Config\Database::connect();
        $data = [
            'gallery' => $db->table('gallery')->where('status', 1)->orderBy('created_at', 'DESC')->get()->getResult(),
        ];
        return view('gallery', $data);
    }

    public function blog(): string
    {
        $db = \Config\Database::connect();
        
        $categoryId = $this->request->getGet('category');
        $query = $db->table('blogs')
            ->select('blogs.*, blog_categories.name_id as category_name_id, blog_categories.name_en as category_name_en, blog_categories.color')
            ->join('blog_categories', 'blog_categories.id = blogs.category_id', 'left')
            ->where('blogs.status', 1);

        if ($categoryId) {
            $query->where('blogs.category_id', $categoryId);
        }

        $data = [
            'blogs' => $query->orderBy('blogs.created_at', 'DESC')->get()->getResult(),
            'categories' => $db->table('blog_categories')->get()->getResult(),
            'active_category' => $categoryId
        ];

        return view('blog', $data);
    }

    public function contact(): string
    {
        return view('contact');
    }

    public function program(): string
    {
        $db = \Config\Database::connect();
        $data = [
            'extracurriculars' => $db->table('extracurriculars')->where('status', 1)->get()->getResult(),
        ];
        return view('program', $data);
    }

    public function teachers(): string
    {
        $db = \Config\Database::connect();
        $data = [
            'teachers' => $db->table('teachers')->where('status', 1)->orderBy('list_order', 'ASC')->get()->getResult(),
        ];
        return view('teachers', $data);
    }

    public function howToApply(): string
    {
        return view('how-to-apply');
    }

    public function tuitionFee(): string
    {
        $db = \Config\Database::connect();
        $data = [
            'fees' => $db->table('tuition_fees')->orderBy('list_order', 'ASC')->get()->getResult(),
        ];
        return view('tuition-fee', $data);
    }

    public function blogDetail($id = 1): string
    {
        $db = \Config\Database::connect();

        $post = $db->table('blogs')
            ->select('blogs.*, blog_categories.name_id as category_name_id, blog_categories.name_en as category_name_en, blog_categories.color')
            ->join('blog_categories', 'blog_categories.id = blogs.category_id', 'left')
            ->where('blogs.id', $id)
            ->get()->getRow();

        if (!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $related = $db->table('blogs')
            ->select('blogs.*, blog_categories.name_id as category_name_id, blog_categories.name_en as category_name_en, blog_categories.color')
            ->join('blog_categories', 'blog_categories.id = blogs.category_id', 'left')
            ->where('blogs.status', 1)
            ->where('blogs.id !=', $id)
            ->orderBy('blogs.created_at', 'DESC')
            ->limit(3)
            ->get()->getResult();

        $popular = $db->table('blogs')
            ->select('blogs.*, blog_categories.name_id as category_name_id, blog_categories.name_en as category_name_en, blog_categories.color')
            ->join('blog_categories', 'blog_categories.id = blogs.category_id', 'left')
            ->where('blogs.status', 1)
            ->orderBy('blogs.created_at', 'DESC')
            ->limit(5)
            ->get()->getResult();

        return view('blog_detail', [
            'post' => $post,
            'related' => $related,
            'popular' => $popular
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
        $db = \Config\Database::connect();
        $data = [
            'events' => $db->table('events')->where('status', 1)->orderBy('date', 'DESC')->get()->getResult(),
        ];
        return view('events', $data);
    }

    public function switchLanguage($lang)
    {
        if (in_array($lang, ['id', 'en'])) {
            session()->set('lang', $lang);
        }
        return redirect()->back();
    }

    public function submitAdmission()
    {
        $db = \Config\Database::connect();
        
        $data = [
            'first_name'  => $this->request->getPost('first_name'),
            'last_name'   => $this->request->getPost('last_name'),
            'email'       => $this->request->getPost('email'),
            'phone'       => $this->request->getPost('phone'),
            'address'     => $this->request->getPost('address'),
            'country'     => $this->request->getPost('country') ?: 'Indonesia',
            'city'        => $this->request->getPost('city'),
            'postal_code' => $this->request->getPost('postal_code'),
            'birth_date'  => $this->request->getPost('birth_date') ?: date('Y-m-d'),
            'message'     => $this->request->getPost('message'),
            'status'      => 'Pending',
            'created_at'  => date('Y-m-d H:i:s'),
        ];

        $db->table('admissions')->insert($data);

        $msg = (session()->get('lang') === 'en') 
            ? 'Admission form submitted successfully!' 
            : 'Pendaftaran berhasil dikirim!';

        return redirect()->back()->with('success', $msg);
    }

    public function submitContact()
    {
        $db = \Config\Database::connect();
        
        $data = [
            'name'       => $this->request->getPost('name'),
            'email'      => $this->request->getPost('email'),
            'subject'    => $this->request->getPost('subject'),
            'message'    => $this->request->getPost('message'),
            'created_at' => date('Y-m-d H:i:s'),
        ];

        $db->table('contacts')->insert($data);

        $msg = (session()->get('lang') === 'en') 
            ? 'Your message has been sent successfully!' 
            : 'Pesan Anda berhasil dikirim!';

        return redirect()->back()->with('success', $msg);
    }
}
