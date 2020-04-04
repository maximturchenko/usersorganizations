<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Users;

class UserController extends Controller
{
  /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {   
      $users = Users::all();
      $users = Users::paginate(10);
       return view('users.user',  compact('users'));
    }

    /**
     * Show user id.
     *
     * @return Response
     */
    public function show(Users $user)
    {   
       return view('users.show', compact('user'));
    }


    /**
     * Create user.
     *
     * @return Response
     */
    public function create()
    {
        return view('users.add');
    }


     /**
     * Edit user.
     *
     * @return Response
     */
    public function edit(Users $user)
    {
        return view('users.edit', compact('user'));
    } 

   /**
     * Store user.
     *
     * @return Response
     */
    public function store()
    { 
       
        $this->validate(request(),[
                'lastname'=>'required',
                'firstname'=>'required',
                'middlename'=>'required',
                'phone'=>'required',
                'email'=>'required', 
            ]
        );

        Users::create(
            request(array('lastname','firstname','middlename','phone','email'))
        );

        return redirect('/');
    }

    /**
     * Edit user.
     *
     * @return Response
     */
    public function delete()
    { 
     
         
       // return view('users', ['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Users $user)
    {
        $this->validate(request(),[
            'lastname'=>'required',
            'firstname'=>'required',
            'middlename'=>'required',
            'phone'=>'required',
            'email'=>'required', 
        ]
     );
     $user->update(request(['lastname','firstname','middlename','phone','email']));
     return redirect('/');

    }

   /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Users $user)
    {
        $user->delete();
        return redirect('/'); 
    }
} 