
$(document).ready(function(){
    console.log("hi");
    var request = {
        ajaxF:function(data){
            $.ajax({
                type: 'POST',
                url: data['view'] == 1?'../index.php':'./admin/auth/',
                data: data,
                dataType: 'json',
                success: function(data){
                    alert(data)
                },
                error: function(data) {
                    alert(JSON.stringify(data));
                }
            });
        },
        
    }
    
    
    console.log($('#btn_dash'));
    
$('#btn_dash').click(function(){
    console.log("clicked");
    let doc_view = 1;
    let req_obj = {};
    req_obj['view'] = doc_view;
    request.ajaxF(req_obj);
})




})

