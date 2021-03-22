<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Policy;

class Broker extends Model
{
    use HasFactory;


    
    /**
     * Create the relationship with Policy.
     *
     * @var Policy 
     */
    public function policies()
    {
      return $this->hasMany(Policy::class);
    }
}
