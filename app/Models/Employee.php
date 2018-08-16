<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /* protected $guarded= []; */
    /* protected $hidden = ['name']; */
    /* protected $visible = ['name']; */

    public function getIsEmployeeAttribute()
    {
        return 'Yes';        
    }
    protected $appends = ['is_employee'];

    public function manager()
    {
        return $this->hasOne('App\Models\Manager');
    }
    
}
