$(function() {
    CKEDITOR.replace("ar[description]", {
        filebrowserBrowseUrl: imageGalleryBrowseUrl,
        filebrowserUploadUrl:
            imageGalleryUploadUrl +
            "?_token=" +
            $("meta[name=csrf-token]").attr("content"),
        removeButtons: "About",
        contentsLangDirection: 'rtl'
    });

    CKEDITOR.replace("en[description]", {
        filebrowserBrowseUrl: imageGalleryBrowseUrl,
        filebrowserUploadUrl:
            imageGalleryUploadUrl +
            "?_token=" +
            $("meta[name=csrf-token]").attr("content"),
        removeButtons: "About"
    });

    CKEDITOR.replace("ar[introduction]", {        
        removeButtons: "About",
        contentsLangDirection: 'rtl'
    });

    CKEDITOR.replace("en[introduction]", {        
        removeButtons: "About"
    });

    CKEDITOR.replace("ar[content_table]", {        
        removeButtons: "About",
        contentsLangDirection: 'rtl'
    });

    CKEDITOR.replace("en[content_table]", {        
        removeButtons: "About"
    });

    CKEDITOR.replace("ar[first_paragraph]", {        
        removeButtons: "About",
        contentsLangDirection: 'rtl'
    });

    CKEDITOR.replace("en[first_paragraph]", {        
        removeButtons: "About"
    });
});
