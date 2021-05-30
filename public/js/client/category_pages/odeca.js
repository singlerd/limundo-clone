//REFERENCE TO THE HTML ELEMENT
const getProductsRef = document.getElementById('getProducts');
const getProductsReq = new XMLHttpRequest();

getProductsReq.open('POST', localApi+'getProducts')
getProductsReq.send();

getProductsReq.addEventListener('load', function (){
    const data = JSON.parse(this.responseText);
    console.log(data);


    for (let i = 0; i < data.length; i++){

        //DATE
        let time = new Date(data[i].created_at)
        console.log("Vreme:" + time);
        //USING FUNCTION FROM custom.js
        let date = TimeAgo.inWords(time.getTime());

        if(data[i].description.length > 10) {
            data[i].description = data[i].description.substring(0, 70);
        }

        const html =
            `
             <div class="card mt-1">
                <div class="row d-flex">
                    <div class="col-4 p-3">
                        <img src="https://picsum.photos/seed/picsum/200/300" alt="product_image" height="200" width="200">
                    </div>
                    <div class="col-6 p-3 text-left">
                        <h6 class="pt-2"><a href="#">${data[i].name}</a></h6>
                        <p class="text-grey">${data[i].description}... <a href="#">Detaljnije</a></p>

                        <div class="pricing pt-1">
                            <h6 class="text-grey">Cena:</h6>
                            <h4 class="d-inline text-orange">${data[i].price} </h4>
                            <h6 class="d-inline text-grey">din</h6>
                        </div>
                    </div>
                    <div class="col-2 pt-4 text-left">
                        <div class="row">
                            <div class="col-12">
                                <i class="far fa-clock icons"></i>
                                <p class="d-inline ml-2">${date}

                                </p>
                                <hr>
                            </div>
                            <div class="col-12">
                                <i class="fas fa-chart-line icons"></i>
                                <p class="d-inline ml-2">0</p>
                                <hr>
                            </div>
                            <div class="col-12">
                                <i class="fas fa-user-friends icons"></i>
                                <p class="d-inline ml-2">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `
        getProductsRef.insertAdjacentHTML('beforeend', html)
    }
});
const getSubCategoriesRef = document.getElementById('getSubCategoryNavigation');
const getSubCategoriesReq = new XMLHttpRequest();

//GET SUBCATEGORIES
getSubCategoriesReq.open('POST', localApi+'getSubCategories')
getSubCategoriesReq.send();

getSubCategoriesReq.addEventListener('load', function () {
    const data = JSON.parse(this.responseText);
    console.log(data);
    for (var i = 0; i < data.length; i++) {
        const html =
            `
                <li class="nav-item"><a class="nav-link hover-link" href="">${data[i].sub_category_name}</a></li>
            `;
        getSubCategoriesRef.insertAdjacentHTML('beforeend', html)

    }

});
