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
    protected $signature = 'app:send-emails {--U|user=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send a marketing email to a user';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->table(
            ['Name', 'Email'],
            [['Luis', 'luis@dominio.com'],['Juan', 'juan@dominio.com']]
        );
        /*$user = $this->option('user');
        if(empty($user)){
            $user = $this->ask('What is your user?');
        }
        $password = $this->secret('What is the password?');
        $saludo = $this->choice('Que parte del dia es?', ['Buenos días', 'Buenas tardes', 'Buenas noches'], 0 );
        $this->line( "Hola $user" );
        $this->info( $saludo );
        $this->error( "Ocurrio un error" );
*/
    }
}
