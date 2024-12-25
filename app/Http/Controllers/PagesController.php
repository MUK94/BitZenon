<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Category;
use App\Models\Service;
use App\Models\HeroSection;
use App\Models\AboutSection;
use App\Models\Testimonial;
use App\Models\Topic;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\IpUtils;

class PagesController extends Controller
{
    /**
     * Return all static pages:
     *  about,contact page
     */
    public function home(): View
    {
        $title = 'Home';
		  $heroSection = HeroSection::all();
		  $aboutSection = AboutSection::all();
        $latestArticles = Article::orderBy('created_at', 'desc')->take(5)->get();
        $mostPopular = Article::orderBy('view_count', 'desc')->take(3)->get();
        $categories = Category::all();
        $topics = Topic::all();
		  $testimonials = Testimonial::all();
        return view('home', compact('title', 'heroSection', 'aboutSection', 'latestArticles', 'mostPopular', 'categories', 'testimonials'));
    }

     public function about(): View
     {
         $title = 'About';
			$aboutSection = AboutSection::all();
         $articles = Article::all();
         $categories = Category::all();
         $topics = Topic::all();
			$services = Service::all();
         return view('pages.about', compact('title','articles', 'aboutSection', 'categories', 'topics', 'services'))->with(['title' => $title, 'articles' => $articles, 'categories' => $categories]);
     }

	  public function gallery(): View
     {
         $title = 'Gallery';
			$aboutSection = AboutSection::all();
         $articles = Article::all();
         $categories = Category::all();
         $topics = Topic::all();
			$services = Service::all();
         return view('pages.gallery', compact('title','articles', 'aboutSection', 'categories', 'topics', 'services'))->with(['title' => $title, 'articles' => $articles, 'categories' => $categories]);
     }

    public function services(): View
    {
        $title = 'Services';
        $articles = Article::all();
        $categories = Category::all();
        $topics = Topic::all();
		  $testimonials =Testimonial::all();
        return view('pages.services', compact('title', 'testimonials', 'articles', 'categories', 'topics'));
    }

    public function contact(): View
    {
        $title = 'Contact';
        $articles = Article::all();
        $categories = Category::all();
        $topics = Topic::all();
        return view('pages.contact', compact('title', 'articles', 'categories', 'topics'));
    }

	 public function submit(Request $request)
	 {
		  // Validate form input
		  $validatedData = $request->validate([
				'name' => 'required|string|max:50',
				'email' => 'required|email|dns',
				'phone' => 'nullable|regex:/^\+?[0-9\s\-\(\)]*$/|max:20',
				'subject_id' => 'required',
				'message' => 'required|string',
				// 'g-recaptcha-response' => 'required',
		  ]);

			// Get the reCAPTCHA response from the form
			// $recaptcha = $request->input('g-recaptcha-response');

			// Validate reCAPTCHA response
			// if (is_null($recaptcha)) {
			// 		// Flash error if reCAPTCHA is not provided
			// 		session()->flash('message', "Please complete the reCAPTCHA to proceed.");
			// 		return redirect()->back();
			// }

		  	// $url = "https://www.google.com/recaptcha/api/siteverify";
			// $params = [
			// 	'secret' => config('services.recaptcha.secret'),
			// 	'response' => $recaptcha,
			// 	'remoteip' => IpUtils::anonymize($request->ip())
			// ];

			// $response = Http::post($url, $params);
			// $result = json_decode($response);

			// if ($response->successful() && $result->success == true) {
			// 	session()->flash('message', "Form submitted successfully.");
			// 	return redirect()->back();
			// } else {
			// 	session()->flash('message', "Please complete the reCAPTCHA to proceed.");
			// 	return redirect()->back();
			// }

		  // Save the form data to the database
		  $contact = Contact::create([
				'name' => $validatedData['name'],
				'email' => $validatedData['email'],
				'phone' => $validatedData['phone'] ?? null,
				'subject_id' => $validatedData['subject_id'],
				'message' => $validatedData['message'],
		  ]);

		  // Send Email Notification
		  Mail::raw($contact->message, function ($message) use ($contact) {
				$message->to('mklecodeur@gmail.com')
					 ->subject("New Contact Message: Subject ID {$contact->subject_id}")
					 ->from($contact->email, $contact->name);
		  });

		  // Redirect with success message
		  return redirect()->back()->with('success', 'Your message has been sent successfully.');
	 }


}
