<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staffinfo extends Model
{
    protected $fillable = [
        'photo', 'user_id', 'department_id', 'birthday', 'gender', 'nrc', 'father_name', 'mother_name', 'religion', 'nationality', 'marital_status', 'degree', 'start_work_date', 'current_position', 'salary', 'current_position', 'phone','email', 'address', 'current_address', 'remark',
    ];
     public function user($value='')
    {
        return $this->belongsTo('App\User');
    }
    public function department($value='')
    {
        return $this->belongsTo('App\Department');
    }
}
