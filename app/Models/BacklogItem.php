<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacklogItem extends Model
{
    /** @use HasFactory<\Database\Factories\BacklogItemFactory> */
    use HasFactory;
    protected $table = "backlog_items";
    protected $guarded = [];
    public function project(){

        return $this->belongsTo(Project::class, "project_id", "id");
    }

    public function task(){

        return $this->hasMany(Project::class, "backlog_item_id", "id");
    }
}
