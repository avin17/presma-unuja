<?php

namespace App\Http\Controllers;

use App\Http\Requests\PresmaRequest;
use App\Models\presma;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class DashboardPresmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presma = auth()->user()->presma; // collection
        // dd($presma[0]->users->toArray());
        return view('dashboard.presma.index', [
            'title' => 'prestasiku',
            'presma' => $presma

        ]);
    }
    public function create()
    {
        return view('dashboard.pengajuan.create', [
            'title' => "pengajuan"
        ]);
    }
    public function store(PresmaRequest $request)
    {
        dd($request->validated());
        // if ($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-image');
        // }
        // $validatedData['user_id'] = auth()->user()->id;


        // presma::create($validatedData);

        // return redirect('/dashboard/presma')->with('success', 'New Presma has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
