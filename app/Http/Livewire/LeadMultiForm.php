<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Lead;

class LeadMultiForm extends Component
{

    use WithFileUploads;

    public $company_name;
    public $owner_name;
    public $contact_person;
    public $state;
    public $email1;
    public $phone1;
    public $address1;
    public $source_by;
    public $lead_by;

    public $email2;
    public $phone2;
    public $business;
    public $branch;
    public $description;
    public $address2;
    public $logo;
    public $photo;

    public $totalSteps = 2;
    public $currentStep=1;


public function mount(){
    $this->currentStep=1;
}



    public function render()
    {
        return view('livewire.lead-multi-form');
    }

    public function increaseValue()
    {

        $this->resetErrorBag();
        $this->validateData();

        $this->currentStep++;

        if($this->currentStep > $this->totalSteps){
            $this->currentStep = $this->totalSteps;
        }

    }

    public function decreaseValue()
    {

        $this->resetErrorBag();
        $this->currentStep--;


        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function validateData(){
    if($this->currentStep == 1)
    {

        $this->validate([
            'company_name'=>'required',
            'owner_name'=>'required',
            'contact_person'=>'required',
            'state'=>'required|',
            'email1'=>'required',
            'phone1'=>'required',
            'address1'=>'required',
            'source_by'=>'required',
            'lead_by'=>'required'
        ]);

    }

    elseif ($this->currentStep == 2){

        $this->validate([
            'email2'=>'required',
            'phone2'=>'required',
            'business'=>'required',
            'branch'=>'required',
            'description'=>'required',
            'address2'=>'required',
            'logo'=>'required',
            'photo'=>'required'

        ]);
    }

    }

    public function lead(){


    $value1 = array(

        'company_name'=>$this->company_name,
        'owner_name'=>$this->owner_name,
        'contact_person'=>$this->contact_person,
        'state'=>$this->state,
        'email'=>$this->email1,
        'phone'=>$this->phone1,
        'address'=>$this->address1,
        'source_by'=>$this->source_by

    );

    $leads = Lead::insert($value1);
     $this->reset();
     $this->currentStep=1;
     dd($leads);

    }


}
