@extends('default.layaut')

 @section('title', $title)

@section('sous_title')
    {{$title}}
@endsection 

@section('contenue')
<div class="row justify-content-center flex-wrap flex-md-nowrap align-items-center">
    <form action="{{url('/mail/send')}}" method="post">
        @csrf
        <div class="row form-group">
            <div class="col-md-12">
                <div class="label-control">
                    @if ($errors->has('nom'))
                        <span style="color: #d02525" class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                    @endif
                    <label for="validatedCustomFile" class="text_color">Nom : <span style="color: #d02525">*</span></label>
                    <input type="text" name="nom" id="validatedCustomFile" class="form-control form-control-dark {{ $errors->has('nom') ? ' is-invalid': ' ' }}">
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <div class="label-control">
                    @if ($errors->has('email'))
                        <span style="color: #d02525" class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <label for="validatedCustomFile" class="text_color">E-mail : <span style="color: #d02525">*</span></label>
                    <input type="email" name="email" id="validatedCustomFile" class="form-control form-control-dark {{ $errors->has('email') ? ' is-invalid': ' ' }}">
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <div class="label-control">
                    @if ($errors->has('message'))
                        <span style="color: #d02525" class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                    <label for="validatedCustomFile" class="text_color">Message : <span style="color: #d02525">*</span></label><br>
                    <textarea name="message" id="validatedCustomFile" cols="85" rows="9" class="form-control form-control-dark {{ $errors->has('message') ? ' is-invalid': ' ' }}"></textarea>
                </div>
            </div>
        </div>
        <div class="row form-group">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success">envoyer</button>&nbsp&nbsp&nbsp
                <button type="submit" class="btn btn-danger">annuler</button>
            </div>
        </div>
    </form>
</div>
@endsection
 

