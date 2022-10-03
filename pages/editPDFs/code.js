document.getElementById("rangeScale").addEventListener("input", e => CapaPDF());

document.getElementById("editPDF").addEventListener("keyup", e => {
    let t = e.target
    document.getElementById(t.getAttribute("data-element")).innerHTML = t.value
})
document.getElementById("pdf").addEventListener("click", e => {
    let t = e.target
    if (t.tagName == "SPAN") {
        document.getElementById(t.getAttribute("data-element")).focus()
    }
})

window.addEventListener("submit",async e =>{
    e.preventDefault()
    let f = document.forms[1]
    let obj=[];
    for (let i = 0; i < f.length; i++) {
        obj.push({
            ide: f[i].getAttribute("data-ide"),
            val: f[i].value,
        })
    }
    const d = new FormData()
    d.append("arr",JSON.stringify(obj))
    d.append("pdf",e.target[1].getAttribute("data-form"))
    await fetch("../../php/updatePDF.php",{
        method: "POST",
        body: d
    }).then(res => res.text())
      .then(r=>alert(r))
})
CapaPDF();