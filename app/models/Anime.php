<?php

namespace app\models;

class Anime extends Model
{
  public static string $table = 'anime';
  public readonly int $id;
  public readonly string $value; 
}
