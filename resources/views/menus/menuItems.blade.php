@extends('layouts.master')

@section('menuItems')

<div  style="margin-top:30px;">
    
</div>


<div class="panel panel-default">
   <div class="panel-heading"><h6 class="panel-title"><i class="icon-droplet2"></i> Menu Sorting</h6></div>
   <div class="table-responsive">
       <table class="table">
           <thead>
               <tr>
                   <th>Category Name</th>
                   <th>Menu Title</th>
                   <th>Priority</th>
               </tr>
           </thead>
           <tbody class="row_position">
               @foreach($menus as $menu)
               <tr class="success"  id="{{ $menu->id}}">
                   <td>{{$menu->name}}</td>
                   <td>{{$menu->title}}</td>
                   <td>{{$menu->priority}}</td>
               </tr>
               @endforeach

           </tbody>
       </table>
   </div>
</div>

<script type="text/javascript">
   $( ".row_position" ).sortable({

       delay: 150,
       stop: function() {
           var selectedData = new Array();
           $('.row_position>tr').each(function() {
               selectedData.push($(this).attr("id"));
           });
           //console.log(selectedData);
            updateOrder(selectedData);

       }
   });
   function updateOrder(data) {
       $.ajax({
           url:"/dashboard/orderlist",
           datatype:'json',
           type:'post',
           data:{position:data,'_token': $('meta[name="csrf-token"]').attr('content')},
           success:function(){
               // alert('Update Postion of menu');
           }
       })
   }
</script>


@endsection