let btn = document.querySelector("#my-btn")

const container = document.querySelector("#safe-table")

btn.addEventListener("click",function(){
    if(container.style.display==="block"){
        container.style.display ="none";
    }else{
        container.style.display = "block";
    }
});