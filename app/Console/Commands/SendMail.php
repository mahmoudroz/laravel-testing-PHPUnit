<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
     /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-mail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $data = [
            'subject'     => "لا حول ولا قوة الا بالله العلي العظيم",
            'msg'         => "محمود رز",
         ];
        Mail::to("aboroz11111@gmail.com")->send(new NotifyMail($data));

    }
}
