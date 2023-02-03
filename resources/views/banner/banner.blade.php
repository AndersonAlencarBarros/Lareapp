@extends("layout.template")

@section('title', 'Banner')

@section("content")
<div class="right_col" role="main">
    <div class="x_panel col-md-8 m-2" style="max-height: 250px;">
        <div class="x_title">
            <h2>Cadastro de Banners</h2>
            <div class="clearfix"></div>
        </div>

        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    
                    <form class="form-label-left input_mask" action="handle_banner_upload.php" method="POST" enctype="multipart/form-data" novalidate>
                        <div class="col-md-12 col-sm-12 form-group has-feedback">
                            <input type="hidden" name="MAX_FILE_SIZE" value="5000000" />
                            <input type="file" class="form-control has-feedback-left" id="banner" name="banner" placeholder="Selecione um arquivo." required />
                            <span class="fa fa-picture-o form-control-feedback left" aria-hidden="true"></span>
                        </div>

                        <span class="text-danger">Mensagem de Erro</span>
                        <span class="text-success mt-3">Mensagem de Sucesso</span>

                        <div class="form-group row d-flex justify-content-center">
                            <div class="col-xs-6 col-sm-6 col-md-12">
                                <button id="submit" type="submit" class="btn btn-success btn-block mt-5">Enviar</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

    <div class="x_panel">
        <h2>Lista de Banners</h2>

        <div class="container">
            <div class="row"> 
                {{-- Content --}}
            </div>
        </div>
    </div>

</div>
@endsection