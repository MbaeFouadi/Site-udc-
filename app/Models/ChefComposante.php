<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChefComposante extends Model
{
    use HasFactory;
    protected $guarded = [''];
    protected $primaryKey="id_chef_comp";
}
