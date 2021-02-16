@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <b class="fleft">
                        <i class="fa fa-list fa-2x"></i>&nbsp;
                        {{ __('list.lists') }}
                    </b>
                    <a href="{{asset('profiles/create')}}" class="btn btn-sm btn-success fright">
                        <i class="fa fa-plus-circle"></i>&nbsp;
                        {{ __('default.new')}}
                    </a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
