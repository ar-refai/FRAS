<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class StudentImage extends Model
{
        #id
        #path
        #student_id
        protected $table = 'student_images';
        protected $primaryKey = 'id';
        protected $fillable = [
            'id',
            'path',
            'student_id',
        ];        
        // one to one relation 
        public function Student(){
            return $this->hasOne('App\Model\Student','student_id');
        }
}
