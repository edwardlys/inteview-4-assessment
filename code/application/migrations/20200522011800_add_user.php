<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_user extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                            'type' => 'INT',
                            'unsigned' => TRUE,
                            'auto_increment' => TRUE
                        ),
                        'username' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                        ),
                        'email' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '100',
                        ),
                        'password' => array(
                            'type' => 'VARCHAR',
                            'constraint' => '256',
                    ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('user');
        }

        public function down()
        {
                $this->dbforge->drop_table('user');
        }
}