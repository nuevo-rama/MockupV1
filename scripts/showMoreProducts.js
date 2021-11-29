function showMoreProducts() {
    fetch("./products.json")
    .then(response => response.json())
        .then(data => {
            data.products.forEach(element => {
                let itemProductTemplate = document.getElementById("show_products_template").content;
                let itemProductClone = itemProductTemplate.cloneNode(true);

                itemProductClone.querySelector(".imageSrcMobile").setAttribute("src", element.imageSrcMobile);
                itemProductClone.querySelector(".imageSrcDesktop").setAttribute("src", element.imageSrc);
                itemProductClone.querySelector(".item_name").innerHTML = element.name;
                itemProductClone.querySelector(".item_listPrice").innerHTML = element.listPrice;
                itemProductClone.querySelector(".item_bestPrice").innerHTML = element.bestPrice;
                itemProductClone.querySelector(".item_fees").innerHTML = element.fees;
                
                document.getElementById("show_more_products").appendChild(itemProductClone);
            });
        })
    };
