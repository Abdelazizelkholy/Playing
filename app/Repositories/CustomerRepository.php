<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository implements CustomerRepositoryInterface
{

    public function all()
    {
        return Customer::orderBy('name')
            ->where('active', 1)
            ->with('user')
            ->get()
            ->map(function ($customer) {
                return $this->format($customer);
            });
    }


    public function find_by_id($customer_id): array
    {
        $customer = Customer::where('id', $customer_id)
            ->with('user')
            ->first();
        return $this->format($customer);
    }

    public function update($customer_id)
    {
        $customer = Customer::where('id', $customer_id)->first();
        $customer->update(request()->only('name'));
    }

    public function delete($customer_id)
    {
        Customer::where('id', $customer_id)->delete();
    }


    protected function format($customer): array
    {
        return [
            'customer_id' => $customer->id,
            'name' => $customer->name,
            'created_by' => $customer->user->name,
            'last_updated' => $customer->updated_at->diffForHumans(),
        ];
    }
}