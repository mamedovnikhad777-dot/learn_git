<?php
include "header.php";
require_once "config.php";
?>
    <main>
        <section class="popular-tovar">
            <h3 aling="">Популярные товары</h3>

            <div class="tovar-list">
                <?php foreach ($products as $product):?>
                <div class="tovar-card">
                    <div class="tovar-img">
                        <img src="<?php echo $product['img']?>">
                    </div>
                    <div class="tovar-info">
                    <button>Купить</button>
                    <p> <?php echo $product ["name"]?></p>
                    <a href="product.php">Подробнее</a>
                </div>
                </div>

                <?php endforeach;?>
            </div>
        </section>
    </main>
<?php
include "footer.php"
?>

</body>

</html>