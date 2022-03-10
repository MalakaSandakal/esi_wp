jQuery(document).ready(function ($) {

   function deleteDesc(e) {
      var id = this.dataset.id;
      var count = this.dataset.count;

      $(this).closest('span').remove();

      var values = []
      $(`input[type="text"].${id}`).each(function (e) {
         console.error(console.error($(e.target)));
         var tmp = {};
         tmp.description = $(this).val();
         values.push(tmp);
      });
      var id = 'fields' + 'desc_val_' + count;
      $(`input[type="hidden"]#${id}`).val(JSON.stringify(values));
   }

   function descChange(e) {

      var values = []
      $(`input[type="text"].${e.target.className}`).each(() => {
         var tmp = {};
         tmp.description = $(this).val();
         values.push(tmp);

      });

      var fields_counter = $(this).attr("data-id");
      var id = 'fields' + 'desc_val_' + fields_counter;
      $(`input[type="hidden"]#${id}`).val(JSON.stringify(values));
   }

   $(document).on("click", ".description_button", function (e) {
      e.preventDefault();
      var $button = $(this);
      var id;
      var count;
      $(".description_button").each(function () {
         if (e.target.dataset.id == this.name) {
            id = e.target.dataset.id;
            count = this.dataset.count;
         }
      });

      var descContent = $(".desc-cls input");

      var descContentLength = descContent.length;

      var inputId = id + '_' + (descContentLength + 1);

      var descInput = `<span>
                        <input type="text" data-id="${count}" class="${'_input_' + id}" name="${inputId}">
                        <div id="${inputId}" data-count="${count}" data-id="${'_input_' + id}" style="color:red;cursor:pointer;">remove</div>
                     </span>`;

      $button.siblings(`#${id}`).append(descInput);

      $(`._input_${id}`).change(descChange)

      $(`#${inputId}`).click(deleteDesc);

   });

   $(document).on("click", ".upload_slider_button", function (e) {
      e.preventDefault();
      var $button = $(this);
      var id
      var count;
      $(".upload_slider_button").each(function () {
         if (e.target.dataset.id == this.name) {
            id = e.target.dataset.id;
            count = this.dataset.count;
         }
      });


      var file_frame = wp.media.frames.file_frame = wp.media({
         title: 'Select or upload image',
         library: { // remove these to show all
            type: 'image' // specific mime
         },
         button: {
            text: 'Select'
         },
         multiple: true  // Set to true to allow multiple files to be selected
      });

      // When an image is selected, run a callback.
      file_frame.on('select', function () {
         // We set multiple to false so only get one image from the uploader

         var attachments = file_frame.state().get('selection').toJSON();
         var imgList = '';
         var values = [];
         for (const attachment of attachments) {
            var tmp = {};
            tmp.url = attachment.url;
            imgList += `<img src="${attachment.url}" width="150px" alt="">`;
            values.push(tmp);
         }
         var sliderId = 'fields' + 'slider_val_' + count;
         $(`input[type="hidden"]#${sliderId}`).val(JSON.stringify(values));

         $button.siblings(`#${id}`).html(imgList);

      });

      // Finally, open the modal
      file_frame.open();
   });

   $(document).on("click", ".upload_image_button", function (e) {
      e.preventDefault();
      var $button = $(this);
      var id
      $(".upload_image_button").each(function () {
         if (e.target.dataset.id == this.name) {
            id = e.target.dataset.id;
            count = this.dataset.count;
         }
      });

      // Create the media frame.
      var file_frame = wp.media.frames.file_frame = wp.media({
         title: 'Select or upload image',
         library: { // remove these to show all
            type: 'image' // specific mime
         },
         button: {
            text: 'Select'
         },
         multiple: false  // Set to true to allow multiple files to be selected
      });

      // When an image is selected, run a callback.
      file_frame.on('select', function () {
         // We set multiple to false so only get one image from the uploader

         var attachment = file_frame.state().get('selection').first().toJSON();
         var img = `<img src="${attachment.url}" width="150px" alt="">`;
         var value = { url: attachment.url }
         var ImageId = 'fields' + 'profile_val_' + count;
         $(`input[type="hidden"]#${ImageId}`).val(JSON.stringify(value));

         $button.siblings(`#${id}`).html(img);
      });

      // Finally, open the modal
      file_frame.open();
   });

   function custom_widgets_remove_editors() {
      custom_widgets_get_editors().forEach(function (id) {
          wp.editor.remove(id);
      });
  }

  /**
   * Searches the widgets areas for editors.
   *
   * @return array
   */
  function custom_widgets_get_editors() {
      let editors = [];

      // Doesn't look so great, but we need to target like this to support both the regular
      // widgets view and the Customizer. Also, we don't want to include the placeholder
      // widget that is in the DOM on the widgets.php page.
      $(document).find("#customize-theme-controls .custom-widget-wp-editor, #widgets-right .custom-widget-wp-editor").each(function () {
          editors.push($(this).attr('id'));
      });

      return editors;
  }

  /**
   *  Initializes all wp.editor instances.
   */
  function custom_widgets_set_editors() {
      custom_widgets_get_editors().forEach(function (id) { 
            wp.editor.initialize($('#' + id).attr('id'), {
              tinymce: {
                  wpautop: true
              },
              quicktags: true,
              mediaButtons: true
          });
         
      });

      // To prevent the editor from not submitting the value, we click the switch html tab.
      $(document).contents().find('.widget-control-save').off().on('click', function (e) {
          custom_widgets_get_editors().forEach(function (editor) {
              let form = $('#' + editor).closest('form');
              form.find('.switch-html').click();
          });
      });
  }

  // Trigger removal and setting of editors again after update or added.
  $(document).on('widget-updated widget-added', function () {
      custom_widgets_remove_editors();
      custom_widgets_set_editors();
  });

  // Init.
  //custom_widgets_set_editors();
});