@extends('settings.master')
@section('title','Mehar Settings Page')
<h2>List all the settings</h2>
@section('header')
    @parent
<p>This is appended to the master sidebar.</p>
@stop

@section('container')
    @foreach($settings as $setting)

        <li><b>Key</b> :    {{ $setting->key }}
        <b>Value</b>:   {{ $setting->value}}</li>
    @endforeach
{!! HTML::link('settings/create','Create new')!!}
@stop
@section('footer')
@parent
    This is child footer
@stop