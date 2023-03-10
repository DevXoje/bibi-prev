<?php

namespace Database\Seeders;

use App\Models\Picture;
use Illuminate\Database\Seeder;

class PictureSeeder extends Seeder
{
    public function run()
    {
        $picture1 = new Picture([
            "title" => "Amigas que inspiran ๐",
            "path" => "https://via.placeholder.com/150",
        ]);
        $picture2 = new Picture([
            "title" => "โจ๐ฎ Aparecium ๐ฎโจ",
            "path" => "https://via.placeholder.com/150",
        ]);
        $picture3 = new Picture([
            "title" => "Hierbas mรกgicas de las brujas ๐",
            "path" => "https://via.placeholder.com/150",
        ]);
        $picture4 = new Picture([
            "title" => "Nereida, amiga querida ๐ง๐ผโโ๏ธ๐โจ",
            "path" => "https://via.placeholder.com/150",
        ]);
        $picture1->save();
        $picture2->save();
        $picture3->save();
        $picture4->save();
    }
}
