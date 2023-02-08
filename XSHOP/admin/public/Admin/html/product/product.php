
<h2 class="text-center p-2">
            Danh sách sản phẩm
            
</h2>
       <table class="table table-striped table-hover w-75 justify-content-center mx-auto">
            <thead>
                <th>Mã loại</th>
                <th>Tên sản phẩm</th>    
                <th>Tên loại</th>    
                <th>Mô tả</th>    
                <th>Giá</th>    
                <th>Tình trạng</th></th>    
                <th>Giảm giá</th>    
                <th>Lượt xem </th>    
                <th>Hình ảnh</th>     
            </thead>
            <tbody>
                <?php
                    foreach($data_product as $index => $value) { ?>
                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['name']?></td>
                            <td><?= $value['type_name']?></td>
                            <td><?= $value['disc']?></td>
                            <td><?= $value['price']?></td>
                            <td><?= $value['status']?></td>
                            <td><?= $value['discount']?></td>
                            <td><?= $value['view']?></td>
                            <td><img class="img-thumbnail w-25" src="../image<?=$value['img']?>" alt="Có ảnh"></td>
                            <td>
                                <a  href="../../../model/product/delete.php?id=<?=$value['id']?>"><button class="btn-danger rounded border border-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
                                <a href="../../../model/product/editproduct.php?id=<?=$value['id']?>"><button class="btn-danger rounded border border-danger">Sửa</button></a>
                            </td>
                        </tr>
                  <?php  }
                ?>
               
            </tbody>
       </table>
       <a class="d-flex justify-content-center" style="text-decoration: none;" href="../../../model/product/addproduct.php"><button type="button" class="btn btn-outline-warning">Thêm mới</button></a>
    </div>
