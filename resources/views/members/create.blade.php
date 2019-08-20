@extends('layouts.app')

@section('content')
        {!! Form::open(['action' =>['MembersController@store'], 'method' => 'POST']) !!}
        @method('POST')
        @csrf
        <div class="custom_edit_form">
            <div class="form_wrapper_wide_top">
                {{Form::label('my_checkbox', 'Choisir :', ['class' => 'custom_label'])}}
                <br>
                <label class="sec_label" for="idFemme"><input id="idFemme" type="radio" id="inlineCheckbox1" name="my_checkbox" value="Femme"> Femme</label>
                <label class="sec_label" for="idHomme"><input id="idHomme" type="radio" id="inlineCheckbox2" name="my_checkbox" value="Homme"> Homme</label>
            </div>
            <div class="leftside_form">
                
                <div class="form_wrapper">
                    {{Form::text('mem_nom', '', ['class' => 'form-control', 'placeholder' => 'Nom'])}}
                    {{Form::label('mem_nom', 'Nom :')}}
                </div>
                <div class="form_wrapper">
                    {{Form::text('mem_prenom', '',  ['class' => 'form-control', 'placeholder' => 'Prénom'])}}
                    {{Form::label('mem_prenom', 'Prénom :')}}
                </div>
                <div class="form_wrapper">
                    {!! Form::date('mem_datenaissance', '',  ['class' => 'form-control']) !!}   
                    {{Form::label('mem_datenaissance', 'Date de naissance :')}}
                </div>
                <div class="form_wrapper">
                    {{Form::text('mem_numeroportable', '',  ['class' => 'form-control', 'placeholder' => 'Numéro de portable'])}}
                    {{Form::label('mem_numeroportable', 'Numéro de portable :')}}
                </div>
                <div class="form_wrapper">
                    {{Form::text('mem_email', '',  ['class' => 'form-control', 'placeholder' => 'E-mail'])}}
                    {{Form::label('mem_email', 'E-mail :')}}
                </div>
                <div class="form_wrapper">
                    {{Form::text('mem_adresse', '',  ['class' => 'form-control', 'placeholder' => 'Adresse'])}}
                    {{Form::label('mem_adresse', 'Adresse :')}}
                </div>
            </div>
            

            <div class="rightside_form">
                <div class="form_wrapper">
                    {{Form::number('mem_npa', '',  ['class' => 'form-control', 'placeholder' => 'NPA'])}}
                    {{Form::label('mem_npa', 'NPA :')}}
                </div>
                <div class="form_wrapper">
                    {{Form::text('mem_localite', '',  ['class' => 'form-control', 'placeholder' => 'Localité'])}}
                    {{Form::label('mem_localite', 'Localité :')}}
                </div>
                <div class="form_wrapper">
                    <select class="form-control" name="mem_pays">
                        @foreach($pays as $paysNom)
                            <option value="{{ $paysNom }}">{{ $paysNom}}</option>
                        @endforeach
                    </select>
                    {{Form::label('mem_pays', 'Pays :')}}
                </div>
                <div class="form_wrapper">
                    {{Form::text('mem_numlicense', '',  ['class' => 'form-control', 'placeholder' => 'N° de Licence'])}}
                    {{Form::label('mem_numlicense', 'N° de licence :')}}
                </div>
                <div class="form_wrapper">
                    {!! Form::date('mem_entredate', Carbon\Carbon::now()->format('d.m.Y'),  ['class' => 'form-control']) !!}
                    {{Form::label('mem_entredate', 'Date d\'entrée :')}}
                </div>
                <div class="form_wrapper">
                    <select class="form-control" name="statut">
                        @foreach($statut as $stat)
                            <option value="{{ $stat }}" >{{ $stat}}</option>
                        @endforeach
                    </select>
                    {{Form::label('statut', 'Statut du membre :')}}
                </div>
                
            </div>
            

            <div class="form_wrapper_wide">
            {{ Form::button('<i class="fas fa-check"></i>&nbsp;&nbsp;Confirmer', ['class' => 'btn_ajouter_donnee', 'type' => 'submit']) }}
            </div>
        </div>

    {!! Form::close() !!}
@endsection
