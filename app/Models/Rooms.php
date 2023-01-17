<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $primaryKey = 'room_id';
    public $fillable = [
        'room_number', 'room_type'
    ];
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
