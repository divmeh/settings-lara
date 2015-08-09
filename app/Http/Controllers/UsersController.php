<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mehar
 * Date: 7/5/15
 * Time: 7:36 PM
 * To change this template use File | Settings | File Templates.
 */

namespace lara5\Http\Controllers;
use Illuminate\Http\Request;

class UsersController extends Controller {
        public function index(Request $request){

            $value = $request->session()->all();
            print_r($value);
        }

        public function user($user_id){
            return $user_id;
        }

        public function edit_user(){

        }
}