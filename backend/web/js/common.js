function createSitemapXml(url){
    $.ajax({
        url: url,
        success: function (res) {
            alert (res);
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
}