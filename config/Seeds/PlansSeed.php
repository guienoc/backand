<?php
use Migrations\AbstractSeed;

/**
 * Plans seed.
 */
class PlansSeed extends AbstractSeed
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
                'name' => 'Plano FÁCIL',
                'price' => '4.99',
                'description' => 'O plano básico refere-se a 1 domínio e 50MB de espaço com 1 banco de dados (MYSQL)',
                'order' => 0
            ],
            [
                'name' => 'Plano BLACK',
                'price' => '19.90',
                'description' => 'O plano básico refere-se a 10 domínios e 600MB de espaço com 10 banco de dados (MYSQL)',
                'order' => 1
            ],
        ];

        $table = $this->table('plans');
        $table->insert($data)->save();
    }
}
