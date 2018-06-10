/* global $ JS_PAGE Cookies */

let getAllItems = `
    query AllItems {
      allItems {
        id,
        title,
        content,
        price
      }
    }
`;
let getItem = `
query GetItem($id:ID){
    Item (id: $id){
      title,
      content,
      price
    }
}
`;

let CreateItem = `
    mutation CreateItem ($authorId: ID!, $title: String!, $content: String!, $price: String!) {
        createItem(authorId: $authorId, title: $title, content: $content, price: $price) {
            id,
            title,
            content,
            price
        }
    }
`;

$(document).ready(function() {
    // List View
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'list_view') {
        $.post({
            url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
            data: JSON.stringify({
                query: getAllItems
            }),
            success: (response) => {
                let items = response.data.allItems;
                console.log(items);
                let html = '';

                for (let item of items) {
                    html += `<div class="row">
                    <div class="col-md-6" id="item-${item.id}">
                    <h2><a href="item_detail.php#${item.id}">
                    ${item.title}</a></h2>
                        <p>${item.content}</p>
                         <p>${item.price}</p>
                        </div>
                    </div>`;
                };
                // $('#item-title').html(item.title);
                // $('#item-content').html(item.content);
                $('#main-content').html(html);
            },

            contentType: 'application/json'
        });
    }
    // Detail View
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'detail_view') {
        let item_id = window.location.hash.substring(1);
        console.log('Item id is? ' + item_id);
        $.post({
            url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
            data: JSON.stringify({
                query: getItem,
                variables: {
                    id: item_id
                }
            }),
            success: (response) => {
                let item = response.data.Item;
                $('#item-title').html(item.title);
                $('#item-content').html(item.content);
                $('#item-price').html(item.price);
            },
            contentType: 'application/json'
        });
    }


    // Form View
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'form_view') {
        $('#save-post-button').on('click', (event) => {
            event.preventDefault();
            let title = $('#title').val(),
                content = $('#content').val(),
                price = $('#price').val(),
                authorId = Cookies.get('authorId');

            $.post({
                url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
                data: JSON.stringify({
                    query: CreateItem,
                    variables: {
                        title: title,
                        content: content,
                        price: price,
                        authorId: authorId
                    }
                }),
                headers: {
                    Authorization: 'Bearer ' + Cookies.get('token')
                },
                success: (response) => {
                    let item = response.data.CreateItem;
                    window.location = 'item_detail.php#' + item.id;

                },
                contentType: 'application/json'
            });
        });
    }
});