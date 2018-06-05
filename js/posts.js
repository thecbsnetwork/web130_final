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

let CreateItem  = `
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
                let html = '';
                for (let item of items) {
                    html += `<h2>${item.title}</h2>
                             <p>${item.content}</p>`;
                }
                $('#main-content').html(html);
            },
            contentType: 'application/json'
        });
    }
});

// Form View
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'form_view') {
        $('#save-post-button').on('click', (event) => {
            event.preventDefault();
            let title = $('#title').val(),
                content = $('#content').val(),
                authorId = Cookies.get('authorId');
                
            $.post({
                url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
                data: JSON.stringify({
                    query: CreateItem,
                    variables: {
                        title: title,
                        content: content,
                        authorId: authorId
                    }
                }),
                headers: {
                    Authorization: 'Bearer ' + Cookies.get('token')
                },
                success: (response) => {
                    let item = response.data;
                    console.log(item);
                },
                contentType: 'application/json'
            }); 
        });
    }
});
