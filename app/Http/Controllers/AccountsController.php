<?php

namespace App\Http\Controllers;

use App\Account;

class AccountsController extends Controller
{
    public function index(){
        $accounts = Account::all();
        echo($accounts);
        return view('accounts.index', compact('accounts'));

    }
}
