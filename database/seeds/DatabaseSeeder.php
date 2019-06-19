<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Webhook;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Model::unguard();
        // $this->call(UsersTableSeeder::class);
        $this->call(WebhooksSeeder::class);
    }

    
}


class WebhooksSeeder extends Seeder {

    public function run()
    {
        DB::table('webhooks')->delete();
        Webhook::create([
            'webhook' => 'qwertyuusdfghbb',
                    ]);

        Webhook::create([
            'webhook' => 'pyilk,gjkgk',
        ]);

        Webhook::create([
            'webhook' => 'fhjmfhjhfgjf',
        ]);
    }
}
