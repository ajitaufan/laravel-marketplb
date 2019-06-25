<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Session::flush();
        return redirect('login')->with('alert','Anda sudah Logout');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username=$request->username;
        $username=$request->password;

        $client = new Client;
        $request = $client->post(ENV('API_URL'). '/graphql?query=mutation{login(username:"'.$username.'",password:"'.$password.'") {id username nama isAdmin status } }');
        $response = $request->getBody()->getContents();
        $data = json_decode($response, true);
        $role = $data['data']['login']['username'];
        $nama = $data['data']['login']['nama'];
        $id = $$data['data']['login']['id'];

        if(role) {
            Session::put('id', $id);
            Session::put('name', $nama);
            Session::put('login', TRUE);
            return redirect('home');
        } else {
            return redirect('login')->with('alert','Username atau password yang dimasukkan Salah!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
