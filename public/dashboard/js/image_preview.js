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
