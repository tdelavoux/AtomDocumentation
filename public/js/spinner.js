var spinners = $('.a-spin').atomSpinnerElement();  // Init
spinners.forEach( (el) => {
    el.click(function(){
        el.spin('Wait ... ');                       // Launch spin with optional text
        setTimeout( () => el.stop(), 3000);           // Stop Spin
    }); 
});

$spinnerTable = $('#spinTable').atomSpinnerElement();
$('#updateTable').click(function(){
    $spinnerTable.spin('Loading datas ... ');
    setTimeout( () => $spinnerTable.stopAndUpdate('No Data avaiable'), 3000);
});