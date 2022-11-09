<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectsImages extends Model
{
    use HasFactory;

    public function Projects()
    {
        return $this->belongsTo(Project::class);
    }
}
