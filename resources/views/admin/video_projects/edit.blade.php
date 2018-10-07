@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Video Project
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($videoProject, ['route' => ['admin.videoProjects.update', $videoProject->id], 'method' => 'patch']) !!}

                        @include('admin.video_projects.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection