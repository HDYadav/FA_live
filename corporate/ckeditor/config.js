/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#AADC6E';

    config.uiColor = '#AADC6E';
    config.resize_enabled = false;

    config.toolbar = 'MyToolbar';

    config.toolbar_MyToolbar = [
        ['NewPage','Preview','Ajaxsave'],
        ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Scayt'],
        ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
        ['Table','HorizontalRule','Smiley','SpecialChar'],
        '/',
        ['Styles','Format'],
        ['Bold','Italic','Strike'],
        ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
        ['Link','Unlink','Anchor'],
        ['Maximize','-','About']
    ];

    config.extraPlugins = 'ajaxsave';
   config.filebrowserImageBrowseUrl = 'ckfinder/ckfinder.html?type=Images';
config.filebrowserImageUploadUrl = 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';

};