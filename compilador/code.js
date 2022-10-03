
"use Strict"
const obj = {
    variables: {
        type: [],
        nom: [],
        tam: [],
        long: [],
    },
    etiquetas: {
        nombre: [],
        inst: [],
        registros: [],
    },
    code: {
        instr: [],
        regis: [],
        registros: [],
        long: []
    },
    ens: {
        cod: [],
        var: [],
        bin: [],
    }

}
impMAtriz = () => {
    let mat = [
        ["1", "01", "ADD", "X", "AX,BX", "ADD AX,BX",],
        ["2", "02", "ADD", "h", "AX,XXh", "ADD AX,XXh",],
        ["3", "03", "ADD", "2h", "AX,XXXXh", "ADD AX,XXXXh",],
        ["1", "04", "ADD", "X", "BX,AX", "ADD BX,AX",],
        ["2", "05", "ADD", "h", "BX,XXh", "ADD AX,XXh",],
        ["3", "06", "ADD", "2h", "BX,XXXXh", "ADD AX,XXXXh",],
        ["1", "11", "RES", "X", "AX,BX", "RES AX,BX",],
        ["2", "12", "RES", "h", "AX,XXh", "RES AX,XXh",],
        ["3", "13", "RES", "2h", "AX,XXXXh", "RES AX,XXXXh",],
        ["1", "14", "RES", "X", "BX,AX", "RES BX,AX",],
        ["2", "15", "RES", "h", "BX,XXh", "RES AX,XXh",],
        ["3", "16", "RES", "2h", "BX,XXXXh", "RES AX,XXXXh",],
        ["1", "21", "MUL", "X", "AX,BX", "MUL AX,BXh",],
        ["2", "22", "MUL", "h", "AX,XXh", "MUL AX,XXh",],
        ["3", "23", "MUL", "2h", "AX,XXXXh", "MUL AX,XXXXh",],
        ["1", "31", "PUSH", "X", "AX", "PUSH AX",],
        ["1", "34", "PUSH", "X", "BX", "PUSH BX",],
        ["1", "41", "POP", "X", "AX", "POP AX",],
        ["1", "42", "POP", "X", "BX", "POP BX",],
        ["1", "51", "MOV", "X", "AX,BX", "MOV AX,BX",],
        ["2", "52", "MOV", "h", "AX,XXh", "MOV AX,XXh",],
        ["3", "53", "MOV", "2h", "AX,XXXXh", "MOV AX,XXXXh",],
        ["2", "54", "MOV", "h", "CX,XXh", "MOV CX,XXh",],
        ["3", "55", "MOV", "2h", "CX,XXXXh", "MOV CX,XXh",]]
    let cad = ""
    for (let i = 0; i < mat.length; i++) {
        for (let j = 0; j < mat[i].length; j++) {
            cad += mat[i][j] + "\t";
        }
        cad += "\n"
    }
    // console.log(cad);
}

// impMAtriz()
const db = (ins, long, type) => {
    let mat = [
        ["1", "01", "ADD", "X", "AX,BX", "ADD AX,BX",],
        ["2", "02", "ADD", "h", "AX,XXh", "ADD AX,XXh",],
        ["3", "03", "ADD", "2h", "AX,XXXXh", "ADD AX,XXXXh",],
        ["1", "04", "ADD", "X", "BX,AX", "ADD BX,AX",],
        ["2", "05", "ADD", "h", "BX,XXh", "ADD AX,XXh",],
        ["3", "06", "ADD", "2h", "BX,XXXXh", "ADD AX,XXXXh",],
        ["1", "11", "RES", "X", "AX,BX", "RES AX,BX",],
        ["2", "12", "RES", "h", "AX,XXh", "RES AX,XXh",],
        ["3", "13", "RES", "2h", "AX,XXXXh", "RES AX,XXXXh",],
        ["1", "14", "RES", "X", "BX,AX", "RES BX,AX",],
        ["2", "15", "RES", "h", "BX,XXh", "RES AX,XXh",],
        ["3", "16", "RES", "2h", "BX,XXXXh", "RES AX,XXXXh",],
        ["1", "21", "MUL", "X", "AX,BX", "MUL AX,BXh",],
        ["2", "22", "MUL", "h", "AX,XXh", "MUL AX,XXh",],
        ["3", "23", "MUL", "2h", "AX,XXXXh", "MUL AX,XXXXh",],
        ["1", "31", "PUSH", "X", "AX", "PUSH AX",],
        ["1", "34", "PUSH", "X", "BX", "PUSH BX",],
        ["1", "41", "POP", "X", "AX", "POP AX",],
        ["1", "42", "POP", "X", "BX", "POP BX",],
        ["1", "51", "MOV", "X", "AX,BX", "MOV AX,BX",],
        ["2", "52", "MOV", "h", "AX,XXh", "MOV AX,XXh",],
        ["3", "53", "MOV", "2h", "AX,XXXXh", "MOV AX,XXXXh",],
        ["2", "54", "MOV", "h", "CX,XXh", "MOV CX,XXh",],
        ["3", "55", "MOV", "2h", "CX,XXXXh", "MOV CX,XXh",]]

    for (let i = 0; i < mat.length; i++) {
        if (mat[i][2] == ins) {
            if (mat[i][4].split(",")[0] == type) {
                if (mat[i][3] == long) {
                    return [mat[i][0], mat[i][1]]
                }
            }
        }
    }
}
const vaciar = () => {
    obj.variables.type = []
    obj.variables.nom = []
    obj.variables.tam = []
    obj.variables.long = []

    obj.etiquetas.nombre = []
    obj.etiquetas.inst = []
    obj.etiquetas.type = []

    obj.code.linea = []
    obj.code.instr = []
    obj.code.regis = []
    obj.code.segme = []

    obj.ens.bin = []
    obj.ens.cod = []
    obj.ens.var = []
}
const separarVariables = (txt) => {
    let linea = txt.replace("DATOS:", "").replace("FINDATOS", "").replaceAll("	", "")
    linea = linea.split(",");
    linea.pop()
    linea.map(line => {
        let breakline = line.split(" ");
        let breakIgual = breakline[1].split("=")
        obj.variables.type.push(breakline[0])
        obj.variables.nom.push(breakIgual[0])
        obj.variables.tam.push(breakIgual[1])
        obj.variables.long.push(breakIgual[1].length == 5 ? "2h" : "h")
    })
}
const separarInstrucciones = (txt) => {
    txt = txt.replace("CODE:", "").replace(".FINCODE", "")
    txt = txt.split(".");
    txt.map(tex => {
        const te = tex.split(" ");
        let arr = obj.etiquetas;
        if (te[0] == "JUMP") {
            let ind = obj.etiquetas.nombre.indexOf(te[1])
            arr.inst[ind].map(co => {
                obj.code.instr.push(co)
            })
            arr.registros[ind].map(co => {
                obj.code.regis.push(co)
            })
        } else {
            obj.code.instr.push(te[0])
            obj.code.regis.push(te[1])
        }
    })
}
const separarEtiquetas = (txt) => {
    let txt2 = txt.substring(txt.indexOf("{") + 1, txt.indexOf("}"))
    obj.etiquetas.nombre.push(txt.split(":")[0])
    let arrIns = []
    let arrReg = []
    txt2 = txt2.split(".")
    txt2.pop()
    txt2.map(line => {
        arrIns.push(line.split(" ")[0])
        arrReg.push(line.split(" ")[1])
    })
    obj.etiquetas.inst.push(arrIns)
    obj.etiquetas.registros.push(arrReg)
}
const exaToBinari = (hex) => (parseInt(hex, 16).toString(2)).padStart(8, '0');
const crearEnsamblador = () => {
    let objCode = obj.code;
    let c = 1;
    for (let i = 0; i < objCode.long.length; i++) {
        let cad = objCode.registros[i].split(",")[1]
        let [tam, bin] = db(objCode.instr[i], objCode.long[i], objCode.registros[i].split(",")[0]) //separa por , los registros
        for (let i = 0; i < parseInt(tam); i++) {
            obj.ens.cod.push(c)
            if (i == 0) obj.ens.var.push(bin)
            if (i == 1) obj.ens.var.push(cad[0] + "" + cad[1])
            if (i == 2) obj.ens.var.push(cad[2] + "" + cad[3])

            obj.ens.bin.push(exaToBinari(obj.ens.var[c - 1]))

            c++;
        }
    }
}
const cambiarVariables = () => {
    obj.code.regis.map(regis => {
        let reg = regis.split(",")
        let objVar = obj.variables
        let num = objVar.nom.indexOf(reg[1]);
        obj.code.registros.push(reg[0] + "," + (num == -1 ? reg[1] : objVar.tam[num]))
        obj.code.long.push((num == -1 ? "X" : objVar.long[num]))

    })
    crearEnsamblador()
}
const validarInstrucciones = () => {
    let c = [];
    obj.code.instr.map(inst => {
        c.push(/^MOV|ADD|RES|MUL$/.test(inst))
        if (!c[c.length - 1]) console.log("Instruccion: " + inst + " no reconocida");
    })
    if (c.includes(false)) {
        console.log("😞🥺🥵");
        return
    }
    cambiarVariables();
}
const cargarArchivo = (txt) => {
    txt = txt.toUpperCase().replaceAll("\n", "").replaceAll("\t", "").replaceAll("\r", "").split(";");
    separarVariables(txt[0]);
    for (let i = 1; i < txt.length - 1; i++) {
        separarEtiquetas(txt[i])
    }
    separarInstrucciones(txt[txt.length - 1])
    validarInstrucciones();
    enviarCadena();
}
const enviarCadena = async () => {
    let variables = "";
    let etiquetas = ""
    let code = ""
    let ensamblador = ""
    for (let i = 0; i < obj.variables.long.length; i++) {
        variables += `${obj.variables.type[i]}\t\t${obj.variables.nom[i]}\t\t${obj.variables.tam[i]}\t\t${obj.variables.long[i]}\n`
    }
    for (let i = 0; i < obj.etiquetas.inst.length; i++) {
        etiquetas += `${obj.etiquetas.nombre[i]}\t\t61\n`
    }
    for (let i = 0; i < obj.code.instr.length; i++) {
        code += `${obj.code.instr[i]}\t\t${obj.code.long[i]}\t\t${obj.code.regis[i]}\t\t${obj.code.registros[i]}\n`
    }
    for (let i = 0; i < obj.ens.bin.length; i++) {
        ensamblador += `${obj.ens.cod[i]}\t\t${obj.ens.var[i]}\t\t\t${obj.ens.bin[i]}\n`
    }
    console.log(variables);
    console.log(etiquetas);
    console.log(ensamblador);

    try {
        let data = new FormData();
        data.append("var", variables)
        data.append("eti", etiquetas)
        data.append("ens", ensamblador)

        await fetch("./php/index.php", {
            method: "POST",
            body: data
        }).then(res => res.text())
            .then(r => console.log(r))
    } catch (error) {
        console.log(error);
    }

}
const cargarArchivoDeTexto = ar => {
    vaciar();

    const reader = new FileReader();
    reader.readAsText(ar);
    cargarFile(reader, ar);
    reader.addEventListener('load', e => {
        cargarArchivo(e.currentTarget.result)
    })
}
// cargarArchivo(txt);
