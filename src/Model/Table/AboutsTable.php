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
     * @param array $config The configuration for the Table.
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
            ->allowEmptyString('phone');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('address')
            ->allowEmptyString('address');

        $validator
            ->scalar('google_map_url')
            ->maxLength('google_map_url', 1000)
            ->allowEmptyString('google_map_url');

        $validator
            ->scalar('google_description')
            ->maxLength('google_description', 1000)
            ->allowEmptyString('google_description');

        $validator
            ->scalar('google_keywords')
            ->maxLength('google_keywords', 1000)
            ->allowEmptyString('google_keywords');

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
            ->scalar('about_us_title')
            ->maxLength('about_us_title', 150)
            ->allowEmptyString('about_us_title');

        $validator
            ->scalar('about_us_body')
            ->allowEmptyString('about_us_body');

        $validator
            ->scalar('main_title')
            ->maxLength('main_title', 150)
            ->allowEmptyString('main_title');

        $validator
            ->scalar('main_body')
            ->allowEmptyString('main_body');

        $validator
            ->scalar('main_button_title')
            ->maxLength('main_button_title', 50)
            ->allowEmptyString('main_button_title');

        $validator
            ->scalar('main_button_link')
            ->maxLength('main_button_link', 100)
            ->allowEmptyString('main_button_link');

        $validator
            ->scalar('our_services_title')
            ->maxLength('our_services_title', 250)
            ->allowEmptyString('our_services_title');

        $validator
            ->scalar('our_services_body')
            ->allowEmptyString('our_services_body');

        $validator
            ->scalar('our_customers_title')
            ->maxLength('our_customers_title', 100)
            ->allowEmptyString('our_customers_title');

        $validator
            ->scalar('our_customers_body')
            ->allowEmptyString('our_customers_body');

        $validator
            ->scalar('features_title')
            ->maxLength('features_title', 150)
            ->allowEmptyString('features_title');

        $validator
            ->scalar('features_body')
            ->allowEmptyString('features_body');

        $validator
            ->scalar('features_subtitle_1')
            ->maxLength('features_subtitle_1', 100)
            ->allowEmptyString('features_subtitle_1');

        $validator
            ->scalar('features_body_1')
            ->maxLength('features_body_1', 250)
            ->allowEmptyString('features_body_1');

        $validator
            ->scalar('features_subtitle_2')
            ->maxLength('features_subtitle_2', 100)
            ->allowEmptyString('features_subtitle_2');

        $validator
            ->scalar('features_body_2')
            ->maxLength('features_body_2', 250)
            ->allowEmptyString('features_body_2');

        $validator
            ->scalar('features_subtitle_3')
            ->maxLength('features_subtitle_3', 100)
            ->allowEmptyString('features_subtitle_3');

        $validator
            ->scalar('features_body_3')
            ->maxLength('features_body_3', 250)
            ->allowEmptyString('features_body_3');

        $validator
            ->scalar('features_subtitle_4')
            ->maxLength('features_subtitle_4', 100)
            ->allowEmptyString('features_subtitle_4');

        $validator
            ->scalar('features_body_4')
            ->maxLength('features_body_4', 250)
            ->allowEmptyString('features_body_4');

        $validator
            ->scalar('partners_title')
            ->maxLength('partners_title', 150)
            ->allowEmptyString('partners_title');

        $validator
            ->scalar('partners_body')
            ->allowEmptyString('partners_body');

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
        $rules->add($rules->isUnique(['lang']), ['errorField' => '0']);

        return $rules;
    }
}
