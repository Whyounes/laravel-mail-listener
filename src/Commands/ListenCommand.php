<?php
namespace Whyounes\Mailman\Commands;

use Illuminate\Console\Command;

class ListenCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'mailman:listen';

    /**
     * @var string
     */
    protected $description = 'Listen for sent emails.';

    /**
     * ListenCommand constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

    }
}