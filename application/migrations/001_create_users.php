<?php

class Migration_Create_users extends CI_Migration {
        // doing migrations
        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                        'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '128',
                        ),
                        'name' => array(
                                  'type' => 'VARCHAR',
                                  'constraint' => '100',
                          ),
                        'phone' => array(
                                  'type' => 'VARCHAR',
                                  'constraint' => '20',
                          ),
                ));
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('users');
        }
        //roll back
        public function down()
        {
                $this->dbforge->drop_table('users');
        }
}
