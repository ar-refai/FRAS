<?php

namespace App\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
     #id
    #name
    #email
    #password
    #phone
    #age
    #sex
    #dept_id
    protected $table = 'doctors';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'phone',
        'age',
        'sex',
        'dept_id',
        'imgpath',

    ];
       // one to many relation between depts and doctors
       public function Department(){
        return $this->belongsTo('App\Model\Department','dept_id');
    }
 
}
