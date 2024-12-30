<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article; // Assuming you have an Article model
use App\Models\Clap;    // The Clap model representing the pivot table
use Illuminate\Support\Facades\Auth;

class ClapButton extends Component
{
	public $articleId;
	public $clapCount;
	public $hasClapped;

	public function mount($articleId)
	{
		$this->articleId = $articleId;

		// Get the article's current clap count
		$this->clapCount = Clap::where('article_id', $this->articleId)->count();

		// Check if the authenticated user has already clapped for this article
		$this->hasClapped = Clap::where('article_id', $this->articleId)
			->where('user_id', Auth::id())
			->exists();
	}

	public function toggleClap()
	{
		$user = Auth::user();

		if (!$user) {
			// $this->dispatch('showSuccessMessage', 'You must be logged in to clap.');
			return redirect('/login');
		}

		$existingClap = Clap::where('article_id', $this->articleId)
			->where('user_id', $user->id)
			->first();

		if ($existingClap) {
			// If the user has clapped, remove the clap
			$existingClap->delete();
			$this->clapCount--;
			$this->hasClapped = false;
		} else {
			// Otherwise, add a new clap
			Clap::create([
				'article_id' => $this->articleId,
				'user_id' => $user->id,
			]);
			$this->clapCount++;
			$this->hasClapped = true;
		}
	}

	public function render()
	{
		return view('livewire.clap-button', [
			'clapCount' => $this->clapCount,
			'hasClapped' => $this->hasClapped,
		]);
	}
}
