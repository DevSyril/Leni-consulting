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
                            <h3>Liste des services proposés</h3>
                        </td>
                        <td style="color: rgb(210, 42, 42); font-family: Roboto-Black; text-align: right;">
                            <a href="{{ route('services.create') }}">
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

            <div class="sevice-container">
                @if ($services->isEmpty())
                    <p>Aucun service trouvé.</p>
                @endif
                    <div class="border datatable-cover">
                        <table id="datatable" class="stripe">
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Service</th>
                                    <th>Description</th>
                                    <th width="100" class="text-center">
                                        Opérations
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>
                                            <img src="{{ $service->image_path }}"
                                                class="service-cover" alt="">
                                        </td>

                                        <td>
                                            {{ $service->name }}
                                        </td>

                                        <td>
                                            {{ $service->description }}
                                        </td>

                                        <td class="text-center">
                                            <a href="{{ route('services.edit', $service->id) }}"
                                                class="icon-button primary">
                                                <i class="fas fa-pen-to-square"></i>
                                            </a>
                                            &nbsp;
                                            <form class="d-inline" action="{{ route('services.destroy', $service->id) }}" method="POST"
                                                onsubmit="return confirm('Êtes-vous sûr(e) de vouloir supprimer l {{ $service->name }} ? Cette action sera irréversible !')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="icon-button error">
                                                    Supprimer
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>

    </div>
@endsection
