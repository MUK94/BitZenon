<?php

namespace App\Livewire;

use Livewire\Component;

class SuccessMessage extends Component
{
	public $message = null;
	public $visible = false;

	protected $listeners = ['showSuccessMessage'];


	public function showSuccessMessage($message)
	{
		$this->message = $message;
		$this->visible = true;

		// Auto-hide the popup after 3 seconds
		$this->dispatch('hide-popup', ['delay' => 4000]);
	}

	public function render()
	{
		return view('livewire.success-message');
	}
}
