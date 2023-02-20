<h2 class="text-center p-2">
            Danh sách bình luận
</h2>
       <table class="table table-striped table-hover w-50 justify-content-center mx-auto">
            <thead>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Nội dung</th>
                <th>Tên sản phẩm</th>
                <th>Chức năng</th>     
            </thead>
            <tbody>
                <?php
                    foreach($cmtAll as $key => $value) { ?>
                        <tr>
                            <td><?= $value['id_comment']?></td>
                            <td><?= $value['name']?></td>
                            <td><?= $value['comment']?></td>
                            <td><?= $value['prd_name']?></td>
                            <td>
                                <a  href="../../../model/comment/deletecmt.php?id_comment=<?=$value['id_comment']?>"><button class="btn-danger rounded border border-danger" onclick="return confirm('Bạn có muốn xóa không?')">Xóa</button></a>
                               
                            </td>
                        </tr>
                  <?php  }
                ?>
               
            </tbody>
       </tablte>
    </div>