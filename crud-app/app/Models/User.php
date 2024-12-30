<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
        // Protect mass-assignment vulnerabilities by specifying which attributes can be mass-assigned
        protected $fillable = ['name', 'email', 'password'];

        // Or alternatively, you can use $guarded to specify which attributes should not be mass-assigned
        // protected $guarded = ['id'];

}
