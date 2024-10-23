<nav class="side-bar">
    <div>
        <table style="margin-left: -8px;">
            <tbody>
                <tr>
                    <td>
                        <img width="50" src="{{ URL::asset('assets/images/logo.png') }}" alt="Logo" />
                    </td>
                    <td width="5"></td>
                    <td>
                        <h3>
                            <span class="lead-logo-text" style="font-family: Roboto-Black;">LENDI</span><br />Consulting
                            CPA
                        </h3>
                    </td>
                </tr>
            </tbody>
        </table>

        <table>
            <tbody>
                <tr>
                    <td>
                        <div style="width: 80px; height: 10px; background-color: rgb(2, 64, 141); border-radius: 20px;">
                        </div>
                    </td>
                    <td>
                        <div
                            style="width: 50px; height: 10px; background-color: rgb(223, 195, 13); border-radius: 20px;">
                        </div>
                    </td>
                    <td>
                        <div style="width: 20px; height: 10px; background-color: rgb(206, 9, 81); border-radius: 20px;">
                        </div>
                    </td>
                </tr>
            </tbody>
        </table><br /><br />

        <div class="text-center"
            style="border: 1px solid #CCC; padding: 10px; border-radius: 10px; font-family: Roboto-Black;">
            <small>TABLEAU DE BORD ADMINISTRATEUR</small>
        </div><br />

        <ul>
            <li>
                <a href="{{ route('admins.home') }}">
                    <div>
                        Home
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('banners.index') }}">
                    <div>
                        Images de bannières
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('services.index') }}">
                    <div>
                        Gestion de services
                    </div>
                </a>
            </li>

            <li>
                <a href="{{ route('partners.index') }}">
                    <div>
                        Gestion de partenaires
                    </div>
                </a>
            </li>
            <li>
                <a href="{{ route('about.index') }}">
                    <div>
                        En savoir plus
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
