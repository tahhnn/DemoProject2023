<h2 class="text-center p-2">
            Danh sách sản phẩm
</h2>
       <table class="table table-striped table-hover w-50 justify-content-center mx-auto">
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
                    for($i=1;$i< count($data_product);$i++) { ?>
                        <tr>
                            <td><?= $data_product[$i]['id']?></td>
                            <td><?= $data_product[$i]['name']?></td>
                            <td><?= $data_product[$i]['type_name']?></td>
                            <td><?= $data_product[$i]['disc']?></td>
                            <td><?= $data_product[$i]['price']?></td>
                            <td><?= $data_product[$i]['status']?></td>
                            <td><?= $data_product[$i]['discount']?></td>
                            <td><?= $data_product[$i]['View']?></td>
                            <td><img src="/XSHOP/html/./img/<?=$data_product[$i]['img']?>" alt=""></td>
                            <td>
                                <a  href=""><button class="btn-danger rounded border border-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
                                <a href=""><button class="btn-danger rounded border border-danger">Sửa</button></a>
                            </td>
                        </tr>
                  <?php  }
                ?>
               
            </tbody>
       </table>
       <a class="d-flex justify-content-center" style="text-decoration: none;" href=""><button type="button" class="btn btn-outline-warning">Thêm mới</button></a>
    </div>