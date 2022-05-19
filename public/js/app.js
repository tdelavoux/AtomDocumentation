function init(){
    SyntaxHighlighter.defaults['toolbar'] = false;
    SyntaxHighlighter.defaults['gutter'] = false;
    SyntaxHighlighter.all();

    $('.atomCnt').atomCounter();

    $('.a-uploader').atomFileLoader();
    $('.a-input-file').atomFileInput();
    $('#a-input-shuffle').atomShuffleInstance();

    $('.a-collapsing-manually').atomCollapse({collapsedText:'Show below'});

    $('#atomDataTableDemo').atomDataTable();
    $('#atomDataTableDemoPaginate').atomDataTable({nbPerPage:5});
    
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

      /*********************** NOTIFICATIONS  ***********************/

      var notifications = document.querySelectorAll(".notification-btn");
      notifications.forEach(notif => {
          notif.addEventListener("click", function(e){
              $.atomNotification(e.target.dataset.text, e.target.dataset.type);
          });
      });
  
      var notificationsPos = document.querySelectorAll(".notification-btn-pos");
      notificationsPos.forEach(notif => {
          notif.addEventListener("click", function(e){
              $.atomNotification(e.target.dataset.text, {"alignment": e.target.dataset.pos});
          });
      });
}
init();
