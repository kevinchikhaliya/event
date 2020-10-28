<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Participate;
use App\Http\Controllers\MailController;
use Sentinel;
use Reminder;
use Mail;
use Session;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Facade;

class userController extends Controller
{
    public function register(Request $req){
       
        $user=new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=md5($req->input('password'));
        $user->save();
        return redirect('index');
    }

    public function login(Request $req){

        $user = User::where(['email'=> $req->input('email'),'password'=>md5($req->input('password'))])->first();
        if($user!=null){
            session()->put('useremail',$user->email);
            session()->put('user',$user->name);
            session()->put('userid',$user->id);
            FacadesDB::update('update users set isLoggedin = ? where email = ?',[1,$req->input('email')]);
            return redirect('index');
         }
         else {
            return redirect('login');
          }
    }
    public function dashboard(){
        if(session()->has('user')){
            $data= Event::orderBy('created_at','DESC')->take(4)->get();
            // $data = Event::all();
            return view('theme/index',['data'=>$data]);
            // return view('theme/index');
        }else{
            return redirect('login');
        }
    }
    public function login_view()
    {
            return view('login');
    }
    public function register1()
    {
            return view('register');
    }
    
    public function addEvent(Request $req){
            $event=new Event;
            $event->user_id=$req->user_id;
            $event->EventName=$req->EventName;
            $event->Eventplace=$req->Eventplace;
            $event->EventCordinator=$req->EventCordinator;
            $event->EventCordinatorEmail=$req->email;
            $event->EventDescription=$req->w3review;
            $event->Eventdate=$req->date;
            $event->EventTime=$req->time;
            // file upload
            $filenameWithExt = $req->file('poster')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $req->file('poster')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $req->file('poster')->storeAs('public/event_posters', $fileNameToStore);
            // file upload  
            $event->EventPoster=$fileNameToStore;
            $event->EventType=$req->eventType;
            $event->save();
            return redirect('events');
    }
    public function updateEvent(Request $request){
        $event=Event::where('id',request()->input('id'))->first();
        if($request->hasFile('poster')){
            $filenameWithExt = $request->file('poster')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('poster')->getClientOriginalExtension();
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            $path = $request->file('poster')->storeAs('public/event_posters', $fileNameToStore);
            
            $event=Event::where('id',request()->input('id'))->update([
                'EventCordinator' => $request->EventCordinator,
                'EventName' => $request->EventName,
                'Eventplace' => $request->Eventplace,
                'EventCordinatorEmail' => $request->EventCordinatorEmail,
                'EventDescription' => $request->EventDescription,
                'Eventdate' => $request->Eventdate,
                'EventTime' => $request->EventTime,
                'EventPoster' => $fileNameToStore,
                'EventType' => $request->eventType,
            ]);
        }else{
            $event=Event::where('id',request()->input('id'))->update([
                'EventCordinator' => $request->EventCordinator,
                'EventName' => $request->EventName,
                'Eventplace' => $request->Eventplace,
                'EventCordinatorEmail' => $request->EventCordinatorEmail,
                'EventDescription' => $request->EventDescription,
                'Eventdate' => $request->Eventdate,
                'EventTime' => $request->EventTime,
                'EventPoster' => $event->EventPoster,
                'EventType' => $request->eventType,
            ]);
        }  
           
         return redirect('events');
    }
    public function show(Request $req){
        if(session()->has('user'))
        {
            $data = Event::all();
            return view('theme/events',['data'=>$data]);
        }
        else
        {
            return redirect('login');
        }
    }

 
    public function myevent(Request $req){
        if(session()->has('user'))
        {
            $data = FacadesDB::table('users')
            ->join('event', 'users.id', '=', 'event.user_id')->where('event.user_id','=',session()->get('userid'))->get();
            return view('event-list',['data'=>$data]);
        }
        else
        {
            return redirect('login');
        }
    }

    public function singleEvent($id){
        $data=Event::where('id',$id)->first();
        return view('theme/single',['data'=>$data]);
    }

    public function delete($id){
        Event::where('id',$id)->first()->delete();
        return redirect('events');
    }

    public function takePart(Request $req){
        //put session here
        $alreadyPart = Participate::where(['user' => session()->get('userid'), 'event'=>$req->Eventid])->first();

        if(!$alreadyPart != null){
            $part=new Participate();
            $part->user=session()->get('userid');
            $part->event=$req->Eventid;
            $part->save();
            $userdetails=User::where('id',session()->get('userid'))->first();
            $eventdetails=Event::where('id',$req->Eventid)->first();
            MailController::ParticipateEmail($userdetails->name, $eventdetails->EventName,$eventdetails->EventDescription,$eventdetails->EventType,$eventdetails->Eventplace,$eventdetails->EventCordinatorEmail,$eventdetails->Eventdate,$eventdetails->EventTime,$userdetails->email);   
            // echo "Participate Success";die;
            return redirect('events')->with(['success' => 'You are participated']);
            //return view with messege;
        }
        else{
            return redirect('events')->with(['success1' => 'You are already participated']);;
            // echo "Already Participate";die;
            //return view with messege;
        }
    }

    public function logout(){
        if(session()->has('user')){
            
            FacadesDB::update('update users set isLoggedin = ? where email = ?',[0, session()->get('useremail')]);
            session()->forget('user');
            return redirect('login');
        }
    }

}