<?php

namespace core;

use \Imagick;


class Images
{

    public static function  create_image(string $imagePath, int $width = 250, int  $height = 250)
    {

        $source = dirname(__FILE__, 2) . "/public/img/" . $imagePath;

        $dir = pathinfo($source, PATHINFO_DIRNAME);
        $name = pathinfo($source, PATHINFO_FILENAME);

        $info = getimagesize($source);

        Image::configure(['driver' => 'gd']);

        $image = Image::make($source)->resize($width, $height);

        $image
            ->resize(
                $width,
                $height,
                function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                }
            );
        // Add a background canvas to the image
        $image
            ->resizeCanvas(
                $width,
                $height,
                'center', // centre the image on the canves
                false, // don't apply relative mode 
                '#FFA500' // add a white background to the image
            );

        $image->save(dirname(__FILE__, 2) . "/public/uploads/" . $name . ".webp");
        print_r($image);
    }

    public static function load_image(string $imagePath, int $width = 250, int  $height = 250) { 
        if (self::hasCache($imagePath)) {
            return file_get_contents(self::pathCache($imagePath));
        }

        $path = dirname(__FILE__, 3);

        $img = new Imagick($path . "/public/img/" . $imagePath);

        $img->setImageFormat('webp');
        $img->thumbnailImage($width, $height);

        $img->setImageCompression(Imagick::COMPRESSION_JPEG);
        $img->setImageCompressionQuality(80);

        $base = base64_encode($img);

        file_put_contents(self::pathCache($imagePath), $base);

        return $base;
    }

    private static function hasCache(string $image_name)
    {
        return file_exists(self::pathCache($image_name));
    }

    private static function pathCache(string $image_name)
    {
        $path = dirname(__FILE__, 2);
        return "$path/public/cache/$image_name";
    }
}
