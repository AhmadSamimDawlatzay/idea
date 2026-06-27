<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Idea extends Model
{
	use HasFactory;
	
	protected $casts = [
	  'links' => AsArrayObject::class,
	];
	
	protected $attributes = [
	  'status' => 'pending',
	
	];
	
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
	
	public function steps(): HasMany
	{
		return $this->hasMany(Step::class);
	}
	
	public static function statusCont(): Collection
	{
		return Idea::query()
		  ->selectRaw('status, COUNT(*) as count')
		  ->groupBy('status')
		  ->pluck('count', 'status');
	}
}
