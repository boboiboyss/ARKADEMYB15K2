<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  
    <title>Arkademy Bootcamp</title>
</head>

<body>
    <div class="container-fluid" id="shadow">
        <nav class="navbar navbar-expand-lg navbar-link bg-link">
            <img class="arkademy-logo arkademy-size" src="img/arkademy.png" alt="" />
            <div class="col-sm-10">
                <h3>ARKADEMY BOOTCAMP</h3>
            </div>
            <button type="button" id="add" class="btn" data-toggle="modal" data-target="#modal-add" style="background: orange; color:white">
                   ADD
            </button>
        </nav>
    </div>
    <div class="container pt-5">
        <div class="card" id="shadow">
            <div class="card-body">
                <table class="table" style="text-align: center;">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Work</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";

                        $query = mysqli_query($koneksi, "select * from tb_nama join tb_work on tb_nama.id_work = tb_work.id join tb_kategori on tb_nama.id_salary = tb_kategori.id");
                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <tr>
  
                                <td><?= $row['name'] ?></td>
                                <td><?= $row['work'] ?></td>
                                <td><?= $row['salary'] ?></td>
                                <td>
                                    <i class='fa fa-edit' id_nama='<?= $row['id_nama']; ?>' nama='<?= $row['name'] ?>' id="update" style="cursor: pointer;font-size:22px" data-toggle="modal" data-target="#modal-edit" work ='<?= $row['id_work'] ?>' kategory='<?= $row['id_salary'] ?>'></i>
                                     | 
                                    <i class="fa fa-trash" id="delete" data-toggle="modal" data-target="#modal-delete" style="cursor: pointer;font-size:22px" id_nama='<?= $row['id_nama'] ?>' nama='<?= $row['name'] ?>'></i>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal Add -->
   
    <div class="modal fade" id="modal-add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="proses_save.php" name="form-data"  method="POST">
                        <div class="form-group">
                            <input type="hidden" class="form-control id" name="id_nama" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control nama" name="name" placeholder='Name' />
                        </div>
                        <div class="form-group">
                            <select class="form-control work" name="id_work">
                                <option value="0">Work</option>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_work");
                                while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['work'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control kategori" name="id_salary">
                                <option value="0">Kategori</option>
                                <?php
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['salary'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn" style="background:orange;color:white">ADD</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- Modal Hapus -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><br/>
                    
                    <h1 class="modal-title text-center" style="color:#66CDAA"><i class="fa fa-check-circle-o fa-5x"></i></h1>
                    <h3 class="text-center nama">Berhasil Dihapus!</h3>
                </div>
            </div>
        </div>
    </div>

    <script>


        $("i#update").click(function(){
            var id = $(this).attr("id_nama");
            var nama = $(this).attr("nama");
            var work = $(this).attr("work");
            var kategori = $(this).attr("kategory");

            $("div#modal-add").attr("id", "modal-edit");
            $(".modal-header h5 ").text('EDIT DATA');
            $(".modal-footer button.btn").text("EDIT");

            $("form").attr("action", "proses_edit.php");
            $("div.modal-body div.form-group select.work").val(work);
            $("div.modal-body div.form-group select.kategori").val(kategori);
            $("div.modal-body div.form-group input.nama").val(nama);
            $("div.modal-body div.form-group input.id").val(id);
            

        })

        $("button#add").click(function(){
            $("div#modal-edit").attr("id", "modal-add");
            $(".modal-header h5 ").text('ADD DATA');
            $(".modal-footer button.btn").text("ADD");
            $("div.modal-body div.form-group select.work").val(0);
            $("div.modal-body div.form-group select.kategori").val(0);
            $("div.modal-body div.form-group input.nama").val("");
            $("form").attr("action", "proses_save.php");

        })

        $("i#delete").click(function(){
            var id= $(this).attr('id_nama');
            var nama = $(this).attr('nama');
            $("div.modal-body h3.nama").text("Data " + nama + " telah berhasil dihapus")
            $("div#delete").attr("id", "modal-delete");

            setTimeout(function(){
                document.location.href='proses_delete.php?id_nama=' +id;
            }, 3000);

            
        })

    </script>
</body>

</html>