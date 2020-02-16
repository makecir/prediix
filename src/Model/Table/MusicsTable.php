<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Musics Model
 *
 * @method \App\Model\Entity\Music get($primaryKey, $options = [])
 * @method \App\Model\Entity\Music newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Music[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Music|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Music saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Music patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Music[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Music findOrCreate($search, callable $callback = null, $options = [])
 */
class MusicsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('musics');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('mid')
            ->maxLength('mid', 10)
            ->requirePresence('mid', 'create')
            ->notEmptyString('mid');

        $validator
            ->scalar('title')
            ->maxLength('title', 50)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('version')
            ->maxLength('version', 30)
            ->requirePresence('version', 'create')
            ->notEmptyString('version');

        $validator
            ->integer('difficult')
            ->requirePresence('difficult', 'create')
            ->notEmptyString('difficult');

        $validator
            ->integer('notes')
            ->requirePresence('notes', 'create')
            ->notEmptyString('notes');

        $validator
            ->dateTime('created_ar')
            ->allowEmptyDateTime('created_ar');

        $validator
            ->dateTime('modified_at')
            ->notEmptyDateTime('modified_at');

        return $validator;
    }
}
