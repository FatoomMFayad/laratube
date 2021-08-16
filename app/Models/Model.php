<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel
{
    use HasFactory;
    public $incrementing = false;

    protected static function boot()
    {
        parent::boot();


        static::creating(function ($model) {
            //generete a unique id for the model
            $model->{$model->getKeyName()} = Str::uuid();
        });
    }
}
