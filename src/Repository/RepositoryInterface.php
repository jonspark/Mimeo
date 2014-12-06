<?php

namespace JonSPark\Mimeo\Repository;

interface RepositoryInterface
{
    public function all();

    public function create(Array $properties = []);

    public function delete($id);

    public function deleteMany(Array $ids);

    public function find($id);

    public function findBySlug($slug);

    public function update($id, Array $properties);
}
