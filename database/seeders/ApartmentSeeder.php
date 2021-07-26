<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Statement;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('apartments')->truncate();
        DB::table('apartments')->insert([
            [
                'id' => 1,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'status' => 1,
                'created_at' => Carbon::now()
            ],[
                'id' => 2,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 3,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 4,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 5,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 6,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 7,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 8,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 9,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 10,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 11,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 12,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 13,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 14,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 15,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 16,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 17,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 18,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 19,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ],[
                'id' => 20,
                'name' => 'FLC',
                'address' => 'Hà Nội',
                'price' => '100000/m2',
                'generalInformation' => 'nhà đẹp',
                'privateInformation' => 'giá rẻ',
                'avatar' => 'https://chungcuhn24h.net/wp-content/uploads/2015/08/chung-cu-gemek-tower.jpg',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
