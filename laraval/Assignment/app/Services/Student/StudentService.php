<?php

namespace App\Services\Student;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

// use App\Contracts\Dao\User\UserDaoInterface;
// use App\Contracts\Services\User\UserServiceInterface;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Storage;

/**
 * User Service class
 */
class StudentService implements StudentServiceInterface
{
  /**
   * user Dao
   */
  private $StudentDao;

  /**
   * Class Constructor
   * @param StudentDaoInterface
   * @return
   */
  public function __construct(StudentDaoInterface $StudentDao)
  {
    $this->StudentDao = $StudentDao;
  }


  public function list()
  {
    return $this->StudentDao->list();
  }

  public function insert(){
     
  }

  /**
   * To get user list
   * @return array $userList list of users
   */
  public function getUserList()
  {
    return $this->userDao->getUserList();
  }

  /**
   * To Update User with values from request
   * @param Request $request request including inputs
   * @return Object updated user object
   */
  public function updateUser(Request $request)
  {
    $user = $this->userDao->updateUser($request);
    if ($request['profile']) {
      Storage::move(
        config('path.public_tmp') . $request['profile'],
        config('path.profile') . Auth::user()->id . config('path.separator') . $request['profile']
      );
    }
    return $user;
  }
}