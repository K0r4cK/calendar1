<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    static $rules=[
        'start'=>'required',
        'end'=>'required',
        'saloon'=>'required',
        'file'=>'required',
        'applicant'=>'required',
        'crime'=>'required',
        'trial'=>'required',
        'judge'=>'required',
        'fiscal'=>'required',
        'defender'=>'required',
        'secretary'=>'required',
    ];

    protected $fillable=['start', 'end', 'saloon', 'file', 'applicant', 'crime', 'trial', 'judge', 'fiscal', 'defender', 'secretary'];
}
