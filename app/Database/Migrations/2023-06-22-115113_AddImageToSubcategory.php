<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImageToSubcategory extends Migration
{
    public function up()
    {
        $fields = array(
            'image' => array(
                'type' => 'varchar', 
                'constraint' => 80,
                'after' => 'name')
    );
    $this->forge->addColumn('subcategories', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('subcategories', 'image');
    }
}
