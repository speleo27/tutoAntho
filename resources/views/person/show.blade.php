
@extends('layout.app')

@section("content")
    <h1>Info de {{$person->name}}</h1>
    <div class="flex justify-start">
        <a href="{{route('persons.index')}}" class="bg-green-600 text-white hover:bg-green-800 hover:text-red-800 rounded-xl px-3 py-2">Retour</a>
    </div>
    <x-callout title="{{$person->name}}"
               desc="{{$person->desc}}"
               socialTwitter="{{$person->socialTwitter}}"
               socialFacebook="{{$person->socialFacebook}}"
               socialLinkden="{{$person->socialLinkden}}"
               socialGit="{{$person->socialGit}}"
               img="{{$person->img}}"
    />
    <div class="flex justify-between">
        <a href="{{route('persons.edit', $person->id)}}" class="text-white bg-red-600 hover:bg-red-800 rounded-xl px-3 py-2 font-semibold ">Editer la personne</a>
        <form action="{{route("persons.destroy",$person->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-600 py-2 px-3 rounded-xl text-white hover:bg-red-800" >Supprimer</button>
        </form>
    </div>
@endsection
