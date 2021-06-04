
//REFERENCE TO PAYMENT METHODS CHECKBOXES
let payment_methods_checks = [];
$("input[type='checkbox']", $('#payment_methods')).click(function(){
    if(this.checked){
        payment_methods_checks.push(this.value);
    }
    else {
        var index = payment_methods_checks.indexOf(this.value);
        payment_methods_checks.splice(index, 1);
    }
});

//REFERENCE TO SENDING METHODS CHECKBOXES
let sending_methods_checks = [];
$("input[type='checkbox']", $('#sending_methods')).click(function(){
    if(this.checked){
        sending_methods_checks.push(this.value);
    }
    else {
        var index = sending_methods_checks.indexOf(this.value);
        sending_methods_checks.splice(index, 1);
    }
});

const submitNewAuctionBtnRef = document.getElementById('submitNewAuctionBtn')
const newAuctionFormRef = document.getElementById('newAuctionForm')

const addNewAuctionReq = new XMLHttpRequest();
addNewAuctionReq.open('POST', localApi+'getRecommendedProducts')
addNewAuctionReq.send();
submitNewAuctionBtnRef.addEventListener('click',  function (e){
    e.preventDefault();

    const successColor = '#ABC100'
    const errorColor = '#E25952'
    //NAME INPUT
    const errorName = document.getElementById('errorName');
    const nameInput = document.getElementById('name');
    if(nameInput.value.length == 0){
        nameInput.style.borderColor= errorColor;
        errorName.style.display = 'block';
    }else{
        errorName.style.display = 'none';
        nameInput.style.borderColor= successColor;
    }

    //DESCRIPTION INPUT
    const errorDesc = document.getElementById('errorDesc');
    const descInput = document.getElementById('description');
    if(descInput.value == 0){
        descInput.style.borderColor = errorColor;
        errorDesc.style.display = 'block';
    }else{
        errorDesc.style.display = 'none';
        descInput.style.borderColor= successColor;
    }

    //FILES INPUT
    const errorFiles = document.getElementById('errorDesc');
    const filesInput = document.getElementById('files');

    if(filesInput.value === ""){
        filesInput.style.borderColor = errorColor;
        errorFiles.style.display = 'block';
    }else{
        errorFiles.style.display = 'none';
        filesInput.style.borderColor= successColor;
    }

    //PRODUCT STATE INPUT
    const errorProductState = document.getElementById('errorProductState');
    const productStateInput = document.getElementById('product_state');

    if(!productStateInput.checked){
        filesInput.style.borderColor = errorColor;
        errorProductState.style.display = 'block';
    }else{
        errorProductState.style.display = 'none';
        filesInput.style.borderColor= successColor;
    }

    //CATEGORY INPUT - select1
    const errorSelect1 = document.getElementById('errorSelect1');
    const select1Input = document.getElementById('select1');

    if(!select1Input.selected){
        select1Input.style.borderColor = errorColor;
        errorSelect1.style.display = 'block';
    }else{
        errorSelect1.style.display = 'none';
        select1Input.style.borderColor= successColor;
    }



    //PRICE INPUT
    const errorPrice = document.getElementById('errorPrice');
    const priceInput = document.getElementById('price');

    if(priceInput.value.length == 0){
        priceInput.style.borderColor = errorColor;
        errorPrice.style.display = 'block';
    }else{
        errorPrice.style.display = 'none';
        priceInput.style.borderColor= successColor;
    }

   const name = document.getElementById('name').value;
   const description = document.getElementById('description').value;
   const product_state = document.getElementById('product_state').value;
   const price = document.getElementById('price').value;
   const sub_category_id = document.getElementById('select2').value;
   const lager = document.getElementById('lager').value;

    // Create a new auction
    let data = new FormData()
    const totalfiles = document.getElementById('files').files.length


    for (var index = 0; index < totalfiles; index++) {
        data.append("files[]", document.getElementById('files').files[index]);
    }
    // console.log(payment_methods_checks)
    // console.log(sending_methods_checks)

    data.append('sub_category_id', sub_category_id);
    data.append('name', name);
    data.append('description', description);
    data.append('product_state', product_state);
    data.append('lager', lager);
    data.append('price', price);
    data.append('payment_methods[]', payment_methods_checks.join(","));
    data.append('sending_methods[]', sending_methods_checks.join(","));

    // data.append('slug', 'slujhahsd');
    fetch(localApi + 'addNewAuction', {
        headers: { "Content-Type": "application/json; charset=utf-8" },
        method: 'POST',
        body: data,
        mode: 'no-cors'
    }).then(response => response.json())
        .then(data => {
            // success
            iziToast.success({timeout: 5000, icon: 'fa fa-chrome', title: 'Uspešno', message: 'Uspešno ste dodali novi predmet.'});
            window.setTimeout(function(){
                // Move to a main page after 3 seconds
                window.location.href = local + 'main';
            }, 3000);
        })
        .catch((error) => {
            // error
            iziToast.error({title: 'Greška', message: 'Niste ispunili sva polja'});
        });
});

//TODO with vanilla js
$('#select2').hide()
$("#select1").change(function() {
    if ($(this).data('options') === undefined) {
        /*Taking an array of all options-2 and kind of embedding it on the select1*/
        $(this).data('options', $('#select2 option').clone());
        $('#select2').show()

    }
    var id = $(this).val();
    var options = $(this).data('options').filter('[value=' + id + ']');
    $('#select2').html(options);
});

const listCategoriesForSelectRef = document.getElementById('select1');

const listCategoriesForSelectReq = new XMLHttpRequest();
listCategoriesForSelectReq.open('POST', localApi+'listCategoriesForSelect')
listCategoriesForSelectReq.send();

listCategoriesForSelectReq.addEventListener('load', function (){
    const data = JSON.parse(this.responseText);
    console.log(data)

    data.forEach(category => {
        const html = `<option value="${category.id}">${category.category_name}</option>`;
        listCategoriesForSelectRef.insertAdjacentHTML('beforeend', html);
    })
})


const listSubCategoriesForSelectRef = document.getElementById('select2');

const listSubCategoriesForSelectReq = new XMLHttpRequest();
listSubCategoriesForSelectReq.open('POST', localApi+'listSubCategoriesForSelect')
listSubCategoriesForSelectReq.send();

listSubCategoriesForSelectReq.addEventListener('load', function (){
    const data = JSON.parse(this.responseText);
    console.log(data)

    data.forEach(sub_category => {
        const html = `<option value="${sub_category.category_id}">${sub_category.sub_category_name}</option>`;
        listSubCategoriesForSelectRef.insertAdjacentHTML('beforeend', html);

    })

})
