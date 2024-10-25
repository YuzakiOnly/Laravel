<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'country',
        'street_address',
        'city',
        'state',
        'zip_code',
    ];

    // protected $guarded=[
    //     'id',
    //     'created_at',
    //     'updated_at',
    // ];

}
