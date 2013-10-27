window.page = {
    menuId: "#main-menu",
    contentId: "#content",
    init: function () {
        this.$menu = $(this.menuId);
        this.$content = $(this.contentId);
        this.bindings();
        console.log("init complete");
    },
    bindings: function () {
        $(window).on("hashchange", this.loadFromHash);
    },
    loadFromHash: function (e) {
        page.$menu.find("a").removeClass("on");
        page.$menu.find("a[href='"+window.location.hash+"']").addClass("on");
        $.get("Pages/" + window.location.hash.substr(1) + ".html", function (data) {
            console.log(data);
            page.$content.html(data);
        });
    }
};
page.init();