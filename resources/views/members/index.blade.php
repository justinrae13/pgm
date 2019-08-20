@extends('layouts.app')

@section('content')
    <a href="{{action('MembersController@create')}}" class="custom_add_btn"><span><i class="fas fa-plus-circle"></i>&nbsp;&nbsp;Ajouter&nbsp;un&nbsp;membre</span></a>

    <div class="custom_table">
        <div class="search_wrapper">
            <input type="text" placeholder="Rechercher">
            <i class="fas fa-search"></i>
        </div>
        
        <div class="ct_content">
            <div class="ct_header">
                <span>Nom</span>
                <span>Prenom</span>
                <span>Date de naissance</span>
                <span>Numero de portable</span>
                <span>Actions</span>
            </div>

            @foreach($members as $member )
                <div id="div_atag" data-href="{{action('MembersController@show', $member->id)}}" onclick="href(this)" class="ct_body">
                    <span>{{strtolower($member->mem_nom)}}</span>
                    <span>{{strtolower($member->mem_prenom)}}</span>
                    <span>{{Carbon\Carbon::createFromFormat('Y-m-d H:i:s', date($member->mem_datenaissance))->format('d.m.Y') }}</span>
                    <span>{{$member->mem_numeroportable}}</span>
                    <span class="action_span">
                        <a title="Modifier" class="ct_btn_edit" href="{{action('MembersController@edit', $member->id)}}"><i class="fas fa-pen"></i></a>
                        <a title="Suprimmer" onclick="confimationDelete('Confirmation','Êtes vous sûr de vouloir suprimmer ce membre ?', {{$member->id}})" class="ct_btn_delete"><i class="fas fa-trash"></i></a>
                        <form action="{{action('MembersController@destroy', $member->id)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button title="Suprimmer" class="ct_btn_delete" style="display:none" id="cbd_{{$member->id}}" type="submit"></button>
                        </form>
                    </span>
                </div>
            @endforeach
        </div>
    </div>
@endsection



