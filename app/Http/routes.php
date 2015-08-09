<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');
Route::resource('settings', 'SettingsController');

Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::group(['prefix' => 'api'], function(){
//        Route::get('', array('uses' => 'UsersController@index'));
//});

Route::group(['prefix' => 'staff'],function(){
    Route::group(['prefix' => 'users'], function(){
        Route::get('',array('uses' => 'UsersController@index'));
        Route::get('{user_id}',array('uses' => 'UsersController@user'));
        Route::get('edit/{user_id}',array('uses' => 'UsersController@edit_user'));
    });
});


class Car {
    protected $tire;
    protected $engine;
    public function __construct(Tire $tire, Engine $engine) {
        $this->tire = $tire;
        $this->engine = $engine;
    }
}

class Tire {
    protected $bridgestone;
    public function __construct(Bridgestone $bridgestone) {
        $this->bridgestone = $bridgestone;
    }
}

class Engine {
    protected $turbo;
    public function __construct(Turbo $turbo) {
        $this->turbo = $turbo;
    }
}

class Bridgestone {
    public $tread;
    public function __construct(){
        $this->tread = 'Performance';
    }
}

class Turbo {
    public $stage;
    public function __construct(){
        $this->stage = 2;
    }
}
//$bridgestone = new Bridgestone();
//$turbo = new Turbo();
//$engine = new Engine($turbo);
//$tire = new Tire($bridgestone);
//$car = new Car($tire,$engine);
Route::get('/', function()
{
    dd(App::make('Car'));  //  resolve it
});
Route::get('age',function(\lara5\libs\MembersController $member){
    return $member->getAge();
});

Route::get('department',function(\lara5\custom\EmployeesController $employee){
    try{
        return $employee->getDepartment('Hemant');
    }catch (Exception $e){
        $e->getMessage();
    }
});

//Route::get('/',function($car){
//    return $car;
//});