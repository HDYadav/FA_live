CKEDITOR.plugins.add('ajaxsave',
    {
        init: function(editor)
        {
            var pluginName = 'ajaxsave';
            editor.addCommand( plugin.js,
            {
                exec : function( editor )
                {
                    $.post("result.php", {
                        data : editor.getSnapshot()
                    } );
                },
                canUndo : true
            });
            editor.ui.addButton('Ajaxsave',
            {
                label: 'Save Ajax',
                command: 'plugin.js',
                className : 'cke_button_save'
            });
        }
    });
