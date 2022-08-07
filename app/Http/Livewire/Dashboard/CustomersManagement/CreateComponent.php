<?php

namespace App\Http\Livewire\Dashboard\CustomersManagement;

use App\Models\Customer;
use Livewire\Component;

class CreateComponent extends Component
{
    public $isSelected, $isExisting = false, $isNew = false, $customer, $custId, $sale, $plotId;

    protected $listeners = ['setPlot'];

    public function setPlot($plotId)
    {
        $this->plotId = $plotId;
    }

    public function rules()
    {
        return [
            'customer.name' => 'required|string',
            'customer.father_name' => 'nullable|string',
            'customer.husband_name' => 'required_without:customer.father_name|string',
            'customer.cnic' => 'required|string|unique:customers,cnic|digits_between:13,18',
            'customer.mobile_number' => 'required|numeric|digits_between:8,15',
            'customer.address' => 'required|string',
            'customer.email' => 'nullable|email',
            'customer.reference' => 'nullable|max:255',
        ];
    }

    public function updated($property, $value)
    {
        if ($value == 'existing') {
            $this->isExisting = true;
            $this->isNew = false;
        } elseif ($value == 'new') {
            $this->isExisting = false;
            $this->isNew = true;
        } elseif ($property == 'custId') {
            if (filled($value)) {
                $this->isNew = false;
                $this->isExisting = false;
                $this->sale = true;
                $this->emit('setChild', $this->plotId, $this->custId);
            }
        } else
            $this->validateOnly($property);
    }

    public function storeNewCustomer()
    {
        $this->validate();

        $this->customer = auth()->user()->customers()->firstOrCreate($this->customer);

        // view divs accordingly
        $this->isSelected = 'existing';
        $this->isExisting = false;
        $this->isNew = false;
        $this->sale = true;
        $this->custId = $this->customer->id;
        $this->emit('setChild', $this->plotId, $this->custId);
        $this->reset('customer');
    }

    public function render()
    {
        return view('livewire.dashboard.customers-management.create-component', [
            'customers' => Customer::whereBelongsTo(auth()->user())->get()
        ]);
    }
}
