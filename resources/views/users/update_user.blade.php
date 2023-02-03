@extends('layout.template')

@section('title', 'Alterar Cadastro')

@section('content')
    <div class="right_col d-flex justify-content-center" role="main">
        <div class="x_panel col-md-6" style="max-height: 700px;">

            <!-- Cadastro do Usuário -->
            <div class="x_title">
                <h2>Modificação do Cadastro</h2>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">
                <form class="form-label-left input_mask" action="handle_update.php" method="POST">

                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                        <input type="text" class="form-control has-feedback-left" id="name" name="name"
                            placeholder="Nome Completo" value="" />
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                        <input type="email" class="form-control has-feedback-left" id="email" name="email"
                            placeholder="Email" value="" />
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="col-md-12 col-sm-12  form-group has-feedback">
                        <input type="tel" class="form-control has-feedback-left" id="phone" name="phone"
                            placeholder="Telefone" value="" />
                        <span class="fa fa-envelope form-control-feedback left" aria-hidden="true"></span>
                    </div>

                    <div class="form-group row ">
                        <div class="d-flex justify-content-center mt-5 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-success ">
                                <i class="fa fa-save mr-2"></i>
                                Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
