<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="csrf-token" content="{!! csrf_token() !!}">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>Londinium - premium responsive admin template by Eugene Kopyov</title>

<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/londinium-theme.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

<script type="text/javascript" src="{{asset('js/plugins/charts/sparkline.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/forms/uniform.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/inputmask.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/autosize.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/inputlimit.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/listbox.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/multiselect.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/validate.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/tags.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/switch.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/forms/uploader/plupload.full.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/uploader/plupload.queue.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/forms/wysihtml5/wysihtml5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/forms/wysihtml5/toolbar.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/interface/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/fancybox.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/moment.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/jgrowl.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/datatables.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/plugins/interface/colorpicker.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/fullcalendar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/interface/timepicker.min.js')}}"></script>

<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/application.js')}}"></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

</head>

<body>


  @include('layouts.header.header')
   
    @include('layouts.sidebars.sidebar')

  <div class="page-content">
    @yield('dashboardContent')

  @yield('addUser')
  @yield('addMenu')

  @yield('manageUser')
  
  @yield('menuItems')
  @yield('manageComments')


  @yield('addPost')
<script type="text/javascript">
  function readURL(input) {

  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);

      $('#blah').hide();
      $('#blah').fadeIn(650);

    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>


  </div> 

  @yield('couponscript')


<script>
  var editor_config = {
    path_absolute : "/",
    selector: "textarea.my-editor",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
</script>