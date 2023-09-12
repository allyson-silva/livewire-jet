<?php

namespace App\Livewire;

use App\Livewire\Forms\CustomerForm;
use App\Models\Customer;
use Livewire\Attributes\On;
use Livewire\Component;

class CustomerEdit extends Component
{
    public CustomerForm $form;

    public $modalCustomerEdit = false;

    #[On('dispatch-customer-table-edit')]
    public function set_customer(Customer $id)
    {
        $this->form->setCustomer($id);

        $this->modalCustomerEdit = true;
    }

    public function edit()
    {
        $this->validate();

        $update = $this->form->update();

        is_null($update)
        ? $this->dispatch('notify', title: 'success', message: 'data berhasil di update')
        : $this->dispatch('notify', title: 'failed', message: 'data gagal di update');

        $this->dispatch('dispatch-customer-create-edit')->to(CustomerTable::class);
    }

    public function render()
    {
        return view('livewire.customer-edit');
    }
}
