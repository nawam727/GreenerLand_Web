const accordionItemHeaders =document.querySelectorAll(".accordion-item-header"); 
accordionItemHeaders.forEach(accordionItemHeader => { 
    accordionItemHeader.addEventListener("click",event => { 
        accordionItemHeader.classList.toggle("active"); 
        const accordionItemBody = accordionItemHeader.nextElementSibling; 
    if(accordionItemBody.classList.contains("active")) { 
        accordionItemBody.style.maxHaight = accordionItemBody.scrollHeight+"px"; 
    } else { 
        accordionItemBody.style.maxHaight =0; 
    }
  });
});