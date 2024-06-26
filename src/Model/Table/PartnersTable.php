<?php
declare(strict_types=1);

namespace App\Model\Table;


use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Core\Configure;
use Cake\Http\Exception\NotFoundException;


/**
 * Partners Model
 *
 * @method \App\Model\Entity\Partner newEmptyEntity()
 * @method \App\Model\Entity\Partner newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Partner> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Partner get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Partner findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Partner patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Partner> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Partner|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Partner saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Partner>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Partner>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Partner>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Partner> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Partner>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Partner>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Partner>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Partner> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PartnersTable extends Table
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

        $this->setTable('partners');
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
            ->scalar('address')
            ->maxLength('address', 250)
            ->allowEmptyString('address');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 20)
            ->allowEmptyString('phone');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('url')
            ->maxLength('url', 250)
            ->allowEmptyString('url');

        $validator
            ->scalar('details')
            ->allowEmptyString('details');

        $validator
            ->nonNegativeInteger('delay')
            ->notEmptyString('delay');

        $validator
            ->boolean('show_in_main_page')
            ->notEmptyString('show_in_main_page');

        $validator
            ->scalar('filename')
            ->maxLength('filename', 250)
            ->allowEmptyString('filename');

        $validator
            ->boolean('visible')
            ->notEmptyString('visible');

        $validator
            ->integer('pos')
            ->notEmptyString('pos');

        return $validator;
    }
}
