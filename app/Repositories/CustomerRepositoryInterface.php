<?php

namespace App\Repositories;

interface CustomerRepositoryInterface
{
    public function all();

    public function find_by_id($customer_id): array;

    public function update($customer_id);

    public function delete($customer_id);

}