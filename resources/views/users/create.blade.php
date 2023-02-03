@extends('layout.template')

@section('title', 'Cadastro')

@section('content')
    <div
        class="right_col d-flex justify-content-center"
        role="main"
    >
        <div
            class="x_panel col-md-6"
            style="max-height: 400px;"
        >

            <!-- Cadastro do Usuário -->
            <div class="x_title">
                <h2>Cadastro do Usuário</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <form
                    class="form-label-left input_mask"
                    action="{{ route('users.store') }}"
                    method="POST"
                    novalidate
                >
                    @csrf

                    <div class="col-md-12 col-sm-12 form-group has-feedback">
                        <input
                            class="form-control has-feedback-left"
                            id="name"
                            type="text"
                            required="required"
                            name="name"
                            placeholder="Nome Completo"
                        />
                        <span
                            class="fa fa-user form-control-feedback left"
                            aria-hidden="true"
                        ></span>

                    </div>

                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                        <input
                            class="form-control has-feedback-left"
                            id="email"
                            type="email"
                            name="email"
                            placeholder="Email"
                        />
                        <span
                            class="fa fa-envelope form-control-feedback left"
                            aria-hidden="true"
                        ></span>

                    </div>

                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                        <input
                            class="form-control has-feedback-left"
                            id="phone"
                            type="tel"
                            name="phone"
                            placeholder="Telefone"
                        />
                        <span
                            class="fa fa-envelope form-control-feedback left"
                            aria-hidden="true"
                        ></span>

                    </div>

                    <div class="form-group row d-flex justify-content-center">
                        <div class="col-xs-6 col-sm-6 col-md-12">
                            <button
                                class="btn btn-success btn-block mt-5"
                                id="submit"
                                type="submit"
                            >Enviar</button>
                        </div>
                    </div>
                </form>

                @if (session()->get('success'))
                    <div class="text-center">
                        <span class="text-success m-3">
                            {{ session()->get('success') }}
                        </span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="text-center">

                        @foreach ($errors->all() as $error)
                            <p class="text-danger">{{ $error }}</p>
                        @endforeach

                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
