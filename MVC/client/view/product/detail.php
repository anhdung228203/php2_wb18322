
        <h2>Chi tiết sản phẩm</h2>

        <div class="row">
            <table>
                <tr>
                    <th>Trường dữ liệu</th>
                    <th>Giá trị</th>
                </tr>
                <tr>
                    <td>ID</td>
                    <td><?= $product['id'] ?></td>
                </tr>

                <tr>
                    <td>IMAGE</td>
                    <td>
                        <img src="<?= $product['image'] ?>" width="100px" alt="">
                    </td>
                </tr>

                <tr>
                    <td>NAME</td>
                    <td><?= $product['name'] ?></td>
                </tr>

            </table>

        </div>
    