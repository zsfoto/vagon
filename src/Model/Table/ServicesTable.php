<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Services Model
 *
 * @method \App\Model\Entity\Service newEmptyEntity()
 * @method \App\Model\Entity\Service newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Service> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Service get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Service findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Service patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Service> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Service|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Service saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Service>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Service>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Service>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Service> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Service>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Service>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Service>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Service> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ServicesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('services');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('lang')
            ->maxLength('lang', 3)
            ->notEmptyString('lang');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('body')
            ->maxLength('body', 250)
            ->requirePresence('body', 'create')
            ->notEmptyString('body');

        $validator
            ->scalar('link')
            ->maxLength('link', 200)
            ->allowEmptyString('link');

        $validator
            ->nonNegativeInteger('delay')
            ->notEmptyString('delay');

        $validator
            ->boolean('visible')
            ->notEmptyString('visible');

        $validator
            ->integer('pos')
            ->notEmptyString('pos');

        return $validator;
    }
}
