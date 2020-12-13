<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function show(Request $request, $author)
    {
        $feed = $this->getFeed($author);
        $xml = $feed->render($request->has('cache'));


        return response($xml, 200)
                  ->header('Content-Type', 'text/xml');
    }


    private function getFeed($author)
    {
        $author = camel_case($author);
        $class_name = ucfirst($author);
        $full_class_name = "App\\Authors\\$class_name";

        $feed = app($full_class_name);
        return $feed;
    }
}
