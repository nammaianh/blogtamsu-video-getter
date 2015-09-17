/**
 * Created by developer on 17/09/2015.
 */

$(function () {

    const URL_PREFIX = 'http://blogtamsu.vn';

    var frmUrlGetter = $("#frm-url-getter");
    var htmlGettingUrl = frmUrlGetter.attr("action");
    var txtUrl       = $("#txt-url");
    var lstResults   = $("#lst-results");

    /*
     * Send the requested URL to the server by AJAX to get the HTML code
     */
    function getHtml(url, fnOnSuccess) {
        var html;

        $.get(htmlGettingUrl, {
            url: url
        }).success(function (result) {
            var data = result.data;

            if ( ! data) {
                return alert(result.message);
            }

            fnOnSuccess(data);
        });
    }

    /*
     * On the form's submission
     */
    frmUrlGetter.submit(function (evt) {
        // Stop form's default submission
        evt.preventDefault();

        var url = txtUrl.val().trim();

        if ( ! url.startsWith(URL_PREFIX)) {
            alert("URL must starts with \"http://blogtamsu.vn\"");
        }

        $("#loading-cog").removeClass("hidden");
        getHtml(url, function (html) {
            var embeds    = $(".player_div embed", html);
            var videoUrls = [];

            // Find all video URLs
            embeds.each(function () {
                var flashvars = $(this).attr("flashvars");
                if (flashvars) {
                    flashvars.split("&").forEach(function (token) {
                        if (token.startsWith("file=")) {
                            videoUrls.push(token.split("=")[1]);
                        }
                    });
                }
            });

            // Redraw results list
            lstResults.empty();
            videoUrls.forEach(function (url) {
                var item = $("<li class='list-group-item'>").appendTo(lstResults);
                $("<a>").text(url).attr("href", url).appendTo(item);
            });

            $("#loading-cog").addClass("hidden");
        });
    });

});
