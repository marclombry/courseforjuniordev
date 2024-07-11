<?php 
/**
 * The Specification pattern is a design pattern that allows you to define specifications (criteria) as objects and combine them 
 * to form more complex expressions. 
 * It is mainly used to represent business rules as reusable and composable objects.
 */
class Customer {
    protected $type;

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function type()
    {
        return $this->type;
    }
}

class CustomersRepository {
    protected $customers;

    public function __construct(array $customers)
    {
        $this->customers = $customers;
    }

    public function matchingSpecification($specification)
    {
        $matches = [];

        foreach($this->all() as $customer) {
            if($specification->isSatisfiedBy($customer)) {
                $matches[] = $customer;
            }
        }
        return $matches;
    }

    public function all() {
        return $this->customers;
    }

    
}

class CustomerIsGold {
    public function isSatisfiedBy(Customer $customer)
    {
        return $customer->type() == 'gold';
    }
}

$specification = new CustomerIsGold;

$goldCustomer = new Customer('gold');
$silverCustomer = new Customer('silver');

