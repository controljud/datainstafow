@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b class="fleft">{{ __('profile.profiles_new') }}</b>
                    <a href="javascript:history.back()" class="btn btn-sm btn-secondary fright">
                        <i class="fa fa-arrow-circle-left"></i>&nbsp;
                        {{ __('default.back')}}
                    </a>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-2">
                            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/profile.png')}}" class="img-fluid" />
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="profile">{{ __('default.type')}}</label>
                                        <select name="idType" id="idType" class="form-control">
                                            <option>{{ __('default.select')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                        <label for="profile">{{ __('profile.profile')}}</label>
                                        <input type="text" class="form-control" id="profile" name="profile" />
                                    </div>
                                    <div class="col-md-3" style="padding-top: 35px">
                                        <a href="javascript:void(0)" class="btn btn-sm btn-info">
                                            <i class="fa fa-search"></i>&nbsp;
                                            Buscar
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="profile">{{ __('default.name')}}</label>
                                        <input type="text" class="form-control" id="name" name="name" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="profile">{{ __('profile.followers')}}</label>
                                        <input type="text" class="form-control disabled" disabled />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;
                                    {{ __('default.save')}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </diV>
        </div>
    </div>
</div>
@endsection
