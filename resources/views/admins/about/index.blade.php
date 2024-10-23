@extends('layouts.base')

@section('content')
    @include('includes.sidebar')
    <div class="wrap-content">
        @include('includes.appbar')
        <br /><br /><br /><br />

        <div style="padding: 20px;">
            <table width="100%">
                <tbody>
                    <tr>
                        <td>
                            <h3>A propos</h3>
                        </td>
                        <td style="color: rgb(210, 42, 42); font-family: Roboto-Black; text-align: right;">
                            <a href="{{ route('about.create') }}">
                                + Créer
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>

            @if ($message = Session::get('success'))
                <ul class="alert alert-success">
                    <li>{{ $message }}</li>
                </ul>
            @endif


            <div class="about-container">
                <div class="">
                    <img src="{{ $about->image_path }}" alt="">
                </div>
                <div class="about-item">
                    <h2>{{ $about->title }}</h4>
                        <input type="hidden" name="textToConvert" id="textToConvert" value="{{ $about->story }}">
                        <div id="text-content"></div>
                        <br /><br />
                        <a href="{{ route('about.edit', $about->id) }}" class="edit-about-btn">Modifier</a>
                </div>

            </div>
        </div>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            const htmlString = document.getElementById('textToConvert').value;
            let text = $.parseHTML(htmlString);

            $('#text-content').append(text);

        })
    </script>
@endsection
