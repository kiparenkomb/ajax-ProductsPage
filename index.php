<?php
    require __DIR__ . "/model.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!-- font-family: 'Ubuntu', sans-serif; -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <section class="containerSite">
        <ul id="js-productBox" class="productBox">
            <?php foreach (getItems(1, 4) as $item): ?>
                <li class="productBox__item">
                    <div class="productBox__imgBox">
                        <img class="productBox__img" src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                    </div>
                    <h3 class="productBox__title">
                        <?php echo $item['title']; ?>
                    </h3>
                    <p class="productBox__description">
                        <?php echo $item['description']; ?>
                    </p>
                    <div class="productBox__cost">
                        <span class="productBox__cost--discount">
                            &#36;<?php echo
                                $item['discountCost'] ?
                                number_format( (float) $item['discountCost'], 2, '.', '')
                                : number_format( (float) $item['cost'], 2, '.', '');
                            ?>
                        </span>
                        <?php if ($item['discountCost'] !== null): ?>
                            <span class="productBox__cost--old">
                                &#36;<?php echo
                                    number_format( (float) $item['cost'], 2, '.', '');
                                ?>
                            </span>
                            <div class="productBox__banner productBox__banner--sale">Sale</div>
                        <?php endif; ?>
                        <?php if ($item['new']): ?>
                            <div class="productBox__banner productBox__banner--new">New</div>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endforeach; ?>
            <?php foreach (getItems(2, 4) as $item): ?>
                <li class="productBox__item productBox__item--hidden js-productBox__item">
                    <div class="productBox__imgBox">
                        <img class="productBox__img" src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                    </div>
                    <h3 class="productBox__title">
                        <?php echo $item['title']; ?>
                    </h3>
                    <p class="productBox__description">
                        <?php echo $item['description']; ?>
                    </p>
                    <div class="productBox__cost">
                        <span class="productBox__cost--discount">
                            &#36;<?php echo
                            $item['discountCost'] ?
                                number_format( (float) $item['discountCost'], 2, '.', '')
                                : number_format( (float) $item['cost'], 2, '.', '');
                            ?>
                        </span>
                        <?php if ($item['discountCost'] !== null): ?>
                            <span class="productBox__cost--old">
                                &#36;<?php echo
                                number_format( (float) $item['cost'], 2, '.', '');
                                ?>
                            </span>
                            <div class="productBox__banner productBox__banner--sale">Sale</div>
                        <?php endif; ?>
                        <?php if ($item['new']): ?>
                            <div class="productBox__banner productBox__banner--new">New</div>
                        <?php endif; ?>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <button id="js-loadMoreButton" class="loadMoreButton">Load more</button>
    </section>
    <footer>
        <h2>Footer</h2>
    </footer>
    <script src="/js/main.js"></script>
</body>
</html>