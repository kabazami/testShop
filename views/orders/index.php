<h3>Заказы</h3>
<?php if(!empty($orders)){ ?>
<table class="table">
    <thead style="background-color: #ddd; font-weight: bold;">
    <tr>
        <td>Номер</td>
        <td>Наименование товара</td>
        <td>Размещен</td>
        <td colspan="2"></td>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $order) { ?>
        <tr>
            <td><?php if (isset($order->id)) echo htmlspecialchars($order->id, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($order->name)) echo htmlspecialchars($order->name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php if (isset($order->created_at)) echo htmlspecialchars($order->created_at, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><a class="btn btn-danger" href="<?php echo APP_URL . '/orders/deleteorder/' . htmlspecialchars($order->id, ENT_QUOTES, 'UTF-8'); ?>">Удалить</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php } else { ?>

<h4>К сожалению, не размещено ни одного заказа</h4>

<?php } ?>
