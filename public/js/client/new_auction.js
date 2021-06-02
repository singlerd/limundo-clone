//DROPZONE FOR FILE UPLOAD
Dropzone.options.dropzoneForm = {
    autoProcessQueue : false,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",

};
const submitNewAuctionBtnRef = document.getElementById('submitNewAuctionBtn')
const newAuctionFormRef = document.getElementById('newAuctionForm')

const addNewAuctionReq = new XMLHttpRequest();
addNewAuctionReq.open('POST', localApi+'getRecommendedProducts')
addNewAuctionReq.send();
submitNewAuctionBtnRef.addEventListener('click',  function (e){

    e.preventDefault();
   const name = document.getElementById('name').value;
   const description = document.getElementById('description').value;
   const product_state = document.getElementById('product_state').value;
   const price = document.getElementById('price').value;

    // Create a new auction
    let data = new FormData()
    const inputFiles = document.querySelector('input[type="file"]')

    data.append('files', inputFiles.files);
    data.append('sub_category_id', 1);
    data.append('name', name);
    data.append('description', description);
    data.append('product_state', product_state);
    data.append('lager', 2);
    data.append('price', price);
    data.append('slug', 'slujhahsd');
    fetch(localApi + 'addNewAuction', {
        headers: { "Content-Type": "application/json; charset=utf-8" },
        method: 'POST',
        body: data,
        mode: 'no-cors'
    }).then(response => response.json())
        .then(data => {
            alert('Success:', data);
        })
        .catch((error) => {
            alert('Error:', error);
        });
});
