<?php


class Auth extends Controller{



    function login(){
        $this->view('pages/auth/layout_auth', [
            "Page" => "pages/auth/login",
        ]);
    }

    function setting(){
        $this->view('index', [
            "Page" => "pages/auth/setting",
        ]);
    }

    function password_change(){
        $this->view('pages/auth/layout_auth', [
            "Page" => "pages/auth/password_change",
        ]);
    }

    function confirm_code(){
        $this->view('pages/auth/layout_auth', [
            "Page" => "pages/auth/confirm_code",
        ]);
    }

    function password_change_message(){
        $this->view('pages/auth/layout_auth', [
            "Page" => "pages/auth/password_change_message",
        ]);
    }
}
?>