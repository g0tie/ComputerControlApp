<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Computer;

class Attribution extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'computer_id',
        'starting_date',
        'expiration_date'
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function computer()
    {
        return $this->hasOne(Computer::class);
    }

    public function getUser($id)
    {
        return User::find($id);
    }

    public function getComputer($id)
    {
        return Computer::find($id);
    }
}
