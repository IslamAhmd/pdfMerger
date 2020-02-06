<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dashboard/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('dashboard/plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('pages.index') }}" class="nav-link" target="_blank">Home</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Super Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">


          <li class="nav-item">
            <a class="nav-link" id="usersButton">
              <i class="fas fa-users"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Users
              </p>
            </a>
          </li>
          

          <li class="nav-item has-treeview">
            <a class="nav-link" id="ordersButton">
              <i class="nav-icon fas fa-copy"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Orders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="addOrder" class="nav-link">
                  
                  <p>
                    <i class="far fa-circle nav-icon"></i>
                    Add New Order
                  </p>
                </a>
              </li>
            </ul>
          </li>

                    
          <li class="nav-item has-treeview">
            <a class="nav-link" id="levelsButton">
              <i class="nav-icon fas fa-copy"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Levels
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="addLevel" class="nav-link">
                  
                  <p>
                    <i class="far fa-circle nav-icon"></i>
                    Add New Level
                  </p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a class="nav-link" id="yearsButton">
              <i class="nav-icon fas fa-copy"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Years
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="addYear" class="nav-link">
                  
                  <p>
                    <i class="far fa-circle nav-icon"></i>
                    Add New Year
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a class="nav-link" id="subjectsButton">
              <i class="nav-icon fas fa-copy"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Subjects
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="addSubject" class="nav-link">
                  
                  <p>
                    <i class="far fa-circle nav-icon"></i>
                    Add New Subject
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a class="nav-link" id="materialsButton">
              <i class="nav-icon fas fa-copy"></i>
              &nbsp;
              &nbsp;
              &nbsp;
              <p>
                Materials
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a id="addMaterial" class="nav-link">
                  
                  <p>
                    <i class="far fa-circle nav-icon"></i>
                    Add New Material
                  </p>
                </a>
              </li>
            </ul>
          </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Edit Order</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="formEdit">
            
            <div class="modal-body">

                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="editName" class="form-control">
                </div>
                <div class="form-group">
                  <label>Display Name</label>
                  <input type="text" name="editDisplayName" class="form-control">
                </div>

                <div class="form-group">
                  <input type="hidden" name="recordId">
                </div>

            </div>
            <div class="modal-footer"> 

              <input type="submit" value="submit" class="btn btn-primary float-right">

            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      
      <div class="row">
        
        <div class="col-md-12 text-center">

          <h1 style="display: none;" id="orderName" class="text-center"></h1>

          <table class="table table-striped" style="display: none;" id="table">

          </table>

        </div>

        <div class="col-md-8" style="margin: 5% 20%;">

          <p class="alert alert-success" id="success" style="display: none;"></p>
          <p class="alert alert-danger" id="failed" style="display: none;"></p>
          
          <form id="formOrder" style="display: none;">

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label>Display Name</label>
              <input type="text" name="display_name" class="form-control">
            </div>
            <div>
              <input type="submit" value="submit" class="btn btn-primary float-right">
            </div>

          </form>


          <form id="formLevel" style="display: none;">

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="levelName" class="form-control">
            </div>
            <div class="form-group">
              <label>Display Name</label>
              <input type="text" name="levelDisplay_name" class="form-control">
            </div>
            <div class="form-group">
              <label>Choose Your Order</label>
              <select name="order_id" class="form-control" id="order_id">
                
              </select>
            </div>
            <div>
              <input type="submit" value="submit" class="btn btn-primary float-right">
            </div>

          </form>


          <form id="formYear" style="display: none;">

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="yearName" class="form-control">
            </div>
            <div class="form-group">
              <label>Display Name</label>
              <input type="text" name="yearDisplay_name" class="form-control">
            </div>
            <div class="form-group">
              <label>Choose Your Level</label>
              <select name="level_id" class="form-control" id="level_id">
                
              </select>
            </div>
            <div>
              <input type="submit" value="submit" class="btn btn-primary float-right">
            </div>

          </form>

          <form id="formSubject" style="display: none;">

            <div class="form-group">
              <label>Name</label>
              <input type="text" name="subjectName" class="form-control">
            </div>
            <div class="form-group">
              <label>Display Name</label>
              <input type="text" name="subjectDisplay_name" class="form-control">
            </div>
            <div class="form-group">
              <label>Choose Your Year</label>
              <select name="year_id" class="form-control" id="year_id">
                
              </select>
            </div>
            <div>
              <input type="submit" value="submit" class="btn btn-primary float-right">
            </div>

          </form>

          <form enctype='multipart/form-data' id="formMaterial" style="display: none;" action="{{ route('materials.store') }}" method="post">
            @csrf
            <div class="form-group">
              <label class="float-right">اختر الصف</label>
              <select name="year" class="form-control" id="year">
                <option>اختر الصف</option>
                
              </select>
            </div>
            
            <div class="form-group">
              <label class="float-right">اختر الماده</label>
              <select name="subject_id" class="form-control" id="subject_id">
                
              </select>
            </div>
            <div class="form-group">
              <input type="file" name="file" class="form-control-file">
            </div>
            <div>
              <button type="submit" class="btn btn-primary float-right">submit</button>
            </div>

          </form>

        </div>

      </div>

    </div>

  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">


  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('dashboard/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('dashboard/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('dashboard/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('dashboard/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('dashboard/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('dashboard/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('dashboard/plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('dashboard/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('dashboard/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('dashboard/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dashboard/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dashboard/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dashboard/dist/js/demo.js')}}"></script>
<script type="text/javascript">

// Delete Users
function deleteUser(){


        $('.deleteUser').click(function(){

              $('#table tbody, #table thead').remove();


              let id = $(this).data("id");
              
              console.log(id);

              var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: '{{ url("/users") }}/'+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);

                      showUsers();
                      
                  }
              });             

        });


}

// show all users
function showUsers(){

            $('#formOrder').hide();
            $('#formLevel').hide();
            $('#formYear').hide();
            $('#formSubject').hide();
            $('#formMaterial').hide();


            $.get('{{route("users.index")}}', function(res){


                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>

                  `);

                  res.forEach(function(user, i){

                      $('#table > tbody').append(`

                        
                          <tr class="userRow" data-id="${user.id}">

                              <th>${i+1}</th>
                              <td>${user.name}</td>
                              <td>${user.email}</td>
                              <td><button href="#" class="btn btn-primary deleteUser" data-id="${user.id}">delete</button></td>

                          </tr>
                        

                      `);

                  })

                  $(document).ready(function(){
                      
                      deleteUser();

                  });


            })
            // fadeToggle might help
            $('#table').show();

            $('#table tbody, #table thead').remove();

}

// Delete Order
function deleteOrder(){

      $('.deleteOrder').click(function(){

        $('#table tbody, #table thead').remove();


        var id = $(this).data("id");

        console.log(id);

        var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: '{{ url("/orders") }}/'+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);

                      showOrders();

                      
                  }
              });

      });

}

// edit order
function editOrder(){

    $('.editOrder').click(function(){

        var id = $(this).data("id");

        $('.modal').modal('show');

        $.get('{{ url("/orders") }}/'+id, function(res){

            $('input[name=editName').val(res.name);
            $('input[name=editDisplayName').val(res.display_name);
            $('input[name=recordId').val(res.id);


        });

        $('#formEdit').submit(function(e){

              $('#table tbody, #table thead').remove();


              let name = $('input[name=editName').val();
              let display_name = $('input[name=editDisplayName').val();
              let token = $("meta[name='csrf-token']").attr("content");
              let recordId = $('input[name=recordId').val();


              $.ajax({

                url : '{{ url("/orders/update") }}',
                type : 'post',       
                data : {
                'name' : name,
                'display_name' : display_name,
                'id' : recordId,
                '_token' : token
                        }, 
                success : function(res){

                    console.log(res.message);

                    $('.modal').modal('hide');

                    showOrders();

                },
                error : function(res){

                    console.log(res.errors);
                    $('.modal').modal('hide');

                }


              })


              e.preventDefault();

          })

    });


}

// show orders
function showOrders(){

              $('#orderName').hide();
              $('#formLevel').hide();
              $('#formYear').hide();
              $('#formSubject').hide();
              $('#formMaterial').hide();

                
              $('#table tbody, #table thead').remove();

              $('#formOrder').hide();



              $.get('{{ route("orders.index")}}', function(res){

                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>

                  `);

                  res.forEach(function(order, i){

                      $('#table > tbody').append(`

                        
                          <tr class="orderRow" data-id="${order.id}">

                              <th>${i+1}</th>
                              <td><a class="showOrder" data-id="${order.id}">${order.name}</a></td>
                              <td>${order.display_name}</td>
                              <td><button href="#" class="btn btn-primary editOrder" data-id="${order.id}">Edit</button></td>
                              <td><button href="#" class="btn btn-primary deleteOrder" data-id="${order.id}">delete</button></td>

                          </tr>
                        


                      `);

                  });

                  $(document).ready(function(){
                      
                      deleteOrder();
                      editOrder();

                  });

              });


              $('#table').show();

              $('#table tbody, #table thead').remove();


}

// add order
function addOrder(){

            $('#table').hide();
            $('#formYear').hide();
            $('#formLevel').hide();
            $('#formMaterial').hide();
            $('#formOrder').show();

            var token = $("meta[name='csrf-token']").attr("content");

            $('#formOrder').submit(function(e){

              $.post('{{ route("orders.store") }}', {

                  'name':$('input[name=name]').val(),
                  'display_name':$('input[name=display_name]').val(),
                  '_token' : token

                }).done(function(res){

                if(res.status == 'success'){

                  $('input[name=name]').val('');
                  $('input[name=display_name]').val('');
                  showOrders();

                } else if(res.status == 'error'){


                  $('input[name=name]').val('');
                  $('input[name=display_name]').val('');

                }

              });

              e.preventDefault();

            });

}

// delete level
function deleteLevel(){

      $('.deleteLevel').click(function(){

        $('#table tbody, #table thead').remove();


        var id = $(this).data("id");

        console.log(id);

        var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: '{{ url("/levels") }}/'+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);
                      showLevels();

                      
                  }
              });

      });


}


// edit Level
function editLevel(){

    $('.editLevel').click(function(){

        var id = $(this).data("id");

        $('.modal').modal('show');

        $.get('{{ url("/levels") }}/'+id, function(res){

            $('input[name=editName').val(res.name);
            $('input[name=editDisplayName').val(res.display_name);
            $('input[name=recordId').val(res.id);

        });

        $('#formEdit').submit(function(e){

            $('#table tbody, #table thead').remove();

            let name = $('input[name=editName').val();
            let display_name = $('input[name=editDisplayName').val();
            let token = $("meta[name='csrf-token']").attr("content");
            let recordId = $('input[name=recordId').val();
            

            $.ajax({
              url : '{{ url("/levels/update") }}',
              type : 'post',
              data : {
              'name' : name,
              'display_name' : display_name,
              'id' : recordId,
              '_token' : token
                      }, 
              success : function(res){

                  console.log(res.message);

                  $('.modal').modal('hide');

                  showLevels();

              },
              error : function(res){

                  console.log(res.errors);

              }


            })

            e.preventDefault();

        })


    });


}

// show levels
function showLevels(){

              $('#orderName').hide();
              $('#formLevel').hide();
              $('#formYear').hide();
              $('#formSubject').hide();
              $('#formMaterial').hide();
                
              $('#table tbody, #table thead').remove();

              $('#formOrder').hide();

              $.get('{{ route("levels.index")}}', function(res){

                  // console.log(res);

                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>

                  `);

                  res.forEach(function(level, i){

                      $('#table > tbody').append(`

                        
                          <tr class="levelRow" data-id="${level.id}">

                              <th>${i+1}</th>
                              <td>${level.name}</td>
                              <td>${level.display_name}</td>
                              <td><button href="#" class="btn btn-primary editLevel" data-id="${level.id}">Edit</button></td>
                              <td><button href="#" class="btn btn-primary deleteLevel" data-id="${level.id}">delete</button></td>

                          </tr>
                        


                      `);

                  });

                  $(document).ready(function(){
                      
                      deleteLevel();
                      editLevel();

                  });

              });


              $('#table').show();

              $('#table tbody, #table thead').remove();


}

// add level
function addLevel(){

            $('#table').hide();
            $('#formYear').hide();
            $('#formOrder').hide();
            $('#formMaterial').hide();
            $('#formLevel').show();

            $.get('{{ route("orders.index") }}', function(res){

                res.forEach(function(order){

                    $('#order_id').append(`

                        <option value="${order.id}">${order.display_name}</option>

                    `);

                })

            })


            $('#formLevel').submit(function(e){

                    let orderId = $('#order_id :selected').val();
                    let token = $("meta[name='csrf-token']").attr("content");

                    $.post('{{ route("levels.store") }}', {

                      'name':$('input[name=levelName]').val(),
                      'display_name':$('input[name=levelDisplay_name]').val(),
                      'order_id' : orderId,
                      '_token' : token

                    }).done(function(res){

                        if(res.status == 'success'){

                            $('input[name=levelName]').val('');
                            $('input[name=levelDisplay_name]').val('');

                            showLevels();

                        } else if(res.status == 'error'){

                            $('input[name=levelName]').val('');
                            $('input[name=levelDisplay_name]').val('');

                        }


                    });

                    e.preventDefault();

            });

}


  // Delete Year
function deleteYear(){

      $('.deleteYear').click(function(){

        $('#table tbody, #table thead').remove();


        var id = $(this).data("id");

        console.log(id);

        var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: '{{ url("/years") }}/'+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);

                      showYears();

                      
                  }
              });

      });

}

// edit Year
function editYear(){

      $('.editYear').click(function(){


          var id = $(this).data("id");

          $('.modal').modal('show');

          $.get('{{ url("/years") }}/'+id, function(res){

              $('input[name=editName').val(res.name);
              $('input[name=editDisplayName').val(res.display_name);
              $('input[name=recordId').val(res.id);


          });


          $('#formEdit').submit(function(e){

              $('#table tbody, #table thead').remove();


              let name = $('input[name=editName').val();
              let display_name = $('input[name=editDisplayName').val();
              let token = $("meta[name='csrf-token']").attr("content");
              let recordId = $('input[name=recordId').val();

              console.log(recordId);

              $.ajax({

                url : '{{ url("/years/update") }}',
                type : 'post',       
                data : {
                'name' : name,
                'display_name' : display_name,
                'id' : recordId,
                '_token' : token
                        }, 
                success : function(res){

                    console.log(res.message);

                    $('.modal').modal('hide');

                    showYears();

                },
                error : function(res){

                    console.log(res.errors);
                    $('.modal').modal('hide');

                }


              })


              e.preventDefault();

          })

              

      });


}

// add new year
function addYear(){

            $('#table').hide();
            $('#formOrder').hide();
            $('#formLevel').hide();
            $('#formMaterial').hide();
            $('#formYear').show();


            $.get('{{ route("levels.index") }}', function(res){

                res.forEach(function(level){

                    $('#level_id').append(`

                        <option value="${level.id}">${level.display_name}</option>

                    `);

                })

            })


                $('#formYear').submit(function(e){

                    let levelId = $('#level_id :selected').val();
                    let token = $("meta[name='csrf-token']").attr("content");

                    $.post('{{ route("years.store") }}', {

                      'name':$('input[name=yearName]').val(),
                      'display_name':$('input[name=yearDisplay_name]').val(),
                      'level_id' : levelId,
                      '_token' : token

                    }).done(function(res){

                        if(res.status == 'success'){

                            $('input[name=yearName]').val('');
                            $('input[name=yearDisplay_name]').val('');

                            showYears();

                        } else if(res.status == 'error'){

                            $('input[name=yearName]').val('');
                            $('input[name=yearDisplay_name]').val('');

                        }


                    });

                    e.preventDefault();

                });

}

// show all years
function showYears(){

              $('#orderName').hide();
              $('#formLevel').hide();
              $('#formYear').hide();
              $('#formSubject').hide();
              $('#formMaterial').hide();
                
              $('#table tbody, #table thead').remove();

              $('#formOrder').hide();

              $.get('{{ route("years.index")}}', function(res){

                  // console.log(res);

                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>

                  `);

                  res.forEach(function(year, i){

                      $('#table > tbody').append(`

                        
                          <tr class="yearRow" data-id="${year.id}">

                              <th>${i+1}</th>
                              <td>${year.name}</td>
                              <td>${year.display_name}</td>
                              <td><button href="#" class="btn btn-primary editYear" data-id="${year.id}">Edit</button></td>
                              <td><button href="#" class="btn btn-primary deleteYear" data-id="${year.id}">delete</button></td>

                          </tr>
                        


                      `);

                  });

                  $(document).ready(function(){
                      
                      deleteYear();
                      editYear();

                  });

              });


              $('#table').show();

              $('#table tbody, #table thead').remove();

}

  // Delete Year
function deleteSubject(){

      $('.deleteSubject').click(function(){

        $('#table tbody, #table thead').remove();


        var id = $(this).data("id");

        console.log(id);

        var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: '{{ url("/subjects") }}/'+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);

                      showSubjects();

                      
                  }
              });

      });

}

// edit Subject
function editSubject(){

      $('.editSubject').click(function(){


          var id = $(this).data("id");

          $('.modal').modal('show');

          $.get('{{ url("/subjects") }}/'+id, function(res){

              $('input[name=editName').val(res.name);
              $('input[name=editDisplayName').val(res.display_name);
              $('input[name=recordId').val(res.id);


          });


          $('#formEdit').submit(function(e){

              $('#table tbody, #table thead').remove();


              let name = $('input[name=editName').val();
              let display_name = $('input[name=editDisplayName').val();
              let token = $("meta[name='csrf-token']").attr("content");
              let recordId = $('input[name=recordId').val();

              console.log(recordId);

              $.ajax({

                url : '{{ url("/subjects/update") }}',
                type : 'post',       
                data : {
                'name' : name,
                'display_name' : display_name,
                'id' : recordId,
                '_token' : token
                        }, 
                success : function(res){

                    console.log(res.message);

                    $('.modal').modal('hide');

                    showSubjects();

                },
                error : function(res){

                    console.log(res.errors);
                    $('.modal').modal('hide');

                }


              })


              e.preventDefault();

          })

              

      });


}


// show all subjects
function showSubjects(){

              $('#orderName').hide();
              $('#formLevel').hide();
              $('#formYear').hide();
              $('#formSubject').hide();
              $('#formMaterial').hide();

                
              $('#table tbody, #table thead').remove();

              $('#formOrder').hide();

              $.get('{{ route("subjects.index")}}', function(res){

                  // console.log(res);

                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">Name</th>
                            <th scope="col">Display Name</th>
                            <th scope="col">Year Name</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>

                  `);

                  res.forEach(function(subject, i){

                      $('#table > tbody').append(`

                        
                          <tr class="yearRow" data-id="${subject.id}">

                              <th>${i+1}</th>
                              <td>${subject.name}</td>
                              <td>${subject.display_name}</td>
                              <td>${subject.year_name}</td>
                              <td><button href="#" class="btn btn-primary editSubject" data-id="${subject.id}">Edit</button></td>
                              <td><button href="#" class="btn btn-primary deleteSubject" data-id="${subject.id}">delete</button></td>

                          </tr>
                        


                      `);

                  });

                  $(document).ready(function(){
                      
                      deleteSubject();
                      editSubject();

                  });

              });


              $('#table').show();

              $('#table tbody, #table thead').remove();


}

// add Subject
function addSubject(){
            $('#table').hide();
            $('#formOrder').hide();
            $('#formLevel').hide();
            $('#formYear').hide();
            $('#formMaterial').hide();
            $('#formSubject').show();


            $.get('{{ route("years.index") }}', function(res){

                res.forEach(function(year){

                    $('#year_id').append(`

                        <option value="${year.id}">${year.display_name}</option>

                    `);

                })

            })


                $('#formSubject').submit(function(e){

                    let yearId = $('#year_id :selected').val();
                    let token = $("meta[name='csrf-token']").attr("content");

                      $.ajax({
                          url: '{{ route("subjects.store") }}',
                          type: 'post',
                          data: {

                          'name':$('input[name=subjectName]').val(),
                          'display_name':$('input[name=subjectDisplay_name]').val(),
                          'year_id' : yearId,
                          '_token' : token

                           },
                          async: false,
                          cache: false,
                          success : function(data){

                                // console.log(data);
                                $('input[name=subjectName]').val('');
                                $('input[name=subjectDisplay_name]').val('');

                                showSubjects();

                          },
                          error : function(){

                                $('input[name=subjectName]').val('');
                                $('input[name=subjectDisplay_name]').val('');

                          }


                      });

                      e.preventDefault();

                });

}

function deleteMaterial(){

      $('.deleteMaterial').click(function(){

        $('#table tbody, #table thead').remove();


        var id = $(this).data("id");

        console.log(id);

        var token = $("meta[name='csrf-token']").attr("content");
   
              $.ajax(
              {
                  url: '{{ url("/materials") }}/'+id,
                  type: 'DELETE',
                  data: {
                      "id": id,
                      "_token": token,
                  },
                  success: function (res){

                      console.log(res.message);

                      showMaterials();

                      
                  }
              });

      });


}
// show Materials
function showMaterials(){

              $('#orderName').hide();
              $('#formOrder').hide();
              $('#formLevel').hide();
              $('#formYear').hide();
              $('#formSubject').hide();
              $('#formMaterial').hide();
                
              $('#table tbody, #table thead').remove();


              $.get('{{ route("materials.index")}}', function(res){

                  // console.log(res);

                  $('#table').append(`

                        <thead>
                          <tr>
                            <th scope="col">Index</th>
                            <th scope="col">الملف</th>
                            <th scope="col">الماده</th>
                            <th scope="col">الصف</th>
                            <th scope="col">المرحله</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>

                  `);

                  res.forEach(function(mat, i){
                    mat.year.levels.forEach(function(level){

                      $('#table > tbody').append(`

                        
                          <tr class="levelRow" data-id="${mat.id}">

                              <th>${i+1}</th>
                              <td>${mat.file}</td>
                              <td>${mat.subject.display_name}</td>
                              <td>${mat.year.display_name}</td>
                              <td>${level.display_name}</td>
                              <td><button href="#" class="btn btn-primary deleteMaterial" data-id="${mat.id}">delete</button></td>

                          </tr>
                        


                      `);
                    });

                  });

                  $(document).ready(function(){
                      
                      deleteMaterial();

                  });

              });


              $('#table').show();

              $('#table tbody, #table thead').remove();


}

// detach level from order
// function detachLevel(){

//       $('.detachLevel').click(function(){


//           let token = $("meta[name='csrf-token']").attr("content");
//           let orderId = $(".detachLevel").attr("value");
//           let levelId = $(this).data("id");
//           console.log(orderId);

//           $.post("{{ url('/levels/detach') }}", {
//             'orderId' : orderId,
//             'levelId' : levelId,
//             '_token' : token

//           }).done(function(res){

//               if(res.status == 'success'){

//                   console.log(res.message);

//               } 

//           })


//       })

// }

//   // show order with it's levels
// function showOrder(){

//     $('.showOrder').click(function(){

//         var id = $(this).data("id");

//         // console.log(id);   

//         $.get('{{ url("/orders") }}/'+id, function(res){

//             // console.log(res);

//             $('#table tbody, #table thead').remove();

//             $('#orderName').show().html(res.display_name);
//             // $('#orderName').data(res.id);

//             $('#table').append(`

//                 <thead>
//                   <tr>
//                     <th scope="col">Index</th>
//                     <th scope="col">Level Name</th>
//                     <th scope="col">Level Display Name</th>
//                     <th scope="col">Delete</th>
//                   </tr>
//                 </thead>

//             `);

//             res.levels.forEach(function(level, i){


//                       $('#table').append(`

//                         <tbody>
//                           <tr class="levelRow" data-id="${level.id}">

//                               <th>${i+1}</th>
//                               <td>${level.name}</td>
//                               <td>${level.display_name}</td>
//                               <td><button href="#" class="btn btn-primary detachLevel" data-id="${level.id}" value="${res.id}">delete</button></td>

//                           </tr>
//                         </tbody>


//                       `);

//             });

//             $(document).ready(function(){
                      
//               detachLevel();

//             });


//         })     

//     })

// }



  
$(document).ready(function(){

        //  Show all Users
        $('#usersButton').click(function(){

            showUsers();

        });

        // show all Orders
        $('#ordersButton').click(function(){

            showOrders();

        });


          // add new order
        $('#addOrder').click(function(){

            addOrder();


        });

          // show all levels
        $('#levelsButton').click(function(){

            showLevels();

        });

          // add new level
        $('#addLevel').click(function(){

            addLevel();


        })


        // add new Year
        $('#addYear').click(function(){

            addYear();

        })


        // show all years
        $('#yearsButton').click(function(){

              showYears();

        });


        // show all Subjects
        $('#subjectsButton').click(function(){
              showSubjects();
        })

        // add new Subject
        $('#addSubject').click(function(){

            addSubject();


        })
        // add new material
        $('#addMaterial').click(function(){

            $('#table').hide();
            $('#formOrder').hide();
            $('#formLevel').hide();
            $('#formYear').hide();
            $('#formSubject').hide();


            $('#formMaterial').show();

            $.get('{{ route("years.index") }}', function(res){
                res.forEach(function(year){
                    
                    $('#year').append(`

                        <option value="${year.id}">${year.display_name}</option>

                    `);


                })
            })

            $('#year').on('change', function(e){

                $('#subject_id').empty();

                let year = $('#year :selected').val();
                let token = $("meta[name='csrf-token']").attr("content");

                $.ajax({
                  url: '{{ route("getYear") }}',
                  type: 'post',
                  async: false,
                  cache: false,
                  data: {
                    'id': year,
                    '_token': token
                  },
                  success: function(res){

                    res.subjects.forEach(function(subject){

                      $('#subject_id').append(`

                        <option value="${subject.id}">${subject.display_name}</option>

                      `);

                    })

                  }

                })
                e.preventDefault();
            })


            // $('#formMaterial').submit(function(e){

            //         let subjectId = $('#subject_id :selected').val();
            //         let token = $("meta[name='csrf-token']").attr("content");


            //         $.ajax({
            //           url : '{{ route("materials.store") }}', 
            //           type: "post",
            //           data : {

            //           'subject_id':subjectId,
            //           'file':$('input[name=file]').val(),
            //           // '_token' : token

            //           },
            //           dataType: 'json',
            //           contentType: false,
            //           cache: false,
            //           processData:false,
            //           // headers: {
            //           //    'content-type': "application/pdf"
            //           // }
            //           // contentType: false,                  
            //           // processData:false,
            //           // dataType: "json",        
            //         }).done(function(res){


            //               if(res.status == 'success'){

            //                     console.log(res.message);

            //                     $('input[name=subject_id]').val('');
            //                     $('input[name=file]').val('');

            //               } else if(res.status == 'error'){

            //                     console.log(res.errors);

            //                     $('input[name=subject_id]').val('');
            //                     $('input[name=file]').val('');

            //               }
                            


            //         });

            //         e.preventDefault();
                    

            // });



        })

        //  Show all materials
        $('#materialsButton').click(function(){

            showMaterials();

        });



});


</script>
</body>
</html>