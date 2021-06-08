//LINKS FOR LOCALHOST
const localApi = 'http://localhost:8000/api/';
const local = 'http://localhost:8000/'


//TIME
var TimeAgo = (function() {
    var self = {};

    // Public Methods
    self.locales = {
        prefix: '',
        sufix:  '',

        seconds: 'less than a minute',
        minute:  'about a minute',
        minutes: '%d minutes',
        hour:    'about an hour',
        hours:   'pre %d h',
        day:     'a day',
        days:    '%d days',
        month:   'about a month',
        months:  '%d months',
        year:    'about a year',
        years:   '%d years'
    };

    self.inWords = function(timeAgo) {
        var seconds = Math.floor((new Date() - parseInt(timeAgo)) / 1000),
            separator = this.locales.separator || ' ',
            words = this.locales.prefix + separator,
            interval = 0,
            intervals = {
                year:   seconds / 31536000,
                month:  seconds / 2592000,
                day:    seconds / 86400,
                hour:   seconds / 3600,
                minute: seconds / 60
            };

        var distance = this.locales.seconds;

        for (var key in intervals) {
            interval = Math.floor(intervals[key]);

            if (interval > 1) {
                distance = this.locales[key + 's'];
                break;
            } else if (interval === 1) {
                distance = this.locales[key];
                break;
            }
        }

        distance = distance.replace(/%d/i, interval);
        words += distance + separator + this.locales.sufix;

        return words.trim();
    };

    return self;
}());


// USAGE
// var timeElement = document.querySelector('time'),
//     time = new Date(timeElement.getAttribute('datetime'));
//
// timeElement.innerText = TimeAgo.inWords(time.getTime());

//MULTIPLE IMAGE UPLOAD AND PREVIEW

window.onload = function() {
    //Check File API support
    if (window.File && window.FileList && window.FileReader) {
        var filesInput = document.getElementById("files");
        filesInput.addEventListener("change", function(event) {
            var files = event.target.files; //FileList object
            var output = document.getElementById("result");
            for (var i = 0; i < files.length; i++) {
                var file = files[i];
                //Only pics
                if (!file.type.match('image'))
                    continue;
                var picReader = new FileReader();
                picReader.addEventListener("load", function(event) {
                    var picFile = event.target;
                    var div = document.createElement("div");
                    div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                        "alt='" + picFile.name + "'/>";
                    output.insertBefore(div, null);
                });
                //Read the image
                picReader.readAsDataURL(file);
            }
        });
    } else {
        console.log("Your browser does not support File API");
    }
}


// let addToFavoriteRef = document.getElementById('addToFavorite');
// const addToFavoriteReq = new XMLHttpRequest();

let csrf = document.querySelector('meta[name="csrf-token"]').content;
console.log(csrf);
function addToFavorite(userId, productId){
    const addToFavoriteBtn = document.getElementById('addToFavoriteBtn');
    let data = new FormData()
    console.log(userId)
    console.log(productId)
    data.append('user_id', userId)
    data.append('product_id', productId)
    // data.append('slug', 'slujhahsd');
    fetch(localApi + 'addToFavorite', {
        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },
        method: 'POST',
        body: data,
        mode: 'no-cors'
    }).then(response => response.json())
        .then(data => {
            // success
            addToFavoriteBtn.disabled = true;
            iziToast.success({timeout: 5000, icon: 'fa fa-chrome', title: 'Uspešno', message: 'Uspešno ste dodali omiljene predmete.'});
            window.setTimeout(function(){
                // Move to a main page after 3 seconds
                location.reload();
            }, 1000);
        })
        .catch((error) => {
            // error
            iziToast.error({title: 'Greška', message: 'Došlo je do greške'});
        });
}



function deleteFromFavorites(productId, userId) {
    let data = new FormData()

    console.log(userId)
    data.append('product_id', productId)
    data.append('user_id', userId)


    fetch(localApi + 'deleteFromFavorites', {
        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },
        method: 'POST',
        body: data,
        mode: 'no-cors'
    }).then(response => response.json())
        .then(data => {
            // success
            iziToast.success({timeout: 5000, icon: 'fa fa-chrome', title: 'Uspešno', message: 'Uspešno ste ukloni predmet iz liste želja'});
            window.setTimeout(function(){
                // Move to a main page after 3 seconds
                location.reload();
            }, 1000);
        })
        .catch((error) => {
            // error
            iziToast.error({title: 'Greška', message: 'Došlo je do greške'});
        });
}

function sendMessage(userId,receiverId){
    let data = new FormData()

    const message_title = document.getElementById('message_title').value;
    const message_body = document.getElementById('message_body').value;

    data.append('user_id', userId)
    data.append('receiver_id', receiverId)
    data.append('message_title', message_title)
    data.append('message_body', message_body)

    fetch(localApi + 'sendMessage', {
        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },
        method: 'POST',
        body: data,
        mode: 'no-cors'
    }).then(response => response.json())
        .then(data => {
            // success
            iziToast.success({timeout: 5000, icon: 'fa fa-chrome', title: 'Uspešno', message: 'Uspešno ste ukloni predmet iz liste želja'});
            window.setTimeout(function(){
                // Move to a main page after 3 seconds
                location.reload();
            }, 1000);
        })
        .catch((error) => {
            // error
            iziToast.error({title: 'Greška', message: 'Došlo je do greške'});
        });
}

function purchaseProduct(userId, productId){
    let data = new FormData()

    const purchaseBtn = document.getElementById('purchaseBtn');

    data.append('user_id', userId)
    data.append('product_id', productId)

    fetch(localApi + 'purchaseProduct', {
        headers: {
            "Content-Type": "application/json; charset=utf-8",
        },
        method: 'POST',
        body: data,
        mode: 'no-cors'
    }).then(response => response.json())
        .then(data => {
            // success
            purchaseBtn.disabled = true
            iziToast.success({timeout: 5000, icon: 'fa fa-chrome', title: 'Uspešno', message: 'Uspešno ste ubacili predmet u korpu'});
            window.setTimeout(function(){
                // Move to a main page after 3 seconds
                location.reload();
            }, 3000);
        })
        .catch((error) => {
            // error
            iziToast.error({title: 'Greška', message: 'Došlo je do greške'});
        });
}
