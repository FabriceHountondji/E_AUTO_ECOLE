<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image as Image;

use App\Mail\ConfirmationMail;

use Carbon\Carbon;
use Illuminate\Support\Str;

use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Liste des candidats';
        $candidates = User::orderBy('name')->whereRoleId(3)->get();
        return view('dashboard/candidate/index', compact('title','candidates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Nouveau Candidat';
        $roles = Role::where('name', 'candidat')->get();
        return view('dashboard/candidate/create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $redirectTo)
    {
        // dd($request->role);
        // Valider les infos;
        $data = $request->validate([

            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users|digits:8',
            'address' => 'required',
            'birthday' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,svg,png,gif|max:4000'

        ]);

        if($request->hasfile('photo')) {

            $imageUpload = $request->file('photo');
            $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            $imagePath = public_path('storage/assets/img');
            $imageResize = Image::make($imageUpload->getRealPath());
            $imageResize->resize(70, 70, function($constraint){

                $constraint->aspectRatio();
            }

            )->save($imagePath.'/'.$imageName);

            $imagePath = public_path('storage/assets/img');
            $imageUpload->move($imagePath, $imageName);

            $user = User::create([

                'name' => $request->name,
                'email' => $request->email,
                'address' => $request->address,
                'sex' => $request->sex,
                'birthday' => $request->birthday,
                'role_id' => $request->role,
                'phone' => $request->phone,
                'avatar' => 'storage/assets/img/'. $imageName,
                'password' => bcrypt(Str::random(12)),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);


            //ENVOI DE MAIL APRES CREATION USER

            Mail::to('test@test.com')->send(new ConfirmationMail($data));


            // FIN ENVOI DE MAIL CREATION USER

            return redirect()->route(redirectTo($redirectTo))->with('success', 'Le '. $user->role->role . 'a été ajouté avec succés');
        }
        else{

            return back()->with("require", "l'image est obligatoire pour cette action, vueillez la télécharger");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $title = 'Details '.$user->name;
        return view('dashboard/candidate/show', compact('title', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required',
            'phone' => 'required|digits:8',
            'address' => 'required',
            'birthday' => 'required',
            // 'photo' => 'required|image|mimes:jpg,jpeg,svg,png,gif|max:6000',

        ]);

        // if($request->hasfile('photo')) {

            // $imageUpload = $request->file('photo');
            // $imageName = time() .'.'. $imageUpload->getClientOriginalExtension();
            // $imagePath = public_path('storage/assets/img');
            // $imageResize = Image::make($imageUpload->getRealPath());
            // $imageResize->resize(70, 70, function($constraint){

            //     $constraint->aspectRatio();
            // }

            // )->save($imagePath.'/'.$imageName);

            // $imagePath = public_path('storage/assets/img/');
            // $imageUpload->move($imagePath, $imageName);

            $user->name = $request->name;
            $user->email = $request->email;
            $user->address = $request->address;
            $user->birthday = $request->birthday;
            $user->sex = $request->sex;
            $user->phone = $request->phone;
            // $user->avatar = $request->photo;

            $user->update();

            if($user->id==2){
                return redirect()->route('users.index')->with('success', 'Le moniteur '. $user->name . 'a été modifié avec succès');
            }elseif($user->id==3){
                return redirect()->route('candidats.index')->with('success', 'Le candidat '. $user->name . 'a été modifié avec succès');
            }


        // }
        // else{

        //     return back()->with("require", "l'image est obligatoire pour cette action, vueillez la télécharger");
        // }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
