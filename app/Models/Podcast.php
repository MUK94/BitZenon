<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Podcast extends Model
{
    use HasFactory;
	 use Searchable;

	 protected $fillable = [
		'cover_image',
		'description'
	 ];

	 public function topic():BelongsTo
	 {
		return $this->belongsTo(Topic::class);
	 }

	 public function user():BelongsTo
	 {
		return $this->belongsTo(User::class);
	 }
}
