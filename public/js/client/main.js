'use strict';
//REFERENCE TO THE HTML ELEMENT
const navigation = document.getElementById('mainNavigation');
const getCategoriesMainReq = new XMLHttpRequest();

let isSpinSubCategoriesWithProductMainRef = document.getElementById('isSpinSubCategoriesWithProductMain');
let isSpinSubCategoryLinksMainRef = document.getElementById('isSpinSubCategoryLinksMain');


getCategoriesMainReq.open('POST', localApi+'getCategoriesMain')
getCategoriesMainReq.send();

//Category Navigation links
getCategoriesMainReq.addEventListener('load', function (){
    const data = JSON.parse(this.responseText);
    if(data.length > 0){
        isSpinSubCategoryLinksMainRef.style.display = 'none';
    }

    //Add Categories to main page like navigation links
    for (let i = 0; i < data.length; i++){
        const html = `<li class="nav-item"><a class="nav-link hover-link" href='${local+data[i].slug}/aukcije'>${data[i].category_name}</a></li>`
        navigation.insertAdjacentHTML('beforeend', html)
    }
});

//Products

const getSubCategoriesWithProductMainRef = document.getElementById('getSubCategoriesWithProductMain');

const getSubCategoriesWithProductsRef = new XMLHttpRequest();
getSubCategoriesWithProductsRef.open('POST', localApi+'getSubCategoriesWithProducts')
getSubCategoriesWithProductsRef.send();

getSubCategoriesWithProductsRef.addEventListener('load', function () {
    const data = JSON.parse(this.responseText);
    if(data.length > 0) {
        isSpinSubCategoriesWithProductMainRef.style.display = 'none';
    }

    data.forEach(subCategoryWithProduct => {
        subCategoryWithProduct.products.forEach((product) => {
                const html =
                    ` <div class="col-12">
                        <div class="row">
                            <a href="#" class="col-12">${product.name}</a>
                            <span class="col-12 money"><strong>${product.price}</strong></span>
                        </div>
                        <hr>
                    </div>`;
                getSubCategoriesWithProductMainRef.insertAdjacentHTML('beforeend', html)
        })
    })

});

const getRecommendedProductsMainRef = document.getElementById('getRecommendedProductsMain');


const getRecommendedProductsReq = new XMLHttpRequest();
getRecommendedProductsReq.open('POST', localApi+'getRecommendedProducts')
getRecommendedProductsReq.send();

getRecommendedProductsReq.addEventListener('load', function () {
    const data = JSON.parse(this.responseText);
    console.log(data);

    data.forEach(recommended =>{
        console.log(recommended.name);
        const html =
            `
            <div class="col-4">
                <div class="row text-center">
                    <div class="col-12 pt-3">
                        <img class="rounded" src="https://picsum.photos/100" alt="Specific Image">
                    </div>
                    <div class="col-12 pt-2">
                        <a href="#">${recommended.name}</a>
                    </div>
                    <div class="col-12 pt-2 money">
                        <strong>${recommended.price}</strong>
                    </div>
<!--                    <div class="col-12 pt-2">-->
<!--                        <strong>20 ponude</strong>-->
<!--                    </div>-->
                </div>
            </div>
            `
        getRecommendedProductsMainRef.insertAdjacentHTML('beforeend', html);
    })


});

