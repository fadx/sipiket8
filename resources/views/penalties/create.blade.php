<?php
/**
 * Created by PhpStorm.
 * User: acer
 * Date: 30/09/2016
 * Time: 10:54
 */

@section('content')
    <h1>bikin baru</h1>

    {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('id', 'ID Siswa:') !!}
            {!! Form::text('id', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nisn', 'ID Siswa:') !!}
            {!! Form::text('id', null, ['class' => 'form-control']) !!}
        </div>