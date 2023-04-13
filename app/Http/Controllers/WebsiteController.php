<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Box;
use App\Models\Client;
use App\Models\Contact;
use App\Models\ContentCategory;
use App\Models\ContentPage;
use App\Models\Feature;
use App\Models\Hero;
use App\Models\Message;
use App\Models\Nesletter;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $hero = Hero::first();
        $about = About::first();
        $boxes = Box::limit(3)->orderBy('id', 'desc')->get();
        $clients = Client::limit(6)->orderBy('id', 'desc')->get();
        $features = Feature::orderBy('id', 'desc')->get();
        $services = Service::orderBy('id', 'desc')->get();
        $testimonials = Testimonial::orderBy('id', 'desc')->get();
        $teams = Team::orderBy('id', 'desc')->get();
        $contact = Contact::first();
        $categories = ContentCategory::all();
        $infos = ContentPage::with('categories')->get();

        return view('website.pages.home')->with([
            'hero' => $hero,
            'about' => $about,
            'boxes' => $boxes,
            'clients' => $clients,
            'features' => $features,
            'services' => $services,
            'testimonials' => $testimonials,
            'teams' => $teams,
            'contact' => $contact,
            'categories' => $categories,
            'infos' => $infos,
        ]);
    }

    public function contact(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'email:rfc,dns|required',
            'subject' => 'required',
            'message' => 'required',
        ], [], [
                'name' => 'Nome',
                'email' => 'Email',
                'subject' => 'Assunto',
                'message' => 'Mensagem',
            ]);

        $message = new Message;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();

        return $message;

    }

    public function newsletter(Request $request)
    {
        $request->validate([
            'email' => 'email:rfc,dns|required'
        ], [], [
                'email' => 'Email'
            ]);

        $newsletter = new Nesletter;
        $newsletter->email = $request->email;
        $newsletter->save();

        return [];
    }

    public function info(Request $request)
    {

        $services = Service::orderBy('id', 'desc')->get();

        $info = ContentPage::with([
            'categories'
        ])->where('id', $request->id)->first();

        return view('website.pages.info')->with([
            'services' => $services,
            'info' => $info
        ]);
    }
}