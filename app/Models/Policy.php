<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Broker;

class Policy extends Model
{
    use HasFactory;


    /**
     * @var string Model table name
     */
    protected $table = 'policy';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name', 'customer_address', 'premium', 'policy_type', 'insurer_name',
    ];


    
    /**
     * Create the relationship with the broker.
     *
     * @var Broker 
     */
    public function broker()
    {
      return $this->belongsTo(Broker::class);
    }
}
