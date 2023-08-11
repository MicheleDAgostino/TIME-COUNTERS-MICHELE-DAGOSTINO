<?php

namespace App\Http\Controllers;

use App\Mail\ReviewMail;
use Illuminate\Http\Request;
use App\Http\Requests\MailRequest;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{

    public $services = [
        [
            'title' => 'E-Commerce',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
            'img' => 'storage/media/cart.png',
        ],
        [
            'title' => 'Responsive Design',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
            'img' => 'storage/media/pc.png',
        ],
        [
            'title' => 'Web Security',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.',
            'img' => 'storage/media/bag.png',
        ],
    ];

    public $projects = [
        [
            'title' => 'Threads',
            'task' => 'Illustration',
            'img' => 'storage/media/1.jpg'
        ],
        [
            'title' => 'Explore',
            'task' => 'Graphic Design',
            'img' => 'storage/media/2.jpg'
        ],
        [
            'title' => 'Finish',
            'task' => 'Identity',
            'img' => 'storage/media/3.jpg'
        ],
        [
            'title' => 'Lines',
            'task' => 'Branding',
            'img' => 'storage/media/4.jpg'
        ],
        [
            'title' => 'Southwest',
            'task' => 'Website Design',
            'img' => 'storage/media/5.jpg'
        ],
        [
            'title' => 'Window',
            'task' => 'Photography',
            'img' => 'storage/media/6.jpg'
        ]
    ];

    public $images = ['storage/media/facebook.png','storage/media/instagram.png','storage/media/linkedin.png'];


    public function welcome(){

        return view('welcome', ['services'=>$this->services, 'projects'=>$this->projects, 'images'=>$this->images]);
    }

    public function leaveReview(MailRequest $request){

        $email = $request->input('email');
        $name = $request->input('name');
        $comment = $request->input('comment');

        Mail::to($email)->send(new ReviewMail($email,$name, $comment));

        return redirect(route('homepage'));

    }
}
