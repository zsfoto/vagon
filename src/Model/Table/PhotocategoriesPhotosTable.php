<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PhotocategoriesPhotos Model
 *
 * @property \App\Model\Table\PhotocategoriesTable&\Cake\ORM\Association\BelongsTo $Photocategories
 * @property \App\Model\Table\PhotosTable&\Cake\ORM\Association\BelongsTo $Photos
 *
 * @method \App\Model\Entity\PhotocategoriesPhoto newEmptyEntity()
 * @method \App\Model\Entity\PhotocategoriesPhoto newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\PhotocategoriesPhoto> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PhotocategoriesPhoto get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\PhotocategoriesPhoto findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\PhotocategoriesPhoto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\PhotocategoriesPhoto> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\PhotocategoriesPhoto|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\PhotocategoriesPhoto saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\PhotocategoriesPhoto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PhotocategoriesPhoto>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PhotocategoriesPhoto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PhotocategoriesPhoto> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PhotocategoriesPhoto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PhotocategoriesPhoto>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\PhotocategoriesPhoto>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\PhotocategoriesPhoto> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PhotocategoriesPhotosTable extends Table
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

        $this->setTable('photocategories_photos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Photocategories', [
            'foreignKey' => 'photocategory_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Photos', [
            'foreignKey' => 'photo_id',
            'joinType' => 'INNER',
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
            ->nonNegativeInteger('photocategory_id')
            ->notEmptyString('photocategory_id');

        $validator
            ->nonNegativeInteger('photo_id')
            ->notEmptyString('photo_id');

        $validator
            ->boolean('visible')
            ->notEmptyString('visible');

        $validator
            ->integer('pos')
            ->notEmptyString('pos');

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
        $rules->add($rules->existsIn(['photocategory_id'], 'Photocategories'), ['errorField' => 'photocategory_id']);
        $rules->add($rules->existsIn(['photo_id'], 'Photos'), ['errorField' => 'photo_id']);

        return $rules;
    }
}
