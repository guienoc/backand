<?php
use Migrations\AbstractSeed;

/**
 * Domains seed.
 */
class DomainsSeed extends AbstractSeed
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
                'name' => 'lucianocantarelli.com.br',
                'user_id' => 1,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')                
            ],
            [
                'name' => 'enoc.com.br',
                'user_id' => 2,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
            ],            
        ];

        $table = $this->table('domains');
        $table->insert($data)->save();
    }
}
