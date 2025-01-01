<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_users_table extends CI_Migration {

    public function up() {
        // Define table structure
        $this->dbforge->add_field(array(
            'id' => array(
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ),
            'password' => array(
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ),
        ));

        // Set primary key
        $this->dbforge->add_key('id', TRUE);

        // Create table
        $this->dbforge->create_table('users');
    }

    public function down() {
        // Drop table if exists
        $this->dbforge->drop_table('users', TRUE);
    }
}
