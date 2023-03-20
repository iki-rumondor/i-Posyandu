<?php

namespace App\Controllers;

class Auth extends BaseController
{
    protected $db, $auth;

    public function __construct() {
        $this->db = new \PDO('mysql:dbname=i-posyandu;host=localhost;charset=utf8mb4', 'root', '');
        $this->auth = new \Delight\Auth\Auth($this->db);
    }

    // public function signUp()
    // {
        
    //     $_POST = [
    //         'email' => 'agkfgaksfa@ahksd.com',
    //         'password' => 'agkfgaksfa',
    //         'username' => 'agkfgaksfa',
    //     ];

    //     try {
    //         $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username'], function ($selector, $token) {
    //             echo 'Send ' . $selector . ' and ' . $token . ' to the user (e.g. via email)';
    //             echo '  For emails, consider using the mail(...) function, Symfony Mailer, Swiftmailer, PHPMailer, etc.';
    //             echo '  For SMS, consider using a third-party service and a compatible SDK';
    //         });
    //         dd($userId);

    //         echo 'We have signed up a new user with the ID ' . $userId;
    //     } catch (\Delight\Auth\InvalidEmailException $e) {
    //         die('Invalid email address');
    //     } catch (\Delight\Auth\InvalidPasswordException $e) {
    //         die('Invalid password');
    //     } catch (\Delight\Auth\UserAlreadyExistsException $e) {
    //         die('User already exists');
    //     } catch (\Delight\Auth\TooManyRequestsException $e) {
    //         die('Too many requests');
    //     }
    // }

    public function login()
    {

        $post = $this->request->getPost(['username', 'password']);

        try {
            $this->auth->loginWithUsername($post['username'], $post['password']);
            return \redirect()->to(\base_url('view/dashboard'));
        }
        catch (\Delight\Auth\UnknownUsernameException $e) {
            session_destroy();
            session()->setFlashdata('fail', 'Username tidak dikenali');
            return \redirect()->to(\base_url('view/login'));
        }
        catch (\Delight\Auth\InvalidPasswordException $e) {
            session_destroy();
            session()->setFlashdata('fail', 'Salah password');
            return \redirect()->to(\base_url('view/login'));
        }
        catch (\Delight\Auth\EmailNotVerifiedException $e) {
            session_destroy();
            session()->setFlashdata('fail', 'Email belum diverifikasi');
            return \redirect()->to(\base_url('view/login'));
            die('Email belum diverifikasi');
        }
        catch (\Delight\Auth\TooManyRequestsException $e) {
            session_destroy();
            session()->setFlashdata('fail', 'Too many requests');
            return \redirect()->to(\base_url('view/login'));
        }
        
    }
}
