@extends('dashboard.layout')

@section('title')
Demo Dashboard
@stop

@section('content')
Qaqam dashboard
@stop

@section('script')
<script type="text/javascript">
   $(document).ready(function(){

      demo.initChartist();

      $.notify({
            icon: 'pe-7s-shield',
            message: "This is demo version of this template. All changes you made on the template will be visible  only to you"

         },{
             type: 'info',
             timer: 4000
         });

   });
</script>
@stop
