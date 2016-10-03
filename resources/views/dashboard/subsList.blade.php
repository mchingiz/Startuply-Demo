@extends('dashboard.layout')

@section('title')
List of subscribers
@stop

@section('content')
   @if( $subscribers )
      <div class="col-md-9">
         <table class="table table-striped ">
            <thead>
               <tr>
                  <td>
                     ID
                  </td>
                  <td>
                     Name
                  </td>
                  <td>
                     Email
                  </td>
               </tr>
            </thead>
            <tbody>
               @foreach($subscribers as $subscriber)
                  <tr>
                     <td>
                        {{ $subscriber->id }}
                     </td>
                     <td>
                        {{ $subscriber->name }}
                     </td>
                     <td>
                        {{ $subscriber->email }}
                     </td>
                  </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   @else
      <div class="alert alert-warning col-md-4 col-md-offset-4">
         <h3>You don't have any subscriber</h3>
      </div>

   @endif
@stop
