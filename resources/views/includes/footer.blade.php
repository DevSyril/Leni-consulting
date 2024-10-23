<footer>
    <br /><br /><br />
    <div class="container">
        <div class="contact-section">
            <div>
                <div class="section-title">
                    LIVE US A MESSAGE
                </div>
                <div class="section-title-divider"></div><br /><br />
                <form action="" method="post" id="contact-us">
                    @csrf
                    <label for="contact">E-mail or phone number</label>
                    <input type="text" placeholder="Saisir votre e-mail ou votre numéro de téléphone ..." name="contact"
                        id="contact" /><br /><br />


                    <label class="file-label" for="file">
                        + Pick a file to send (Optional).
                        <input type="file" name="file" id="file" />
                    </label>
                    <br />

                    <label for="message">Message content</label>
                    <textarea type="text" placeholder="Saisir votre message dans le champs ..." rows="6" name="message"
                        id="message"></textarea>

                    <button class="button">
                        <span>
                            Send message &nbsp; &rightarrow;
                        </span>
                    </button>
                </form>
            </div>
            <div>
                <div class="section-title">
                    OUR CONTACTS
                </div>
                <div class="section-title-divider"></div><br />

                <p class="text-center">
                    We are available 24 hours a day, 7 days a week to address your concerns.
                </p><br />

                <div style="line-height: 28px;">
                    <span class="Roboto-Bold">E-mail :</span> contacts@lendiconsultingcpa.com<br />

                    <span class="Roboto-Bold">Phone :</span> +1 (240) 462-025<br />

                    <span class="Roboto-Bold">Full address :</span> <br />
                    8 The Green<br />
                    Suite B<br />
                    Dover, DE 19901.
                </div><br />

                <table>
                    <tbody>
                        <tr>
                            <td>
                                <img class="logo" src="{{ URL::asset('assets/images/logo.png') }}" alt="Logo" />
                            </td>
                            <td width="10"></td>
                            <td>
                                <h2>
                                    <span class="lead-logo-text">LENDI</span><br />Consulting CPA
                                </h2>
                            </td>
                        </tr>
                    </tbody>
                </table><br />

                <div class="social-media-area">
                    <img src="{{ URL::asset('assets/svgs/facebook-fw.svg') }}" alt="Call"
                        width="16" />&nbsp;&nbsp;
                    <img src="{{ URL::asset('assets/svgs/linkedin-inw.svg') }}" alt="Call"
                        width="16" />&nbsp;&nbsp;
                    <img src="{{ URL::asset('assets/svgs/tiktok-tw.svg') }}" alt="Call" width="16" />
                </div><br /><br />
            </div>
        </div>
    </div>
    <br /><br /><br />
</footer>
