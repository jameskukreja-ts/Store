<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tiers Model
 *
 * @method \App\Model\Entity\Tier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tier newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tier|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tier[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tier findOrCreate($search, callable $callback = null)
 */
class TiersTable extends Table
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

        $this->table('tiers');
        $this->displayField('name');
        $this->primaryKey('id');
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
            ->notEmpty('name');

        $validator
            ->integer('lowerbound')
            ->requirePresence('lowerbound', 'create')
            ->notEmpty('lowerbound');

        $validator
            ->integer('upperbound')
            ->requirePresence('upperbound', 'create')
            ->notEmpty('upperbound');

        $validator
            ->numeric('multiplier')
            ->requirePresence('multiplier', 'create')
            ->notEmpty('multiplier');

        $validator
            ->integer('point_limit')
            ->requirePresence('point_limit', 'create')
            ->notEmpty('point_limit');

        return $validator;
    }

    //Just Calculate Tier
    public function calTier($amt)
    {
        $newTier = $this->find()->where(['lowerbound <=' => $amt, 'upperbound >=' => $amt])->first();
        $tier=$newTier->id;
        $dRate=$newTier->multiplier/100;
        return [$tier, $dRate];
        
    }

    public function givePoints($tier, $amt_spnt, $amt, $points=0)// Give Points based on the Parameters as well as return Tier and Discount Rate
    {
        $currentTier = $this->findById($tier)->first();
        $ubDiff = ($currentTier->upperbound) - ($currentTier->lowerbound) - 1;
        if(($amt_spnt + $amt) <= $ubDiff || $tier==4)
        {
            $points = $points + ($amt * ($currentTier->multiplier/100));
            return [$points, $currentTier->id, $currentTier->multiplier/100];

        }else
        {
            if($amt_spnt != 0)
                $amt_spnt -= $currentTier->lowerbound;
            $points = $points + ($ubDiff - $amt_spnt) * ($currentTier->multiplier/100) ;
            $amt = $amt-($ubDiff-$amt_spnt);
            $amt_spnt = 0;
            $tier+=1;
            return $this->givePoints($tier, $amt_spnt, $amt, $points);

        }

    }


}
