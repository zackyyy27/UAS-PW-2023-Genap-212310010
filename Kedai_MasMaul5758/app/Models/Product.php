<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['categori_id', 'descs', 'pictures', 'names', 'prices'];

    public function storedData($data)
    {
        $results = Product::create($data);
        return $results;
    }

    public function removeByid($condition)
    {

        $results = Product::where($condition)->delete();
        return $results;
    }
}
