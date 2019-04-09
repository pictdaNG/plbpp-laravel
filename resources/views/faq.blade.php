@extends('layouts.master')

@section('title')
  FAQ | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('faq')
    uk-active
@endsection

@section('content')
  <div class="dContainer">
            <div class="info">
                <h3 class="title">FREQUENTLY ASKED <span class="theme-color uk-text-bold">QUESTIONS</span></h3>
                <div class="uk-width-1-1@m uk-margin-remove bg-white-transluscent uk-position-relative uk-position-z-index uk-container uk-flex-center uk-padding uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
                    <ul uk-accordion="collapsible: false" class="uk-text-center uk-accordion uk-grid-margin uk-first-column">
                        <li class="uk-open uk-text-left">
                            <a class="uk-accordion-title" href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis, vitae?</a>
                            <div class="uk-accordion-content" aria-hidden="false">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequuntur dignissimos doloremque eum ipsa porro ratione reiciendis repudiandae, similique ullam.
                                </p></div>
                        </li>
                        <li class="uk-text-left">
                            <a class="uk-accordion-title" href="#">
                                Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam?
                            </a>
                            <div class="uk-accordion-content" hidden="" aria-hidden="true">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequuntur dignissimos doloremque eum ipsa porro ratione reiciendis repudiandae, similique ullam.
                                </p></div>
                        </li>
                        <li class="uk-text-left">
                            <a class="uk-accordion-title" href="#">
                                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut?
                            </a>
                            <div class="uk-accordion-content" hidden="" aria-hidden="true">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequuntur dignissimos doloremque eum ipsa porro ratione reiciendis repudiandae, similique ullam.
                                </p></div>
                        </li>
                        <li class="uk-open uk-text-left  more" hidden="">
                            <a class="uk-accordion-title" href="#">
                                Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo?
                            </a>
                            <div class="uk-accordion-content" aria-hidden="false">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequuntur dignissimos doloremque eum ipsa porro ratione reiciendis repudiandae, similique ullam.
                                </p></div>
                        </li>
                        <li class="uk-text-left more" hidden="">
                            <a class="uk-accordion-title" href="#">
                                Voluptate velit esse cillum dolore eu fugiat nulla pariatur?
                            </a>
                            <div class="uk-accordion-content" hidden="" aria-hidden="true">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequuntur dignissimos doloremque eum ipsa porro ratione reiciendis repudiandae, similique ullam.
                                </p></div>
                        </li>
                        <li class="uk-text-left more" hidden="">
                            <a class="uk-accordion-title" href="#">What are the benefits for using the platform?</a>
                            <div class="uk-accordion-content" hidden="" aria-hidden="true">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad consequuntur dignissimos doloremque eum ipsa porro ratione reiciendis repudiandae, similique ullam.
                                </p></div>
                        </li>
                        <a class="uk-link uk-text-large reset-link more prog-link theme-color uk-text-center" uk-toggle="target: .more; animation:
                    uk-animation-slide-top;">more</a>
                        <a class="uk-link uk-text-large more reset-link theme-color prog-link uk-text-center" uk-toggle="target: .more; animation:
                    uk-animation-slide-top;" hidden="">less</a>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection