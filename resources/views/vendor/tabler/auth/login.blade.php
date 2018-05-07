@extends('tabler::layouts.auth')
@section('content')
    {!! Form::open(['url' => url(config('tabler.url.login', 'login')), 'method' => 'POST', 'class' => 'card']) !!}
    <div class="card-body p-6">
        <div class="card-title">@lang('tabler::login.title')</div>
        <div class="form-group">
            {!! Form::label('email', trans('tabler::login.email'), ['class' => 'form-label']) !!}
            {!! Form::email('email', old('email'), ['placeholder' => trans('tabler::login.email-placeholder'), 'class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            <label class="form-label" for="password">
                @lang('tabler::login.password')
                <a href="{!! config('tabler.urls.forgot') !!}"
                   class="float-right small">@lang('tabler::login.forgot')</a>
            </label>
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => trans('tabler::login.password-placeholder')]) !!}
        </div>
        <div class="form-group">
            <label class="custom-control custom-checkbox">
                {!! Form::checkbox('remember', null) !!}
                <span class="custom-control-label">@lang('tabler::login.remeber-me')</span>
            </label>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block">@lang('tabler::login.signin')</button>
        </div>
    </div>
    {!! Form::close() !!}
    <div class="text-center text-muted">
        @lang('tabler::login.no-account') <a
                href="{!! config('tabler.url.register') !!}">@lang('tabler::login.register')</a>
    </div>
@stop