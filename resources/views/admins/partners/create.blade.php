@extends('layouts.base')

@section('content')
    @include('includes.sidebar')
    <div class="wrap-content">
        @include('includes.appbar')
        <br /><br /><br /><br /><br /><br />

        <div class="whap-content-center-form">
            <form action={{ route('upload-banner') }} method="post" enctype="multipart/form-data">
                @csrf
                <h3 class="text-center" style="font-family: Roboto-Black;">Importer le logo du partenaire</h3>
                
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

                <input type="hidden" value="partner" name="usage">
                <input type="hidden" value="partners" name="destination">

                <button class="button w-100">
                    <span>
                        Soumettre
                    </span>
                </button>
            </form>
        </div>

    </div>
@endsection
