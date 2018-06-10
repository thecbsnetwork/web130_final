/* global $ , JS_PAGE */

var loginMutation = '\nmutation AuthenticateUser($email: String!, $password: String!){\n  authenticateUser(email: $email, password: $password){\n  id,\n  token\n}\n}\n';

$(document).ready(function () {
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'login_view') {
        $('#login-button').on('click', function (event) {
            event.preventDefault();
            var username = $('#username').val(),
                password = $('#password').val();

            $.post({
                url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
                data: JSON.stringify({
                    query: loginMutation,
                    variables: {
                        email: username,
                        password: password
                    }
                }),
                success: function success(response) {
                    var user = response.data.authenticateUser;
                    if (user === null) {
                        alert('Login failed! Try again.');
                    } else {
                        window.location.href = "https://miminaz.com/mimi/web130/final/add_post.php";
                        console.log(user);
                        Cookies.set('authorId', user.id, { expires: 7 });
                        Cookies.set('token', user.token, { expires: 7 });
                    }
                },
                contentType: 'application/json'
            });
        });
    }
});

/* global $ JS_PAGE Cookies */

var getAllItems = '\n    query AllItems {\n      allItems {\n        id,\n        title,\n        content,\n        price\n      }\n    }\n';
var getItem = '\nquery GetItem($id:ID){\n    Item (id: $id){\n      title,\n      content,\n      price\n    }\n}\n';

var CreateItem = '\n    mutation CreateItem ($authorId: ID!, $title: String!, $content: String!, $price: String!) {\n        createItem(authorId: $authorId, title: $title, content: $content, price: $price) {\n            id,\n            title,\n            content,\n            price\n        }\n    }\n';

$(document).ready(function () {
    // List View
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'list_view') {
        $.post({
            url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
            data: JSON.stringify({
                query: getAllItems
            }),
            success: function success(response) {
                var items = response.data.allItems;
                console.log(items);
                var html = '';

                var _iteratorNormalCompletion = true;
                var _didIteratorError = false;
                var _iteratorError = undefined;

                try {
                    for (var _iterator = items[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
                        var item = _step.value;

                        html += '<div class="row">\n                    <div class="col-md-6" id="item-' + item.id + '">\n                    <h2><a href="item_detail.php#' + item.id + '">\n                    ' + item.title + '</a></h2>\n                        <p>' + item.content + '</p>\n                         <p>' + item.price + '</p>\n                        </div>\n                    </div>';
                    }
                } catch (err) {
                    _didIteratorError = true;
                    _iteratorError = err;
                } finally {
                    try {
                        if (!_iteratorNormalCompletion && _iterator.return) {
                            _iterator.return();
                        }
                    } finally {
                        if (_didIteratorError) {
                            throw _iteratorError;
                        }
                    }
                }

                
                // $('#item-title').html(item.title);
                // $('#item-content').html(item.content);
                $('#main-content').html(html);
            },

            contentType: 'application/json'
        });
    }
    // Detail View
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'detail_view') {
        var item_id = window.location.hash.substring(1);
        console.log('Item id is? ' + item_id);
        $.post({
            url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
            data: JSON.stringify({
                query: getItem,
                variables: {
                    id: item_id
                }
            }),
            success: function success(response) {
                var item = response.data.Item;
                $('#item-title').html(item.title);
                $('#item-content').html(item.content);
                $('#item-price').html(item.price);
            },
            contentType: 'application/json'
        });
    }

    // Form View
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'form_view') {
        $('#save-post-button').on('click', function (event) {
            event.preventDefault();
            var title = $('#title').val(),
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
                success: function success(response) {
                    var item = response.data.CreateItem;
                    window.location = 'item_detail.php#' + item.id;
                },
                contentType: 'application/json'
            });
        });
    }
});

(function ($) {
    // Begin jQuery

    $(document).ready(function () {
        var menu = $('nav > ul'),
            menuLink = $('#mobile-menu a');
        menuLink.on('click', function () {
            if (menu.hasClass('closed')) {
                menu.removeClass('closed');
                menu.addClass('open');
            } else {
                menu.removeClass('open');
                menu.addClass('closed');
            }
        });
    });
    date1 = new Date();
    date = date1.getDate();
    year = date1.getFullYear();
    month = date1.getMonth();
})(jQuery);
