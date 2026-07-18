<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAllTables extends Migration
{
    public function up()
    {
        // 1. Table: users
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'role' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'admin',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('users');

        // 2. Table: settings
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'key_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'unique'     => true,
            ],
            'key_value_id' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'key_value_en' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'group_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'general',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('settings');

        // 3. Table: banners
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'subtitle_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'subtitle_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'link' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'list_order' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('banners');

        // 4. Table: announcements
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'content_id' => [
                'type' => 'TEXT',
            ],
            'content_en' => [
                'type' => 'TEXT',
            ],
            'date' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('announcements');

        // 5. Table: events
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'venue_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'venue_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'content_id' => [
                'type' => 'TEXT',
            ],
            'content_en' => [
                'type' => 'TEXT',
            ],
            'date' => [
                'type' => 'DATE',
            ],
            'time' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('events');

        // 6. Table: testimonials
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'designation_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'designation_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'quote_id' => [
                'type' => 'TEXT',
            ],
            'quote_en' => [
                'type' => 'TEXT',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'type' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'general', // general, alumni, foundation
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('testimonials');

        // 7. Table: teachers
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'designation_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'designation_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'description_id' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'description_en' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'photo' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'facebook' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'instagram' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'linkedin' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'list_order' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('teachers');

        // 8. Table: gallery
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('gallery');

        // 9. Table: blog_categories
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'name_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'color' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => '#0d6efd',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('blog_categories');

        // 10. Table: blogs
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'content_id' => [
                'type' => 'TEXT',
            ],
            'content_en' => [
                'type' => 'TEXT',
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
            ],
            'category_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'author_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('blogs');

        // 11. Table: admissions
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'first_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'last_name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'null'       => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
            ],
            'address' => [
                'type' => 'TEXT',
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'Indonesia',
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'postal_code' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
            'birth_date' => [
                'type' => 'DATE',
            ],
            'message' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 50,
                'default'    => 'Pending', // Pending, Processed, Rejected
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admissions');

        // 12. Table: tuition_fees
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'level_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'level_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'registration_fee' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'base_fee' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'monthly_spp' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'books_uniforms_fee' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'list_order' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tuition_fees');

        // 13. Table: extracurriculars
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'title_id' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
            ],
            'description_id' => [
                'type' => 'TEXT',
            ],
            'description_en' => [
                'type' => 'TEXT',
            ],
            'icon' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
                'default'    => 'ri-star-line',
            ],
            'status' => [
                'type'       => 'TINYINT',
                'constraint' => 1,
                'default'    => 1,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('extracurriculars');
    }

    public function down()
    {
        $this->forge->dropTable('extracurriculars');
        $this->forge->dropTable('tuition_fees');
        $this->forge->dropTable('admissions');
        $this->forge->dropTable('blogs');
        $this->forge->dropTable('blog_categories');
        $this->forge->dropTable('gallery');
        $this->forge->dropTable('teachers');
        $this->forge->dropTable('testimonials');
        $this->forge->dropTable('events');
        $this->forge->dropTable('announcements');
        $this->forge->dropTable('banners');
        $this->forge->dropTable('settings');
        $this->forge->dropTable('users');
    }
}
