<h2 class="text-center">Danh sách khách hàng</h2>
<table class="table table-striped table-hover w-50 justify-content-center mx-auto">
            <thead>
                <th>Mã khách hàng</th>
                <th>Tên đăng nhập</th>    
                <th>Tên khách hàng</th>  
                <th>Quyền<th>  
                
            </thead>
            <tbody>
                <?php
                    foreach($guest_data as $key => $value) { ?>
                        <tr>
                            <td><?= $value['id_guest']?></td>
                            <td><?= $value['user']?></td>
                            <td><?= $value['name']?></td>
                            <td><?= $value['role']?></td>
                            <td>
                                <a  href="../../../model/guest/deleteguest.php?id_type=<?=$value['id_guest']?>"><button class="btn-danger rounded border border-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
                            </td>
                        </tr>
                  <?php  }
                ?>
               
            </tbody>
       </tablte>
       <a class="d-flex justify-content-center" style="text-decoration: none;" href="../../../model/list/addNew.php"><button type="button" class="btn btn-outline-warning">Thêm mới</button></a>
    </div>