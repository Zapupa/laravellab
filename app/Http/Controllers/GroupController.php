<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    public function index (){
        $groups = Group::all();

        return view('groups.index', compact('groups'));
    }

    public function adults (){
        $groups = Group::all();

        return view('groups.adult', compact('groups'));
    }
}
