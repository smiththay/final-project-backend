<?php

namespace App\Models;

use Database\Seeders\UserSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Goal extends Model
{
    use HasFactory;
    protected $table = 'goals';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

     protected $fillable = [
      'title', 'description', 'progress', 'total', 'community_vis'
];


   public function user() {
    return $this->belongsTo(User::class);
  }

}
