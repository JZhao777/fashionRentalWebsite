index = 0;
document.addEventListener("DOMContentLoaded", function(event) { 
    document.getElementById("right-arrow").click();
 });
 
function displayBanner(dir){
    
    var imgs = document.getElementsByClassName("daily-outfit");
    if(dir == 1){
        index ++;
        if(index >= 5){
            index = index - 5;
        }
    }else {
        index --;
        if(index <0){
            index = index + 5;
        }
    }
    
    for(var i = 0;i<imgs.length;i++){
        if(i == index){
            imgs[i].style.display = "inline";
        }else{
            imgs[i].style.display = "none";
        }
    }
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
} 


