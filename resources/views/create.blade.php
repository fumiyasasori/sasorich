@extends('layouts.app')

@section('content')
    <div class="alert alert-info" role="alert"><h1>CREATE A NEW LUNCH INVITATION</h1></div>
    
    <div class="col-xs-4">
        {!! Form::model($events, ['route' => 'events.index']) !!}<br>

        <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('month', 'Date:') !!}
        {!! Form::date('month', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('timefrom', 'From:') !!}
        {!! Form::time('timefrom', '00:00', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        {!! Form::label('timeto', 'To:') !!}
        {!! Form::time('timeto', '00:00', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
        <br>
        <label>Place:</label>
        <br>
        <input type="radio" name="place" value="9F_cafeteria">9F Cafeteria
        <br><input type="radio" name="place" value="22F_cafeteria">22F Cafeteria
        <br><input type="radio" name="place" value="Outside">Outside
        </div>
        <div class="form-group">
        {!! Form::label('theme', 'Theme:') !!}
        {!! Form::text('theme', null, ['class' => 'form-control']) !!}
        </div>
        <div class="row">
            <div class="col-sm-offset-0 col-sm-10">
                {!! Form::label('details', 'Details:', null, ['class' => 'form-control']) !!}
                          <textarea class="form-control  input-sm" rows="5" id="comment" placeholder="ランチの詳細を記入してください"></textarea>
            </div>
        </div>
        <br>
        <div class="form-group">
                {!! Form::label('maxpeople', 'Max People:') !!}
                {!! Form::text('maxpeople', '5 people', ['class' => 'form-control']) !!}
        </div>
         <br>
        <div class="form-group">
           
            {!! Form::submit('CREATE EVENT', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
        
        <div> 
            <br>
            {!! link_to_route('events.index', 'TOPへ戻る', null, ['class' => 'btn btn-primary']) !!}
        </div>
 
     </div>
@endsection