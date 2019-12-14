<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DoctorImage extends Model
{
     #id
    #path
    #doctor_id
    protected $table = 'doctor_images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'path',
        'doctor_id',
    ];
    // one to one relation 
    public function Doctor(){
        return $this->hasOne('App\Model\Doctor','doctor_id');
    }
}
