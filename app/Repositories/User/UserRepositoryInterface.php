<?php
namespace App\Repositories\User;

interface UserRepositoryInterface {
     

    public function doValidation($input);

 

    public function checkValidUser($input);

 

    public function checkValidLogin($input);

}
?>