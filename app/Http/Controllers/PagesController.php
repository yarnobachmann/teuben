<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Mail;


class PagesController extends Controller {

    public function getIndex()
    {
        return view('pages.welcome');
    }

    public function team()
    {
        return view('pages.onsteam');
    }

     public function getContact()
    {
        return view('pages.contact');
    }

    public function postContact(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'name' => 'required',
            'subject' => 'required',
            'berricht' => 'min:10']);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
            'berricht' => $request->berricht
            );

        Mail::send('emails.contact', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('yarnobachmann@gmail.com');
      $message->subject($data['subject']);
        });

        return redirect('contact');
      }
    public function getFinanciering()
    {
       return view('pages.financiering');
    }
     public function getOccasions()
    {
        return view('pages.occasions');
    }
      public function getBedrijfswagens()
     {
         return view('pages.bedrijfswagens');
     }
     public function album()
  {
      $galleries = Gallery::all();

       return view('pages.gallery')->with('galleries', $galleries);
  }
  public function photo($id)
  {

    $gallery = Gallery::findOrFail($id);

    return view('pages.gallery-photos')->with([
        'gallery' => $gallery
      ]);
  }

  public function login()
      {
             if(Auth::check()) {
               return redirect('/');
             }
             return view('users.login');

      }
}
?>
