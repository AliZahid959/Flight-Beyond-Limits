<?php

namespace App\Http\Livewire\Front;

use App\Models\User;
use App\Models\Contact;
use App\Notifications\ContactNotification;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public function render()
    {
        return view('livewire.front.contact-form');
    }
    public function submit()
    {
        $data = $this->validate([

            'name' => ['required', 'string','min:1', 'max:255'],
            'email' => ['required', 'email'],
            'subject' => ['required', 'string','min:1', 'max:255'],
            'message' => ['required', 'string','min:1', 'max:255'],

        ]);

        $user = User::findOrFail(1);
        $data['slug'] = time();
        $contact = Contact::create($data);
        $user->notify(new ContactNotification($contact));
        session()->flash('status', 'Your Application has been Submitted');
        $this->reset();

    }
}
