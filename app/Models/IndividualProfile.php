<?php

namespace App\Models;

use App\Http\Requests\StoreIndividualProfileInforRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndividualProfile extends Model
{
    use HasFactory;
    // THE table associated with the model
    protected $table = 'individual_profiles';

    public function Profile()
    {
        return $this->belongsTo(Profile::class);
    }
} 

 
