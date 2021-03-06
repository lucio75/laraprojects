<?php
use LaraCourse\User;
use LaraCourse\Models\Album;
use LaraCourse\Models\Photo;
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();

        Album::truncate();

        Photo::truncate();

        $this->call(SeedUserTable::class);

        $this->call(SeedAlbumTable::class);

        $this->call(SeedPhotoTable::class);
    }
}
