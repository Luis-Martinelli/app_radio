<?php

namespace app\Controllers;
use app\Controllers\BaseController;
use app\Models\Agents;

class Main extends BaseController {
  public function index()
  {
      //check if there is no active user in session
      if(!check_session())
      {
        $this->login_frm();
        return;
      }
  }

  public function login_frm()
  {
      //check if there is already a user in the session
      if(check_session())
      {
          $this->index();
          return;
      }

      //check if there are errors (after login_submit)
      $data = [];
      if(!empty($_SESSION['validation_errors']))
      {
          $data['validation_errors'] = $_SESSION['validation_errors'];
          unset($_SESSION['validation_errors']);
      }

      //display login form
      $this->view('layouts/html_header');
      $this->view('login_frm', $data);
      $this->view('layouts/html_footer');
  }

  public function login_submit()
  {
    //check if there is already an active session
    if(check_session()){
      $this->index();
      return;
    }

    //check if there was a post request
    if($_SERVER['REQUEST_METHOD'] != 'POST'){
      $this->index();
      return;
    }

    //form validation
    $validation_errors = [];
    if (empty($_POST['username']) || empty($_POST['password'])) {
      $validation_errors []=  "Swal.fire({
                                  title: 'Campos Obrigatórios',
                                  text: 'Preencha Usuário e Senha!',
                                  icon: 'warning'
                              });";
    }


    //check if there are validation errors
    if(!empty($validation_errors)){
      $_SESSION['validation_errors'] = $validation_errors;
      $this-> login_frm();
      return;
    }

    //get form data
    $username = $_POST['username'];
    $password = $_POST['password'];


  }
}