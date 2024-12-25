<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   public function submit(Request $request) {
		// Validate form input
		$validatedData = $request->validate([
			'name' => 'required|string|max:50',
			'email' => 'required|email',
			'phone' => 'nullable|regex:/^\+?[0-9\s\-\(\)]*$/|max:20',
			'subject_id' => 'required|exists:subjects,id',
			'message' => 'required|string',
		]);

		// Save form data to the database
		$contact = Contact::create([
			'name' => $validatedData['name'],
			'email' => $validatedData['email'],
			'phone' => $validatedData['phone'] ?? null,
			'subject_id' => $validatedData['subject_id'],
			'message' => $validatedData['message'],
	  ]);

	  dd($contact);
		// Send Email Notification
		Mail::raw($contact->message, function($message) use ($contact) {
			$message->to('mklecodeur@gmail.com')
			->subject("New Contact Message: Subject ID {$contact->subject_id}")
			->from($contact->email, $contact->name);
		});

		return redirect()->back()->with('success', 'Your message has been sent successfully');
	}
}
