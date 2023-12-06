<?php

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];
    public static $rules = ['name' => 'required|min:3'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
