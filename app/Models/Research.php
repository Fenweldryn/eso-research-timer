<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;

    public static function booted()
    {
        self::created(function() {
            auth()->user()->hasNewResearch = 1;
            auth()->user()->save();
        });
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profession',
        'completes_at',
        'character_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'completes_at' => 'timestamp',
        'character_id' => 'integer',
    ];

    public function character()
    {
        return $this->belongsTo(\App\Models\Character::class);
    }
}
