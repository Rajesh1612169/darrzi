<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'address',
        'profile_picture',
        'nic_or_passport_front',
        'nic_or_passport_back',
        'matriculation_marks_sheet',
        'matriculation_certificate',
        'enter_marks_sheet',
        'enter_certificate',
    ];

}
