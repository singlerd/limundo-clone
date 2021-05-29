// 'use strict';
// const auctionLinks = document.getElementById('auctionLinks');
// const subCategories = document.getElementById('subCategories');
//
// request.open('POST', localApi+'getSubCategories')
// request.send();
//
// request.addEventListener('load', function (){
//     const data = JSON.parse(this.responseText);
//     //
//     // for (let i = 0; i < data.length; i++){
//     //     console.log(data[i]);
//     //     let arr = data[4].length;
//     //     for (let j = 0; j < arr; i++){
//     //         console.log(data[i][j])
//     //     }
//     //     // console.log(data[i])
//     //     const html =
//     //                 `
//     //                 <div class="col-3">
//     //                     <ul class="removeDots">
//     //                        <li>${data[i].category_name}</li>
//     //                        <ul class="removeDots">
//     //                            <li>name</li>
//     //                            <li>name</li>
//     //                            <li>name</li>
//     //                        </ul>
//     //                    </ul>
//     //                </div>
//     //             `;
//     //
//     //      navigation.insertAdjacentHTML('beforeend', html)
//     // }
//     data.forEach(categories => {
//             const html =
//                         `
//                         <div class="col-3">
//                             <ul class="removeDots">
//                                <li>${categories.category_name}</li>
//                                <ul class="removeDots" id="subCategories${categories.id}"></ul>
//                            </ul>
//                        </div>
//                     `;
//         auctionLinks.insertAdjacentHTML('beforeend', html)
//         categories.sub_categories.forEach(sub => {
//             const sub_categories_ref =
//                 `
//                 <li>sub.sub_category_name</li>
//             `;
//             subCategories.insertAdjacentHTML('beforeend', sub_categories_ref + sub.category_id);
//
//         })
//
//     })
//
// });
//
//
//
