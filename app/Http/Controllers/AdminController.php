<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminModel;
use App\APIModel;

class AdminController extends Controller
{
    public function index()
    {
        
    }
    public function create()
    {
        return view('AdminSignUp.register');
    }
    public function homePage()
    {
        return view('AdminPages.adminHomePage');
    }
    public function login(Request $request)
    {
        return view('AdminPages.adminHomePage');
        // $admin = new AdminModel();
        // $api   = new APIModel();
        // // get request from Api with unique user_email & password
        // $admin->setEmail($request->input('email'));
        // $admin->setPassword($request->input('password'));
        // $admin_login = json_encode($admin->loginJsonSerialize());
        // $api->setUrl("http://localhost:5000");
        // $url = '/admin/' . $admin_login;
        // $data  = $api->getData($url);
        // if (isset($data)) {
        //     $admin->setFirstName($data->name);
        //     $admin->setEmail($data->email);
        //     $admin->setPhonoNumber($data->phoneNumber);
        //     $admin->setPassword($data->password);

        //     $request->session()->put('admin_Data', $admin);
        //     $admin_content = json_encode($admin->jsonSerialize());
        //     $decoded_Data  = json_decode($admin_content);

        //     return view('AdminPages.adminHomePage', ["admin_Data" => $decoded_Data]);
        // }
    }
    public function store(Request $request)
    {
        return view('AdminPages.adminHomePage');
        // $admin = new AdminModel();
        // $admin->setFirstName($request->input('firstName'));
        // $admin->setLastName($request->input(('lastName')));
        // $admin->setPhonoNumber($request->input(('phonoNumber')));
        // $admin->setEmail($request->input('email'));
        // $admin->setPassword($request->input(('password')));
        // $admin_content = json_encode($admin->jsonSerialize());
        // $api = new APIModel();
        // $api->setUrl("http://localhost:5000");
        // $status = $api->insertData('/admin', $admin_content);
        // if ($status == '200') {
        //     $request->session()->put('admin_Data', $admin);
        //     $decoded_Data  = json_decode($admin_content);
        //     return view('AdminPages.adminHomePage', ["admin_Data" => $decoded_Data]);
        // } 
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
}
