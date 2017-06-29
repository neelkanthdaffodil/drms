<!-- Content Header (Page header) -->
@extends('layouts.app')
@section('title','Dashboard')
@section('content')
<section class="content-header">
    <h1>
        Create Resume
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-12">
            {!! Form::open(['route' => 'resume.store','role'=>'form','class'=>'create_resume_form']) !!}
            <div class="form-group">
                {!! Form::label('full_name', 'Full name') !!}
                {!! Form::text('full_name','',['class'=>'form-control','placeholder'=>'Enter your full name']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('designation', 'Designation') !!}
                {!! Form::text('designation','',['class'=>'form-control','placeholder'=>'Enter your designation here']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('profile_summary', 'Profile summary') !!}
                {!! Form::textarea('profile_summary','',['class'=>'form-control']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</section>
@endsection