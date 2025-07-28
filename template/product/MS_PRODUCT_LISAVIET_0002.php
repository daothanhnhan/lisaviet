<div class="prices_lisaviet">
    <p class="prices_old_lisaviet"><?= number_format($row['product_price']) ?> VNĐ</p>
    <p class="prices_news_lisaviet"><?= number_format($row['product_price']-($row['product_price']*($row['product_price_sale']/100))) ?> VNĐ</p>
</div>