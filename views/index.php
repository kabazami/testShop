<h3>Добро пожаловать!</h3>
<?php if(!empty($goods)){ ?>
<h4>Выберите интересующий Вас товар</h4>
<table class="table">
    <thead style="background-color: #ddd; font-weight: bold;">
    <tr>
        <td>Наименование</td>
        <td>Цена</td>
        <td>Описание</td>
        <td></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($goods as $product) { ?>
        <tr>
            <td><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($product->price)) echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($product->description)) echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><a class="btn btn-success" href="<?php echo APP_URL . '/orders/placeorder/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">Заказать</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php } else { ?>

<h4>К сожалению, на данный момент не представлено ни одного товара</h4>

<?php }?>