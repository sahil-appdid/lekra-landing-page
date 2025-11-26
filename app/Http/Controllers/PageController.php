<?php
namespace App\Http\Controllers;

class PageController extends Controller
{
    public function privacyPolicy()
    {
        $url = "https://admin.lekrainternational.com/privacy-policy";

        $content = file_get_contents($url);

        return view('privacypolicy', compact('content'));
    }

    public function termsAndCondition()
    {
        $url = "https://admin.lekrainternational.com/terms-and-condition";

        $content = file_get_contents($url);

        return view('termsandcondition', compact('content'));
    }
}
