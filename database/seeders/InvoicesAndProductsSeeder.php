<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class InvoicesAndProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoiceId = DB::table('invoices')->insertGetId([
            'date' => (string)Carbon::now(),
            'user_id' => mt_rand(),
            'seller_id' => mt_rand(),
            'type' => Str::random(10)
        ]);

        DB::table('products')->insert([
            'name' => Str::random(10),
            'quantity' => mt_rand() / mt_rand(),
            'price' => mt_rand() / mt_rand(),
            'invoice_id' => $invoiceId
        ]);
    }
}
