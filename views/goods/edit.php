<h3>Редактирование продукта</h3>
        <form action="<?php echo APP_URL; ?>/goods/updateproduct" method="POST">
            <label>Наименование</label>
            <input class="form-control" autofocus type="text" name="name" value="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Цена</label>
            <input class="form-control" type="number" name="price" value="<?php echo htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8'); ?>" required />
            <label>Описание</label>
            <textarea class="form-control" name="description" style="height:100px"><?php echo htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8'); ?>" />
            <input class="btn btn-flat" type="submit" name="sub_update_product" value="Обновить" />

            <hr/>
            <dl class="dl-horizontal">
                <dt>Создан:</dt>
                <dd><?php echo htmlspecialchars($product->created_at, ENT_QUOTES, 'UTF-8'); ?></dd>
                <dt>Изменён:</dt>
                <dd><?php echo htmlspecialchars($product->updated_at, ENT_QUOTES, 'UTF-8'); ?></dd>
            </dl>
        </form>