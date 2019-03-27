<?php
    require __DIR__ . "/model.php";
?>

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
