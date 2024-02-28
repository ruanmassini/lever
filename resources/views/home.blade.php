@extends('adminlte::page')

@section('title', 'SIGA CLONE')

@section('content')
    <section class="content p-0">
        <div class="content fluid">
            <div class="p-2">
                <div id="home-div" class="home-div home-div-dark">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="d-flex align-items-center" style="height: 6rem">
                            <span id="greeting" class="text-center text-lg greeting greeting-dark">
                                Olá, Ruan! Bem vindo(a) ao SIGA!
                            </span>
                        </div>
                        <div class="d-flex align-items-center" style="height: 6rem">
                            <a href="">
                                <button class="custom-btn">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g id="search-dollar" clip-path="url(#clip0_181_1191)">
                                            <path id="Vector"
                                                d="M25.4651 22.2206L20.5964 17.3529C20.3767 17.1332 20.0789 17.0111 19.7664 17.0111H18.9705C20.3181 15.2875 21.1189 13.12 21.1189 10.7616C21.1189 5.15173 16.5725 0.606323 10.9622 0.606323C5.35181 0.606323 0.804932 5.15173 0.804932 10.7616C0.804932 16.3715 5.35132 20.9169 10.9622 20.9169C13.3206 20.9169 15.489 20.1161 17.2126 18.7684V19.5643C17.2126 19.8768 17.3347 20.1747 17.5544 20.3944L22.4231 25.2621C22.8821 25.7211 23.6243 25.7211 24.0784 25.2621L25.4602 23.8802C25.9192 23.4213 25.9192 22.6796 25.4651 22.2206ZM10.9622 17.7919C7.07837 17.7919 3.93091 14.6503 3.93091 10.7616C3.93091 6.8783 7.073 3.73132 10.9622 3.73132C14.8459 3.73132 17.9934 6.87292 17.9934 10.7616C17.9934 14.6449 14.8513 17.7919 10.9622 17.7919ZM12.2859 10.3436L10.0881 9.68445C9.83618 9.60876 9.65991 9.35339 9.65991 9.06287C9.65991 8.70789 9.9187 8.41882 10.2361 8.41882H11.6086C11.8313 8.41882 12.0461 8.48181 12.2346 8.60046C12.3928 8.69959 12.594 8.69373 12.7292 8.56482L13.303 8.01746C13.4753 7.85291 13.4656 7.56775 13.2751 7.42468C12.8308 7.09119 12.2947 6.8988 11.7434 6.87048V6.07507C11.7434 5.85925 11.5686 5.68445 11.3528 5.68445H10.5715C10.3557 5.68445 10.1809 5.85925 10.1809 6.07507V6.86218C9.0271 6.89294 8.09692 7.8656 8.09692 9.06287C8.09692 10.038 8.7312 10.9091 9.63892 11.1815L11.8367 11.8407C12.0886 11.9164 12.2649 12.1718 12.2649 12.4623C12.2649 12.8173 12.0061 13.1063 11.6887 13.1063H10.3167C10.094 13.1063 9.87915 13.0433 9.69067 12.9247C9.53247 12.8256 9.3313 12.8314 9.19605 12.9603L8.62231 13.5077C8.44995 13.6722 8.45972 13.9574 8.65015 14.1005C9.09448 14.434 9.63061 14.6263 10.1819 14.6547V15.4501C10.1819 15.6659 10.3567 15.8407 10.5725 15.8407H11.3538C11.5696 15.8407 11.7444 15.6659 11.7444 15.4501V14.663C12.8982 14.6322 13.8284 13.66 13.8284 12.4623C13.8284 11.4872 13.1941 10.6161 12.2859 10.3436Z"
                                                fill="#D0D0D0"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_181_1191">
                                                <rect width="25" height="25" fill="white"
                                                    transform="translate(0.804932 0.606323)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="custom-btn-text">
                                        Consulta Serasa
                                    </span>
                                </button>
                            </a>

                            <a href="{{ route('cliente.create') }}">
                                <button class="custom-btn ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28"
                                        viewBox="0 0 29 28" fill="none">
                                        <g clip-path="url(#clip0_102_1168)">
                                            <path
                                                d="M14.2083 2.33301C7.92931 2.33301 2.83331 7.42901 2.83331 13.708C2.83331 19.987 7.92931 25.083 14.2083 25.083C20.4873 25.083 25.5833 19.987 25.5833 13.708C25.5833 7.42901 20.4873 2.33301 14.2083 2.33301ZM19.8958 14.8455H15.3458V19.3955H13.0708V14.8455H8.52081V12.5705H13.0708V8.02051H15.3458V12.5705H19.8958V14.8455Z"
                                                fill="#D0D0D0"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_102_1168">
                                                <rect width="28" height="28" fill="#D0D0D0"
                                                    transform="translate(0.5)">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="custom-btn-text">
                                        Cadastrar Cliente
                                    </span>
                                </button>
                            </a>

                            <a href="">
                                <button class="custom-btn ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28"
                                        viewBox="0 0 29 28" fill="none">
                                        <g clip-path="url(#clip0_102_1173)">
                                            <path
                                                d="M18.5833 16.3333H17.6617L17.335 16.0183C18.4783 14.6883 19.1667 12.9617 19.1667 11.0833C19.1667 6.895 15.7717 3.5 11.5833 3.5C7.395 3.5 4 6.895 4 11.0833C4 15.2717 7.395 18.6667 11.5833 18.6667C13.4617 18.6667 15.1883 17.9783 16.5183 16.835L16.8333 17.1617V18.0833L22.6667 23.905L24.405 22.1667L18.5833 16.3333ZM11.5833 16.3333C8.67833 16.3333 6.33333 13.9883 6.33333 11.0833C6.33333 8.17833 8.67833 5.83333 11.5833 5.83333C14.4883 5.83333 16.8333 8.17833 16.8333 11.0833C16.8333 13.9883 14.4883 16.3333 11.5833 16.3333Z"
                                                fill="#D0D0D0"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_102_1173">
                                                <rect width="28" height="28" fill="#D0D0D0"
                                                    transform="translate(0.5)">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="custom-btn-text">
                                        Pedidos
                                    </span>
                                </button>
                            </a>

                            <a href="">
                                <button class="custom-btn ml-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="29" height="28"
                                        viewBox="0 0 29 28" fill="none">
                                        <g clip-path="url(#clip0_102_1178)">
                                            <path
                                                d="M19.1667 19.845V11.6667H16.8333V19.845H13.3333L18 24.5L22.6667 19.845H19.1667ZM11 3.5L6.33333 8.155H9.83333V16.3333H12.1667V8.155H15.6667L11 3.5Z"
                                                fill="#D0D0D0"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_102_1178">
                                                <rect width="28" height="28" fill="#D0D0D0"
                                                    transform="translate(0.5)">
                                                </rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="custom-btn-text">
                                        Nova Alteração Contratual
                                    </span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <style>
                .greeting {
                    color: #454D55;
                    font-size: 24px;
                    font-weight: 400;
                }

                .greeting-dark {
                    color: #D0D0D0;
                    font-size: 24px;
                    font-weight: 400;
                }

                .home-div {
                    width: 100%;
                    min-height: 90vh;
                    background-image: url('http://agenda.brasildigital.net.br/imgs/bg_main_dark.jpg');
                    background-size: cover;
                    background-position: center;
                }

                .home-div-dark {
                    background-image: url('http://agenda.brasildigital.net.br/imgs/bg_main_dark.jpg');
                }

                .custom-btn {
                    display: flex;
                    padding: 16px 12px;
                    align-items: center;
                    gap: 2px;
                    border: none;
                    border-radius: 10px;
                    background: #454D55;
                    transition: all 100ms ease-out;
                }

                .custom-btn:hover {
                    background: #5a636d;
                }

                .custom-btn-text {
                    color: #D0D0D0;
                    font-weight: 600;
                }
            </style>
        </div>
    </section>
@stop
