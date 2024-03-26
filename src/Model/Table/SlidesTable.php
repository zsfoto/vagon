<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Slides Model
 *
 * @method \App\Model\Entity\Slide newEmptyEntity()
 * @method \App\Model\Entity\Slide newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Slide> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Slide get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Slide findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Slide patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Slide> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Slide|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Slide saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Slide>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slide>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Slide>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slide> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Slide>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slide>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Slide>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Slide> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class SlidesTable extends Table
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

        $this->setTable('slides');
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
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('body')
            ->requirePresence('body', 'create')
            ->notEmptyString('body');

        $validator
            ->scalar('button_title')
            ->maxLength('button_title', 100)
            ->requirePresence('button_title', 'create')
            ->notEmptyString('button_title');

        $validator
            ->scalar('button_link')
            ->maxLength('button_link', 100)
            ->requirePresence('button_link', 'create')
            ->notEmptyString('button_link');

        $validator
            ->boolean('visible')
            ->requirePresence('visible', 'create')
            ->notEmptyString('visible');

        $validator
            ->integer('pos')
            ->requirePresence('pos', 'create')
            ->notEmptyString('pos');

        return $validator;
    }
}
