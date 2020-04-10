(function ($) {
  "use strict";

  $(function () {
    let $preview, $editor;

    $preview = $("#wright-post-notice-preview");
    $editor = $('textarea[name="wright-post-notice-editor"]');

    $preview.html($editor.text());
    $editor.on("keyup", function (evt) {
      $preview.html($(this).val());
    });
  });
})(jQuery);
