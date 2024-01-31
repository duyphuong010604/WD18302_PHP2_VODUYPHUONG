<?php

namespace App\Models;



class UserModel extends BaseModel{
    
    public $tableName = 'users';

    
    public function getAllUser(){
        return $this->getAll()->get();
    }

    public function checkUserExist($email){
        return $this->select()->where('email', '=', $email)->first();
    }

}