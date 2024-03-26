<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Abouts Model
 *
 * @method \App\Model\Entity\About newEmptyEntity()
 * @method \App\Model\Entity\About newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\About> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\About get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\About findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\About patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\About> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\About|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\About saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\About>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\About>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\About>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\About> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\About>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\About>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\About>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\About> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AboutsTable extends Table
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

        $this->setTable('abouts');
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
            ->notEmptyString('lang')
            ->add('lang', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 250)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('phone')
            ->maxLength('phone', 30)
            ->requirePresence('phone', 'create')
            ->notEmptyString('phone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('address')
            ->allowEmptyString('address');

        $validator
            ->scalar('twitter_url')
            ->maxLength('twitter_url', 200)
            ->allowEmptyString('twitter_url');

        $validator
            ->scalar('facebook_url')
            ->maxLength('facebook_url', 200)
            ->allowEmptyString('facebook_url');

        $validator
            ->scalar('instagram_url')
            ->maxLength('instagram_url', 200)
            ->allowEmptyString('instagram_url');

        $validator
            ->scalar('linkedin_url')
            ->maxLength('linkedin_url', 200)
            ->allowEmptyString('linkedin_url');

        $validator
            ->scalar('main_title')
            ->maxLength('main_title', 150)
            ->requirePresence('main_title', 'create')
            ->notEmptyString('main_title');

        $validator
            ->scalar('main_body')
            ->maxLength('main_body', 1000)
            ->requirePresence('main_body', 'create')
            ->notEmptyString('main_body');

        $validator
            ->scalar('main_button_title')
            ->maxLength('main_button_title', 50)
            ->requirePresence('main_button_title', 'create')
            ->notEmptyString('main_button_title');

        $validator
            ->scalar('main_button_link')
            ->maxLength('main_button_link', 100)
            ->requirePresence('main_button_link', 'create')
            ->notEmptyString('main_button_link');

        $validator
            ->scalar('our_services_title')
            ->maxLength('our_services_title', 250)
            ->requirePresence('our_services_title', 'create')
            ->notEmptyString('our_services_title');

        $validator
            ->scalar('our_services_body')
            ->maxLength('our_services_body', 1000)
            ->allowEmptyString('our_services_body');

        $validator
            ->scalar('our_customers_title')
            ->maxLength('our_customers_title', 100)
            ->requirePresence('our_customers_title', 'create')
            ->notEmptyString('our_customers_title');

        $validator
            ->scalar('our_customers_body')
            ->maxLength('our_customers_body', 1000)
            ->allowEmptyString('our_customers_body');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['lang']), ['errorField' => 'lang']);

        return $rules;
    }
}
