    $(document).ready(function() {
        $.post(
            'https://api.graph.cool/simple/v1/cjhjst7qq7qom0107gt4ir6pu', 
        JSON.stringify({
            query: getAllItems
        }),
        (response) => {
            console.log(response);
        }
        );
    });