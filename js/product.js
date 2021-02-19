
  $(function(){
    let items = [];
    $.ajax({
      url:'/leesle/data/product.json',
      success:function(data){
        
        for(var i = 0; i < data.length; i++){
          items = `<div class="productBox">
                    <a href="#" class="productImg">
                    <img src="/leesle/data/product_img/${data[i].productimg}" alt="">
                    </a>
                    <p class="productTit">${data[i].producttit}</p>
                    <p class="productPri">${data[i].productpri}</p>
                </div>`;
          $(".productBoxes").prepend(items);
        }
      
      }
      
    });
  });
  

