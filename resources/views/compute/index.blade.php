@extends('base')

@section('main')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">{{ trans('front/compute.title') }}</h2>
                <hr>
                <p>{{ trans('front/compute.text') }}</p>

                {!! Form::open(['url' => 'compute', 'method' => 'post', 'role' => 'form']) !!}

                <div class="row">
                    {!! Form::text('value', null, ['class' => 'form-control']) !!}
                    {!! Form::select('emojis', $emojis, $emojisId, ['class' => 'form-control']) !!}
                    {!! Form::text('value2', null, ['class' => 'form-control']) !!}
                    {!! Form::submit(trans('front/form.send'), ['col-lg-12']) !!}
                </div>

                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop