var user;
topsearch = {}

topsearch.init = function(keyword, cid, temp){
    topsearch.temp = temp;
    if(keyword)
        $('#search-keyword').val(keyword);
    $('#search-cid').val(cid);
    $('#search-keyword').keyup(function(event){
        if(event.keyCode == 13){
            topsearch.go();
        }
    });
    $('#search-cid').keyup(function(event){
        if(event.keyCode == 13){
            topsearch.go();
        }
    });
    $('body').keydown(function(e){
        if(e.keyCode == 27)
            $('.popup-close').click();
    });
}

topsearch.go = function(){
    if($('#search-keyword').val() != '' && $('#search-keyword').val() != 'Tìm hàng từ eBay, nhập thẳng về Việt Nam. Ví dụ: Kindle Fire, Nike...'){
        document.location = topsearch.temp.replace('%7Bkeyword%7D', $('#search-keyword').val()).replace('%7Bcid%7D', $('#search-cid').val());
    }
}

//topsearch.disableHtml = function(element) {
//    element.value = element.value.replace(/[<>]/g, '');
//}
//topsearch.suggest = function(obj) {
//    fly.ajax({
//        service: '/search/suggest',
//        data:{
//            keyword: $(obj).val()
//        },
//        success: function(result){
//            if(result.status){
//                var htmlSuggest = '';
//                for(key in result.data){
//                    htmlSuggest += '<li>'+ result.data[key].keyword +'</li>';
//                }
//                $('.search-suggest').html(htmlSuggest);
//            }
//        }
//    });
//}
