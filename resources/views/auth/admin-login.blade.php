@extends('layouts.admin.app')

@section('content')


<div class="ui stackable grid">
  <div class="sixteen wide tablet sixteen wide computer column"></div>
  <div class="sixteen wide tablet sixteen wide computer column"></div>
  <div class="sixteen wide tablet sixteen wide computer column"></div>
</div>


<div class="ui centered grid container">
  <div class="six wide column" ></div>
  <div class="six wide column" >
  </div>
  <div class="height wide tablet sixteen wide mobile six wide computer column">
    <div class="ui centered header" style="
    background: grey;"">Admin Connexion
</div>

<img class="ui centered small circular image" src="http://www.webtutorialspoint.com/wp-content/plugins/all-in-one-seo-pack/images/default-user-image.png">
<form class="ui form" method="POST" action="{{ route('admin.login.submit') }}">
    {{ csrf_field() }}
    <div class="field">
        <label>Email</label>

        <input id="email" type="email"  name="email" value="{{ old('email') }}" required autofocus>
    </div>
    <div class="field">
        <label>Mot de passe </label>
        <input id="password" type="password" type="text" name="password" required>
    </div>
    <div class="field">
        <div class="checkbox">
            <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi ?
            </label>
        </div>
    </div>
    <div class="item">
        <button class="ui large right floated positive button" type="submit">Valider</button>
    </div>
</form>
<a href="{{ url('/') }}" class="item">retour au site</a>
</div>
</div>




@endsection
