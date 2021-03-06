<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name','firstname','filiere_name','niveau_name','date_naissance','sexe','nationalite','tel','email'];
}
