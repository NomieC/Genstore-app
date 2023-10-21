<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens; // Import the trait

class User extends Model
{
    use HasApiTokens; 
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'birthdate',
        'gender', 
        'password',
    ];   
}
