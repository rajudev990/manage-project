<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormStudent extends Model
{
    protected $guarded = [];
    
    public function submission()
    {
        return $this->belongsTo(FormSubmission::class, 'form_submission_id');
    }
}
