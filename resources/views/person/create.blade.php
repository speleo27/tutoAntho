@extends('layout.app')

@section("content")

    <h1> Créer une personne </h1>
    <form  method="post" enctype="multipart/form-data">
        @csrf

        <section class="text-gray-600 body-font relative">
                <div class="lg:w-1/2 md:w-2/3 mx-auto">
                    <div class="flex flex-wrap -m-2">
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-sm text-gray-600">Nom Prénom</label>
                                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <small class="text-red-600">{{$errors->first('name')?$errors->first('name'):''}}</small>
                            </div>
                        </div>

                        <div class="p-2 w-full">
                            <div class="relative">
                                <label for="desc" class="leading-7 text-sm text-gray-600">Description</label>
                                <textarea id="desc" name="desc" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                    <small class="text-red-600">{{$errors->first('desc')?$errors->first('desc'):''}}</small>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="twitter" class="leading-7 text-sm text-gray-600">Twitter</label>
                                <input value="https://twitter.com" type="url" id="twitter" name="socialTwitter" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <small class="text-red-600">{{$errors->first('socialTwitter')?$errors->first('socialTwitter'):''}}</small>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="facebook" class="leading-7 text-sm text-gray-600">Facebook</label>
                                <input  value="https://facebook.com"type="url" id="facebook" name="socialFacebook" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <small class="text-red-600">{{$errors->first('socialFacebook')??$errors->first('socialFacebook')}}</small>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="linkedin" class="leading-7 text-sm text-gray-600">Linkedin</label>
                                <input  value="https://linkedin.com" type="url" id="linkedin" name="socialLinkden" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <small class="text-red-600">{{$errors->first('socialLinkden')??$errors->first('socialLinkden')}}</small>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="git" class="leading-7 text-sm text-gray-600">GitHub</label>
                                <input  value="https://github.com/"type="url" id="git" name="socialGit" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <small class="text-red-600">{{$errors->first('socialGit')??$errors->first('socialGit')}}</small>
                            </div>
                        </div>
                        <div class="p-2 w-1/2">
                            <div class="relative">
                                <label for="img" class="leading-7 text-sm text-gray-600">Photo de profil</label>
                                <input type="file" id="img" name="img" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <small class="text-red-600">{{$errors->first('img')??$errors->first('img')}}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class=" flex justify-center py-3"><button type="submit" class="bg-blue-700 py-2 px-3 rounded-xl text-white hover:bg-green-500" >Envoyer</button></div>
    </form>
    <div class="flex justify-center py-3 px-2">
    @if ($errors->any())
        <p class="text-red-800 font-semibold" >Echec de l'opération </p>
    @endif
    </div>
@endsection

