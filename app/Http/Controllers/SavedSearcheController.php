<?php

namespace App\Http\Controllers;

use App\Models\SavedSearche;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class SavedSearcheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $data['searches'] = SavedSearche::where('user_id', $userId)->get();
        return view('templates.saved_search')
            ->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filter = json_encode($request->all());
        $userId = Auth::user()->id;
        $data['user_id'] = $userId;
        $data['name'] = $request->name;
        $data['filters'] = $filter;
        $save = SavedSearche::create($data);
        if($save){
            echo "success";
        }else{
            echo "error";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SavedSearche  $savedSearche
     * @return \Illuminate\Http\Response
     */
    public function show(SavedSearche $savedSearche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SavedSearche  $savedSearche
     * @return \Illuminate\Http\Response
     */
    public function edit(SavedSearche $savedSearche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SavedSearche  $savedSearche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SavedSearche $savedSearche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SavedSearche  $savedSearche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $savedSearch = SavedSearche::find($request->search_id);
        if (empty($savedSearch)) {
            echo "empty";
        }
        $delete = $savedSearch->delete();
        if($delete){
            echo "success";
        }
    }
}
