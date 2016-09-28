<?php
namespace Posts\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 * @method \Posts\Model\Entity\Post get($primaryKey, $options = [])
 * @method \Posts\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \Posts\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \Posts\Model\Entity\Post|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \Posts\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \Posts\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \Posts\Model\Entity\Post findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('posts');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        return $validator;
    }
}
