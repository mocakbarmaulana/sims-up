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

    public function getCutNameAttribute($value){
        if (strlen($value) > 20) {
            return substr($value,0,20) . '...'; 
        } else {
            return $value;
        }
    }

    public function getCheckStatus($value){
        if ($value == 1){
            return "fas fa-check-circle text-success";
        } else {
            return "fas fa-times-circle text-danger";
        }
    }
}