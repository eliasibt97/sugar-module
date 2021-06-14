function nameExist(name,fnWhenNo){
    var myConn = new XHConn(); // Instanciar objeto
    var fnWhenDone = function (oXML){}; // Función al retornar llamada
    // Ejecutando la conexión
    myConn.connect("$URL", "$ACTION", "$PARAMETROS", fnWhenDone);
}