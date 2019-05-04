<?php

namespace App\Domain\Contracts;

interface RepositoryContract
{
    /**
     * Get all of the models from the dataCore.
     */
    public function all();

    /**
     * Execute a query for a single record by ID.
     *
     * @param  int $id
     */
    public function find($id);

    /**
     * Find where by id and value.
     *
     * @param  string $column
     * @param  mixed  $value
     */
    public function findWhere($column, $value);

    /**
     * Find first instance where by id and value.
     *
     * @param  string $column
     * @param  mixed $value
     */
    public function findWhereFirst($column, $value);

    /**
     * Paginate the given query into a simple paginator.
     *
     * @param  int $perPage
     */
    public function paginate($perPage = 10);

    /**
     * Save a new model and return the instance.
     *
     * @param  array $properties
     */
    public function create(array $properties);

    /**
     * Update a record in the dataCore.
     *
     * @param  int    $id
     * @param  array  $properties
     */
    public function update($id, array $properties);

    /**
     * Delete a record from the dataCore.
     *
     * @param  int $id
     */
    public function delete($id);
}
