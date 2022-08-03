<?php
    require_once 'includes/database.php';
    require_once 'includes/product.php';
    require_once 'includes/products_list_include.php';

    var_dump($datas);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'includes/header.php';
    ?>
    <main>
        <table>
            <?php foreach ($filteredDatas as $data) { ?>
                <tr>
                    <?php foreach($data as $information) { ?>
                        <td>
                            <?php echo $information; ?>
                        </td>
                    <?php } ?>
                </tr> 
            <?php } ?>
        </table>
    </main>
    <?php
        include 'includes/footer.php';
    ?>
</body>
</html>