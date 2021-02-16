@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b class="fleft">{{ __('profile.profiles') }}</b>
                    <a href="{{asset('profiles/create')}}" class="btn btn-sm btn-success fright">
                        <i class="fa fa-plus-circle"></i>&nbsp;
                        {{ __('default.new')}}
                    </a>
                </div>
                <div class="card-body">
                    {{var_dump($user)}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($profiles as $profile)
                            <tr>
                                <td>{{$profile->photo}}</td>
                                <td>{{$profile->name}}</td>
                                <td>{{$profile->profile}}</td>
                                <td>{{$profile->followers}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
