@extends('layout.app')

@section("content")
    <h1>liste des personnes</h1>
    <div class="flex justify-start">
        <a href="{{route('persons.create')}}" class="text-white bg-red-600 hover:bg-red-800 rounded-xl px-3 py-2 font-semibold ">Créer une personne</a>
    </div>

        @foreach($persons as $person)
            <a href="{{route("persons.show",$person)}}"><x-callout title="{{$person->name}}"
                       desc="{{$person->desc}}"
                       socialTwitter="{{$person->socialTwitter}}"
                       socialFacebook="{{$person->socialFacebook}}"
                       socialLinkden="{{$person->socialLinkden}}"
                       socialGit="{{$person->socialGit}}"
                       img="{{$person->img}}"
                /></a>

        @endforeach
    {{$persons-> links()}}
@endsection
