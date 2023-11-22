<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    /**
     * @throws \Exception
     */
    public function index()
    {
        $products = Product::query()
            ->orderBy("created_at", "DESC")->limit(6)->get();

        return view('home', [
            "products" => $products,
        ]);
    }

    public function showContactForm()
    {
        return view("contact_form");
    }

    public function contactForm(ContactFormRequest $request)
    {
        Mail::to("patriot_x@tut.by")->send(new ContactForm($request->validated()));

        return redirect(route("contacts"));
    }
}
