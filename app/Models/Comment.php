<?php

namespace App\Models;

use Database\Seeders\UserSeeder;
use Database\Seeders\GoalSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Model\Goal;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

     protected $fillable = [
      'content'
];

   public function user() {
    return $this->belongsTo(User::class);
  }

  public function goal() {
    return $this->belongsTo(Goal::class);
  }

}
