@extends('layouts.app')

@section('template_title')
    Cre Detalle Orden Compra
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Detalle Orden Compra</span>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('orden-compras.store') }}"  role="form" enctype="multipart/form-data">
                            
                            @csrf

                            
                            <div class="box box-info padding-1">
                                <div class="box-body">
                                    
                                    <div class="form-group">
                                        {{ Form::label('cantidad') }}
                                        {{ Form::text('cantidad', '', ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
                                        {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                    <div class="form-group">
                                        {{ Form::label('idOrden') }}
                                        {{ Form::text('idOrden', $id, ['class' => 'form-control' . ($errors->has('idOrden') ? ' is-invalid' : ''), 'placeholder' => 'Idorden' ,'readonly']) }}
                                        {!! $errors->first('idOrden', '<div class="invalid-feedback">:message</div>') !!}
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="producto">Producto</label>
                    
                                    <select class="form-control " id="producto" name="idproducto">
                                    <option value="">Seleccione</option>
                                        @foreach ($productos as $item)
                                    <option value="{{$item->idproducto}}">{{$item->nombre}}</option> 
                                    @endforeach
                                    </select>
                                    </div>
                            
                                </div>
                                <div class="row">
                                    
                                    <div class="col-1 ">
                                        <button type="submit " class="btn btn-success" >{{ __('guardar') }}</button>
                                    </div>
                                    <div id= 'dinamic'>
                                </div>
                                

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
 <script type="text/javascript">
 
 $('#producto').select2();
    let index = 0;
    let i = 1;
    let total = 0;
    let list_producto = [];
    let idOrden;
   const contenedor =document.querySelector('#dinamic');
    
    $('#add').click(function(e) {
      e.preventDefault();
        let producto = $('#producto').val().split('_');
        let cantidad = $('#cantidad').val();
        let div = document.createElement('div');
        total = producto[2]*cantidad
        div.innerHTML = '<input type="hidden" name="idproductos" value="'+ producto[0] + '">';
        contenedor.appendChild(div);
        console.log(total);
          
            
          
                
    });

    
   
                
            
        
    
</script>

@endsection








