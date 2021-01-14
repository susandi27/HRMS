<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name', 'remark'
    ];
    public function staff_infos()
    {
        return $this->hasMany('App\Staff_Info');
    }
}
