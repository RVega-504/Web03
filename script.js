function validar(){
    var rut = document.getElementById('rut').value;
    var serieNum = 2;
    var suma = 0;
    
    for (i=rut.length-1; i>=0; i--){ 
        suma = suma + (rut.charAt(i) * serieNum);	
        console.log(rut.charAt(i) * serieNum);
	if (serieNum == 7){			
            serieNum = 2;
        } else {
        serieNum ++;
        }
    }
    
    var res=11-(suma%11);
    console.log("el dv es:" + res);
    var dv = document.getElementById('dv').value;

    
    if(dv == res){
        if(dv == 11){
            dv=0;
        }
        alert('El RUT <' + rut + '-' + dv +'> es válido');
        document.getElementById('test').innerHTML = "El rut es válido";
    } else if(dv=='k' && res==10){
        alert('El RUT <' + rut + '-' + dv +'> es válido');
        document.getElementById('test').innerHTML = "El rut es válido";
    } else{
        alert('RUT no valido');
    }
}
