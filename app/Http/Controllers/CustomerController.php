<?php

namespace App\Http\Controllers;

use App\Repositories\CustomerRepositoryInterface;

class CustomerController extends Controller
{
    private $customerRepository;

    public function __construct(CustomerRepositoryInterface $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function index()
    {
        $customers = $this->customerRepository->all();
        return $customers;
    }

    // IN ANOTHER CONTROLLER

    /*public function index()
    {
        $customers = $this->customerRepository->all();
        return $customers;
    }*/

    public function show($customer_id): array
    {
        $customer = $this->customerRepository->find_by_id($customer_id);
        return $customer;
    }

    public function update($customer_id)
    {
        $this->customerRepository->update($customer_id);
        /**
         *  URL
         */
        return redirect('/customer/'.$customer_id);
    }

    public function destroy($customer_id)
    {
        $this->customerRepository->delete($customer_id);
        /**
         *  URL
         */
        return redirect('/');
    }
}
