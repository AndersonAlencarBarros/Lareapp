@extends('layout.template')

@section('title', 'Banner')

@section('content')
  <div
    class="right_col"
    role="main"
  >
    <div
      class="x_panel col-md-8 m-2"
      style="max-height: 250px;"
    >
      <div class="x_title">
        <h2>Cadastro de Banners</h2>
        <div class="clearfix"></div>
      </div>

      <div class="x_content">
        <div class="row">
          <div class="col-sm-12">

            <form
              class="form-label-left input_mask"
              action="{{ route('banners.store') }}"
              method="POST"
              enctype="multipart/form-data"
              novalidate
            >
              @csrf
              <div class="col-md-12 col-sm-12 form-group has-feedback">
                <input
                  class="form-control has-feedback-left"
                  id="banner"
                  type="file"
                  name="banner"
                  placeholder="Selecione um arquivo."
                  required
                />
                <span
                  class="fa fa-picture-o form-control-feedback left"
                  aria-hidden="true"
                >
                </span>
              </div>

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

              <div class="form-group row d-flex justify-content-center">
                <div class="col-xs-6 col-sm-6 col-md-12">
                  <button
                    class="btn btn-success btn-block mt-5"
                    id="submit"
                    type="submit"
                  >
                    Enviar
                  </button>
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

          @foreach ($banners as $banner)
            <div class="col-md-3">
              <img
                class=" rounded mb-3 img-fluid rounded img-thumbnail"
                src="./uploads/{{ $banner->name }}"
              />

              <form
                class="text-center"
                action="{{ route('banners.destroy', $banner->id) }}"
                method="POST"
              >
                @csrf
                @method('DELETE')
                <input
                  type="hidden"
                  name="banner_id"
                  value="{{ $banner->id }}"
                />
                <button
                  class='btn btn-danger mx-1'
                  type='submit'
                  name="banner_id"
                  value="{{ $banner->id }}"
                >
                  Excluir
                </button>
              </form>
            </div>
          @endforeach

        </div>
      </div>
    </div>

  </div>
@endsection
