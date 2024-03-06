<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    //
    public function getContact() {
        $c1 = new Contact();
        $message = $c1->getContactM();
        return view("contact", ["msg" => $message]);
    }

    public function getContacts() {
        $c1 = new Contact();
        $contacts = $c1->getContacts();
        return view("contact-list", ["contacts" => $contacts]);
    }
}
