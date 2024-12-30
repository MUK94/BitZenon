<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Laravel\Scout\Searchable;

class Article extends Model
{
	use HasFactory;
	use Searchable;

	protected $fillable = [
		'title',
		'description',
		'cover_image',
		'view_count'
	];

	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}

	public function category(): BelongsTo
	{
		return $this->belongsTo(Category::class);
	}

	public function comments(): HasMany
	{
		return $this->hasMany(Comment::class);
	}

	public function claps(): HasMany
	{
		return $this->hasMany(Clap::class);
	}

	public function toSearchableArray()
	{
		return [
			'title' => '',
			'description' => '',
			'categories.name' => '',
			'cover_image' => '',
		];
	}

	public function getReadTimeAttribute()
	{
		$wordCount = str_word_count(strip_tags($this->description));
		$wordsPerMinute = 200;

		$readTime = ceil($wordCount / $wordsPerMinute);

		return $readTime;
	}
}
