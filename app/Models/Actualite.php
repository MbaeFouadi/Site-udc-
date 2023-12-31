<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use sluggable;


class Actualite extends Model
{
    use HasFactory;
    protected $guarded = [''];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'titre'
            ]
        ];
    }

}
