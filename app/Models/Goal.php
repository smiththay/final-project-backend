<?php

namespace App\Models;

use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    use HasFactory;
    protected $table = 'goals';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

     protected $fillable = [
      'title', 'description', 'progress', 'total'
];


   public function checkout() {
    return $this->belongsTo(User::class);
  }

}
