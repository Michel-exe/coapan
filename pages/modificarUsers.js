const cargar = async (msj,type,opc,funcion) =>{
    let val= window.prompt(msj)
    let d = new FormData();
    d.append("sub",val);
    d.append("type",type);
    await fetch("../php/subPassword.php",{
        method: 'POST',
        body: d
    }).then(res => res.text())
      .then(async r => {
        if(opc===1){
            if(parseInt(r)!=0){
                await obtenerUsers();
                return;
            }
            await cargar(msj,type,1);
        } else {
            funcion(r)
        }
    })
}
document.querySelector(".updateUser").addEventListener("click", e => {
    const [t, ta] = [e.target, e.target.tagName]
    if (ta === "SPAN" || ta === "svg" || ta === "path") {
        let el = ta === "path" ? t.parentElement.parentElement : ta === "svg" ? t.parentElement : t
        if (el.getAttribute("class") === "desplegue") {
            el = el.parentElement.parentElement
            el.classList.toggle("act");

            if (!el.classList.contains("act")) {
                el.style.height = `52px`;
                return
            }
            el.style.height = `${el.scrollHeight}px`
            window.scroll(0, window.scrollY + 200)
            // console.log(window.scrollY + 200);
        } else {
            confirm("¿Esta seguro de eliminar este usuario?")
        }
    }
})
window.addEventListener("submit",async e => {
    const actualizar=async (inp,type,id)=>{
        let d= new FormData();
        d.append("upInp",inp)
        d.append("uptype",type)
        d.append("upid",id)
        await fetch("../php/updateUser.php",{
            method: 'POST',
            body: d
        })
          .then(res => res.text())
          .then(r => {
              // console.log(r);
              alert(r ? "Actualizado" :  "Error al actualizar")
          })

    }
    e.preventDefault()
    const exp = {
        name: /^[a-zA-ZÀ-ÿ\ ]{4,50}$/,
        user: /^[a-zA-Z0-9À-ÿ\_\-]{4,16}$/,
        pass: /^.{8,16}$/,
    }
    let t = e.target
    let [id, type , inp] = [t.parentElement.getAttribute("data-id"), t.getAttribute("data-type"),t[0].value];

    if(type==="pass" && inp !== t[1].value){alert("Las contraseñas no coinciden"); return;}
    if(type==="nombre" && !exp.name.test(inp)){alert("Nombre invalido es un minimo 4 caracteres y evite utilizar signos");return}
    if(type==="user" && !exp.user.test(inp)){alert("Usuario invalido es de 4 a 16 caracteres");return}
    if(type==="pass" && !exp.pass.test(inp)){alert("Contraseña invalida minimo 8 caracteres");return}

    if(type!=="con"){
        await actualizar(inp,type,id);
        return
    }

    cargar("Ingrese su contraseña principal","password",2,async r =>{
        if(parseInt(r)!=0){
            await actualizar(inp,type,id);
            return;
        } else {
            alert("Contraseña Incorrecta")
        }
    })
})
const component = ({id,name}) =>{
    return `
    <div class="updateUserDiv" data-id="${id}">
        <div>
            <h3>${name}</h3>
            <span class="desplegue">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg>
            </span>
        </div>
        <form data-type="nombre">
            <label>Editar Nombre:</label>
            <input placeholder="Escriba su nombre" value="${name}">
            <button type="submit">Actualizar</button>
        </form>
        <form data-type="user">
            <label>Actualizar Usuario:</label>
            <input placeholder="Escriba su usuario">
            <!--<input placeholder="Escriba su usuario" value="cami123">-->
            <button type="submit">Actualizar</button>
        </form>
        <form data-type="pass">
            <label>Actualizar Contraseña:</label>
            <input type="text" placeholder="Nueva contraseña">
            <input type="text" placeholder="Confirmar contraseña">
            <button type="submit">Restaurar</button>
        </form>
        <span>
            <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
        </span>
    </div>
    `
}
const obtenerUsers = async ()=>{
    let main = document.querySelector(".updateUser main")
    main.innerHTML="";
    await fetch("../php/getUsers.php")
        .then(res => res.json())
        .then(r => {
            r.map(m =>{
                main.innerHTML+=component(m)
            })
        })
}
window.addEventListener("DOMContentLoaded",() =>{
    cargar("Ingrese la contraseña","condonacion",1)
})
// console.log(cargar());
;









// const cont = document.querySelector(".updateUser main").innerHTML;
// // console.log(cont);
// document.querySelector(".updateUser main").innerHTML += cont;
// document.querySelector(".updateUser main").innerHTML += cont;
// document.querySelector(".updateUser main").innerHTML += cont;
// document.querySelector(".updateUser main").innerHTML += cont;
// document.querySelector(".updateUser main").innerHTML += cont;