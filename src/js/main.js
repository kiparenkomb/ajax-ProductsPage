let $offset = 2,
    $limit  = 4,
    productBox     = document.getElementById('js-productBox'),
    productItem    = document.getElementsByClassName('js-productBox__item'),
    loadMoreButton = document.getElementById('js-loadMoreButton');

loadMoreButton.addEventListener('click', function() {
    $offset = $offset + 1;
    let i = productItem.length;
    while (i--) {
        productItem[i].classList.add('is-visible');
        productItem[i].classList.remove('productBox__item--hidden');
    }

    postAjax(
        '/server/load.php', 'offset=' + $offset + '&' + 'limit=' + $limit,
        function(data) {
            let productSet = JSON.parse(data);

            if (productSet.length) {
                productSet.map(function (name) {
                    productBox.innerHTML += (
                        `<li class="gridBox__item gridBox__item--4column">
                            <div class="productBox__item productBox__item--hidden js-productBox__item">
                                <div class="productBox__imgBox">
                                    <img class="productBox__img" src="${name.img}" alt="${name.title}">
                                </div>
                                <h3 class="productBox__title">${name.title}</h3>
                                <p class="productBox__description">${name.description}</p>
                                <div class="productBox__cost">
                                    <span class="productBox__cost--discount">
                                        ${name.discountCost ? `&#36;${name.discountCost.toFixed(2)}` : `&#36;${name.cost.toFixed(2)}`}
                                    </span>
                                    ${name.discountCost !== null ? `<span class="productBox__cost--old">&#36;${name.cost.toFixed(2)}</span><div class="productBox__banner productBox__banner--sale">Sale</div>` : ''}
                                    ${name.new ? `<div class="productBox__banner productBox__banner--new">New</div>`: ''}
                                </div>
                                <div class="buttonBox">
                                    <button class="buttonSite buttonSite--primary">Add to cart</button>
                                    <a href="#" class="buttonSite buttonSite--secondary">View</a>
                                </div>
                            </div>
                        </li>`
                    );
                });
            }
            if (productSet.length === 0) {
                loadMoreButton.style.display = 'none';
            }
        }
    );
    return false;
});

function postAjax(url, data, success) {
    var params = typeof data == 'string' ? data : Object.keys(data).map(
        function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
    ).join('&');

    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xhr.open('POST', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState > 3 && xhr.status === 200) {
            success(xhr.responseText);
        }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(params);

    return xhr;
}
