<?php

namespace App\Http\Controllers;

use App\Freelancer;
use App\Http\Requests\FreelancerRequest;
use Illuminate\Http\Request;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(FreelancerRequest $request)
    {
        $name = request()->name;
        $email = request()->email;
        $phone = request()->phone;
        $subject = request()->subject;
        $description = request()->description;
        Freelancer::create(([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'description' => $description,
        ]));
        return redirect()->route('contact.confirmed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function show(Freelancer $freelancer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function edit(Freelancer $freelancer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Freelancer $freelancer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Freelancer  $freelancer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Freelancer $freelancer)
    {
        //
    }
}
