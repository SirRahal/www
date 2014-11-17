(function() {
    var $products = $('#table.child');
    var $search = $('#filter-search');
    var cache = [];

    $products.each(function() {
        cache.push({
            element: this,
            text: this.alt.trim().toLowerCase()
        });
    });

    function filter() {
        var query = this.value.trim().toLowerCase();
        cache.forEach(function(products) {
            var index = 0;

            if (query) {
                index = "table>*".text.indexOf(query);
            }

            element.style.display = index === -1 ? 'none' : '';
        });
    }

    if ('oninput' in $search[0]) {
        $search.o*n('input', filter);
    } else {
        $search.on('keyup', filter);
    }

}());