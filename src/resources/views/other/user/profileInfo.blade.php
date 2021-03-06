@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row profile">
        <div class="col-sm-4 col-md-3">
                @include('other.user.sidebar')
        </div>
        <div class="col-sm-8 col-md-9">
            <div class="panel panel-default">
                <div class="profile__detail">
                    <div class="row">
                    <div class="col-md-6 col-sm-offset-1">
                    <h4>Information</h4>
                    <div class="table-responsive">
                    <table class="table table-responsive table-user-information">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-hashtag text-primary"></span>
                                        {{ trans('form.username') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->username ? $user->username: '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-hashtag text-primary"></span>
                                        {{ trans('form.firstname') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->firstname ? $user->firstname: '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-hashtag text-primary"></span>
                                        {{ trans('form.lastname') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->lastname ? $user->lastname: '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-envelope text-primary"></span>
                                        {{ trans('form.email') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->email ? $user->email: '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-birthday-cake text-primary"></span>
                                        {{ trans('form.dob') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->dob ? $user->dob->toFormattedDateString() : '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-hashtag text-primary"></span>
                                        Age
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->age ? $user->age->format('%y Year, %m Months and %d Days') : '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-phone text-primary"></span>
                                        {{ trans('form.phone') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->phone_number ? $user->phone_number: '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-hashtag text-primary"></span>
                                        {{ trans('form.sex') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->sex ? $user->sex: '---' }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-hashtag text-primary"></span>
                                        {{ trans('form.handicap') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->handicap ? $user->handicap: '---' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="fa fa-language text-primary"></span>
                                        {{ trans('form.language') }}
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $user->lang ? $user->lang: '---' }}
                                </td>
                            </tr>
                           
                            
                        </tbody>
                    </table>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
