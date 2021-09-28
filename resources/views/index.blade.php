@extends('layout.app')

@section("content")
    <div class="py-3 flex justify-center">
        <h1 class="text-2xl text-red-600">Page Welcome</h1>
    </div>

        <x-callout title="{{$person['name']}}"
                desc="{{$person['description']}}"
                socialTwitter="{{$person['socialTwitter']}}"
                socialFacebook="{{$person['socialFacebook']}}"
                socialLinkden="{{$person['socialLinkden']}}" socialGit="{{$person['socialGit']}}" />

@endsection
