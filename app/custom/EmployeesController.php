<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Mehar
 * Date: 7/25/15
 * Time: 11:38 AM
 * To change this template use File | Settings | File Templates.
 */

namespace lara5\custom;


class EmployeesController {

        private $department;

        public function getDepartment($name){
            return $name.' is in '.$this->department = ($name == 'Mehar') ? 'PHP' : 'iOS';
        }
}