<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;

class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('users');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Plans', [
            'foreignKey' => 'plan_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Domains', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name','* Nome inválido');

        $validator
            ->requirePresence('username', 'create')
            ->notEmpty('username','* E-mail inválido')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table',
                'message' => '* E-mail já cadastrado. Tente recuperar sua senha no ajuda.'])
            ->add('username', 'validFormat', [
                'rule' => 'email',
                'message' => '* E-mail inválido'
            ]);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password','* Senha inválida')
            ->add('password', 'validFormat', [
                'rule' => ['minLength', 8],
                'last' => true,
                'message' => '* Sua senha está muito pequena, mínimo 8 dígitos.'
            ]);

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->requirePresence('cpf', 'create')
            ->notEmpty('cpf','* CPF inválido')            
            ->add('cpf', 'validFormat',[
                'rule'=> function ($value, $context) {
                    return $this->validaCPF($value);
                },
                'message' => 'CPF não confere'
                ]);

        $validator
            ->date('birth_date')
            ->requirePresence('birth_date', 'create')
            ->notEmpty('birth_date');

        return $validator;
    }


    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['plan_id'], 'Plans'));

        return $rules;
    }

    private function setPassword($password)
    {
        return (new DefaultPasswordHasher)->hash($password);
    }

    public function beforeSave(Event $event)
   {
       $entity = $event->data['entity'];
        if ($entity->password) $entity->password = $this->setPassword($entity->password);
       return true;
   } 

    private function validaCPF($cpf = null) 
    {
        // Verifica se um número foi informado
        if(empty($cpf)) {
            return false;
        }
     
        // Elimina possivel mascara
        $cpf = ereg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
         
        // Verifica se o numero de digitos informados é igual a 11 
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se nenhuma das sequências invalidas abaixo 
        // foi digitada. Caso afirmativo, retorna falso
        else if ($cpf == '00000000000' || 
            $cpf == '11111111111' || 
            $cpf == '22222222222' || 
            $cpf == '33333333333' || 
            $cpf == '44444444444' || 
            $cpf == '55555555555' || 
            $cpf == '66666666666' || 
            $cpf == '77777777777' || 
            $cpf == '88888888888' || 
            $cpf == '99999999999') {
            return false;
         // Calcula os digitos verificadores para verificar se o
         // CPF é válido
         } else {   
             
            for ($t = 9; $t < 11; $t++) {
                 
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }
     
            return true;
        }
    }    
}
