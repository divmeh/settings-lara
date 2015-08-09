@section('title','Settings Page')
<h2>Enter Settings for your app</h2>
{!! Form::open(['url'=>'settings']) !!}
    {!! Form::text('name')  !!}<br/>
    {!! Form::text('email') !!}

{!! Form::submit('Save') !!}