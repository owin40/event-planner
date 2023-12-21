<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class teamfounder extends Model
{
    use HasFactory;
    protected $fillable = ['position','thumbnail','name'];

    protected static function boot(){

        parent::boot();
        static::updating(function($model){
            if($model->isDirty('thumbnail') && ($model->getOriginal('thumbnail') !== NULL )) {
                Storage::disk('public')->delete($model->getOriginal('thumbnail'));
            }
        });
    }
}