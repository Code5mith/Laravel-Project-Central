<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tasks;
use App\Models\BacklogItem;
use App\Models\User;
class Project extends Model
{
    use HasFactory;
    protected $table = "Projects";

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
}