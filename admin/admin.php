<?php
  include ("../header.php")
 ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <!--MY .CSS-->
    <link type="text/css" rel="stylesheet" href="admin.css" />
    <script src="admin.js" charset="utf-8"></script>
</head>
<body>
  <section class="container pizza-container">
    <!-- START OF PROMOTION CAROUSEL -->
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12" id="promocarousel">
        <div class="table-responsive">
              <table id="mytable" class="table table-bordred table-striped">
                   <thead>
                   <th>Име на продукта</th>
                    <th></th>
                     <th>Съставки</th>
                     <th></th>
                     <th>Цена</th>
                      <th>Промени</th>
                   </thead>
    <tbody>

    <tr>
    <td>Pepperoni</td>
    <td></td>
    <td>Cheese</td>
    <td></td>
    <td>10$</td>
    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    </tr>
    </tbody>

</table>

<div class="clearfix"></div>
            </div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
      <div class="modal-dialog">
    <div class="modal-content">
          <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
        <h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      </div>
          <div class="modal-body">
          <div class="form-group">
        <input class="form-control " type="text" placeholder="Име на продукта">
        </div>
        <div class="form-group">

        <input class="form-control " type="text" placeholder="Съставки">
        </div>
        <div class="form-group">
        <textarea rows="2" class="form-control" placeholder="Цена"></textarea>


        </div>
      </div>
          <div class="modal-footer ">
        <button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      </div>
        </div>
    <!-- /.modal-content -->
  </div>
      <!-- /.modal-dialog -->
    </div>




    </div>
  </div>
</section>
  <?php
  include ("../footer.php")
   ?>
</body>
</html>
