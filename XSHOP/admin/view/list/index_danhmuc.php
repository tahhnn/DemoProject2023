<h2 class="text-center p-2">
            Danh sách Loại
</h2>
       <table class="table table-striped table-hover w-50 justify-content-center mx-auto">
            <thead>
                <th>Mã loại</th>
                <th>Tên loại</th>    
                <th>Chức năng</th>     
            </thead>
            <tbody>
                <?php
                    foreach($data as $key => $value) { ?>
                        <tr>
                            <td><?= $value['id']?></td>
                            <td><?= $value['name']?></td>
                            <td>
                                <a  href="./list/delete.php?id=<?=$value['id']?>"><button class="btn-danger rounded border border-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
                                <a href="./list/edit.php?id=<?=$value['id']?>"><button class="btn-danger rounded border border-danger">Sửa</button></a>
                            </td>
                        </tr>
                  <?php  }
                ?>
               
            </tbody>
       </tablte>
       <a class="d-flex justify-content-center" style="text-decoration: none;" href="./list/addNew.php"><button type="button" class="btn btn-outline-warning">Thêm mới</button></a>
    </div>