<?php namespace lara5;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model {

    protected $table = 'settings';
    protected $fillable = ['name','email'];

}
