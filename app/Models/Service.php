<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Service extends Model
{
  use HasFactory;
  use Searchable;

	protected $fillable = [
		'title',
		'description',
		'author_bio',
		'price',
		'address',
		'phone_number',
		'cover_image',
	];



	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}


	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}

	public function reviews(): HasMany
	{
		 return $this->hasMany(Review::class);
	}

	public function toSearchableArray()
	{
		return [
			'title' => '',
			'description' => '',
			'categories.name' => '',
			'categories.slug' => '',
			'author_bio' => '',
			'price' => '',
			'address' => '',
			'phone_number' => '',
			'cover_image' => '',
		];
	}
}
