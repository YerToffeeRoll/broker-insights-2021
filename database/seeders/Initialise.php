<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Policy;
use App\Models\Broker;

class Initialise extends Seeder
{

    private $broker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //clear table
      Policy::truncate();
      Broker::truncate();


      //create the broker "Achme Broker Ltd"
      $this->broker = Broker::create([
                "name" => "Achme Broker Ltd",
      ]);


      Policy::create([
                "broker_id" => $this->broker->id,
                "customer_name" => "ABC Joinery",
				"customer_address" => "12 Ascott Street, Dundee",
				"premium" => "123.87",
				"policy_type" => "Public Liability",
				"insurer_name" => "Aviva"
      ]);

      Policy::create([
                "broker_id" => $this->broker->id,
                "customer_name" => "XYZ Plumbing",
  				"customer_address" => "24 Fleet Street, Glasgow",
  				"premium" => "2321.45",
  				"policy_type" => "Public Liability",
  				"insurer_name" => "Allianz"
      ]);

      Policy::create([
                    "broker_id" => $this->broker->id,
                    "customer_name" => "Fast Taxis",
    				"customer_address" => "324b Bank Street, Aberdeen",
    				"premium" => "59897.00",
    				"policy_type" => "Motor Fleet",
    				"insurer_name" => "Aviva"
      ]);

      Policy::create([
                    "broker_id" => $this->broker->id,
                    "customer_name" => "Fast Taxis",
      			 	"customer_address" => "324b Bank Street, Aberdeen",
      				"policy_type" => "Public Liability",
      			   "premium" => "6845.00",
      				"insurer_name" => "QBE"
      ]);
    }
}
