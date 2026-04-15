<?php
include "header.php";
require_once "config.php";
?>
    <main>
        <section class="product-page">
            <div class="tovar-img-page">
                <img src="i.webp" alt="", height="400px", width="400px">
            </div>
            <div class="tovar-info-page">
                <h1>IPhone 16</h1>
                <p>Описание</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, nulla ad dicta velit quae, fugit laborum natus laudantium, placeat porro dolor incidunt molestias eum iste perferendis consectetur amet temporibus autem.</p>
                <div class="price">
                    120000
                </div>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit unde asperiores aut in ipsum tempora facere eaque quis ex quae! Unde id deserunt suscipit optio aperiam qui nulla labore? Harum.</li>
                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quaerat recusandae dolor veritatis. Repudiandae dolorum reiciendis molestiae explicabo ut recusandae ad praesentium corrupti, perferendis officia earum quaerat distinctio id nostrum!</li>
                </ul>
                <button id="buyBtn">Купить</button>
            </div>
        </section>
    </main>
    <?php
        include "footer.php"
    ?>
    <script>
        const btn = document.getElementById('buyBtn')
        btn.addEventListener('click', (e)=>{
            alert('Поздравляем с покупкой!')
        })
    </script>
</body>

</html>