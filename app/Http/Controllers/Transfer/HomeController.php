<?php
/**
 * Created by PhpStorm.
 * User: huangchengwen
 * Date: 2017/12/1
 * Time: 10:45
 */

namespace App\Http\Controllers\Transfer;


class HomeController extends BaseController
{
    public function index(){
        return view('transfer.home.index');
    }
}