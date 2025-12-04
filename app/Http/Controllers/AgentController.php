<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
class AgentController extends Controller
{
    public function index($id='',$slug='')
    {
       try{
           $detail = Agent::where('id',$id)->first();
           if($detail)
           {
             return view('template.our_agent-details',compact('detail'));
           }
           return redirect()->back();
       }
       catch(Exception $e)
       {
        return redirect()->back()->withErrors($e->getMessage());
       }
    }
    public function list()
    {
        try{
            $agents = Agent::get();
            return view('template.our_agents',compact('agents'));
        }
        catch(Exception $e)
        {
           
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
