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
                'name' => 'Plan BASIC',
                'price' => '5.90',
                'number_of_domains' => 1,
                'description' => 'O plano básico refere-se a 1 domínio e 50MB de espaço com 1 banco de dados (MYSQL)',
                'order' => 0
            ],
            [
                'name' => 'Plan PREMIUM',
                'price' => '35.90',
                'number_of_domains' => 10,
                'description' => 'O plano básico refere-se a 10 domínios e 600MB de espaço com 10 banco de dados (MYSQL)',
                'order' => 1
            ],
            [
                'name' => 'Plan GOLD',
                'price' => '65.90',
                'number_of_domains' => 30,
                'description' => 'O plano básico refere-se a 30 domínios e 1GB de espaço com 30 banco de dados (MYSQL)',
                'order' => 2
            ],
        ];

        $table = $this->table('plans');
        $table->insert($data)->save();
    }
}
