<h3>Товары</h3>
<?php if(!empty($goods)){ ?>
<table class="table">
    <thead style="background-color: #ddd; font-weight: bold;">
    <tr>
        <td>Наименование</td>
        <td>Цена</td>
        <td>Описание</td>
        <td colspan="2"></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($goods as $product) { ?>
        <tr>
            <td><?php if (isset($product->name)) echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($product->price)) echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($product->description)) echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><a class="btn btn-warning" href="<?php echo APP_URL . '/goods/editproduct/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">Править</a></td>
            <td><a class="btn btn-danger" href="<?php echo APP_URL . '/goods/deleteproduct/' . htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>">Удалить</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php } ?>

<div class="box">
<h3>Добавить товар</h3>
<form action="<?php echo APP_URL; ?>/goods/addproduct" method="POST">
    <label>Наименование</label>
    <input class="form-control" type="text" name="name" value="" required />
    <label>Цена</label>
    <input class="form-control" type="number" name="price" value="" required />
    <label>Описание</label>
    <textarea class="form-control" name="description" style="height:100px"></textarea>
    <input class="btn btn-flat" type="submit" name="sub_add_product" value="Добавить" />
</form>
</div>
