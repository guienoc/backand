<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Luciano admin',
                'username' => 'luciano@luciano.com',
                'password' => (new DefaultPasswordHasher)->hash('1'),
                'status' => 1,
                'cpf' => '758.830.971-70',
                'plan_id' => 1,
                'birth_date' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Guilherme admin',
                'username' => 'guilherme@guilherme.com',
                'password' => (new DefaultPasswordHasher)->hash('1'),
                'status' => 1,
                'cpf' => '369.979.285-44',
                'plan_id' => 1,
                'birth_date' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],  
            [
                'name' => 'João admin',
                'username' => 'joao@joao.com',
                'password' => (new DefaultPasswordHasher)->hash('1'),
                'status' => 1,
                'cpf' => '061.372.616-20',
                'plan_id' => 2,
                'birth_date' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],  
            [
                'name' => 'Maria admin',
                'username' => 'maria@maria.com',
                'password' => (new DefaultPasswordHasher)->hash('1'),
                'status' => 1,
                'cpf' => '226.232.457-38',
                'plan_id' => 3,
                'birth_date' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],  
            [
                'name' => 'José admin',
                'username' => 'jose@jose.com',
                'password' => (new DefaultPasswordHasher)->hash('1'),
                'status' => 1,
                'cpf' => '512.873.166-97',
                'plan_id' => 3,
                'birth_date' => date('Y-m-d'),
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],                                              
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}