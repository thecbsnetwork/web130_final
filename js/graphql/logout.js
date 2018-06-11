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
        $('#logout-button').on('click', (event) => {
            event.preventDefault();

            $.post({
                url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
                data: JSON.stringify({
                    query: loginMutation,
                    variables: {
                        email: username,
                    }
                }),
                success: (response) => {
                    let user = response.data;
                    console.log(user);

                    window.location.href = "https://miminaz.com/mimi/web130/final/index.php";
                    Cookies.set('authorId', null);
                    Cookies.set('token', null);

                },
                contentType: 'application/json'
            });
        });
    }
});


// /* global $ , JS_PAGE */
// let loggedInUser = `
// query LoggedInUser ($id: ID!){
//     User(id: $id){
//     id,
//   }
//   }
// `;

// $(document).ready(function() {
//     if (typeof JS_PAGE !== 'undefined' && JS_PAGE == 'login_view') {
//         $('#logout-button').on('click', (event) => {
//             event.preventDefault();

//             $.post({
//                 url: 'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu',
//                 data: JSON.stringify({
//                     query: loggedInUser,
//                     variables: {
//                         id: user_id
//                     }

//                 }),
//                 success: (response) => {
//                     let user = response.data.authenticateUser;
//                     Cookies.set(null);
//                     Cookies.set(null);
//                     window.location.href = "https://miminaz.com/mimi/web130/final/index.php";

//                 },

//                 contentType: 'application/json'
//             });
//         });
//     }
// });