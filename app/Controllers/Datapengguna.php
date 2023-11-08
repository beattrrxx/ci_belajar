<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Datapengguna extends BaseController
{
    public function index()
    {
        $validation_result = $this->validate([
            "name" => "required",
            "address" => "required",
        ]);

        if (!$validation_result){
            return redirect()->to("users")->withInput();
        }

        $users = new \App\Models\Users();
        $request = $this->request;

        $users->insert([
            "name" => $request->getVar('name'),
            "address" => $required->getVar('address'),
        ]);

        return redirect()->to('/users');
        //return view('users/index');
    }

    //public function create()
    //{
       // $validation_result = $this->validate([
        //    "name" => "required",
       //     "address" => "required"
      //  ]);

       // if($!validation_result) {
       //     $validation = \config\Services\validation();
      //      return redirect()->to("users");
       //     //return redirect()->to("users");
      //  }
        
       // dd($validation_result);
        //dd($this->request->getVar('name'), $this->request->getVar("address"));
   // }
}
