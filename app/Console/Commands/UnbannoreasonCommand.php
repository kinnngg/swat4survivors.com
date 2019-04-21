<?php

namespace App\Console\Commands;

use App\Ban;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UnbannoreasonCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:emptyreasonban';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for ban-list without reason and un-ban all';

    /**
     * Create a new command instance.
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
        $bans = Ban::where('status',true)->get();

        $count = 0;

        foreach($bans as $ban)
        {
            if($ban->reason == null || $ban->reason == "" || $ban->reason == " " || $ban->reason == "-")
            {
                $count++;
                $ban->status = false;
                $ban->updated_by = "EmptyBanReason";
                $ban->updated_by_site = true;
                $ban->save();
                $ban->tellServerToRemove("EmptyBanReason");
            }
        }

        $this->info($count." empty reason bans cleared!");
    }
}
