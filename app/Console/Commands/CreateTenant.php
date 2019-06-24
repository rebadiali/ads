<?php

namespace App\Console\Commands;

use Hyn\Tenancy\Contracts\Repositories\WebsiteRepository;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Contracts\Repositories\HostnameRepository;
use Illuminate\Console\Command;

class CreateTenant extends Command
{
    protected $signature = 'tenant:create {hostname}';
    protected $description = 'Creates a tenant with the provided hostname e.g. php artisan tenant:create host.dev';

    public function handle()
    {
        $hostnameParam = $this->argument('hostname');

    }

}