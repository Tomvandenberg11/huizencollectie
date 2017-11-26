var screenSmall = 500;
var screenMedium = 700;
var currentImage; // nodig voor forward backward
window.addEventListener("load",function(){ 
	var imageNames = ["Schouder1.jpg",
				"Schouder2.jpg",
				"Schouder3.jpg",
				"Schouder4.jpg",
				"Schouder5.jpg"];
    var tumbs = document.getElementById('tumbs');
    var displaySchouder = document.getElementById('displaySchouder');
    selectImage(Math.floor(Math.random()*imageNames.length));
    
    for(var i= 0; i<imageNames.length; i++){
		//screen widht
			if ((screen.height <= screenMedium) && ( i > 9)){ 
				console.log(screen.height );
				break;}
        var tumb = new Image();
        tumb.src = "Images/Schoudertas/" + imageNames[i];
        tumb.id = i;
        tumbs.appendChild(tumb);
        tumb.addEventListener("click",function(e){
            selectImage(e.target.id);
			
        });
    }
	 function selectImage(id){
        displaySchouder.src = "Images/Schoudertas/" + imageNames[id];
		currentImage = id;
		console.log(currentImage);
    }
	back.addEventListener("click",function(e){
		console.log("back");
		backward();
	});
    forw.addEventListener("click",function(e){
		console.log("forw");
		forward();
	});
   
	
	function backward(){
		currentImage = Number(currentImage) - 1;
		if (currentImage < 0) {
			currentImage = imageNames.length -1;}
		selectImage(currentImage);
	}
    function forward(){
		currentImage = Number(currentImage) +1;
		if (currentImage > imageNames.length -1 ) {
			currentImage = 0;}
		selectImage(currentImage);
	}
})
