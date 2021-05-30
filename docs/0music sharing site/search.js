function hide() {
  	var input, filter, table, tr, p, i, txtValue;
  	input = document.getElementById("myInput");
  	filter = input.value.toUpperCase().replace(/\s+/g, '');
  	table = document.getElementById("myTable");
  	tr = table.getElementsByTagName("p");
  	let n=tr.length;
  	for (i = 0; i < tr.length; i++) {
	    p = tr[i];
	    if (p) {
	      	txtValue = p.id+"|"+p.className+"|"+p.textContent || p.innerText;
	      	if (txtValue.toUpperCase().replace(/\s+/g, '').indexOf(filter)>-1) {
	        	tr[i].style.display = "";
	      	}
		    else {
		    	n=n-1;
		    	tr[i].style.display = "none";
	      	}
	    }
	}
	console.log(n);
	if (n==1){
		for (i = 0; i < tr.length; i++) {
			if (tr[i].style.display == ""){
				console.log('loading'+tr[i].textContent);
				try{
			      	console.log(tr[i].getElementsByTagName("audio")[0].preload)
			      	tr[i].getElementsByTagName("audio")[0].preload="auto";
		    	}
		    	catch{
		      		console.log(tr[i])
				}
			}
		}

	}
	else if (n < 5){
		for (i = 0; i < tr.length; i++) {
			if (tr[i].style.display == ""){
				console.log('loading'+tr[i].textContent);
				try{
			      	console.log(tr[i].getElementsByTagName("audio")[0].preload)
			      	tr[i].getElementsByTagName("audio")[0].preload="metadata";
		    	}
		    	catch{
		      		console.log(tr[i])
				}
			}
		}
	}
}

function r() {
    document.getElementById("myInput").value=""
    hide()}
    
if(location.href.includes("?"))
{
    var u = new URL(window.location.href).searchParams.get("search");
    document.getElementById("myInput").value = u;
    hide();
    document.title = document.getElementById(u).getElementsByTagName("a")[0].textContent.replace('敬拜', '敬█').replace('赞美', '赞█').replace('全能', '全█')

}


//document.getElementById("myInput").value = location.href.substring(location.href.indexOf("?")+1);