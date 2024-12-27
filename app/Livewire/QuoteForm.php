<?php

namespace App\Livewire;

use App\Mail\EmailMessage;
use Livewire\Component;
use App\Models\Quote;
use Illuminate\Support\Facades\Mail;

class QuoteForm extends Component
{
	public $name, $email, $phone, $projectType, $projectState, $scope, $description, $successMessage;

	protected $rules = [
		'name' => 'required|string|min:4|max:50',
		'email' => 'required|email',
		'phone' => 'required|regex:/^\+?[0-9\s\-\(\)]*$/|max:20',
		'projectType' => 'required|string',
		'projectState' => 'required|string',
		'scope' => 'required|string',
		'description' => 'required|string|min:10',
	];

	public function submit()
	{
		$validatedData = $this->validate();

		$quote = Quote::create($validatedData);

		Mail::to('mouctarfissiria94@gmail.com')->send(new EmailMessage($quote, 'quote'));

		$this->reset();

		$this->dispatch('showSuccessMessage', 'Your free quote is on its way.');

	}


	public function render()
	{
		return view('livewire.quote-form', ['successMessage' => $this->successMessage,]);
	}
}
