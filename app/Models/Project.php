<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','user_id','workspace_id'];
    public function fields()
    {
        return $this->hasMany(Field::class);
    }
    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
    public function submits()
    {
        return $this->hasMany(Submit::class);
    }
}
