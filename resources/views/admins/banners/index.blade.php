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
                            <h3>Liste des images de bannières</h3>
                        </td>
                        <td style="color: rgb(210, 42, 42); font-family: Roboto-Black; text-align: right;">
                            <a href="{{ route('banners.create') }}">
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

            <div class="banners-list">
                @foreach ($banners as $banner)
                    <div class="banner-container">
                        <img src="{{ $banner->file_path }}" alt="">
                        <form class="d-inline" action="{{ route('banners.destroy', $banner->id) }}" method="POST"
                            onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer la bannière {{ $banner->file_name }} ? Cette action sera irréversible !')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="icon-button error">
                                Supprimer
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection
