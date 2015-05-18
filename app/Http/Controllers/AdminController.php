<?php namespace App\Http\Controllers;



class AdminController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index()
    {
        return view('admin.index');
    }

}