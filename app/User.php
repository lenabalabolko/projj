<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;
    private $table_name = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone_number','address', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getAllUsers() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }

    public function deleteUser($id) {
        return DB::table($this->table_name)->where('id', $id)->delete();
    }

public function getAllUsers2() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }

    public function deleteUser2($id) {
        return DB::table($this->table_name)->where('id', $id)->delete();
    }

}
