<?php

namespace App\Models;
use Illuminate\Support\Str;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }

    public function podcasts(): HasMany
    {
        return $this->hasMany(Podcast::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function getInitials()
    {
        $nameParts = explode(' ', $this->name);

        // If the user has more than 2 names, we take only the first two
        if (count($nameParts) >= 2) {
            $firstInitial = Str::substr($nameParts[0], 0, 1);
            $secondInitial = Str::substr($nameParts[1], 0, 1);
            return strtoupper($firstInitial . $secondInitial);
        }

        // If the user has only one name
        return strtoupper(Str::substr($nameParts[0], 0, 1));
    }
}
