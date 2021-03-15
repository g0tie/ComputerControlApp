<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attribution;

class Computer extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'isOccupied',
        'attribution_id'
    ];

    public function attribution()
    {
        return $this->hasOne(Attribution::class);
    }
}
