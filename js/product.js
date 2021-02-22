
  $(function(){

    let count = 8;
    let addData = 0;
    let allData = [];

    $.getJSON("/leesle/data/product.json", initProductData);
    

    function initProductData(data){
      allData = data;
      addProductData();
    }

    $(".moreBtn").on("click", addProductData);
    $(".moreBtn").on("click", scrollBtm);

    function addProductData(){
      let items = [];  
      let slicedData = allData.slice(addData, addData + count);
      $.each(slicedData, function(i, item){
        //console.log(item);
        let itemHTML = `<div class="productBox">
                          <a href="#" class="productImg">
                          <img src="/leesle/data/product_img/${item.productimg}" alt="">
                          </a>
                          <p class="productTit">${item.producttit}</p>
                          <p class="productPri">${item.productpri}</p>
                     </div>`;
        items.push($(itemHTML).get(0));
      });
  
      $(".productBoxes").append(items);
  
      addData += slicedData.length;

      
    }

    function scrollBtm(){
      let wrapH = $(".productWrap").outerHeight();
      $("html, body").animate({scrollTop : wrapH + 600});
    }

  });
  
  

