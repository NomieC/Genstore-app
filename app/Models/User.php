<?php
namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;

class User extends AuthenticatableUser implements Authenticatable
{
    use HasFactory, Notifiable;

    // Rest of your User model code...

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'birthdate',
        'gender',
        'password',
    ];
    // Implement necessary methods if not already implemented
    public function getAuthIdentifierName()
    {
        return 'email'; // Return the column name used for username/email
    }

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }
}

