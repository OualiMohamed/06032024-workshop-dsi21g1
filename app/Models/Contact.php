<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function getContactM() {
        $message = "Hello DSI21 (MODEL)";
        return $message;
    }

    public function getContacts() {
        $contacts = ["Contact 1", "Contact 2", "Contact 3"];
        return $contacts;
    }
}
