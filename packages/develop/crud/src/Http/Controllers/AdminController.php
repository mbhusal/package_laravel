<?php
/**
 * Created by PhpStorm.
 * User: Muna Bhusal
 * Date: 4/9/2018
 * Time: 11:37 AM
 */

namespace develop\crud\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('viewpath::multiauth.admin.home');
    }
}