const fetchdata = async () =>{
    const res = await fetch("Api/api.json");
    const data = await res.json();
    console.log(data);
    data.reverse()
    
data.forEach(elem => {
    console.log(elem)
   var Elem1=`<div class="swiper-slide flex" style="display: flex !important">
    <a href="${elem.hrefs}" class="display-flex">
        <img src=${elem.imgSrc} alt="${elem.desc}" style="width: 20%" />
        <span>${elem.desc}</span>
    </a>
</div>`;


const app = document.querySelector(".viewallmain");
// console.log(app);
app.insertAdjacentHTML('afterbegin', Elem1);


});
    
    
   
}

fetchdata()