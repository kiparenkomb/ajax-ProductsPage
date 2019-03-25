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
    <!-- font-family: 'Raleway', sans-serif; -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <section class="containerSite">
        <ul id="js-productBox" class="productBox gridBox">
            <?php foreach (getItems(1, 4) as $item): ?>
                <li class="gridBox__item gridBox__item--4column">
                    <div class="productBox__item">
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
                        <div class="buttonBox">
                            <button class="buttonSite buttonSite--primary">Add to cart</button>
                            <a href="#" class="buttonSite buttonSite--secondary">View</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
            <?php foreach (getItems(2, 4) as $item): ?>
                <li class="gridBox__item gridBox__item--4column">
                    <div class="productBox__item productBox__item--hidden js-productBox__item">
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
                        <div class="buttonBox">
                            <button class="buttonSite buttonSite--primary">Add to cart</button>
                            <a href="#" class="buttonSite buttonSite--secondary">View</a>
                        </div>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <button id="js-loadMoreButton" class="buttonSite buttonSite--bigPadding buttonSite--center buttonSite--primary">Load more</button>
    </section>
    <footer class="footerSite containerSite">
        <div class="gridBox">
            <div class="footerSite__item gridBox__item">
                <div class="footerSite__holder">
                    <h3 class="footerSite__title">Hot offers</h3>
                    <p class="footerSite__description">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
                    <ul class="footerSite__description footerSite__description--list">
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Vestibulum ante ipsum primis in faucibus orci luctus</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Nam elit magna hendrerit sit amet tincidunt ac</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Quisque diam lorem interdum vitae dapibus ac scele</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Donec eget tellus non erat lacinia fermentum</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Donec in velit vel ipsum auctor pulvin</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footerSite__item gridBox__item">
                <div class="footerSite__holder">
                    <h3 class="footerSite__title">Hot offers</h3>
                    <p class="footerSite__description">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae. Suspendisse sollicitudin velit sed leo. Ut pharetra augue nec augue. Nam elit magna, hend.</p>
                    <ul class="footerSite__description footerSite__description--list">
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Vestibulum ante ipsum primis in faucibus orci luctus</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Nam elit magna hendrerit sit amet tincidunt ac</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Quisque diam lorem interdum vitae dapibus ac scele</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Donec eget tellus non erat lacinia fermentum</a>
                        </li>
                        <li class="icon-arrow">
                            <i class="fas fa-caret-right"></i>
                            <a href="#">Donec in velit vel ipsum auctor pulvin</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="footerSite__item gridBox__item">
                <div class="footerSite__holder">
                    <h3 class="footerSite__title">Store information</h3>
                    <ul class="footerSite__description footerSite__description--list">
                        <li class="icon-contact icon-location">
                            <address>Company Inc., 8901 Marmora Road, Glasgow, D04 89GR</address>
                        </li>
                        <li class="icon-contact icon-phone">
                            <span>Call us now toll free: <a href="tel:8002345-6789">(800) 2345-6789</a></span>
                        </li>
                        <li class="icon-contact icon-mail">
                            <span>Customer support: <a href="mailto:support@example.com">support@example.com</a></span>
                            <span>Press: <a href="mailto:pressroom@example.com">pressroom@example.com</a></span>
                        </li>
                        <li class="icon-contact icon-skype">
                            <span>Skype: <a href="skype:sample-username?call">sample-username</a></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/main.js"></script>
</body>
</html>