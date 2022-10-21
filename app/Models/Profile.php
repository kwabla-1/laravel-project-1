<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function IndividualProfile()
    {
        return $this->hasMany(IndividualProfile::class);
    }

    public function CompanyProfile()
    {
        return $this->hasMany(CompanyProfile::class);
    }
}
