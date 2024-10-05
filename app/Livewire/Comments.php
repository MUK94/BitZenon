<?php

namespace App\Livewire;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Comments extends Component
{
    public $body;
    public $articleId; // Renamed for clarity
    public $commentId; // For edit
    public $comments;
    public $commentCount;

    protected $rules = [
        'body' => 'required|max:500',
    ];

    // Load comments when the component is initialized
    public function mount($articleId)
    {
        $this->articleId = $articleId; // Corrected to use articleId
        $this->loadComments();
    }

    // Fetch the comments from the database
    public function loadComments()
    {
        $this->comments = Comment::where('article_id', $this->articleId)->latest()->get(); // Corrected variable name
        $this->commentCount = Comment::where('article_id', $this->articleId)->count(); // Corrected variable name
    }

    // Create a new comment
    public function submit()
    {
        $this->validate();

        // Create the comment
        Comment::create([
            'body' => $this->body,
            'user_id' => Auth::id(),
            'article_id' => $this->articleId // Corrected variable name
        ]);

        // Reset the input field and refresh comments
        $this->reset('body');
        $this->loadComments();

        session()->flash('message', 'Comment submitted successfully!');
    }

    // Load comment to edit
    public function edit($id)
    {
        $comment = Comment::find($id);

        if ($comment && $comment->user_id === Auth::id()) {
            $this->commentId = $comment->id;
            $this->body = $comment->body;
        }
    }

    // Update the existing comment
    public function update()
    {
        $this->validate();

        if ($this->commentId) {
            $comment = Comment::find($this->commentId);

            if ($comment && $comment->user_id === Auth::id()) {
                $comment->update([
                    'body' => $this->body,
                ]);

                // Reset fields and refresh comments
                $this->reset(['body', 'commentId']);
                $this->loadComments();

                session()->flash('message', 'Comment updated successfully!');
            }
        }
    }

    // Delete a comment
    public function delete($id)
    {
        $comment = Comment::find($id);

        if ($comment && $comment->user_id === Auth::id()) {
            $comment->delete();
            $this->loadComments();

            session()->flash('message', 'Comment deleted successfully!');
        }
    }

    public function render()
    {
        return view('livewire.comments', [
            'comments' => $this->comments,
            'commentCount' => $this->commentCount,
        ]);
    }
}
