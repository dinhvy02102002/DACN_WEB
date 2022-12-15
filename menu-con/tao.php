<section class="recently">
                <div class="title">
                    <h1>Táo</h1>
                </div>
                <div class="product-recently">
                    <div class="row">
                        <?php
                        $sql = 'select * from product where id_category=3';
                        // $sql = 'select * from category';
                        $productList = executeResult($sql);
                        // $categoryList = executeResult($sql);
                        $index = 1;


                        foreach ($productList as $item) {
                            echo '
                                <div class="col">
                                    <a href="details.php?id=' . $item['id'] . '">
                                        <img style=" max-width: 167.89;
                                        height: 30vh;" class="thumbnail" src="admin/product/' . $item['thumbnail'] . '" alt="">
                                        <div class="title">
                                            <p>' . $item['title'] . '</p>
                                        </div>
                                        <div class="price">
                                            <span>' . number_format($item['price'], 0, ',', '.') . ' VNĐ</span>
                                        </div>
                                       
                                    </a>
                                </div>
                                ';
                        }
                        ?>
                    </div>
                </div>
            </section>