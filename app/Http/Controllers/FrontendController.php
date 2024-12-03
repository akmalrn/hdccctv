<?php

namespace App\Http\Controllers;

use App\Models\admin\Slider;
use App\Models\admin\Configuration;
use App\Models\admin\Contact;
use App\Models\admin\Gallery;
use App\Models\admin\Partner;
use App\Models\admin\Superiority;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $configuration = Configuration::first();
        $contact = Contact::first();
        $sliders = Slider::all();
        $superioritys = Superiority::all();
        $gallerys = Gallery::all();
        $mitras = Partner::all();
        return view('frontend.index', compact('sliders', 'contact', 'configuration', 'superioritys', 'gallerys', 'mitras'));
    }

    public function about()
    {
        $configuration = Configuration::first();
        return view('frontend.about', compact('configuration'));
    }

    public function promo()
    {
        $configuration = Configuration::first();
        return view('frontend.promotion', compact('configuration'));
    }

    public function services()
    {
        $configuration = Configuration::first();
        return view('frontend.unit-type', compact('configuration'));
    }

    public function DetailService($category_id)
    {
        $configuration = Configuration::first();
        return view('frontend.unit-type-detail', compact('configuration'));
    }

    public function blog()
    {
        $configuration = Configuration::first();
        return view('frontend.blog', compact('configuration'));
    }

    public function search(Request $request)
    {
        $configuration = Configuration::first();
        return view('frontend.blog', compact('configuration'));
    }

    public function detailblog($id)
    {
        $configuration = Configuration::first();
        return view('frontend.blog-details', compact('configuration'));
    }

    public function notFound()
    {
        $configuration = Configuration::first();
        return view('frontend.not-found', compact('configuration'));
    }

    public function contact()
    {
        $configuration = Configuration::first();
        return view('frontend.contact', compact('configuration'));
    }
}
