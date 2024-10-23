@extends('layouts.base')

@section('content')
    @include('includes.sidebar')
    <div class="wrap-content">
        @include('includes.appbar')
        <br /><br /><br /><br /><br /><br />

        <div class="whap-content-center-form service-create-form">
            <form action={{ route('services.store') }} method="post" enctype="multipart/form-data">
                @csrf
                <h3 class="text-center" style="font-family: Roboto-Black;">Créer une nouvelle image de bannière</h3>

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        {!! implode('', $errors->all('<li>:message</li>')) !!}
                    </ul>
                @endif

                @if ($message = Session::get('error'))
                    <ul class="alert alert-danger">
                        <li>{{ $message }}</li>
                    </ul>
                @endif

                @if ($message = Session::get('success'))
                    <ul class="alert alert-success">
                        <li>{{ $message }}</li>
                    </ul>
                @endif
                <br />

                <div id="previewImageContainer"></div>

                <label class="file-label color-dark" for="file">
                    + Pick a file to send (Optional).
                    <input type="file" name="file" id="file" onchange="previewImage()" />
                </label>
                <br />
                <div class="">
                    <label for="name">Titre</label>
                    <input type="text" name="name" id="name" placeholder="Saisissez le titre ici ...">
                </div>
                <br />
                <div class="">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10"
                        placeholder="Veuillez saisir une descripiton de votre service ici"></textarea>
                </div>

                <button class="button w-100">
                    <span>
                        Soumettre
                    </span>
                </button>
            </form>
        </div>

    </div>
@endsection
