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
 * Emailtemplates Model
 *
 * @method \App\Model\Entity\Emailtemplate newEmptyEntity()
 * @method \App\Model\Entity\Emailtemplate newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Emailtemplate> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Emailtemplate get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Emailtemplate findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Emailtemplate patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Emailtemplate> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Emailtemplate|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Emailtemplate saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Emailtemplate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emailtemplate>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emailtemplate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emailtemplate> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emailtemplate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emailtemplate>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Emailtemplate>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Emailtemplate> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmailtemplatesTable extends Table
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

        $this->setTable('emailtemplates');
        $this->setDisplayField('title');
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
            ->maxLength('lang', 10)
            ->notEmptyString('lang');

        $validator
            ->scalar('slug')
            ->maxLength('slug', 200)
            ->requirePresence('slug', 'create')
            ->notEmptyString('slug');

        $validator
            ->scalar('name')
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('title')
            ->maxLength('title', 250)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('help')
            ->allowEmptyString('help');

        $validator
            ->scalar('body')
            ->requirePresence('body', 'create')
            ->notEmptyString('body');

        return $validator;
    }
}
