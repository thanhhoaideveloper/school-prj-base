<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BaseService
{

    protected $model;

    /**
     * all
     *
     * @return Collection
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * all
     *
     * @return Collection
     */
    public function first()
    {
        return $this->model->first();
    }

    /**
     * find
     *
     * @param  int $id
     * @return Collection
     */
    public function find($id)
    {
        return $this->model->find($id);
    }

    /**
     * save
     *
     * @param  array $data
     * @return Collection
     */
    public function save($data)
    {
        $model = new $this->model();
        $model->fill($data);
        $model->save();

        return $model;
    }

    /**
     * update
     *
     * @param  array $data
     * @param  int $id
     * @return Collection
     */
    public function update($data, $id)
    {
        $model = $this->model->find($id);
        if (!$model) {
            throw new ModelNotFoundException('ID ' . $id . ' not found: ');
        }
        $model->update($data);
        return $model;
    }

    /**
     * delete
     *
     * @param  int $id
     * @return Collection
     */
    public function delete($id)
    {
        $model = $this->model->find($id);

        if (!$model) {
            throw new ModelNotFoundException('ID ' . $id . ' not found: ');
        }

        return $model->delete();
    }

    public function pagination($limit, $field = null, $sort = null)
    {
        if ($field) {
            if ($sort) {
                return $this->model->orderBy($field, $sort)->paginate($limit);
            }
            return $this->model->orderBy($field)->paginate($limit);
        }
        return $this->model->paginate($limit);
    }
    
    /**
     * where
     *
     * @param  mixed $operator
     * @param  mixed $value
     * @return Collection
     */
    public function where($operator, $value)
    {
        $result = $this->model->where($operator, $value);
        return $result;
    }
}
