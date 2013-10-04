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
        this.$menu.on("click", "a", this.menu_click);
    },
    menu_click: function (e) {//Manejar el click de un link
        var dir = $(e.target).attr("href").substr(1);
        $.get("Pages/"+dir+".html", function (data) {
            console.log(data);
            page.$content.html(data);
        });
        
    }
};
page.init();