#Broker Insights Code Challenge


###Example

This has also been deployed to a web server:

https://codetest.regalmajestic.co.uk/


###To run locally:

alias sail='bash vendor/bin/sail'

sail up

sail up -d

sail artisan migrate:fresh --seed

sail down

###Commands

sail artisan make:controller DashboardController

sail artisan make:migration create_organisations_table

sail php --version

sail artisan migrate

sail share

sail artisan migrate:fresh --seed

sail artisan make:livewire dashboard