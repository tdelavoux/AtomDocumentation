function init(){
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.defaults['gutter'] = false;
    SyntaxHighlighter.all();

    $('.atomCnt').atomCounter();

    $('.a-uploader').atomFileLoader();
    $('.a-input-file').atomFileInput();

    $('.a-collapsing-manually').atomCollapse({collapsedText:'Show below'});

    $('#atomDataTableDemo').atomDataTable();
    
    $('#atomDataTableDemo2').atomDataTable({
        filterableColumn : [1,2,3],
        orderableColumn : [1,2,4],
        // preOrderedColumn : {
        //     0 : 'desc',
        //     1 : 'asc'
        // },
        columnType : {
            0 : 'number',
            1 : 'string',
            2 : 'd/m/Y'
        }
    });
}
init();
