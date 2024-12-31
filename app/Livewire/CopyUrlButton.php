<?php

namespace App\Livewire;

use Livewire\Component;

class CopyUrlButton extends Component
{
	public $url;
	public function copyUrl()
	{
		$this->dispatch('showSuccessMessage', 'URL Copied');

	}

	public function render()
	{
		return view('livewire.copy-url-button');
	}
}
