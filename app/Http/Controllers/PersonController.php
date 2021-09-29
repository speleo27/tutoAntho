<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //use for pgsql
        //$persons=Person::select('*')->paginate(5);
        /**
         * mysql
         *
         */
        $persons=Person::latest()->paginate(5);
        //dd($persons);
        //return view('person.index', compact('persons'));
        return$persons;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('person.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        "name"=>"unique:people|required|min:5",
        "desc"=>"required",
        "socialTwitter"=>"starts_with:https://twitter.com",
        "socialFacebook"=>"starts_with:https://facebook.com",
        "socialLinkden"=>"starts_with:https://linkedin.com",
        "socialGit"=>"starts_with:https://github.com",
        "img"=>"mimes:jpeg,png,jpg,JPG,JPEG,PNG"
        ]);

        //dd($request->file('img'));
        $person = new Person();
        if($request->file('img')->isValid()){
            $name = Storage::disk('public')->put('profil', $request->file('img'));
            $person->img=$name;
        }
        //dd($name);
        $person->name = $request->name;
        $person->desc = $request->desc;
        $person->socialTwitter = $request->socialTwitter;
        $person->socialFacebook = $request->socialFacebook;
        $person->socialLinkden = $request->socialLinkden;
        $person->socialGit = $request->socialGit;

        $person->save();
        return redirect()->route("persons.index");
//        dd($person);
//        dd($request);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //using for pgsql
        $person =Person::where('id',$person->id)->firstOrFail();

        /**
         * using for mysql
         * $person=Person::find($person);
         */
        //dd($person);
        return view("person.show",compact("person"));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        $person=Person::find($person)->firstOrFail();
        return view("person.edit",compact("person"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $request->validate([
            "name"=>"unique:people|required|min:5",
            "desc"=>"required",
            "socialTwitter"=>"starts_with:https://twitter.com",
            "socialFacebook"=>"starts_with:https://facebook.com",
            "socialLinkden"=>"starts_with:https://linkedin.com",
            "socialGit"=>"starts_with:https://github.com",
            "img"=>"mimes:jpeg,png,jpg,JPG,JPEG,PNG"
        ]);

        $person=Person::find($person)->firstOrFail();
        $person->name = $request->name;
        $person->desc = $request->desc;
        $person->socialTwitter = $request->socialTwitter;
        $person->socialFacebook = $request->socialFacebook;
        $person->socialLinkden = $request->socialLinkden;
        $person->socialGit = $request->socialGit;
        $person->save();
        return redirect()->route("persons.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person=Person::find($person)->firstOrFail();
        $person->delete();
        return redirect()->route("persons.index");
    }
}
