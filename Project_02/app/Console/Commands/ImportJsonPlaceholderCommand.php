<?php

namespace App\Console\Commands;

use App\Components\importDataClient;
use Illuminate\Console\Command;

class ImportJsonPlaceholderCommand extends Command
{

    protected $signature = 'import:jsonplaceholder';

    protected $description = 'Get data from jsonplaceholder';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $import = new ImportDataClient();
        $response = $import->client->request('GET','posts');
        $data = json_decode($response->getBody()->getContents());
    }
}
