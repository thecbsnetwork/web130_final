/* global $ , JS_PAGE */

let loginMutation = `
mutation AuthenticateUser($email: String!, $password: String!){
  authenticateUser(email: $email, password: $password){
  id,
  token
}
}
`;

$(document).ready(function() {
    if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'login_view') {
        $('#login-button').on('click', (event) => {
            event.preventDefault();
            let username = $('#username').val(),
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
                success: (response) => {
                    let user = response.data.authenticateUser;
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