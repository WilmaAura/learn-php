<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list-mhs</title>
</head>
<body>
    <table>
        <thead>

        </thead>
        <tbody>
            <?php if(count($mhs) === 0) ?>
                    <tr><td colspan="6">Data Tidak Ada</td></tr>
            <?php else: ?>
                    <?php foreach($mhs as $m): ?>
                         <tr>
                            <td><?php echo $m["NIM"] ?></td>
                            <td><?php echo $m["nama"] ?></td>
                            <td><?php echo $m["jurusan"] ?></td>
                        </tr>
                        <td>
                        <a href="../controller/delete.php>?id   =
                        <?php echo $m ["NIM"];?>"></a>
                        </td>
                    <?php endforeach?>
            <?php endif ?>
        </tbody>
    </table>
</body>
</html>