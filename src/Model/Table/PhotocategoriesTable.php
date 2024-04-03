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
 * Photocategories Model
 *
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
 */
class PhotocategoriesTable extends Table
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

        $this->setTable('photocategories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

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
            ->notEmptyString('photo_count');

        return $validator;
    }
}
