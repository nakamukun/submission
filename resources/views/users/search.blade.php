    <head>
        <link rel="stylesheet" href="{{asset('css/search.css')}}">  
    </head>
    <x-app-layout>
        <x-slot name="header">
            <h1 class="header">
              条件検索
            </h1>
        </x-slot>
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900" >
                            <div class="user">
                                <h1 class="Aperture">絞り込み</h1>
                                <form method="GET" action="{{ route('users/index') }}" >
                                    <div class="text">
                                        <h1 class="college"><input type="search" style="width:400px;" placeholder="大学名" name="college" value="@if (isset($college)) {{$college}} @endif"></h1>
                                        <h1><input type="search" style="width:400px;" placeholder="学部名" name="factory" value="@if (isset($factory)) {{$factory}} @endif" ></h1>
                                        <h1><input type="search" style="width:400px;"placeholder="学科名" name="department" value="@if (isset($department)) {{$department}} @endif"></h1>
                                        <h1><input type="search" style="width:400px;"placeholder="性別" name="sex" value="@if (isset($sex)) {{$sex}} @endif"></h1>
                                        <div class="location"<><input type="search" style="width:400px;"placeholder="移住地" name="location" value="@if (isset($location)) {{$location}} @endif"></div>
                                           
                                        <div class="btn">
                                            <div class="reset"><a href="{{route('/search')}}" >リセット</div>
                                            <div class="search"><button type="submit"><span class="fa fa-magnifying-glass"></span>検索</button></div>
                                        </div>
                                        <a href="{{route("users/index")}}" class="back">戻る</a>
                                    </div>     
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
    </x-app-layout>