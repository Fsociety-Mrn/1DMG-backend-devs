<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;
use CodeIgniter\Database\RawSql;

class TableDataModelMigration extends Migration
{
    public function up()
    {
        //

        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "auto_increment" => true,
                "unsigned" => true
            ],
            "title" => [
                "type" => "VARCHAR",
                "constraint" => 3000,
                "null" => false, 
            ],
            "content" => [
                "type" => "TEXT",
                "null" => false, 
            ],
            "author" => [
                "type" => "VARCHAR",
                "constraint" => 3000,
                "null" => false,
            ],
            "created_at" => [
                "type" => "TIMESTAMP",
                "null" => true,
                "default" => new RawSql('CURRENT_TIMESTAMP')
            ],
            "updated_at" => [
                "type" => "TIMESTAMP",
                "null" => true,
                "default" => null
            ]
        ]);

        $this->forge->addPrimaryKey("id");

        $this->forge->createTable("data_model");
    }

    public function down()
    {
        $this->forge->dropTable("data_model");
    }
}
