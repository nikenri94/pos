<!DOCTYPE html>
<html lang="en">
  <head> 
      @extends('kasir.master')
  </head>

  <body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="underconstruct">Home</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="underconstruct">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="event">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="tdtechno">Today's Techno</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="underconstruct">IFShop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container">
   <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Penjualan</h3>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-sm-6">
            <h5 class="text-align">Tanggal</h5>
            <div class="input">
              <input type="text" class="form-control">
            </div>
            <br>
            <h5 class="text-align">No Struk</h5>
            <div class="input">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <h5 class="text-align">Nama Pembeli</h5>
            <div class="input">
              <input type="text" class="form-control">
            </div>
            <br>
            <h5 class="text-align">Alamat</h5>
            <div class="input">
              <input type="text" class="form-control">
            </div>
          </div>
        </div> <!-- row -->
        <div class="row">
          <div class="col-sm-12">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Diskon</th>
                    <th>Total</th>
                    <th>Delete</th>
                    
                  </tr>
                </thead>
                <tbody class="neworderbody">
                  <tr>
                    <td class="no">1</td>
                    <td>
                      <select class="form-control product_id" name="idproduk">
                        
                        <option data-price="harga" value="namaproduk">Nama Produk</option>
                       
                      </select>
                    </td>
                    <td>
                      <input type="text" class="qty form-control" name="qty[]" value="email">
                    </td>
                    <td>
                      <input type="text" class="price form-control" name="price[]" value="email">
                    </td>
                    <td>
                      <input type="text" class="dis form-control" name="dis[]">
                    </td>
                    <td>
                      <input type="text" class="amount form-control" name="amount[]">
                    </td>
                    <td>
                      <input type="button" class="btn btn-danger delete" value="x">
                    </td>
                  </tr>

                </tbody>
                
                <tfoot>
                  <th colspan="6">
                  <h3 class="total">Total Bayar:&nbsp; Rp. &nbsp;<b class="total">0</b><h3>
                  </th>
                </tfoot>
                              

              </table>
              <input type="button" class="btn btn-lg btn-primary add" value="Add New Item">
            </div>
        </div> <!-- row-->
        <div class="row">
          <div class="col-sm-6">
            <h3 class="bayar-size">Uang Bayar</h3>
            <div class="input">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-6">
            <h3 class="bayar-size">Kembalian</h3>
            <div class="input">
              <input type="text" class="form-control">
            </div>
          </div>
        </div> <!-- row-->
        <div class="row padding-content">
          <div class="col-sm-6">
          <center>
            <button type="button" class="btn btn-lg btn-warning add">
              <h3>Cetak dan Simpan Struk</h3>
            </button>
          </center>
          </div>
          <div class="col-sm-6">
          <center>
             <button type="button" class="btn btn-lg btn-danger add">
              <h3>Penjualan Baru</h3>
            </button>
          </center>
          </div>
        </div>
      </div>
   </div>
  </div>

  </body>
<script type="text/javascript">
$(function () {
  $('.add').click(function () {
      var product = $('.product_id').html();
      var n = ($('.neworderbody tr').length - 0) + 1;
      var tr = '<tr><td class="no">' + n + '</td>' + '<td><select class="form-control product_id" name="product_id[]">' + product + '</select></td>' +
        '<td><input type="text" class="qty form-control" name="qty[]" value="{{ old('
      email ') }}"></td>' +
        '<td><input type="text" class="price form-control" name="price[]" value="{{ old('
      email ') }}"></td>' +
        '<td><input type="text" class="dis form-control" name="dis[]"></td>' +
        '<td><input type="text" class="amount form-control" name="amount[]"></td>' +
        '<td><input type="button" class="btn btn-danger delete" value="x"></td></tr>';
      $('.neworderbody').append(tr);
    });
  });
</script>
</html>