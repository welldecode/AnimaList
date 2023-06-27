<?php

namespace core; 
use Intervention\Image\ImageManager;
class Images
{

    public static function load_image(string $imagePath, int $width = 250, int  $height = 250)
    {
 
        if (self::hasCache($imagePath)) {
            return file_get_contents(self::pathCache($imagePath));
        }

        $path = dirname(__FILE__, 3);
 

        $manager = new ImageManager(['driver' => 'imagick']);

        $image = $manager->make($path . "/public/assets/img/uploads/" . $imagePath)->resize(300, 200);
 echo $image;
    }

    private static function hasCache(string $image_name)
    { 
        return file_exists(self::pathCache($image_name));
    }

    private static function pathCache(string $image_name)
    {
        $path = dirname(__FILE__, 3);
        return "$path/public/assets/cache/$image_name";
    }
}
