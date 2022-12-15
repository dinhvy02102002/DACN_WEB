<?php require('layout/header.php') ?>
<style>
    main {
        font-family: "Encode Sans SC", sans-serif;
    }

    .row img {
        max-width: 100%;
    }
</style>
<main>
    <div class="container">
        <div id="ant-layout">
            <section class="search-quan">
                <i class="fas fa-search"></i>
                <form action="thucdon.php" method="GET">
                    <input name="search" type="text" placeholder="Tìm loại trái cây">
                </form>
            </section>
            <section class="main">
                <div class="row">
                    <h3>Fruit Online là gì?</h3>
                    <p>Tại wed, chúng tôi hiểu rằng một trái cây ngon có thể mang lại cho bạn sức khoẻ và tinh thần thoải mái nhất. Vì vậy, wed ra mắt nhằm kết nối các nhà hàng, quán ăn tại địa phương với tất cả mọi người. Bạn chỉ cần đặt món ăn yêu thích trên Fruit Online , đội ngũ giao hàng của chúng tôi sẽ nhanh chóng mang đến cho bạn bữa ăn nóng hổi và ngon lành.</p>
                </div>
                <div class="row">
                    <h3>Fruit Online hoạt động như thế nào?</h3>
                    <p>Fruit Online hoạt động từ 7h đến 22h hằng ngày.</p>
                </div>
                <div class="row">
                    <img src="images/bg/traicay.jpeg" alt="">

                </div>
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng tiền mặt không?</h3>
                    <p>Có nhé!</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể thanh toán bằng thẻ không?</h3>
                    <p>Hiện tại bạn có thể thanh toán thẻ khi nhận hàng. </p>
                </div>
                <div class="row">
                    <h3>Chi phí được tính như thế nào?</h3>
                    <p>Chi phí hiển thị trên ứng dụng bao gồm chi phí của  đơn giá của từng loại sản phẩm và phí vận chuyển(nếu có).</p>
                </div>
                <div class="row">
                    <h3>Tôi có thể đặt giao nhận những loại trái cây nào qua Fruit Online?</h3>
                    <p>Danh sách đa dạng các loại trái cây của chúng tôi bao gồm: hàng Việt, hàng nước ngoài ,có thể phục vụ cho mọi nhu cầu ăn uống của bạn.</p>
                </div>
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.8593953502177!2d108.14655379999999!3d16.0727845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142195a38e26479%3A0xa72c72c2d11548ce!2zOTAgxJDhu5NuZyBLw6gsIEhvw6AgS2jDoW5oIELhuq9jLCBMacOqbiBDaGnhu4N1LCDEkMOgIE7hurVuZyA1NTAwMDA!5e0!3m2!1svi!2s!4v1669819515758!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
        </div>
    </div>
</main>
<?php require('layout/footer.php') ?>