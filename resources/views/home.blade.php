@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">   
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-graduation-cap"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Estudantes</span>
              <span class="info-box-number">{{ $students ?? '100'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-university"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Professores</span>
              <span class="info-box-number">{{$teachers  ?? '123'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-building"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Empresas</span>
              <span class="info-box-number">{{$companies ?? 'n/a'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-calendar-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Eventos</span>
              <span class="info-box-number">{{$events ?? '50'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>

    <div class="row">   
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-puzzle-piece"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Estagios/Trainee</span>
              <span class="info-box-number">{{ $stages ?? '100'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-industry"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Vagas de Empregos</span>
              <span class="info-box-number">{{$jobs  ?? '123'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-briefcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Concursos</span>
              <span class="info-box-number">{{$contests ?? 'n/a'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Usuarios</span>
              <span class="info-box-number">{{$users ?? '50'}}</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- Noticias Recentes -->
    <div class="row">
        <div class="col-lg-8">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ultimos Anuncios</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Local Anuncio</th>
                    <th>Titulo</th>
                    <th>Status</th>
                    <th>Responsavel</th>
                  </tr>
                  </thead>
                  <tbody>
                        @foreach($adversitments as $ads)
                            <tr>
                                <td><a href="{{ route('admin.adverts.show',$ads->id) }}">{{$ads->advertising_place->name ?? ''}}</a></td>
                                <td>{{$ads->contact_name}}</td>
                                <td><span class="label label-success">{{$ads->status ?? ''}}</span></td>
                                <td>
                                    {{ $ads->social_name }}
                                </td>
                            </tr>
                        @endforeach                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Novo Anuncio</a>
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">Ver todos Anuncios</a>
            </div>
            <!-- /.box-footer -->
          </div>
        </div>
        <div class="col-lg-4">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Noticias Recentes</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        @foreach($posts as $post)
                        <li class="item">
                            <div class="product-img">
                                <img src="{{$post->banner ? $post->banner->getUrl('thumb') : ''}}" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="{{route('site.post',$post->slug)}}" target="_blank" class="product-title">{{$post->title ?? ''}}
                                <span class="label label-info pull-right">{{\App\Models\Post::STATUS_SELECT[$post->status] ?? ''}}</span></a>
                                <span class="product-description">
                                    {{$post->author->name ?? ''}}
                                </span>
                            </div>
                        </li> 
                        @endforeach                 
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                <a href="javascript:void(0)" class="uppercase">Ver todas Noticias</a>
                </div>
                <!-- /.box-footer -->
            </div>

            </div>
        </div>
</div>
@endsection
@section('scripts')
@parent

@endsection
