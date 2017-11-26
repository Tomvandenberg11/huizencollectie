var screenSmall = 500;
var screenMedium = 700;
var currentImage; // nodig voor forward backward
window.addEventListener("load",function(){ 
	var imageNames = ["Hand0.jpg",
				"Hand1.jpg",
				"Hand2.jpg",
				"Hand3.jpg",
				"Hand4.jpg",
				"Hand5.jpg"];
    var tumbs = document.getElementById('tumbs');
    var displayHandtas = document.getElementById('displayHandtas');
    selectImage(Math.floor(Math.random()*imageNames.length));
    
    for(var i= 0; i<imageNames.length; i++){
		//screen widht
			if ((screen.height <= screenMedium) && ( i > 9)){ 
				console.log(screen.height );
				break;}
        var tumb = new Image();
        tumb.src = "Images/Handtas/" + imageNames[i];
        tumb.id = i;
        tumbs.appendChild(tumb);
        tumb.addEventListener("click",function(e){
            selectImage(e.target.id);
			
        });
    }
	 function selectImage(id){
        displayHandtas.src = "Images/Handtas/" + imageNames[id];
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
