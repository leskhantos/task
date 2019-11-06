$( document ).ready(function() {
    $("#btn").click(
        function(){
            let name = $('#name').val();
            let body = $('#body').val();
            let data ={name:name,body:body};
            sendAjaxForm( 'addBook.php',data);
        }
    );
});
function sendAjaxForm(url, data) {
    $.ajax({
        url: url,
        data: data,
        type: "POST",
        success: function(response) {
            alert("Данные сохранены")
        },
        error: function(response) {
            alert('Ошибка. Данные не отправлены.');
        }
    });
}
