/**
 * Created by Sari on 11/17/14.
 */
(function() {
    var $td = $('#products');
    var $search = $('#filter-search');
    var cache = [];

    $td.each(function() {
        cache.push({
            element: this,
            text: this.alt.trim().toLowerCase()
        });
    });

    function filter () {
        var query = this.value.trim().toLowerCase();

        cache.forEach(function(td) {
            var index = 0
            if (query) {
                index = img.text.indexOf(query);
            }
            div.element.style.display = index === -1 ? 'none' : '';
        });
    }

    if ('oninput' in $search[0]) {
        $search.on('input', filter);
    } else {
        $search.on ('keyup', filter);
    }
}());