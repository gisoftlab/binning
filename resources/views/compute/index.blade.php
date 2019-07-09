@extends('layout')

@section('content')
    <div class="row">
        <div class="box">
            <div class="col-lg-12">
                <hr>
                <h2 class="intro-text text-center">
                    Compute
                </h2>
                <hr>
                <p>Emojis</p>

                <div class="row">
                    {!! Form::open(['url' => 'compute', 'method' => 'post', 'role' => 'form', 'class' => 'pull-right', 'id' => 'compute-form']) !!}
                        {!! Form::control('text', 12, 'value', $errors, null, null, null, trans('front/compute.value')) !!}
                        {!! Form::select('emojis', $emojis, $emojisId, [
                                'class' => 'form-control',
                                'v-model' => 'pptSubType'
                                ]) !!}
                        {!! Form::control('text', 12, 'value2', $errors, null, null, null, trans('front/compute.value')) !!}
{{--                        {!! Form::submit('Submit', ['btn btn-info btn-submit']) !!}--}}
                        {!! Form::button('Submit',['id'=>'compute']) !!}
{{--                        <button v-on:click="compute($event)" class="btn btn-info btn-submit">Submit</button>--}}
                    {!! Form::close() !!}
                </div>

                <div class="row" id="responce">
                    @if( $value !== null)
                    <p>Compute value : {{$value}}</p>
                    @endif
                </div>

            </div>
        </div>
    </div>
@stop