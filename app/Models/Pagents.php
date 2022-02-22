<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pagents extends Model
{
    use HasFactory;
    protected $primaryKey = 'p_id';
    protected $dates = ['p_dob'];
    protected $fillable = [
        "p_fname",
        "p_lname",
        "p_other",
        "p_dob",
        "p_age",
        "p_gender",
        "p_phone",
        "p_soo",
        "p_lga",
        "p_talent",
        "p_address",
        "p_sch_name",
        "p_sch_add",
        "p_sch_contact",
        "class",
        "p_gar_name",
        "p_gar_job",
        "p_gar_phone",
        "vote",
        "path",
        "img_names"
    ];
    protected $casts = ['img_names' => 'array'];
}
