<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'address', 'password', 'status'];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }

    public function setStatusAttribute(){
        $this->attributes['status'] = 1;
    }
}