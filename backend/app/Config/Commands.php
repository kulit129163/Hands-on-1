<?php

namespace App\Commands;

use CodeIgniter\CLI\BaseCommand;
use CodeIgniter\CLI\CLI;

class HealthCheck extends BaseCommand
{
    protected $group       = 'custom';          // Command group (optional)
    protected $name        = 'health:check';    // Command name
    protected $description = 'Runs a health check on the application.';

    public function run(array $params)
    {
        CLI::write('✅ Application is healthy!', 'green');
    }
}
