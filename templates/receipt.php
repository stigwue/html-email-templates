<!-- =============== START BODY =============== -->
<div class="movableContent" style="border: 0px; padding-top: 0px; position: relative;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td height="40"></td>
            </tr>
            <tr>
                <td>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td class="specbundle">
                                    <div class='contentEditableContainer contentTextEditable'>
                                        <div class='contentEditable' style='text-align: left;'>
                                            <h2 style="font-size: 20px;">Dear <?= isset($_POST['to_name']) ? $_POST['to_name'] : 'Customer' ?>,</h2>
                                            <br>
                                            <p>Kindly see the receipt matching your order below:</p>
                                            <div style="height: 20px"></div>
                                            <table class="table table-bordered" width="100%">
                                                <thead>
                                                    <tr style="text-align: center;">
                                                        <th colspan="2">Receipt <?= isset($_POST['order']) ? 'for ' . $_POST['order'] : '' ?></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <!-- loop for other quantities -->
                                                    <?php foreach ($_POST as $_index => $value): $_parts = explode('==', $value);?>
                                                        <?php if (count($_parts) == 2): ?>
                                                            <tr>
                                                                <th scope="row"><?= $_parts[0] ?></th>
                                                                <td><?= $_parts[1] ?></td>
                                                            </tr>
                                                        <?php endif; ?>
                                                    <?php endforeach; ?>
                                                    <tr>
                                                        <th scope="row"></th>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Total</th>
                                                        <td class="text-right">
                                                            <?= isset($_POST['currency']) ? $_POST['currency'] : '₦' ?>
                                                            <?= isset($_POST['amount']) ? number_format($_POST['amount'], 2) : number_format(0, 2) ?>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div style="height: 20px"></div>
                                            <p>Your order is being prepared. </p>
                                            <br>
                                            <div style="height: 20px"></div>
                                            <p>Thank you for choosing Printon.<br> Some Team</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

</div>

<!-- =============== END BODY =============== -->
