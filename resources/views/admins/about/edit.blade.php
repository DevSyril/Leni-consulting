@extends('layouts.base')

@section('content')
    @include('includes.sidebar')
    <div class="wrap-content">
        @include('includes.appbar')
        <br /><br /><br /><br /><br /><br />

        <div class="whap-content-center-form">

            <form action={{ route('update-about', $about->id) }} method="post" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <h3 class="text-center" style="font-family: Roboto-Black;">Modifier les informations de la page à propos</h3>
                
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
                    <label for="title">Titre d'accroche</label>
                    <input type="text" name="title" id="title" placeholder="{{ $about->title }}">
                </div>
                <br />

                <div class="">
                    <textarea name="story" id="summernote" rows="10"
                        placeholder="Raconter l'histoire de votre entrepise ...."></textarea>
                </div>
                <br />

                <button type="submit" class="button w-100">
                    <span>
                        Soummettre
                    </span>
                </button>
            </form>
        </div>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: "Raconter l'histoire de votre entrepise ....",
                height: 150
            });
        });
    </script>
@endsection
