<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\OurTeam;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index(){
        $data['header_title'] = 'Teams';
        $teams = OurTeam::where('is_active', 1)->get();
        $content = compact('teams');
        return view('Frontend.Team.teams', $content, $data);
    }
}
