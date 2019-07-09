<?php


namespace App\Console;

use App\Repositories\AdvertsRepository;
use App\Services\ComputeService;
use Illuminate\Console\Command;

class ComputeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:compute {value} {emojis} {value2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Compute locally';

    /**
     * User repository to persist user in database
     *
     * @var ComputeService
     */
    protected $compute;

    /**
     * SearchCommand constructor.
     * @param AdvertsRepository $advertsRepository
     */
    public function __construct(ComputeService $compute)
    {
        parent::__construct();

        $this->compute = $compute;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $inputs =[
            'value' => $this->argument('value'),
            'emojis' => $this->argument('emojis'),
            'value2' => $this->argument('value2')
        ];
        $result = $this->compute->run($inputs);

        $this->info(sprintf('Compute value %s', $result));
    }
}