@extends("theme.$theme.layout")

@section('titulo')
Sistema Menús
@endsection

@section('contenido')
<div class="row">
    <div class="col-md-12">
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Crear Menús</h3>
            </div>
            <div class="box-body">
                <div class="box-header with-border">
                    <h3 class="box-title">Rellenar Campos</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        @include('admin.menu.form')
                        
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection