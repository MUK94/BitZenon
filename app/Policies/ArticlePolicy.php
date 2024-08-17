<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article;
use Illuminate\Auth\Access\Response;

class ArticlePolicy
{
    /**
     * Determine whether the user can view any models.


     * Determine whether the user can update the model.
     */
    public function update(User $user,  Article $article): bool
    {
        return $article->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Article $article): bool
    {
        return $this->update($user, $article);
    }

    /**
     * Determine whether the user can restore the model.
     */
}
