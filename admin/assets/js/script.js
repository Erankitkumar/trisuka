
$(document).on('ready', function(){

    var request = {
        ajaxF:function(data){
            $.ajax({
                type: 'POST',
                url: './admin/auth/',
                data: data,
                dataType: 'json',
                success: function(data){
                    
                },
                error: function(data) {
                    alert(JSON.stringify(data));
                }
            });
        }
    }
    
    $('#btn_dash').on('click', function(){

        let doc_view = 1;
        let req_obj = {};
        req_obj['view'] = 1;
        
        request.ajaxF(req_obj);

    })




})

