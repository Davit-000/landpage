<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Service;
use App\Portfolio;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function execute(Request $request)
    {
        if($request->isMethod('post')) {
            $messages = [
                'required' => "Filed :attribute Required",
                'email' => "Filed :attribute Wrong E-mail"
            ];

            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'message' => 'required'
            ], $messages);

            $data = $request->all();
            // Send mail
            $result = Mail::send('site.email',['data' => $data], function($message) use ($data) {
                $mail_admin = env('MAIL_ADMIN');
                $message->from($data['email'], $data['name']);
                $message->to($mail_admin, 'Mr. Admin')->subject('Question');

            });
            if($result) {
                return redirect()->route('home')->with('status', 'Email is send');
            }
        }

        $pages = Page::all();
        $portfolios = Portfolio::get(array('name', 'filter', 'images'));
        $services = Service::where('id', '<', 20)->get();

        // Start Menu
        $menu = array();
        foreach($pages as $page) {
            $item = array('title' => $page->name, 'alias' => $page->alias);
            array_push($menu, $item);
        }
        $item = array('title' => 'Services', 'alias' => 'service');
        array_push($menu, $item);

        $item = array('title' => 'Contact Us', 'alias' => 'contact');
        array_push($menu, $item);
        // end of menu

        return view('site.index', array(
            'menu' => $menu,
            'pages' => $pages,
            'services' => $services,
        ));
    }
}
