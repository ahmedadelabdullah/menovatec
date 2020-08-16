<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ContactController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param ContactRequest $request
     * @return Response
     */
    public function store(ContactRequest $request)
    {
        $name = request()->name;
        $email = request()->email;
        $phone = request()->phone;
        $subject = request()->subject;
        $description = request()->description;
        Contact::create(([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'subject' => $subject,
            'description' => $description,
        ]));
        return redirect()->route('contact.confirmed');
    }

}
