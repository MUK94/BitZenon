<?php

namespace App\Livewire;

use Livewire\Component;

class QuoteForm extends Component
{
    public $name;
    public $projectType; // Type of Project
    public $email;
    public $scope; // Size of Project
    public $description;

    // Validation rules
    protected $rules = [
        'name' => 'required|string|max:100',
        'projectType' => 'required|in:8,9,1,6,2,3,5,7', // Only valid project types allowed
        'email' => 'required|email',
        'scope' => 'required|in:small,medium,large', // Only valid scopes allowed
        'description' => 'required',
    ];

    // Handle form submission
	 public function isFormValid()
	 {
		  return $this->name && $this->projectType && $this->email && $this->scope && $this->description;
	 }
    public function submit()
    {
        // Try to validate
        $validatedData = $this->validate();

        // If validation passes, flash a success message
        session()->flash('success', 'Quote submitted successfully! We will reply as soon as possible.');

        // Emit a browser event to close the form only if validation is successful
        $this->dispatchBrowserEvent('closeQuotePopup');

        // Reset form fields
        $this->reset();
    }

    // Method to check if form is valid (for submit button disabling)
    public function render()
    {
        return view('livewire.quote-form');
    }
}
