<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        return view('dashboards.admins.index');
    }

    function profile()
    {
        return view('dashboards.admins.profile');
    }
    function settings()
    {
        return view('dashboards.admins.settings');
    }
    function reglistmp()
    {
        return view('dashboards.admins.reglistmp');
    }
    function reglistsme()
    {
        return view('dashboards.admins.reglistsme');
    }
    function regcompanymp()
    {
        return view('dashboards.admins.regcompanymp');
    }
    function pgpks()
    {
        return view('dashboards.admins.pgpks');
    }
    function awarness()
    {
        return view('dashboards.admins.programme.awarness');
    }
    function cha()
    {
        return view('dashboards.admins.programme.cha');
    }
    function intervention()
    {
        return view('dashboards.admins.programme.intervention');
    }
    function isgric()
    {
        return view('dashboards.admins.programme.isgric');
    }
    function training()
    {
        return view('dashboards.admins.programme.training');
    }
    function vapt()
    {
        return view('dashboards.admins.programme.vapt');
    }
    function regnewevent()
    {
        return view('dashboards.admins.programme.regnewevent');
    }
    function regbookdateisgric()
    {
        return view('dashboards.admins.programme.regbookdateisgric');
    }
}
