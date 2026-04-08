<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderRegister extends Component
{
    public $ordernumber, $receiving, $factory, $ordertype, $customer, $style, $staff, $season, $gender, $comodity;
    public $matfrieght, $inspectionaudit, $testing, $othercharge, $destination, $sd, $pack, $smv, $quantity;
    public $fireght, $terms, $color, $size, $upricer, $ppricetype = "USD", $description, $cm, $cmtype = "USD";

    protected $rules = [
        'ordernumber' => 'required|string',
        'receiving' => 'required|date',
        'factory' => 'nullable|string',
        'ordertype' => 'nullable|string',
        'customer' => 'nullable|string',
        'style' => 'nullable|string',
        // Add more validation rules for other fields...
    ];

    public function submitForm()
    {
        $this->validate();

        // Save form data to the database or perform other logic
        // Example:
        // Order::create($this->only([...all fields]));

        session()->flash('success', 'Order registered successfully!');
        $this->reset(); // Reset the form fields
    }

    public function render()
    {
        return view('livewire.order-register');
    }
}
