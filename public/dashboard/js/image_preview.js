// image preview
$(".image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".image-preview").attr("src", e.target.result);
            $(".image-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
    } else {
        $(".image-preview").attr("src", "");
        $(".image-preview").hide();
    }
});

$(".logo").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".logo-preview").attr("src", e.target.result);
            $(".logo-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
        $(".img-wrap").show();
    } else {
        $(".logo-preview").attr("src", "");
        $(".logo-preview").hide();
        $(".img-wrap").hide();
    }
});

$(".about-me-image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".about-me-image-preview").attr("src", e.target.result);
            $(".about-me-image-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
    } else {
        $(".about-me-image-preview").attr("src", "");
        $(".about-me-image-preview").hide();
    }
});


$(".about-me-image-en").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".about-me-image-en-preview").attr("src", e.target.result);
            $(".about-me-image-en-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
    } else {
        $(".about-me-image-en-preview").attr("src", "");
        $(".about-me-image-en-preview").hide();
    }
});


$(".service-image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".service-image-preview").attr("src", e.target.result);
            $(".service-image-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
    } else {
        $(".service-image-preview").attr("src", "");
        $(".service-image-preview").hide();
    }
});

$(".about-header-image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".about-header-image-preview").attr("src", e.target.result);
            $(".about-header-image-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
    } else {
        $(".about-header-image-preview").attr("src", "");
        $(".about-header-image-preview").hide();
    }
});
$(".blog-header-image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".blog-header-image-preview").attr("src", e.target.result);
            $(".blog-header-image-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
    } else {
        $(".blog-header-image-preview").attr("src", "");
        $(".blog-header-image-preview").hide();
    }
});
$(".contact-header-image").change(function () {
    if (this.files && this.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $(".contact-header-image-preview").attr("src", e.target.result);
            $(".contact-header-image-preview").show();
        };

        reader.readAsDataURL(this.files[0]);
    } else {
        $(".contact-header-image-preview").attr("src", "");
        $(".contact-header-image-preview").hide();
    }
});
