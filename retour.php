<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <p>Merci <strong><?= $_GET['first_name']; ?> <?= $_GET['last_name']; ?></strong> pour votre commande.</p>

        <?php if(isset($_GET['order']) && !empty($_GET['order'])) : ?>
            <p>Conformément à votre commande, nous vous enverrons prochainement : </p>
            <ul>
                <?php foreach($_GET['order'] as $order) : ?>
                    <li><strong><?php echo ucfirst($order); ?></strong></li>
                <?php endforeach ?>
            </ul>
        <?php endif ?>

        <p>Nous n'oublierons pas votre cadeau : un <strong><?= $_GET['gift']; ?></strong></p>

    </body>
</html>