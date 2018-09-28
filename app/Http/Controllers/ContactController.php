<?php


namespace App\Http\Controllers;


use Dymantic\Secretary\ContactForm;
use Dymantic\Secretary\Secretary;

class ContactController extends Controller
{
    public function create()
    {
        return view('front.contact.page');
    }

    public function store(Secretary $secretary, ContactForm $form)
    {
        $secretary->receive($form->contactMessage());
    }
}