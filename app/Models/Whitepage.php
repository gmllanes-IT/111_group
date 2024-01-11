<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whitepage extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id',
        'stage_no',
        'element_no',
        'en_page_title',
        'ar_page_title',
        'en_question_text',
        'ar_question_text',
        'type',
        'address',
        'optional_date_1',
        'optional_time_1',
        'optional_date_2',
        'optional_time_2',
        'optional_date_3',
        'optional_time_3',
        'appointment_type',
        'price',
        'en_option1',
        'ar_option1',
        'en_option2',
        'ar_option2',
        'en_option3',
        'ar_option3',
        'en_option4',
        'ar_option4',
        'en_option5',
        'ar_option5',
        'en_option6',
        'ar_option6',
        'appointment_location', 
        'payment_type', 
        'wetransfer_link', 
        'en_extra_information', 
        'ar_extra_information', 
    ];
}
