
/*Scroll to top*/
var mybutton = document.getElementById("topBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        mybutton.style.display = "block";
      }
      else{
          mybutton.style.display="none";
      }
}
//Scroll to top
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }


 //POPUP Function

var bikemap = {
  'popBtn1' : "myModal1",
  'popBtn2' : "myModal2",
  'popBtn3' : "myModal3",
  'popBtn4' : "myModal4",
  'popBtn5' : "myModal5",
  'popBtn6' : "myModal6",
  'popBtn7' : "myModal7",
  'popBtn8' : "myModal8",
  'popBtn9' : "myModal9",
  'popBtn10' : "myModal10",
  'popBtn11' : "myModal11",
  'popBtn12' : "myModal12",
}

var modal,span;
function popit(ele){
 modal = document.getElementById(bikemap[ele]);
// When the user clicks on the button, open the modal
  modal.style.display = "block";
}


// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click",function(event){
  if (event.target == modal) {
    
    modal.style.display = "none";
  }
});



/*-----------FUNCTION FOR DISTANCES-------*/
var imgno;
function getPrice(clicked_id){

  var src = document.getElementById("fromPlace");
  var srcPlace = src.options[src.selectedIndex].text;
  var dest = document.getElementById("toPlace");
  var destPlace = dest.options[dest.selectedIndex].text;
  var dist=0;
  if((srcPlace=="Bangalore" && destPlace=="Mysore")||(srcPlace=="Mysore" && destPlace=="Bangalore")){
    dist=145;
  }
  else if((srcPlace=="Bangalore" && destPlace=="Mangalore")||(srcPlace=="Mangalore" && destPlace=="Bangalore")){
    dist=351;
  }
  else if((srcPlace=="Bangalore" && destPlace=="Hubli")||(srcPlace=="Hubli" && destPlace=="Bangalore")){
    dist=413;
  }
  else if((srcPlace=="Bangalore" && destPlace=="Chikkamagalur")||(srcPlace=="Chikkamagalur" && destPlace=="Bangalore")){
    dist=245;
  }
  else if((srcPlace=="Bangalore" && destPlace=="Hassan")||(srcPlace=="Hassan" && destPlace=="Bangalore")){
    dist=192;
  }
  else if((srcPlace=="Mysore" && destPlace=="Mangalore")||(srcPlace=="Mangalore" && destPlace=="Mysore")){
    dist=255;
  }
  else if((srcPlace=="Mysore" && destPlace=="Hubli")||(srcPlace=="Hubli" && destPlace=="Mysore")){
    dist=439;
  }
  else if((srcPlace=="Mysore" && destPlace=="Chikkamagalur")||(srcPlace=="Chikkamagalur" && destPlace=="Mysore")){
    dist=187;
  }
  else if((srcPlace=="Mysore" && destPlace=="Hassan")||(srcPlace=="Hassan" && destPlace=="Mysore")){
    dist=124;
  }
  else if((srcPlace=="Mangalore" && destPlace=="Hubli")||(srcPlace=="Hubli" && destPlace=="Mangalore")){
    dist=357;
  }
  else if((srcPlace=="Mangalore" && destPlace=="Chikkamgalur")||(srcPlace=="Chikkamgalur" && destPlace=="Mangalore")){
    dist=151;
  }
  else if((srcPlace=="Mangalore" && destPlace=="Hassan")||(srcPlace=="Hassan" && destPlace=="Mangalore")){
    dist=91;
  }
  else if((srcPlace=="Hubli" && destPlace=="Chikkamagalur")||(srcPlace=="Chikkamagalur" && destPlace=="Hubli")){
    dist=289;
  }
  else if((srcPlace=="Hubli" && destPlace=="Hassan")||(srcPlace=="Hassan" && destPlace=="Hubli")){
    dist=352;
  }
  else if((srcPlace=="Chikkamagalur" && destPlace=="Hassan")||(srcPlace=="Hassan" && destPlace=="Chikkamagalur")){
    dist=60;
  }
  else{
    dist=0;
  }
    var price;
    alert(dist);
    alert(clicked_id);
    if(clicked_id==1)
    {
      price=dist*10;
      
      alert("The price for the selected trip is "+price);
    }
    else if(clicked_id==2)
    {
      price=dist*7;
      
      alert("The price for the selected trip is "+price);
    }
    else if(clicked_id==3)
    {
      price=dist*5;
      
      alert("The price for the selected trip is "+price);
    }
    else{
      alert("Enter proper Source and Destination")
    }
  
}
