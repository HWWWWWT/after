function changeMenu(name){
	var menu = document.getElementById("menu_"+name);
	for(var i=1;i<=10;i++){
		var menuName = "m"+i;
		var listName = "none";
		var clasName = "leftMenuOff";
		if(menuName==name){
			if(menu.style.display=="none"){
			listName="block";
			clasName = "leftMenuOn";
			}else{
				listName = "none";
			}
		}
		document.getElementById("mname_"+menuName).className = clasName;
		document.getElementById("menu_"+menuName).style.display = listName;
	}
}

function change_do(n,j){
  for(var i=1;i<=j;i++){
	 if(n==i){
		 document.getElementById("myshow"+i).style.display = "block";
		 document.getElementById("myshowtd"+i).className = "ChangeTableOn";
	 }else{
		 document.getElementById("myshow"+i).style.display = "none";
		 document.getElementById("myshowtd"+i).className = "ChangeTableOff";
	 }
  }
}
