let inputFile = document.getElementById("file")
inputFile.addEventListener("change", () => subir(inputFile.files))

let zona = document.getElementById('zona');
let textZona = document.getElementById('textZona');

zona.addEventListener('dragover', e => { e.preventDefault(); })
zona.addEventListener('dragleave', e => { e.preventDefault(); })
zona.addEventListener('drop', e => {
    e.preventDefault();
    subir(e.dataTransfer.files);
})
const subir = (file) => {
    if (file != undefined) {
        for (i = 0; i < file.length; i++) {
            const f = file[i]
            if (f.type != "text/plain") {
                alert("Archivo no valido \nEscoja un archivo tipo txt")
                return;
            }
            cargarArchivoDeTexto(f)
        }
    }
}
const cargarFile = (reader, ar) => {
    reader.addEventListener('progress', e => {
        let carga = Math.round(e.loaded / ar.size * 100)
        textZona.textContent = (carga === 100) ? "Cargado" : carga
    })
}
const separarCaracteres = (txt)=>{
    let obj={
        txt:txt,
        instrucciones:[],
        operacion:[],
        registros:[]
    }
    let subIns="",subOpe="",subRe=""
    for (let i = 0; i < txt.length; i++) {
        // console.log(txt[i]);
        subIns+=txt[i];
        if(txt[i]===";"){
            obj.instrucciones.push(subIns.replaceAll("\r\n",""))
            subIns=""
        }
    }
    for (let i = 0; i < obj.instrucciones.length; i++) {
        let arr=[]
        for (let j = 0; j < obj.instrucciones[i].length; j++) {
            subOpe+=obj.instrucciones[i][j]
            subRe+=obj.instrucciones[i][j]
            if(obj.instrucciones[i][j+1]===" "){
                obj.operacion.push(subOpe.replaceAll("\r\n",""));
                subOpe=""
                subRe=""
            }
            if(obj.instrucciones[i][j+1]==="," || obj.instrucciones[i][j+1]===";"){
                arr.push(subRe.replaceAll(",","").trim());
                subRe=""
            }
            if(obj.instrucciones[i][j+1]===";"){
                obj.registros.push(arr)
                arr=[]
            }
        }
        subRe=""
        subOpe=""
    }
    rellenarContenedor2(obj)
    console.log(obj);
}

