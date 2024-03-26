<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Photocategories Model
 *
 * @property \App\Model\Table\PhotosTable&\Cake\ORM\Association\BelongsTo $Photos
 * @property \App\Model\Table\PhotosTable&\Cake\ORM\Association\HasMany $Photos
 * @property \App\Model\Table\PhotosTable&\Cake\ORM\Association\BelongsToMany $Photos
 *
 * @method \App\Model\Entity\Photocategory newEmptyEntity()
 * @method \App\Model\Entity\Photocategory newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Photocategory> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Photocategory get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Photocategory findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Photocategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Photocategory> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Photocategory|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Photocategory saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Photocategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photocategory>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Photocategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photocategory> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Photocategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photocategory>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Photocategory>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Photocategory> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\CounterCacheBehavior
 */
class PhotocategoriesTable extends Table
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

        $this->setTable('photocategories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', [
            'Photos' => ['photocategory_count'],
        ]);

        $this->belongsTo('Photos', [
            'foreignKey' => 'photo_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Photos', [
            'foreignKey' => 'photocategory_id',
        ]);
        $this->belongsToMany('Photos', [
            'foreignKey' => 'photocategory_id',
            'targetForeignKey' => 'photo_id',
            'joinTable' => 'photocategories_photos',
        ]);
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
            ->nonNegativeInteger('photo_id')
            ->notEmptyString('photo_id');

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
            ->boolean('visible')
            ->notEmptyString('visible');

        $validator
            ->integer('pos')
            ->notEmptyString('pos');

        $validator
            ->nonNegativeInteger('photo_count')
            ->requirePresence('photo_count', 'create')
            ->notEmptyString('photo_count');

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
        $rules->add($rules->existsIn(['photo_id'], 'Photos'), ['errorField' => 'photo_id']);

        return $rules;
    }
}
