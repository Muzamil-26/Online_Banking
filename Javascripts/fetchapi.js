const fetchdata = async () =>{
    const res = await fetch("Api/api.json");
    const data = await res.json();
    console.log(data);
    // data.reverse()
    
    const n=8;
    for (let index = 0; index < n ; index++) {
        console.log(data[index])

        var Elem1=`<div class="swiper-slide flex" style="display: flex !important">
        <a href="" class="display-flex">
            <img src=${data[index].imgSrc} alt="strong-password" style="width: 20%" />
            <span>${data[index].desc}</span>
        </a>
    </div>`;
    var app = document.querySelector(".swiper-wrapper");
    console.log(app);
    app.insertAdjacentHTML('afterbegin', Elem1);
        
    }
console.log(data.length);
    
   
}

fetchdata()

