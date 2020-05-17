<?php

use Illuminate\Database\Seeder;

class OutletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $outlet = new \App\Outlet;
        $outlet->nama = "INI LAUNDRY";
        $outlet->alamat = "Kampung Kramat No. 14";
        $outlet->no_telp = "082298816510";

        $outlet->save();

        $this->command->info("Seeder berhasil!");
    }
}
