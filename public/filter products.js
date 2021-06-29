const btns=document.querySelector(".btn");
const ProductsStorage=document.querySelectorAll(".store-product");

for(j=0; j<btns.clientHeight;j++){
    btns[j].addEventListener("click",(e)=>{
        e.preventDefault();

        const filter=e.target.dataset.filter;
        ProductsStorage.forEach((product)=>{
            if(filter=="all"){
                product.style.display="block"
            }
            else{
                if(product.classList.contains(filter)){

    product.style.display="block"

}  else{
    product.style.display="none"
}
          }
            })
        }
    )
}
 const search=document.getElementById("search");
 search.addEventListener("keyup",(e)=>{
     const searchValue =search.value.toLowerCase().trim;
     for(k=0;k<storeProducts.length;k++){
         if(storeProducts[k].classList.contains(searchValue)){
             storeProdcuts[k].style.display="block";

         }
         else if (searchValue==""){
            storeProdcuts[k].style.display="block";
         }
         else{
            storeProdcuts[k].style.display="none";
         }
     }
 })

