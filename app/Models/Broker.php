<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Policy;

class Broker extends Model
{
    use HasFactory;


    /**
     * @var string Model table name
     */
    protected $table = 'broker';


    
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
      'name',
  ];

}
