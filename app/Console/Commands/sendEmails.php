<?php


namespace App\Console\Commands;


use Illuminate\Console\Command;


class SendEmails extends Command

{

    /**

     * The name and signature of the console command.

     *

     * @var string

     */

    protected $signature = 'emails:send';
//$signature=نام و امضای فرمان .در اینجا ارسال

    /**

     * The console command description.

     *

     * @var string

     */

    protected $description = 'Send emails to users';


    /**

     * Execute the console command.

     *

     * @return mixed

     */

    public function handle()

    {

        // Logic to send emails to users

        $this->info('Emails sent successfully.');
    }
}
