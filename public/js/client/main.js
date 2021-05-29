'use strict';
//REFERENCE TO THE HTML ELEMENT
const navigation = document.getElementById('mainNavigation');


request.open('POST', localApi+'getCategories')
request.send();

request.addEventListener('load', function (){
    const data = JSON.parse(this.responseText);
    // console.log(data[1].name);

    //Add Categories to main page like navigation links
    for (var i = 0; i < data.length; i++){
        const html = `<li class="nav-item"><a class="nav-link hover-link" href='${local+data[i].slug}'>${data[i].category_name}</a></li>`
        navigation.insertAdjacentHTML('beforeend', html)
    }
});

