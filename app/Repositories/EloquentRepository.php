<?php namespace App\Repositories;

/**
 * Abstract class for eloquent repositories
 */
abstract class EloquentRepository
{
    /**
     * An instance of the model
     * 
     * @var Model
     */
    protected $model;

    /**
     * Get's all records from the model
     * 
     * @return Collection
     */
    public function getAll()
    {
        return $this->model->all();
    }

    /**
     * Creates a new instance of the model
     * 
     * @param array $fields
     * @return Model
     */
    public function create(array $fields)
    {
        return $this->model->create($fields);
    }

    /**
     * Updates an instance by it's ID
     * 
     * @param array $fields
     * @param int $id
     * @return Model
     */
    public function updateById(array $fields, $id)
    {
        $model = $this->model->findOrFail($id);

        $model->update($fields);

        return $model;
    }
}