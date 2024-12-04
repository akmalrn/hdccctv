<?php

namespace App\Http\Controllers;

use App\Models\admin\AboutUs;
use App\Models\admin\Blog;
use App\Models\admin\Slider;
use App\Models\admin\Configuration;
use App\Models\admin\Contact;
use App\Models\admin\Gallery;
use App\Models\admin\Message;
use App\Models\admin\OurTeam;
use App\Models\admin\Partner;
use App\Models\admin\Service;
use App\Models\admin\Superiority;
use App\Models\admin\TestimonialClient;
use App\Models\admin\WhyUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $about = AboutUs::first();
        $sliders = Slider::all();
        $superioritys = Superiority::all();
        $mitras = Partner::all();
        $gallerys = Gallery::all();
        $testimonials = TestimonialClient::all();
        $services = Service::all();
        return view('frontend.index', compact('configuration', 'contact', 'about', 'sliders', 'superioritys', 'mitras', 'gallerys', 'testimonials', 'services'));
    }
}
