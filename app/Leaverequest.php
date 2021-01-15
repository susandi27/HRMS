<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaverequest extends Model
{
    protected $fillable = [
        'name', 'current_position', 'department', 'remaining_leave', 'leave_start_date', 'leave_end_date', 'leave_date_total', 'leave_duty_transfer_name', 'address','staffinfo_id', 'leave_id',
    ];
}
